@extends('layouts.master')

@section('content')
<div class="font-sans antialiased h-screen">
  <!-- Top Navigation -->
    <div id="main" class="pt-0 ">
        <!-- Sidebar -->
        @include('partials.sidebar')
        
        <!-- Content -->
        <div class="bg-white h-full pt-8 ml-4 mr-4">
            <div class="font-bold text-xl text-grey-darker text-left bg-grey-light p-2">Update Post</div>
            <div class="text-left w-full text-black">
                <form method="post" action="{{ route('post.update', ['id' => $post->id]) }}" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        {{ csrf_field() }}
                        <div class="mb-4">
                            <label class="block text-grey-darker text-sm font-bold mb-2" for="title">Title</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="id_title" name="title" aria-describedby="title" placeholder="Enter title" required value="{{ $post->title }}">
                        </div>
                        <div class="mb-4">
                            <label class="block text-grey-darker text-sm font-bold mb-2" for="description">Description</label>
                            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="id_description" rows="8" name="description" placeholder="Description" required>{{ $post->description }}</textarea>
                        </div>
                        
                        <button type="submit" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update post</button>
                    </form>
            </div>
        </div>
    </div>
</div>

@endsection