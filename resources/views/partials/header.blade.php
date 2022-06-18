<div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a href="/" class="flex title-font font-medium items-center mb-4 md:mb-0">
        <img src={{asset('images/briefcase.png')}} alt="logo" class="rounded w-12 h-12">
        <span class="ml-3 text-xl font-title">{{config('app.name', 'Laradigs')}}</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a href={{route('listings.index')}} class="mr-3 hover:text-teal-500 duration-300 ease-in-out">Jobs</a>
        <a href={{route('listings.create')}} class="mr-3 hover:text-teal-500 duration-300 ease-in-out">Post Job</a>
        @auth
        <div class="flex items-center border-l-2 border-teal-500 px-3">
            <a href={{route('listings.manage')}} class="mr-3 hover:text-teal-500 duration-300 ease-in-out">Manage
                Jobs</a>
            <form action={{route('users.logout')}} method="POST">
                @csrf
                <button
                    class="inline-flex items-center bg-teal-500 hover:bg-gray-400 border-0 py-1 px-3 focus:outline-none shadow-lg rounded font-semibold text-sm text-gray-50 mt-4 md:mt-0 ease-in-out duration-300">Logout

                    <svg class="w-5 h-5 ml-1 fill-current" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                        clip-rule="evenodd">
                        <path
                            d="M13 2v-2l10 3v18l-10 3v-2h-9v-7h1v6h8v-18h-8v7h-1v-8h9zm-2.947 10l-3.293-3.293.707-.707 4.5 4.5-4.5 4.5-.707-.707 3.293-3.293h-9.053v-1h9.053z" />
                    </svg>
                </button>
            </form>
        </div>
        @else
        <a href={{route('users.create')}}>
            <button
                class="inline-flex items-center bg-teal-500 hover:bg-gray-400 border-0 py-1 px-3 focus:outline-none shadow-lg rounded font-semibold text-sm text-gray-50 mt-4 md:mt-0 ease-in-out duration-300">Register/Login
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </button>
        </a>
        @endauth
    </nav>
</div>
