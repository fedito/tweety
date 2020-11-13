@unless (auth()->user()->is($user))

<form method="POST" action="{{ route('follow', $user->username) }}">
@csrf
    <button 
    type="submit" 
    class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-sm"
    >
    {{ auth()->user()->following($user) ? 'Unfollow' : 'Follow Me'}}
    </button>
</form>

@endunless