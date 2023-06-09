<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Edit post</h2>
    </x-slot>

    <div class="container_body">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('posts.update', $post->id) }}">
                        @csrf
                        @method('PUT')

                        <div>
                            <label for="title">title:</label><br>
                            <input name="title" type="text" value="{{ $post->title }}"><br>

                            @error('title')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>

                        <div>
                            <label for="content">Content</label><br>
                            <textarea name="content" cols="30" rows="10">{{ $post->message }}</textarea><br>

                            @error('content')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>

                        <button type="submit">Edit Post</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
