<x-app>
    <div>
        @foreach($users as $user)
            <div class="flex items-center mb-5">
                <img
                    src="{{$user->avatar}}"
                    alt="{{$user->avatar}}"
                    width="60"
                    class="mr-4"
                >
                <h4 class="font-bold"> {{'@' .$user->username }} </h4>
            </div>
            @endforeach
        {{ $users->links() }}
    </div>
</x-app>
