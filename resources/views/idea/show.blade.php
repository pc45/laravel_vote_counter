<x-app-layout>
    <div>
        <a href="{{ $backURL }}" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="ml-2">All Ideas (or back to chosen category with filters)</span>
        </a>
    </div>

    <livewire:idea-show :idea="$idea" :votesCount="$votesCount"/>

    <x-notification-success />

    <x-modal-container :idea="$idea"/>

    <div class="comments-container relative space-y-6 md:ml-22 my-8 mt-1 pt-4">
        <div class="mt-4 relative comment-container bg-white rounded-xl flex">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#" >
                        <img src="{{$idea->user->getAvatar()}}" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full md:mx-4">
                    {{--<h4 class="text-xl font-semibold"><a href="#" class="hover:underline">A Random Title Can Go Here</a></h4>--}}
                    <div class="text-gray-600 mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere ipsum quidem sapiente vitae? Delectus eveniet harum ipsam neque nihil, non optio placeat, quas quisquam sint sunt voluptatum! A asperiores assumenda beatae cupiditate dolorem, exercitationem facere incidunt laborum magni maiores minima modi nemo perspiciatis quis quisquam quos, reprehenderit, repudiandae rerum soluta suscipit tempore totam unde vitae? Corporis cumque itaque nihil pariatur rem repellat veritatis voluptatem. Aliquam animi atque cum cumque cupiditate dolore dolorem doloribus earum eius eligendi enim, et ex exercitationem facere illo libero maiores molestias nemo neque officiis perspiciatis quibusdam recusandae reprehenderit rerum sint tempore temporibus, totam unde voluptates voluptatum?</div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">Pete Croke</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div
                            x-data="{ isOpen:false }"
                            class="flex items-center space-x-2">
                            <div class="relative">
                                <button
                                    @click="isOpen = !isOpen"
                                    class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 w-14 border transition duration-150 ease-in py-2 px-4">
                                    <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z">
                                </button>
                                <ul
                                    x-cloak
                                    x-show.transition.origin.top.left="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window = "isOpen = false"
                                    class="text-left absolute w-44 font-semibold bg-white shadow-dialogue rounded-xl py-3 md:ml-8 top-8 md:top-6 right-0 md:left-0 z-10">
                                    <li><a href="" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                                    <li><a href="" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Delete Comment</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--- end comment container --->

        </div>
        <!--- end comment container --->

    </div>
    <!--- end comments container--->
</x-app-layout>
