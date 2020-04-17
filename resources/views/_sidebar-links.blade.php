<ul>
    <li><a href="{{ route('home') }}" class="font-bold text lg mb-4 blok">Home</a></li>
    <li><a href="/explore" class="font-bold text lg mb-4 blok">Explore</a></li>
    <li><a href="{{ route('profile', auth()->user()) }}" class="font-bold text lg mb-4 blok">Profile</a></li>
    <li>
        <form method="POST" action="/logout">
            @csrf
            <button class="font-bold text lg mb-4 blok" >Logout</button>
        </form>
    </li>
</ul>
