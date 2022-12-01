<div>
    <div class="container mx-auto">
        <div class="min-w-full border rounded lg:grid lg:grid-cols-3">
          <div class="border-r border-gray-300 lg:col-span-1">


            <ul class="overflow-auto h-[32rem]">
              <h2 class="my-2 mb-2 ml-2 text-lg text-gray-600">Chats</h2>
              <li>

                @foreach ($messages as $msg)

                <a href="/messagrie/{{$msg->user()->id}}">
                    <input type="hidden"   value="{{$msg->user()->id}}">
                    <div




                    class="flex items-center px-3 py-2 text-sm transition  duration-150 ease-in-out border-b border-gray-300 cursor-pointer hover:bg-gray-100 focus:outline-none">
                    <img class="object-cover w-10 h-10 rounded-full"
                        src="https://cdn.pixabay.com/photo/2018/09/12/12/14/man-3672010__340.jpg" alt="username" />
                    <div class="w-full pb-2">
                        <div class="flex justify-between">
                        <span class="block ml-2 font-semibold text-gray-600">{{ $msg->user()->name}}</span>
                        <span class="block ml-2 text-sm text-gray-600">25 minutes</span>
                        </div>
                        <span class="block ml-2 text-sm text-gray-600">{{ $msg->message}}</span>
                    </div>
                    </div>
                </a>
                @endforeach


              </li>
            </ul>
          </div>



          {{-- <livewire:discution :id="$id"/> --}}
        </div>
    </div>
</div>
