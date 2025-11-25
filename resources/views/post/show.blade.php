<x-navLayout :title="$pageTitle">
    <div style="border: 1px solid #333; margin: 10px; border-radius: 25px; padding-left: 20px">

        <h2 style="font-size: 25px">{{$post->title}}</h2>
        <h2 style="font-size: 20px">{{$post->body}}</h2>
        <h2 style="font-size: 20px">{{$post->published}}</h2>
        <h2 style="font-size: 20px">{{$post->author}}</h2>
        
    </div>
</x-navLayout>

