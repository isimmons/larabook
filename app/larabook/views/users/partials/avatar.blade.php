<a href="{{ route('users.profile', $user->username) }}">
    <img class="media-object img-circle avatar" src="{{ $user->present()->gravatar(isset($size) ? $size : 30) }}" alt="{{ $user->username }}"></img>
</a>
