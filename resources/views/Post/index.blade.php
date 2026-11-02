<x-layout :title="$pagetitle">

    <h2>{{ $pagetitle }}</h2>

    @forelse ($posts as $post)
        <article>
            <h3>
                <a href="/blog/{{ $post->id }}">{{ $post->title }}</a>
            </h3>
            <p>{{ $post->body }}</p>
             
            <p>By {{ $post->author }}</p>
        </article>
    @empty
        <p>No posts yet.</p>
    @endforelse

</x-layout>