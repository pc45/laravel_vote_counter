<x-app-layout>
   <div class="filters flex flex-col md:flex-row md:space-x-6 space-y-3 md:space-y-0">
      <div class="w-full md:w-1/3">
         <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none">
            <option value="Category One">Category One</option>
            <option value="Category Two">Category Two</option>
            <option value="Category Three">Category Three</option>
            <option value="Category Four">Category Four</option>
         </select>
      </div>
      <div class="w-full md:w-1/3">
         <select name="otherFilter" id="otherFilter" class="w-full rounded-xl px-4 py-2 border-none">
            <option value="Category One">Filter One</option>
            <option value="Category Two">Filter Two</option>
            <option value="Category Three">Filter Three</option>
            <option value="Category Four">Filter Four</option>
         </select>
      </div>
      <div class="w-full md: w-2/3 relative">

         <input type="search" placeholder="Find an Idea" class="w-full placeholder-gray-900 rounded-xl bg-white px-4 py-2 pl-8 border-none">
         <div class="absolute top-0 flex items-center h-full ml-2">
            <svg class="w-4 text-gray-700 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
         </div>
      </div>
   </div>

   <div class="ideas-container space-y-6 my-6">
      @foreach ($ideas as $idea)
        <livewire:idea-index :idea="$idea" :votesCount="$idea->votes_count"/>
       @endforeach
   </div>
    <!--- end ideas container --->

    <div class="my-8">
        {{$ideas->links()}}
    </div>

</x-app-layout>
