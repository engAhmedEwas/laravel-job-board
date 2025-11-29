<x-navLayout :title="$pageTitle">
    <div>
        @foreach ($posts as $post)
            <div style="border: 1px solid #333; margin: 10px; border-radius: 25px; padding-left: 20px; width: fit-content">
                <h2 style="font-size: 25px" > {{$post->title}} </h2>
                <h2 style="font-size: 25px" > {{$post->body}} </h2>
                <h2 style="font-size: 25px; border: 1px solid #333; border-radius: 25px; width: fit-content" > {{$post->author}} </h2>
                <h2 style="font-size: 25px" > {{$post->published}} </h2>

                {{-- <ul>
                @foreach ($post->comments as $comment)
                    <li>
                        {{$comment->content}}, {{$comment->author}}
                    </li>
                @endforeach
            </ul> --}}
            </div>


        @endforeach
    </div>
</x-navLayout>

