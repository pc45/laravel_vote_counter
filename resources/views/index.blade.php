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
      <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
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

         <div class="flex flex-1 px-2 py-6">
            <div class="flex-none">
               <a href="#" >
                  <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
               </a>
            </div>
            <div class="w-full mx-4">
               <h4 class="text-xl font-semibold"><a href="#" class="hover:underline">A Random Title Can Go Here</a></h4>
               <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>               <div class="flex items-center justify-between mt-6">
                  <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                     <div>10 hours ago</div>
                     <div>&bull;</div>
                     <div>Category</div>
                     <div>&bull;</div>
                     <div class="text-gray-900">3 Comments</div>
                  </div>
                  <div class="flex items-center space-x-2">
                     <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-4 py-2">
                        Open
                     </div>
                     <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 w-14 border transition duration-150 ease-in py-2 px-4">
                        <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z">
                        <ul class="text-left absolute w-44 font-semibold bg-white shadow-dialogue rounded-xl py-3 ml-8">
                           <li><a href="" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                           <li><a href="" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                        </ul>
                     </button>
                  </div>
               </div>
            </div>
         </div>

      </div>
      <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
         <div class="border-r border-gray-100 px-5 py-8">
            <div class="text-center">
               <div class="font-semibold text-2xl text-blue">
                  66
               </div>
               <div class="text-gray-500">
                  votes
               </div>
            </div>

            <div class="mt-8">
               <button class="w-20 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in bg-blue text-white font-bold text-xxs uppercase rounded-xl px-4 py-3">Voted</button>
            </div>
         </div>

         <div class="flex px-2 py-6">
            <a href="#" class="flex-none">
               <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar" class="w-14 h-14 rounded-xl">
            </a>
            <div class="mx-4">
               <h4 class="text-xl font-semibold"><a href="#" class="hover:underline">Another Random Title Can Go Here</a></h4>
               <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deserunt dolore eos fugit hic molestiae nemo nulla perferendis quidem totam. Architecto aut blanditiis culpa debitis, dolores ducimus impedit incidunt ipsum modi, voluptas voluptates voluptatibus? Accusamus debitis delectus deleniti distinctio eaque eligendi fuga illum iusto molestias obcaecati, odit omnis perferendis provident quibusdam quisquam quos recusandae repellat reprehenderit vel voluptate. Aliquid architecto consectetur eaque error ipsa ipsam ipsum minima, neque quasi quo quos reprehenderit, veniam voluptatem? Blanditiis sint tempora veniam! Ad assumenda at ipsam laudantium officia placeat quo sint ut. Architecto asperiores est id nam nisi porro quaerat quos, totam voluptas voluptatibus!</div>
               <div class="flex items-center justify-between mt-6">
                  <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                     <div>10 hours ago</div>
                     <div>&bull;</div>
                     <div>Category</div>
                     <div>&bull;</div>
                     <div class="text-gray-900">3 Comments</div>
                  </div>
                  <div class="flex items-center space-x-2">
                     <div class="bg-yellow text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-4 py-2">
                        In Progress
                     </div>
                     <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 w-14 transition duration-150 ease-in py-2 px-4">
                        <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z">
                        <ul class="text-left absolute w-44 font-semibold bg-white shadow-dialogue rounded-xl py-3 ml-8">
                           <li><a href="" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                           <li><a href="" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                        </ul>
                     </button>
                  </div>
               </div>
            </div>
         </div>

      </div>
      <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
         <div class="border-r border-gray-100 px-5 py-8">
            <div class="text-center">
               <div class="font-semibold text-2xl">
                  190
               </div>
               <div class="text-gray-500">
                  votes
               </div>
            </div>

            <div class="mt-8">
               <button class="w-20 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in bg-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-3">Vote</button>
            </div>
         </div>

         <div class="flex px-2 py-6">
            <a href="#" class="flex-none">
               <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
            </a>
            <div class="mx-4">
               <h4 class="text-xl font-semibold"><a href="#" class="hover:underline">Title 3</a></h4>
               <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deserunt dolore eos fugit hic molestiae nemo nulla perferendis quidem totam. Architecto aut blanditiis culpa debitis, dolores ducimus impedit incidunt ipsum modi, voluptas voluptates voluptatibus? Accusamus debitis delectus deleniti distinctio eaque eligendi fuga illum iusto molestias obcaecati, odit omnis perferendis provident quibusdam quisquam quos recusandae repellat reprehenderit vel voluptate. Aliquid architecto consectetur eaque error ipsa ipsam ipsum minima, neque quasi quo quos reprehenderit, veniam voluptatem? Blanditiis sint tempora veniam! Ad assumenda at ipsam laudantium officia placeat quo sint ut. Architecto asperiores est id nam nisi porro quaerat quos, totam voluptas voluptatibus!</div>
               <div class="flex items-center justify-between mt-6">
                  <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                     <div>10 hours ago</div>
                     <div>&bull;</div>
                     <div>Category</div>
                     <div>&bull;</div>
                     <div class="text-gray-900">3 Comments</div>
                  </div>
                  <div class="flex items-center space-x-2">
                     <div class="bg-green text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-4 py-2">
                        Implemented
                     </div>
                     <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 w-14 transition duration-150 ease-in py-2 px-4">
                        <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z">
                        <ul class="text-left absolute w-44 font-semibold bg-white shadow-dialogue rounded-xl py-3 ml-8">
                           <li><a href="" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                           <li><a href="" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                        </ul>
                     </button>
                  </div>
               </div>
            </div>
         </div>

      </div>
      <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
         <div class="border-r border-gray-100 px-5 py-8">
            <div class="text-center">
               <div class="font-semibold text-2xl">
                  32
               </div>
               <div class="text-gray-500">
                  votes
               </div>
            </div>

            <div class="mt-8">
               <button class="w-20 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in bg-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-3">Vote</button>
            </div>
         </div>

         <div class="flex py-2 py-6">
            <a href="#" class="flex-none">
               <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar" class="w-14 h-14 rounded-xl">
            </a>
            <div class="mx-4">
               <h4 class="text-xl font-semibold"><a href="#" class="hover:underline">Suggestion 4</a></h4>
               <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deserunt dolore eos fugit hic molestiae nemo nulla perferendis quidem totam. Architecto aut blanditiis culpa debitis, dolores ducimus impedit incidunt ipsum modi, voluptas voluptates voluptatibus? Accusamus debitis delectus deleniti distinctio eaque eligendi fuga illum iusto molestias obcaecati, odit omnis perferendis provident quibusdam quisquam quos recusandae repellat reprehenderit vel voluptate. Aliquid architecto consectetur eaque error ipsa ipsam ipsum minima, neque quasi quo quos reprehenderit, veniam voluptatem? Blanditiis sint tempora veniam! Ad assumenda at ipsam laudantium officia placeat quo sint ut. Architecto asperiores est id nam nisi porro quaerat quos, totam voluptas voluptatibus!</div>
               <div class="flex items-center justify-between mt-6">
                  <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                     <div>10 hours ago</div>
                     <div>&bull;</div>
                     <div>Category</div>
                     <div>&bull;</div>
                     <div class="text-gray-900">3 Comments</div>
                  </div>
                  <div class="flex items-center space-x-2">
                     <div class="bg-red text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-4 py-2">
                        Closed
                     </div>
                     <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 w-14 transition duration-150 ease-in py-2 px-4">
                        <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z">
                        <ul class="text-left absolute w-44 font-semibold bg-white shadow-dialogue rounded-xl py-3 ml-8">
                           <li><a href="" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                           <li><a href="" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                        </ul>
                     </button>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>

</x-app-layout>
