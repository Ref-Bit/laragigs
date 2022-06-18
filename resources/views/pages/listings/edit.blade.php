@section('title') {{'Edit Job'}} @endsection

<x-layouts.default>
    <section>
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">
                <div class="lg:py-12 lg:col-span-2">
                    <p class="max-w-xl text-lg">
                        At the same time, the fact that we are wholly owned and totally independent from manufacturer
                        and other group
                        control gives you confidence that we will only recommend what is right for you.
                    </p>

                    <div class="mt-8">
                        <span class="text-2xl font-bold text-teal-600"> 0151 475 4450 </span>
                        <address class="mt-2 not-italic">282 Kevin Brook, Imogeneborough, CA 58517</address>
                    </div>
                </div>
                <x-listing-form :listing="$listing" title="Update Job"/>
            </div>
        </div>
    </section>
</x-layouts.default>
