<x-navLayout :title="$pageTitle">
    <div style="display: flex;">
        @foreach ($comments as $comment)
            <div style="border: 1px solid #333; margin: 10px; border-radius: 25px; padding-left: 20px; width: 500px">

                <h2 style="font-size: 20px" > {{$comment->content}} </h2>
                <h2 style="font-size: 20px" > {{$comment->author}} </h2>
                <h2 style="font-size: 20px" > <a href="/blog/ {{$comment->post->id}}">{{$comment->post->title}}</a> </h2>

            </div>
        @endforeach
    </div>
</x-navLayout>

