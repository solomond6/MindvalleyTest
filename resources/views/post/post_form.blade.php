@extends('layouts.master')

@section('content')
<div class="font-sans antialiased h-screen">
  <!-- Top Navigation -->
    <div id="main" class="pt-0 ">
        <!-- Sidebar -->
        @include('partials.sidebar')
        
        <!-- Content -->
        <div class="bg-white h-full pt-8 ml-4 mr-4">
            <div class="font-bold text-xl text-grey-darker text-left bg-grey-light p-2">New Post</div>
            <div class="text-left w-full text-black">
                <form method="post" action="{{ route('post.form') }}" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        {{ csrf_field() }}
                        <div class="mb-4">
                            <label class="block text-grey-darker text-sm font-bold mb-2" for="title">Title</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="id_title" name="title" aria-describedby="title" placeholder="Enter title" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-grey-darker text-sm font-bold mb-2" for="description">Description</label>
                            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="id_description" rows="8" name="description" placeholder="Description" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="block text-grey-darker text-sm font-bold mb-2" for="title">Upload a file</label>
                            <input type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="id_title" name="image" aria-describedby="image"required>
                        </div>
                        <button type="submit" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create post</button>
                    </form>
            </div>
        </div>
    </div>
</div>

@endsection