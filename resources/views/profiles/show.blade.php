<x-app>

    <header class="mb-6 relative">
        <img
            src="https://picsum.photos/700/200"
            alt=""
            class="mb-2"
        >
    </header>

    <div class="flex justify-between mb-6">
        <div>
            <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
            <p class="text-sm">Joined {{ $user->created_at->diffForHUmans() }}</p>
        </div>

        <div class="flex">
            <a
                href=""
                class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2"
            >
                Edit Profile
            </a>
            <x-follow-button :user="$user"></x-follow-button>

        </div>
    </div>


    <p class="text-sm">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad aliquam amet atque consectetur consequatur deserunt dicta earum eius fuga fugiat hic illo illum ipsum iure, magnam minus molestias necessitatibus nemo non numquam odit pariatur placeat praesentium, quae quam repellat sint sunt suscipit totam veritatis voluptates voluptatibus voluptatum. Asperiores, quae.
    </p>

    <img
        src=" {{ $user->avatar }}"
        alt=""
        class="rounded-full mr-2 absolute "
        style="width: 150px; left: calc(50% - 75px); top:205px"
    >

    @include('_timeline', [
        'tweets' => $user->tweets
    ])

</x-app>
