{{-- user info and avatar --}}
@php(
    $user = \App\Models\Youth::find($id)
)

<div class="avatar av-l chatify-d-flex"></div>
@if($user)
<p class="info-name">{{ $user->first_name . " " . $user->last_name }}</p>
@endif
<div class="messenger-infoView-btns">
    <a href="#" class="danger delete-conversation">Delete Conversation</a>
</div>
{{-- shared photos --}}
<div class="messenger-infoView-shared">
    <p class="messenger-title"><span>Shared Photos</span></p>
    <div class="shared-photos-list"></div>
</div>
