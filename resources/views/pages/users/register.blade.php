@section('title') {{"Sign up"}} @endsection

<x-layouts.default>
    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-lg mx-auto">
            <h1 class="text-2xl font-bold text-center text-teal-600 sm:text-3xl">Get started today</h1>

            <p class="max-w-md mx-auto mt-4 text-center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati sunt dolores deleniti inventore
                quaerat
                mollitia?
            </p>

            <form action={{route('users.store')}} method="POST"
                class="p-8 mt-6 mb-0 space-y-4 rounded-lg shadow-2xl dark:bg-gray-800 bg-gray-100">
                @csrf
                <p class="text-xl font-title">Sign up a new account</p>

                <div>
                    <label for="name" class="text-sm font-medium">Name</label>

                    <div class="relative mt-1">
                        <input type="text" id="name" name="name"
                            class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm dark:bg-gray-900"
                            placeholder="Enter name" value="{{old('name')}}" />

                        <span class="absolute inset-y-0 inline-flex items-center right-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 fill-current"
                                viewBox="0 0 24 24">
                                <path
                                    d="M20.822 18.096c-3.439-.794-6.641-1.49-5.09-4.418 4.719-8.912 1.251-13.678-3.732-13.678-5.082 0-8.465 4.949-3.732 13.678 1.598 2.945-1.725 3.641-5.09 4.418-2.979.688-3.178 2.143-3.178 4.663l.005 1.241h1.995c0-3.134-.125-3.55 1.838-4.003 2.851-.657 5.543-1.278 6.525-3.456.359-.795.592-2.103-.338-3.815-2.058-3.799-2.578-7.089-1.423-9.026 1.354-2.275 5.426-2.264 6.767-.034 1.15 1.911.639 5.219-1.403 9.076-.91 1.719-.671 3.023-.31 3.814.99 2.167 3.707 2.794 6.584 3.458 1.879.436 1.76.882 1.76 3.986h1.995l.005-1.241c0-2.52-.199-3.975-3.178-4.663z" />
                            </svg>
                        </span>
                    </div>
                    @error('name')
                    <p class="text-sm text-red-500 font-medium mt-2">{{$message}}</p>
                    @enderror
                </div>

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

                <div>
                    <label for="password_confirmation" class="text-sm font-medium">Confirm Password</label>

                    <div class="relative mt-1">
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm dark:bg-gray-900"
                            placeholder="**********" />

                        <span class="absolute inset-y-0 inline-flex items-center right-4">

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 fill-current"
                                viewBox="0 0 24 24">
                                <path
                                    d="M18 10v-4c0-3.313-2.687-6-6-6s-6 2.687-6 6v4h-3v14h18v-14h-3zm-10-4c0-2.206 1.795-4 4-4s4 1.794 4 4v4h-8v-4zm11 16h-14v-10h14v10zm-7.737-2l-2.843-2.756 1.173-1.173 1.67 1.583 3.563-3.654 1.174 1.173-4.737 4.827z" />
                            </svg>
                        </span>
                    </div>
                    @error('password_confirmation')
                    <p class="text-sm text-red-500 font-medium mt-2">{{$message}}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="block w-full px-5 py-3 text-base font-medium text-white bg-teal-600 rounded-lg">
                    Sign up
                </button>

                <p class="text-sm text-center dark:text-gray-100 text-gray-500">
                    Already have an account?
                    <a class="underline" href={{route('users.login')}}>Sign in</a>
                </p>
            </form>
        </div>
    </div>
</x-layouts.default>
