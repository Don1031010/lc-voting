<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>

        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>

        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an idea"
                class="w-full rounded-xl placeholder-gray-900 bg-white border-none px-4 py-2 pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="h-4 w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>
    {{-- end filters --}}

    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Vote</button>
                </div>
            </div>

            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium provident voluptatum quo fugit, accusamus omnis sit, harum quis nisi porro magnam recusandae dolore excepturi magni nesciunt veniam autem, dignissimos tempore id animi. Incidunt, quo! Repellat in eos ab voluptatibus mollitia, minima impedit, nesciunt officia harum libero vel sit error maxime consequuntur obcaecati quasi sapiente culpa fuga, incidunt dignissimos vero ratione natus nobis. Quaerat sint eius praesentium quas illo quae minima ratione consequatur, tempora velit, ea voluptatum! Hic cumque vitae, laboriosam aliquam ea obcaecati harum reprehenderit atque suscipit. Repellat facere, et blanditiis soluta, minus quam natus nesciunt esse, commodi reiciendis fugit.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>
                        <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 py-2 px-4 transition duration-150 ease-in">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                              </svg>
                              <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                  <li><a href="#" class="block hover:bg-gray-100 transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                  <li><a href="#" class="block hover:bg-gray-100 transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                              </ul>
                        </button>
                    </div>
                </div>
            </div>

        </div>


    </div>


</x-app-layout>
