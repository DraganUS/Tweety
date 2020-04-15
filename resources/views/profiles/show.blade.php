<x-app>

    <header class="mb-6 relative">
        <div class="relative">
            <img
                src="https://picsum.photos/700/200"
                alt=""
                class="mb-2"
            >
            <img
                src=" {{ $user->avatar }}"
                alt=""
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left: 50%"
                width="150"
            >
        </div>
    </header>

    <div class="flex justify-between mb-6">
        <div>
            <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
            <p class="text-sm">Joined {{ $user->created_at->diffForHUmans() }}</p>
        </div>

        <div class="">
            @can('edit', $user)
                <a
                    href="{{ $user->path('edit') }}"
                    class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2"
                >
                    Edit Profile
                </a>
            @endcan

            <x-follow-button :user="$user"></x-follow-button>

        </div>
    </div>


    <p class="text-sm">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad aliquam amet atque consectetur consequatur deserunt dicta earum eius fuga fugiat hic illo illum ipsum iure, magnam minus molestias necessitatibus nemo non numquam odit pariatur placeat praesentium, quae quam repellat sint sunt suscipit totam veritatis voluptates voluptatibus voluptatum. Asperiores, quae.
    </p>


    @include('_timeline', [
        'tweets' => $user->tweets
    ])

</x-app>
