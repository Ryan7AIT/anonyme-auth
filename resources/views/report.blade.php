<x-app-layout>
    <div class="py-12">
        <main class=" container">
            <h2 class="text-blue-500  text-center ">Create a report anonymas</h2>

            <div class="reports w-3/5 m-auto space-y-4 b">


                <form method="POST" action="/reports">

                    @csrf
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
                    <textarea name="message" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>

                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mt-4">Send</button>
                </form>





            </div>



        </main>
    </div>
</x-app-layout>
