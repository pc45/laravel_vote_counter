<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laracasts Voting</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans text-gray-900 text-sm bg-gray-background">
       <header class="flex items-center justify-between px-8 py-4">
           <a href="#"><img src="{{ asset('img/logo.svg') }}" alt="logo"></a>

           <div class="flex items-center">
               @if (Route::has('login'))
                   <div class="top-0 right-0 px-6 py-4">
                       @auth
                           <form method="POST" action="{{ route('logout') }}">
                               @csrf

                               <a href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                  this.closest('form').submit();">
                                   {{ __('Log out') }}
                               </a>
                           </form>
                       @else
                           <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                           @if (Route::has('register'))
                               <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                           @endif
                       @endauth
                   </div>
               @endif
               <a href="#">
                   <img src="//www.gravatar.com/avatar/a2c66aa01eddec4f01228baf00c16b26?s=100&d=https%3A%2F%2Fs3.amazonaws.com%2Flaracasts%2Fimages%2Fforum%2Favatars%2Fdefault-avatar-24.png" alt="gravatar" class="w-10 h-10 rounded-full"></a>
               </a>
           </div>
       </header>


        <main class="container mx-auto max-w-custom flex">
            <div class="w-70 mr-5">
                <div class="bg-white border-2 border-blue rounded-xl mt-16">
                    <div class="text-center px-6 py-2 pt-6">
                        <h3 class="font-semibold text-base">Add an Idea</h3>
                        <p class="text-xs mt-4">Let us know what'd you would like and we'll take a look over!</p>
                    </div>

                    <form action="#" class="space-y-4 px-4 py-6" method="post">
                        <div>
                            <input type="text" class="text-sm border-none w-full bg-gray-100 rounded-xl placeholder:gray-900 px-4 py-2" placeholder="Your Idea" >
                        </div>

                        <div>
                            <select name="category_add" id="category_add" class="bg-gray-100 text-sm border-none w-full rounded-xl px-4 py-2 border-none">
                                <option value="Category One">Category One</option>
                                <option value="Category Two">Category Two</option>
                                <option value="Category Three">Category Three</option>
                                <option value="Category Four">Category Four</option>
                            </select>
                        </div>

                        <div>
                            <textarea class="w-full bg-gray-100 rounded-xl placeholder:gray-900 text-sm px-4 py-2 border-none" placeholder="Describe your idea" name="idea" id="idea" cols="30" rows="4"></textarea>
                        </div>

                        <div class="flex items-center justify-between space-x-3">
                            <button type="button" class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                                <svg class="text-gray-600 w-4 -rotate-45 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>

                            <button type="submit" class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue font-semibold rounded-xl border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3 text-white">
                                <span class="ml-1">Submit</span>
                            </button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="w-175">
                <nav class="flex items-center justify-between text-xs">
                    <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                        <li><a href="#" class="border-b-4 pb-3 border-blue ">All Ideas (87)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering (6)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">In Progress (1)</a></li>
                    </ul>

                    <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                        <li><a href="#" class="border-b-4 pb-3 border-blue">Implemented (10)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Closed (55)</a></li>

                    </ul>
                </nav>

                <div class="mt-8">
                    {{ $slot }}
                </div>
            </div>
        </main>

    </body>
</html>
