<ul>
    <li>
        <a class="font-bold text-lg mb-4 block" href="{{ route('home') }}">Home</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="{{ route('profile', auth()->user()) }}">Profile</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="{{ route('explore') }}">Explore</a>
    </li>
    <li>
        <form method="POST" action="/logout">
        @csrf
            <button class="font-bold text-lg mb-4 block" >Logout</button>
        </form>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="">5</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="">6</a>
    </li>
</ul>