<x-app-layout>
   <div class="filters flex space-x-6">
      <div class="w-1/3">
         <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none">
            <option value="Category One">Category One</option>
            <option value="Category Two">Category Two</option>
            <option value="Category Three">Category Three</option>
            <option value="Category Four">Category Four</option>
         </select>
      </div>
      <div class="w-1/3">
         <select name="otherFilter" id="otherFilter" class="w-full rounded-xl px-4 py-2 border-none">
            <option value="Category One">Filter One</option>
            <option value="Category Two">Filter Two</option>
            <option value="Category Three">Filter Three</option>
            <option value="Category Four">Filter Four</option>
         </select>
      </div>
      <div class="w-2/3 relative">

         <input type="search" placeholder="Find an Idea" class="w-full placeholder-gray-900 rounded-xl bg-white px-4 py-2 pl-8 border-none">
         <div class="absolute top-0 flex items-center h-full ml-2">
            <svg class="w-4 text-gray-700 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
         </div>
      </div>
   </div>

   <div class="ideas-container space-y-6 my-6">
      <div class="idea-container bg-white rounded-xl flex">
         <div class="border-r border-gray-100 px-5 py-8">
            <div class="text-center">
               <div class="font-semibold text-2xl">
                  12
               </div>
               <div class="text-gray-500">
                  votes
               </div>
            </div>

            <div class="mt-8">
               <button class="w-20 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in bg-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-3">Vote</button>
            </div>
         </div>
      </div>

   </div>

</x-app-layout>
