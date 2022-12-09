<x-app-layout>
    <div class="py-12 container m-auto w-4/5">
        <h2 class="text-center font-medium">{{$society->name}} </h2>
        <div class="faculty flex justify-between mt-6 space-x-10">

            <div class="members bg-white border rounded-lg shadow-2xl  px-4 py-6 w-1/5 space-y-6">
                @foreach ( $society->memebers as $memeber )
                    <a href="/employee/{{$memeber->id}}">


                        @if ($society->isMember($memeber->id))
                        <div class="user flex justify-between hover:bg-gray-100  py-2 cursor-pointer">
                            <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="profile pic" class="w-6 h-6 rounded-full mr-4 ">
                            <p class="pl-6">{{$memeber->name}}</p>

                        </div>
                        @endif
                    </a>


                @endforeach


            </div>


            <div class="posts @if(! Auth::user()->isBoss()) w-3/5 @else w-4/5 @endif space-y-5">

                @foreach ( $posts as $post )

                    <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">

                        <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
                            <div class="flex-none mx-2 md:mx-0">
                                <a href="#">
                                    <img src="" alt="avatar" class="w-14 h-14 rounded-xl">
                                </a>
                            </div>
                            <div class="w-full flex flex-col justify-between mx-2 md:mx-4">
                                <h4 class="text-xl font-semibold mt-2 md:mt-0">
                                    <a href="" class="idea-link hover:underline">{{ $post->Decipher($post->title,3)}}</a>
                                </h4>


                                <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                                        <div>10 sep 2000</div>
                                        <div>&bull;</div>
                                        {{-- <div>{{ $idea->category->name }}</div> --}}

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>

            @if (! Auth::user()->isBoss())

                <div class="report">
                    <a href="/reports/create">Report an issue</a>

                    @if (Auth::user()->society())

                    <div class="bg-white md:sticky md:top-8 border-2 border-blue rounded-xl mt-16"
                    style="
                            border-image-source: linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                                border-image-slice: 1;
                                background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                                background-origin: border-box;
                                background-clip: content-box, border-box;
                        "
                        >
                        <h3 class="text-sm text-center mt-2">Create a post</h3>
                        @auth
                            <form  action="/society/{{$society->id}}" method="POST" class="space-y-4 px-4 py-6">
                                @csrf
                                <div>
                                    <input name="title"  type="text" class="w-full text-sm bg-gray-100 border-none rounded-xl placeholder-gray-900 px-4 py-2" placeholder="Your Post" required>

                                </div>
                                {{-- <div>
                                    <select  name="category_add" id="category_add" class="w-full bg-gray-100 text-sm rounded-xl border-none px-4 py-2">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div> --}}

                                <div>
                                    <textarea wire:model.defer="description" name="content" id="idea" cols="30" rows="4" class="w-full bg-gray-100 rounded-xl border-none placeholder-gray-900 text-sm px-4 py-2" placeholder="Describe your idea" required></textarea>

                                </div>
                                <div class="flex items-center justify-between space-x-3">
                                    <button
                                        type="button"
                                        class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
                                    >
                                        <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                        </svg>
                                        <span class="ml-1">Attach</span>
                                    </button>
                                    <button
                                        type="submit"
                                        class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue bg-blue-500 text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                                    >
                                        <span class="ml-1">Submit</span>
                                    </button>
                                </div>
                            </form>
                        @else
                            <div class="my-6 text-center">
                                <a

                                    href="{{ route('login') }}"
                                    class="inline-block justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                                >
                                    Login
                                </a>
                                <a

                                    href="{{ route('register') }}"
                                    class="inline-block justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 mt-4"
                                >
                                    Sign Up
                                </a>
                            </div>
                        @endauth
                    </div>
                    @endif
                </div>
            @endif



        </div>
    </div>



</x-app-layout>
