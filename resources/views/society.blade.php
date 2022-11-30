<x-app-layout>
    <div class="py-12 container m-auto w-4/5">
        <h2 class="text-center font-medium">{{$society->name}} </h2>
        <div class="faculty flex justify-between mt-6 space-x-10">

            <div class="members bg-white border rounded-lg shadow-2xl  px-4 py-6 w-1/5 space-y-6">
                @foreach ( $society->memebers as $memeber )

                    @if ($society->isMember($memeber->id))
                    <div class="user flex justify-between hover:bg-gray-100  py-2 cursor-pointer">
                        <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="profile pic" class="w-6 h-6 rounded-full mr-4 ">
                        <p class="pl-6">{{$memeber->name}}</p>

                    </div>
                    @endif


                @endforeach


            </div>

            <div class="faculty bg-white border rounded-lg shadow-2xl  px-4 py-6 w-4/5">
                <h4 class="text-center">{{ $society->name}}</h4>
                <p class="leading-8 font-light text-sm">{{ $society->description }}</p>
            </div>

            @if ($society->chef() == Auth::user()->email )





            {{-- @foreach ($pending as $p)


                <div class="student border p-4 flex justify-between">

                    <div class="1">
                        <p>{{$p->name}}</p>
                        <p>18181102038</p>
                    </div>
                    <div class="btn">
                        <form action="/faculties/{{$faculty->id}}" method="POST">
                            @method('PATCH')
                            @csrf
                            <input type="hidden" name="toAcept" hidden value="{{$p->id}}">
                            <button type="submit" class="border rounded-lg px-2 py-1 shadow-lg text-white bg-green-500 cursor-pointer">Accepte</button>
                        </form>
                        <br>
                        <button class="border rounded-lg px-3 py-1 shadow-lg text-white bg-red-500 cursor-pointer">Delete</button>
                    </div>

                </div>

            @endforeach --}}




            @else

            {{-- <div class="ask_to_join bg-white border rounded-lg shadow-2xl  px-4 py-6 w-2/5">

                <form action="/faculties/{{$faculty->id}}" method="POST">
                    @csrf

                    <input type="text" name="fid" id="mat" hidden readonly value="{{$faculty->id}}" class="hidden " placeholder=" " required />

                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="mat" id="mat" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="mat" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Matricule</label>
                    </div>


                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Join</button>
                </form>

            </div> --}}

            @endif




        </div>
    </div>



</x-app-layout>
