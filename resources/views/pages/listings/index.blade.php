@section('title') {{'All Jobs'}} @endsection

<x-layouts.default>
    <section>
        <div class="container px-5 py-24 mx-auto">
            <h1 class="sm:text-3xl text-2xl text-teal-500 font-medium font-title uppercase mb-2">
                top jobs
            </h1>
            <x-listing-search />
            <div class="flex flex-wrap -m-4">
                @forelse($listings as $listing)
                <x-listing-card :listing="$listing" />
                @empty
                <p>No listings</p>
                @endforelse
            </div>
            <div class="my-4">
                {{$listings->links()}}
            </div>
        </div>
    </section>
</x-layouts.default>
