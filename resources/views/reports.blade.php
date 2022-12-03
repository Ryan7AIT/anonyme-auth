<x-app-layout>
    <div class="py-12">
        <main class=" container">
            <h2 class="text-blue-500  text-center ">See all reports</h2>

            <div class="reports w-3/5 m-auto space-y-4 b">

                @foreach ($reports as $report )
                    <div class="report g-white shadow-xl border rounded-xl px-4 py-6">
                        <h3 class="font-bold text-center">{{ $report->Decipher($report->cintent,3)}} </h3>
                        <p>From <span class="text-blue-500">{{ $report->society->name}}</span>  </p>
                        <p class="text-sm">{{ $report->created_at->diffForHumans()}}</p>
                    </div>
                @endforeach




            </div>



        </main>
    </div>
</x-app-layout>
