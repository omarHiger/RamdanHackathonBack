<?php

namespace App\Models;

use App\Enums\ConversationStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conversation extends Model
{
    use HasFactory;

    protected $fillable = [
        'assigner_id',
        'assigned_at',
        'done_at',
        'mentor_id'
    ];

    protected $casts=['assigned_at'=>'datetime','done_at'=>'datetime'];

    public function assigner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigner_id');
    }

    public function mentor(): BelongsTo
    {
        return $this->belongsTo(Mentor::class);
    }
    public function scopeByStatus(Builder $query,$status): Builder
    {
        if($status === ConversationStatus::OPEN)
            return $query->whereNull('assigner_id');
        else if($status === ConversationStatus::FINISHED)
            return $query->whereNotNull('done_at');
        else
            return $query->whereNull('done_at')->whereNotNull('assigner_id');
    }
    public function scopeAvailableMe(Builder $query, $user_id): Builder
    {
        return $query->where('assigner_id',$user_id)->orWhereNull('assigner_id');
    }
    public function status(): Attribute
    {
        return Attribute::make(
            get: function () {
            if ($this->done_at)
                return ConversationStatus::FINISHED;
            else if ($this->assigned_at)
                return ConversationStatus::ASSIGNED;
            return ConversationStatus::OPEN;
        }
        );
    }
    public function lastActiveAt(): Attribute
    {
        return Attribute::make(
            get: fn()=>$this->last_message?->created_at
        );
    }
    public function messages(): HasMany
    {
        return $this->hasMany(ConversationMessage::class);
    }
    public function messages_from_user(): HasMany
    {
        return $this->hasMany(ConversationMessage::class)->where('sender','user');
    }

    public function last_message()
    {
        return $this->hasOne(ConversationMessage::class)->latest();
    }

    public function un_read_messages_from_user(): HasMany
    {
        return $this->hasMany(ConversationMessage::class)->where('sender','user')->whereNull('read_at');
    }
    public function un_read_messages_from_customer(): HasMany
    {
        return $this->hasMany(ConversationMessage::class)->where('sender',false)->whereNull('read_at');
    }

    public function setAsReadMessage($from_user=true){
        $sender = $from_user?'user':'customer';
        return $this->messages()->where('sender',$sender)->whereNull('read_at')->update(['read_at'=>now()]);
    }
    public function assignToMe($user_id){
        $this->update([
           'assigner_id'=>$user_id,
           'assigned_at'=>now()
        ]);
    }

}
