<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400'}} ">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user) }}">
            <img
                src=" {{ $tweet->user->avatar }}"
                alt=""
                class="rounded-full mr-2"
                width="40"
                height="40"
            >
        </a>
    </div>

    <div>
        <h5 class="font-bold mb-4">
            <a href="{{ route('profile', $tweet->user)}}">
                {{$tweet->user->name}}
            </a>
        </h5>

        <p class="text-sm mb-3">
            {{$tweet->body}}
        </p>

        <div class="flex">
{{--            $tweet->isDislikedBy(current_user()) ? '':''--}}
            <div class="flex items-center mr-3">
                <svg width="20px" height="20px" class="text-gray-500 mr-1 mb-1 w-3" viewBox="0 0 20 20">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="fill-current" fill="#acb9c8" fill-rule="nonzero">
                            <path d="M11,0 L12,0 L12,3 L15,10 L15,18 C15,19.1045695 14.1045695,20 13,20 L5,20 C3.9,20 2.69,19.16 2.3,18.12 L0,12 L0,10 C0,8.8954305 0.8954305,8 2,8 L9,8 L9,2 C9,0.8954305 9.8954305,0 11,0 Z M17,10 L20,10 L20,20 L17,20 L17,10 Z" id="Shape"></path>
                        </g>
                    </g>
                </svg>
                <span class="text-xs text-gray-500">
                    {{ $tweet->likes ?:0 }}
                </span>
            </div>


            <div class="flex items-center">
                <svg width="20px" height="20px" class="text-gray-500 mr-1 w-3" viewBox="0 0 20 20">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="thumbs-down" fill="#acb9c8"   fill-rule="nonzero">
                            <path d="M11,20 C9.8954305,20 9,19.1045695 9,18 L9,12 L2,12 C0.8954305,12 0,11.1045695 0,10 L0,8 L2.3,1.88 C2.7677095,0.789612188 3.81507087,0.0603383402 5,0 L13,0 C14.1045695,0 15,0.8954305 15,2 L15,10 L12,17 L12,20 L11,20 Z M17,10 L17,0 L20,0 L20,10 L17,10 Z" id="Shape"></path>
                        </g>
                    </g>
                </svg>
                <span class="text-xs text-gray-500">
                    {{ $tweet->dislikes ?:0 }}
                </span>
            </div>

        </div>

    </div>


</div>
