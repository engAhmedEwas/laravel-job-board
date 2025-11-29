<x-navLayout :title="$pageTitle">
    <div style="display: flex">
        @foreach ($tags as $tag)
            <div style="border: 1px solid #333; margin: 10px; border-radius: 25px; padding: 5px; width: fit-content">
                <h2 style="font-size: 25px" > {{$tag->title}} </h2>
            </div>
        @endforeach
    </div>
</x-navLayout>

