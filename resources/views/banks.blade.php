<x-app-layout>
    <div class="py-12">
        <main class=" container">
            <h2 class="text-blue-500  text-center ">All Bank</h2>

            <div class="banks w-3/5 m-auto  gap-4 grid grid-cols-3 ">


                @foreach ( $banks as $bank)

                    <a href="/bank/messagrie/{{$bank->id}}">
                        <div class="bank bg-white rounded border px-6 py-4 rounded-xl shadow-xl cursor-pointer">
                            <h2>{{ $bank->name}}</h2>
                            <button class="text-white bg-blue-500 py-1 px-2 border rounded-xl mt-4">Click to chat with {{$bank->name}}</button>
                        </div>
                    </a>


                @endforeach




            </div>



        </main>
    </div>
</x-app-layout>
