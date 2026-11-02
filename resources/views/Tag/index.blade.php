<x-layout :title="$pagetitle">

    <h2>Tags</h2>

    @forelse ($tags as $tag)
        <p>{{ $tag->title }}</p>
    @empty
        <p>No tags yet.</p>
    @endforelse

</x-layout>