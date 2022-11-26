<x-app-layout>
    <div class="py-12 container m-auto w-4/5">
        <h2 class="text-center font-medium">All faculties</h2>
        <div class="allfaculties grid grid-cols-3 gap-4 mt-6">

            @foreach ($faculties as $faculty)

                <div class="faculty bg-white border rounded-lg shadow-2xl  px-4 py-6">
                    <h4 class="text-center">{{ $faculty->name}}</h4>
                    <p class="leading-8 font-light text-sm">{{ $faculty->description }}</p>
                    <button class="text-white bg-blue-500 text-center rounded-lg py-1 px-6 float-right mt-2 hover:bg-blue-700">
                        <a href="/faculties/{{$faculty->id}}">Join</a>
                    </button>
                </div>

            @endforeach

        </div>
    </div>
</x-app-layout>
