<section>
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
            <h1 class="sm:text-3xl text-2xl text-teal-500 font-medium font-title uppercase mb-2">
                top jobs
            </h1>
            <p class="lg:w-1/2 w-full leading-relaxed">Whatever cardigan tote bag tumblr hexagon brooklyn
                asymmetrical gentrify, subway tile poke farm-to-table.</p>
        </div>
        <div class="flex flex-wrap -m-4">
            @forelse($listings as $listing)
            <x-listing-card :listing="$listing" />
            @empty
            <p>No listings</p>
            @endforelse
        </div>
        <a href={{route('listings.index')}}>
            <button
                class="flex mx-auto mt-16 text-white bg-teal-500 border-0 py-2 px-8 shadow-lg focus:outline-none hover:bg-teal-600 rounded text-lg">View
                All
            </button>
        </a>
    </div>
</section>
