<x-navLayout :title="$pageTitle">
    <div style="border: 1px solid #333; margin: 10px; border-radius: 25px; padding-left: 20px">

        <h2 style="font-size: 20px">{{$comment->author}}</h2>
        <h2 style="font-size: 20px">{{$comment->content}}</h2>
        <h2 style="font-size: 20px">{{$comment->post}}</h2>
    </div>
</x-navLayout>

