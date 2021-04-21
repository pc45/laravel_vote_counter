<div class="idea-and-buttons-container">
    <div class="mt-4 idea-container bg-white rounded-xl flex">
        <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
            <div class="flex-none mx-4">
                <a href="#" >
                    <img src="{{$idea->user->getAvatar()}}" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="w-full mx-2 md:mx-4">
                <h4 class="text-xl font-semibold"><a href="#" class="hover:underline">{{$idea->title}}</a></h4>
                <div class="text-gray-600 mt-3 line-clamp-3">{{$idea->description}}</div>
                <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                        <div class="hidden md:block font-bold text-gray-900">
                            {{$idea->user->name}}</div>
                        <div class="hidden md:block">&bull;</div>
                        <div>{{ $idea->created_at->diffForHumans() }}</div>
                        <div>&bull;</div>
                        <div>{{$idea->category->name}}</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>
                    <div
                        x-data="{ isOpen:false }"
                        class="flex items-center space-x-2 mt-4 md:mt-0">
                        <div class="{{$idea->status->classes}} text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-4 py-2">
                            {{$idea->status->name}}
                        </div>
                        <button
                            @click="isOpen = !isOpen"
                            class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 w-14 border transition duration-150 ease-in py-2 px-4">
                            <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z">
                                    <ul
                                        x-cloak
                                        x-show.transition.origin.top.left="isOpen"
                                        @click.away="isOpen = false"
                                        @keydown.escape.window = "isOpen = false"
                                        class="text-left absolute w-44 font-semibold bg-white shadow-dialogue rounded-xl py-3 md:ml-8 top-8 md:top-6 right-0 md:left-0 z-10">
                                        <li><a href="" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                                        <li><a href="" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                                    </ul>
                        </button>
                    </div>
                    <div class="flex items-center md:hidden mt-4 md:mt-0">
                        <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                            <div class="text-sm font-bold leading-none @if($hasVoted) text-blue @endif">{{$votesCount}}</div>
                            <div class="text-xxs font-semibold leading-none text-gray-400 ">Votes</div>
                        </div>
                        @if($hasVoted)
                            <button
                                wire:click.prevent="vote"
                                class="text-white w-20 border border-blue hover:border-blue font-bold text-xxs uppercase rounded-xl px-4 py-3 -mx-5">Voted</button>
                        @else
                            <button
                                wire:click.prevent="vote"
                                class="w-20 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in bg-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-3 -mx-5">Vote</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--- end idea container --->

    <div class="buttons-container flex items-center justify-between mt-6">
        <div
            x-data="{ isOpen:false }"
            class="flex flex-col md:flex-row items-center space-x-4 md:ml-6">

            <div class=" relative">
                <button
                    @click="isOpen = !isOpen"
                    type="button" class="w-32 flex items-center justify-center h-11 text-sm bg-blue font-semibold rounded-xl border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3 text-white">
                    Reply
                </button>

                <div
                    x-cloak
                    x-show.transition.origin.top.left="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.window = "isOpen = false"
                    class="absolute z-10 w-64 md:w-104 text-semibold text-left bg-white shadow-dialogue mt-2 rounded-xl">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div>
                            <textarea name="post_comment" id="post_comment" rows="4" cols="30" class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-100 border-none px-4 py-2">Text here for comments</textarea>
                        </div>

                        <div class="flex flex-col md:flex-row items-center md:space-x-3">
                            <button type="button" class="w-full md:w-1/2 flex items-center justify-center h-11 text-sm bg-blue font-semibold rounded-xl border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3 text-white">
                                Post Comment
                            </button>

                            <button type="button" class="flex items-center justify-center w-full md:w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border hover:border-gray-400 transition duration-150 ease-in px-6 py-3 mt-2 md:mt-0" >
                                <svg class="text-gray-600 w-4 -rotate-45 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>
                        </div>
                    </form>
                </div>

            </div>

            <div
                x-data="{ isOpen:false }"
                class="relative">
                <button
                    @click="isOpen = !isOpen"
                    type="button" class="flex items-center justify-center w-36 h-11 text-sm bg-gray-200 font-semibold rounded-xl border hover:border-gray-400 transition duration-150 ease-in px-6 py-3 mt-2 md:mt-0">
                    <span>Set Status</span>
                    <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div
                    x-cloak
                    x-show.transition.origin.top.left="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.window = "isOpen = false"
                    class="absolute z-20 w-64 md:w-76 text-semibold text-left bg-white shadow-dialogue mt-2 rounded-xl">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" name="radio-direct" value="1" class="bg-gray-200 text-green border-none">
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="radio-direct" value="2" class="bg-gray-200 text-purple border-none">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="radio-direct" value="3" class="bg-gray-200 text-blue border-none">
                                    <span class="ml-2">In Progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="radio-direct" value="4" class="bg-gray-200 text-yellow border-none">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="radio-direct" value="5" class="bg-gray-200 text-red border-none">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <textarea name="update_comment" id="update_comment" rows="3" cols="30" class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2">Add and update comment optional</textarea>
                        </div>

                        <div class="flex items-center justify-between space-x-3">
                            <button type="button" class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                                <svg class="text-gray-600 w-4 -rotate-45 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>

                            <button type="submit" class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue font-semibold rounded-xl border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3 text-white">
                                <span class="ml-1">Update</span>
                            </button>
                        </div>

                        <div>
                            <label class="font-normal inline-flex items-center">
                                <input type="checkbox" name="notify_voters" checked="" class="rounded bg-gray-200">
                                <span class="ml-2">Notify all Voters</span>
                            </label>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div class="hidden md:flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug @if($hasVoted) text-blue @endif">{{$votesCount}}</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>

            @if($hasVoted)
                <button
                    wire:click.prevent="vote"
                    type="button" class="uppercase text-white w-32 h-11 text-xs bg-blue font-semibold rounded-xl border hover:border-blue transition duration-150 ease-in px-6 py-3">
                    <span>Voted</span>
                </button>
            @else
                <button
                    wire:click.prevent="vote"
                    type="button" class="uppercase w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                    <span>Vote</span>
                </button>
            @endif



        </div>
    </div>
    <!--- end button container --->
</div>
<!--- end idea and button container --->