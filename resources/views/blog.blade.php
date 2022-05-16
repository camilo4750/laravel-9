<x-layouts.app
    title="Blog"
    meta-description="Description main Blog">
    <h1>Estamos en Blog</h1>

    @foreach ($posts as $post)
    <ul>
        <li>{{$post->title}}</li>
    </ul>        
    @endforeach
</x-layouts.app>
