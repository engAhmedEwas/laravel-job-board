<x-navLayout>
    <div>
        <div>
            <div class="items-center border border-gray-200 rounded-xl px-4 py-6 my-3">
                <h2 style="font-size: 25px">{{ $post->title }}</h2>
                <h2 style="font-size: 20px">{{ $post->body }}</h2>
                <h2 class="py-2 text-sky-700">{{ $post->author }}</h2>
            </div>

            <div class="px-9">
                <div>
                    @foreach ($post->comments as $comment)
                        <div class="border border-gray-200 rounded-xl bg-gray-300 px-4 py-6 my-3 items-center">
                            <h2> {{ $comment->content }} </h2>
                            <h2 class="text-sky-700"> __ {{ $comment->author }} </h2>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


        <div class="border border-gray-900/10 rounded-xl px-3 py3">
            <form method="POST" action="{{ route('comments.store', $post) }}">
                @csrf

                <input type="hidden" name="post_id" value="{{ $post->id }}">

                <div class="space-y-12">
                    <div class="px-2">

                        <div class="sm:col-span-3">
                            <label for="author" class="block text-sm/6 font-medium text-gray-900">Author</label>
                            <div class="mt-2">
                                <input id="author" value="{{ old('author') }}" type="text" name="author"
                                    autocomplete="family-name"
                                    class=" block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="content" class="block text-sm/6 font-medium text-gray-900">Comment</label>
                            <div class="mt-2">
                                <textarea id="content" type="text" name="content" autocomplete="given-name"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1  placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ old('content') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex items-center justify-end gap-x-6 py-4">
                        <a href="" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
            </form>
        </div>
    </div>
</x-navLayout>
