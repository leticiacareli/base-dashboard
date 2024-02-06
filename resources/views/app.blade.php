<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/js/app.js', 'resources/css/app.css'])
    </head>

    <body class="bg-gray-50 dark:bg-slate-900">

        {{-- Header Start --}}
        <header class="z-50 flex w-full flex-wrap border-b bg-white py-2.5 text-sm dark:border-gray-700 dark:bg-slate-900 sm:flex-nowrap sm:justify-start sm:py-4">
            <nav class="mx-auto flex w-full max-w-7xl basis-full items-center px-4 sm:px-6 lg:px-8" aria-label="Global">
                
                <div class="me-5 md:me-8">
                    <a class="flex-none text-xl font-semibold dark:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                        href="#" aria-label="Brand">Brand</a>
                </div>

                <div class="ms-auto flex w-full items-center justify-end sm:order-3 sm:justify-between sm:gap-x-3">
                    
                    <div class="sm:hidden">
                        <button type="button"
                            class="inline-flex h-[2.375rem] w-[2.375rem] flex-shrink-0 items-center justify-center gap-2 rounded-full bg-white align-middle text-xs font-medium text-gray-700 transition-all hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-slate-800 dark:hover:text-white dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800">
                            <svg class="h-4 w-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8" />
                                <path d="m21 21-4.3-4.3" />
                            </svg>
                        </button>
                    </div>

                    <div class="hidden sm:block">
                        <label for="icon" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 start-0 z-20 flex items-center ps-4">
                                <svg class="h-4 w-4 flex-shrink-0 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8" />
                                    <path d="m21 21-4.3-4.3" />
                                </svg>
                            </div>
                            <input type="text" id="icon" name="icon"
                                class="block w-full rounded-lg border-gray-200 py-2 pe-4 ps-10 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-slate-900 dark:text-gray-400 dark:focus:ring-gray-600"
                                placeholder="Search">
                        </div>
                    </div>

                    <div class="flex flex-row items-center justify-end gap-2">
                        
                        <button type="button"
                            class="inline-flex h-[2.375rem] w-[2.375rem] items-center justify-center gap-x-2 rounded-full text-sm font-semibold text-gray-500 hover:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                            <svg class="h-4 w-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                                <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                            </svg>
                        </button>
                        
                        <button type="button"
                            class="hs-dropdown-toggle inline-flex h-[2.375rem] w-[2.375rem] items-center justify-center gap-x-2 rounded-full text-sm font-semibold text-gray-500 hover:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            data-hs-offcanvas="#hs-offcanvas-right">
                            <svg class="h-4 w-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                            </svg>
                        </button>

                        <div class="hs-dropdown relative inline-flex" data-hs-dropdown-placement="bottom-right">
                            <button id="hs-dropdown-with-header" type="button"
                                class="hs-dropdown-toggle inline-flex h-[2.375rem] w-[2.375rem] items-center justify-center gap-x-2 rounded-full text-sm font-semibold text-gray-500 hover:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                <img class="inline-block h-[2.375rem] w-[2.375rem] rounded-full ring-2 ring-white dark:ring-gray-800"
                                    src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                    alt="Image Description">
                            </button>

                            <div class="hs-dropdown-menu duration z-10 hidden min-w-[15rem] rounded-lg bg-white p-2 opacity-0 shadow-md transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:border dark:border-gray-700 dark:bg-gray-800" aria-labelledby="hs-dropdown-with-header">
                                
                                <div class="-m-2 rounded-t-lg bg-gray-100 px-5 py-3 dark:bg-gray-700">
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Signed in as</p>
                                    <p class="text-sm font-medium text-gray-800 dark:text-gray-300">james@site.com</p>
                                </div>
                                
                                <div class="mt-2 py-2 first:pt-0 last:pb-0">
                                    
                                    <a class="flex items-center gap-x-3.5 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                        href="#">
                                        <svg class="h-4 w-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                                            <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                                        </svg>
                                        Newsletter
                                    </a>
                                    
                                    <a class="flex items-center gap-x-3.5 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                        href="#">
                                        <svg class="h-4 w-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z" />
                                            <path d="M3 6h18" />
                                            <path d="M16 10a4 4 0 0 1-8 0" />
                                        </svg>
                                        Purchases
                                    </a>
                                    
                                    <a class="flex items-center gap-x-3.5 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                        href="#">
                                        <svg class="h-4 w-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242" />
                                            <path d="M12 12v9" />
                                            <path d="m8 17 4 4 4-4" />
                                        </svg>
                                        Downloads
                                    </a>
                                    
                                    <a class="flex items-center gap-x-3.5 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                        href="#">
                                        <svg class="h-4 w-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                        Team Account
                                    
                                    </a>
                                </div>
                            </div>

                        </div>
                        
                    </div>

                </div>

            </nav>
        </header>
        {{-- Header End --}}
    </body>

</html>
