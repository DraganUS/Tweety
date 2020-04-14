@extends('layouts.app')

@section('content')
    <div class="lg:flex">
        <div class="lg:w-1/6">
          @include('_sidebar-links')
        </div>

        <div class="lg:flex-1 lg:mx-10">
            @include('_publish-tweet-panel')

            <div class="border border-gray-300 rounded-lg">
                <div class="flex p-4">
                    <div class="mr-2 flex-shrink-0">
                        <img
                            src="https://i.pravatar.cc/50"
                            alt=""
                            class="rounded-full mr-2"
                        >
                    </div>

                    <div>
                        <h5 class="font-bold mb-4">John Doe</h5>

                        <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto deserunt fugiat labore neque quisquam temporibus voluptas. Beatae dicta ea error eveniet excepturi fuga iusto laboriosam laudantium perferendis placeat, sapiente voluptates. Aut dolorem eveniet explicabo necessitatibus neque non officiis placeat reiciendis tempora vero. Accusantium amet architecto assumenda at consequatur dicta dolorem enim eum exercitationem harum illo inventore, ipsa, laudantium maiores minima obcaecati officiis perferendis quam quas quod saepe suscipit tenetur, totam velit voluptatem. Consequatur dolore laboriosam qui repellat temporibus. Asperiores enim explicabo laudantium quam. Animi aperiam, consectetur consequatur delectus et facere hic incidunt iusto perferendis quasi quibusdam rerum saepe, suscipit.</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="lg:w-1/6 ">
            @include('_friends-list')
        </div>
    </div>
@endsection
