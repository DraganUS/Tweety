<div class="bg-blue-100 border border-gray-300 rounded-lg p-4">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        @forelse( auth()->user()->follows as $user )
            <li class="{{ $loop->last ? '':  'mb-4' }}">
                <div>
                    <a href=" {{ route('profile', $user) }}" class="flex items-center text-sm">
                        <img
                            src="{{$user->avatar}}"
                            alt=""
                            class="rounded-full mr-2"
                            height="40"
                            width="40"
                        >
                        {{$user->name}}
                    </a>
                </div>
            </li>
            @empty
                <li>No friend yet</li>
        @endforelse
    </ul>
</div>
