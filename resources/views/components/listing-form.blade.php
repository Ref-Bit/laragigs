@props(['listing', 'title'])

<div class="p-8 dark:bg-gray-800 bg-gray-50 rounded shadow-lg lg:p-12 lg:col-span-3">
    <h1 class="text-2xl sm:text-3xl text-teal-500 font-title mb-8">{{$title}}</h1>
    <form action={{$listing->id ? route('listings.update', ['listing' => $listing->id]) : route('listings.index')}}
        method="POST" class="space-y-4" enctype="multipart/form-data">
        @csrf
        @if($listing->id)
          @method('PUT')
        @endif
        <div>
            <label class="leading-7 text-base font-semibold" for="title">Job Title<sup
                    class="text-red-500">*</sup></label>
            <input
                class="w-full p-3 text-base border-gray-200 rounded dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-teal-500 duration-300 ease-in-out"
                placeholder="Example: Senior Laravel Developer" type="text" id="title" name="title"
                value="{{old('title', $listing->title)}}" autofocus />
            @error('title')
            <p class="text-sm text-red-500 font-medium mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div>
                <label class="leading-7 text-base font-semibold" for="email">Email<sup
                        class="text-red-500">*</sup></label>
                <input
                    class="w-full p-3 text-base border-gray-200 rounded dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-teal-500 duration-300 ease-in-out"
                    placeholder="Example: info@abc-company.com" type="text" id="email" name="email"
                    value="{{old('email', $listing->email)}}" />
                @error('email')
                <p class="text-sm text-red-500 font-medium mt-2">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label class="leading-7 text-base font-semibold" for="company">Company<sup
                        class="text-red-500">*</sup></label>
                <input
                    class="w-full p-3 text-base border-gray-200 rounded dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-teal-500 duration-300 ease-in-out"
                    placeholder="Example: ABC Ltd" type="tel" id="company" name="company"
                    value="{{old('company', $listing->company)}}" />
                @error('company')
                <p class="text-sm text-red-500 font-medium mt-2">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div>
                <label class="leading-7 text-base font-semibold" for="location">Job Location<sup
                        class="text-red-500">*</sup></label>
                <input
                    class="w-full p-3 text-base border-gray-200 rounded dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-teal-500 duration-300 ease-in-out"
                    placeholder="Example: Remote, Boston MA, etc" type="location" id="location" name="location"
                    value="{{old('location', $listing->location)}}" />
                @error('location')
                <p class="text-sm text-red-500 font-medium mt-2">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label class="leading-7 text-base font-semibold">Website/Application Link<sup
                        class="text-red-500">*</sup></label>
                <div class="flex flex-wrap items-stretch w-full relative">
                    <div class="flex">
                        <span
                            class="flex items-center leading-normal rounded-r-none border border-r-0 border-teal-500 px-3 whitespace-no-wrap text-sm w-12 h-12 bg-teal-500 justify-center items-center rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 dark:text-gray-900 text-gray-50"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </span>
                    </div>
                    <input type="text" name="website"
                        class="flex-shrink flex-grow flex-auto flex-1 w-full p-3 text-base border-gray-200 rounded-r dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-teal-500 duration-300 ease-in-out"
                        placeholder="https://" value="{{old('website', $listing->website)}}">
                </div>
                @error('website')
                <p class="block text-sm text-red-500 font-medium mt-2">{{$message}}</p>
                @enderror
            </div>
        </div>
        <div>
            <label class="leading-7 text-base font-semibold" for="tags">Tags (comma sparated)<sup
                    class="text-red-500">*</sup></label>
            <input
                class="w-full p-3 text-base border-gray-200 rounded dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-teal-500 duration-300 ease-in-out"
                placeholder="Example: Laravel, Backend, Postgres, etc" type="text" id="tags" name="tags"
                value="{{old('tags', $listing->tags)}}" />
            @error('tags')
            <p class="text-sm text-red-500 font-medium mt-2">{{$message}}</p>
            @enderror
        </div>
        <div>
            <labe class="leading-7 text-base font-semibold" for="logo">Upload file</label>
                <input
                    class="w-full p-3 font-normal text-base text-gray-400 border-gray-200 rounded dark:bg-gray-900 cursor-pointer focus:outline-none focus:ring-2 focus:ring-teal-500 duration-300 ease-in-out"
                    id="logo" type="file" name="logo">
        </div>

        <div>
            <label class="leading-7 text-base font-semibold" for="description">Description<sup
                    class="text-red-500">*</sup></label>
            <textarea
                class="w-full p-3 text-base border-gray-200 rounded dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-teal-500 duration-300 ease-in-out"
                placeholder="Include tasks, requirements, salary, etc" rows="8" id="description"
                name="description">{{old('description', $listing->description)}}</textarea>
            @error('description')
            <p class="text-sm text-red-500 font-medium mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mt-4">
            <button type="submit"
                class="relative inline-flex items-center px-8 py-3 overflow-hidden text-white bg-teal-600 rounded group active:bg-teal-500 focus:outline-none focus:ring">
                <span class="absolute right-0 transition-transform translate-x-full group-hover:-translate-x-4">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </span>

                <span class="text-base font-medium transition-all group-hover:mr-4">
                    {{$listing->id ? "Update" : "Create"}}
                </span>
            </button>
        </div>
    </form>
</div>
