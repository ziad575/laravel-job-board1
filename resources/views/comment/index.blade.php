<x-layout :title="$pagetitle">

    <h2>Blog</h2>

    @forelse ($comments as $comment)
        <div>
            <p>Comments Exploring (testing)</p>
            <h3>{{ $comment->content }}</h3>
            <p>{{ $comment->author }}</p>
            <a href="/blog/{{ $comment->post->id }}">{{ $comment->post->title }}</a>
        </div>
    @empty
        <p>No comments yet.</p>
    @endforelse

</x-layout>