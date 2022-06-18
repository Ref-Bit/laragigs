@section('title') {{'Home'}} @endsection

<x-layouts.default>
    @include('partials.hero')
    @include('partials.top_listings')
    @include('partials.steps')
    @include('partials.stats')
    @include('partials.contact')
</x-layouts.default>
