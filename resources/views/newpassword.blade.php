<x-app-layout>
    <div class="containe w-3/5 m-auto my-4">

        <h2>YOu want to change your password</h2>

        <form action="/user/{{Auth::user()->id}}/newpassword" method="post">
            @csrf

            @method('PATCH')
            <div class="mb-6 py-4 px-6 bg-white rounded-lg shadow-lg ">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">New password</label>
                <input name="password" type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                <button type="submit" class="bg-blue-500 px-2 mt-4 py-1 ">Change</button>
              </div>

        </form>

    </div>

</x-app-layout>
