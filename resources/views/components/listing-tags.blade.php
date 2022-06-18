@props(['tagsCSV'])

@php
$tags = explode(',', $tagsCSV)
@endphp

<div class="flex items-center mb-4">
    @foreach ($tags as $tag)
    <a href="/listings/?tag={{$tag}}" class="mr-3 p-2 text-sm bg-teal-500 rounded-full">{{$tag}}</a>
    @endforeach
</div>
