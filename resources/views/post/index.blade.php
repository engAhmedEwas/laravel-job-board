<x-navLayout :title="$pageTitle">
        @if (session('success'))
            <div class="bg-green-50 px-3 py-2">
                {{session('success')}}
            </div>
        @endif
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/blog/create"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create
        </a>
        </div>
        @foreach ($posts as $post)
            <div class="flex justify-between items-center border border-gray-200 px-4 py-6 my-3">
                <div>
                    <h2 style="font-size: 25px"><a href="/blog/{{$post->id}}"> {{ $post->title }} </a></h2>
                    <h2 style="font-size: 25px;"> {{ $post->author }} </h2>
                </div>
                <div class="flex">
                    <a href="/blog/{{ $post->id }}/edit"
                        class="rounded-md bg-green-600 px-3 py-2 mx-1 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Edit</a>

                    <form action="/blog/{{$post->id}}" method="POST" onsubmit="return confirm('Are You Sure, This Cannot Be Reversed?')">
                        @csrf
                        @method('DELETE')
                        <button
                            class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
        {{ $posts->links() }}
</x-navLayout>
