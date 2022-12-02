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


            <div class="posts w-3/5 space-y-5">

                <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
                    <div class="hidden md:block border-r border-gray-100 px-5 py-8">
                        <div class="text-center">
                            <div class="font-semibold text-2xl ">11</div>
                            <div class="text-gray-500">Votes</div>
                        </div>

                        <div class="mt-8">

                                <button wire:click.prevent="vote" class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Vote</button>

                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
                        <div class="flex-none mx-2 md:mx-0">
                            <a href="#">
                                <img src="" alt="avatar" class="w-14 h-14 rounded-xl">
                            </a>
                        </div>
                        <div class="w-full flex flex-col justify-between mx-2 md:mx-4">
                            <h4 class="text-xl font-semibold mt-2 md:mt-0">
                                <a href="" class="idea-link hover:underline">title</a>
                            </h4>


                            <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                                <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                                    <div>10 sep 2000</div>
                                    <div>&bull;</div>
                                    {{-- <div>{{ $idea->category->name }}</div> --}}
                                    <div>&bull;</div>
                                    <div wire:ignore class="text-gray-900">10 comments</div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="report">
                <a href="/reports/create">Report an issue</a>
            </div>


        </div>
    </div>



</x-app-layout>
