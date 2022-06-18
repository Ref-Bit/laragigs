@section('title') {{'Manage Listings'}} @endsection

<x-layouts.default>
  <section class="mx-6 my-16">
    <h1 class="font-title text-2xl text-teal-500 pb-4">My Listings</h1>
    <div class="overflow-hidden overflow-x-auto border-2 border-gray-500 rounded shadow-xl">
        <table class="min-w-full text-sm divide-y divide-gray-500">
            <thead>
                <tr class="bg-teal-500">
                    <th class="px-4 py-2 font-semibold text-gray-100 text-base text-left whitespace-nowrap">Title</th>
                    <th class="px-4 py-2 font-semibold text-gray-100 text-base text-left whitespace-nowrap">Company</th>
                    <th class="px-4 py-2 font-semibold text-gray-100 text-base text-left whitespace-nowrap">Email</th>
                    <th class="px-4 py-2 font-semibold text-gray-100 text-base whitespace-nowrap">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-500">
                @forelse ($listings as $listing)
                <tr>
                    <td class="px-4 py-2 font-medium whitespace-nowrap">{{$listing->title}}</td>
                    <td class="px-4 py-2 whitespace-nowrap">{{$listing->company}}</td>
                    <td class="px-4 py-2 whitespace-nowrap">{{$listing->email}}</td>
                    <td class="flex justify-center items-center px-4 py-2 whitespace-nowrap">
                        <button class="text-teal-500 rounded-full w-8 h-8 p-1.5 shadow">
                            <a href={{route('listings.edit', ['listing' => $listing->id])}} title="Edit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M18.311 2.828l2.862 2.861-15.033 15.032-3.583.722.723-3.584 15.031-15.031zm0-2.828l-16.873 16.872-1.438 7.127 7.127-1.437 16.874-16.873-5.69-5.689z" />
                                </svg>
                            </a>
                        </button>
                        <form action={{route('listings.destroy', ['listing' => $listing->id])}} method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="text-red-500 rounded-full w-8 h-8 p-1.5 shadow" title="Delete">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M9 19c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm4 0c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm4 0c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm5-17v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.315c0 .901.73 2 1.631 2h5.712zm-3 4v16h-14v-16h-2v18h18v-18h-2z" />
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="px-4 py-2 text-lg whitespace-nowrap">No listings found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
  </section>
</x-layouts.default>
