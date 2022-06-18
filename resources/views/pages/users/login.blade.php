@section('title') {{"Sign in"}} @endsection

<x-layouts.default>
    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-lg mx-auto">
            <h1 class="text-2xl font-bold text-center text-teal-600 sm:text-3xl">Welcome Back!</h1>

            <p class="max-w-md mx-auto mt-4 text-center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati sunt dolores deleniti inventore
                quaerat mollitia?
            </p>

            <form action={{route('users.authenticate')}} method="POST"
                class="p-8 mt-6 mb-0 space-y-4 rounded-lg shadow-2xl dark:bg-gray-800 bg-gray-100">
                @csrf
                <p class="text-xl font-title">Sign in to your account</p>

                <div>
                    <label for="email" class="text-sm font-medium">Email</label>

                    <div class="relative mt-1">
                        <input type="email" id="email" name="email"
                            class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm dark:bg-gray-900"
                            placeholder="Enter email" value="{{old('email')}}" />

                        <span class="absolute inset-y-0 inline-flex items-center right-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                        </span>
                    </div>
                    @error('email')
                    <p class="text-sm text-red-500 font-medium mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="text-sm font-medium">Password</label>

                    <div class="relative mt-1">
                        <input type="password" id="password" name="password"
                            class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm dark:bg-gray-900"
                            placeholder="**********" value="{{old('password')}}" />

                        <span class="absolute inset-y-0 inline-flex items-center right-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 fill-current"
                                viewBox="0 0 24 24">
                                <path
                                    d="M6 8v-2c0-3.313 2.686-6 6-6 3.312 0 6 2.687 6 6v2h-2v-2c0-2.206-1.795-4-4-4s-4 1.794-4 4v2h-2zm15 2v14h-18v-14h18zm-2 2h-14v10h14v-10z" />
                            </svg>
                        </span>
                    </div>
                    @error('password')
                    <p class="text-sm text-red-500 font-medium mt-2">{{$message}}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="block w-full px-5 py-3 text-base font-medium text-white bg-teal-600 rounded-lg">
                    Sign in
                </button>

                <p class="text-sm text-center dark:text-gray-100 text-gray-500">
                    Don't have an account?
                    <a class="underline" href={{route('users.create')}}>Sign up</a>
                </p>
            </form>
        </div>
    </div>
</x-layouts.default>
