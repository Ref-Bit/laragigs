@props(['listing'])

<div class="xl:w-1/4 md:w-1/2 p-4">
    <div class="px-4 py-6 shadow rounded border-l-2 border-teal-500 dark:bg-gray-800 bg-gray-50">
        <div class="flex flex-wrap justify-start items-center mb-2">
            <div class="inline-flex w-1/6">
                <div class="w-10 h-10 inline-flex items-center justify-center">
                    <img src={{$listing->logo ? asset('storage/'.$listing->logo) : asset('images/briefcase.png')}}
                        alt="briefcase" class="rounded">
                </div>
            </div>
            <div class="inline-flex w-5/6">
                <h2 class="text-lg font-medium font-title">{{$listing->title}}</h2>
            </div>
        </div>
        <p class="leading-relaxed text-sm mb-4">{{ $listing->excerpt() }}</p>
        <x-listing-tags :tagsCSV="$listing->tags" />
        <a href={{route('listings.show', $listing->id)}} class="inline-flex items-center">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</div>
