<x-app-layout>
    <div class="py-12 container m-auto w-4/5">
        <h2 class="text-center font-medium">{{$faculty->name}} </h2>
        <div class="faculty flex justify-between mt-6 space-x-10">

            <div class="members bg-white border rounded-lg shadow-2xl  px-4 py-6 w-1/5 space-y-6">
                @foreach ( $faculty->memebers as $memeber )

                    @if ($faculty->isMember($memeber->id))
                    <div class="user flex justify-between hover:bg-gray-100  py-2 cursor-pointer">
                        <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="profile pic" class="w-6 h-6 rounded-full mr-4 ">
                        <p class="pl-6">{{$memeber->name}}</p>

                    </div>
                    @endif


                @endforeach


            </div>

            <div class="faculty bg-white border rounded-lg shadow-2xl  px-4 py-6 w-2/5">
                <h4 class="text-center">{{ $faculty->name}}</h4>
                <p class="leading-8 font-light text-sm">{{ $faculty->description }}</p>
            </div>

            <div class="ask_to_join bg-white border rounded-lg shadow-2xl  px-4 py-6 w-2/5">

                <form action="/faculties/{{$faculty->id}}" method="POST">
                    @csrf

                    <input type="text" name="fid" id="mat" hidden readonly value="{{$faculty->id}}" class="hidden " placeholder=" " required />

                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="mat" id="mat" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="mat" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Matricule</label>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="fname" id="fname" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="fname" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="lname" id="lname" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="lname" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
                    </div>
                    </div>
                    {{-- <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 mb-6 w-full group">

                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Major</label>
                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option selected>Choose a major</option>
                    <option value="US">Bigdata</option>
                    <option value="CA">ISIL</option>
                    <option value="FR">SII</option>
                    <option value="DE">ACAD</option>
                    </select>

                    </div>
                    <div class="relative z-0 mb-6 w-full group">

                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Yeae</label>
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 >
                        <option selected>What year are u in ?</option>
                        <option value="US">Licence 2</option>
                        <option value="CA">Licence 4</option>
                        <option value="FR">Master 1</option>
                        <option value="DE">Master 2</option>
                        </select>

                    </div>
                    </div> --}}
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Join</button>
                </form>

            </div>

        </div>
    </div>
</x-app-layout>
