<x-navLayout :title="$pageTitle">
    <div style="display: flex">
        @foreach ($posts as $post)
            <div style="border: 1px solid #333; margin: 10px; border-radius: 25px; padding-left: 20px; width: 250px">
                <h2 style="font-size: 25px" > {{$post->title}} </h2>

                <ul>
                @foreach ($post->comments as $comment)
                    <li>
                        {{$comment->content}}, {{$comment->author}}
                    </li>
                @endforeach
            </ul>
            </div>


        @endforeach
    </div>
</x-navLayout>

