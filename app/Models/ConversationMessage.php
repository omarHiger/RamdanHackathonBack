<?php

namespace App\Models;

use App\Classes\Bot\DrawFlow\Node;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Crypt;

class ConversationMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'conversation_id',
        'message',
        'sender',
        'read_at'
    ];


    public function conversation(): BelongsTo
    {
        return $this->belongsTo(Conversation::class);
    }
    public function setAsRead(): bool
    {
        return $this->update(['read_at'=>now()]);
    }

}
