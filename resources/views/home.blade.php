@extends('layouts.master')

@section('content')
<div class="font-sans antialiased h-screen">
  <!-- Top Navigation -->
  
    <div id="main" class="pt-0">
        <!-- Sidebar -->
        @include('partials.sidebar')
        
        <!-- Content -->
        <div class="bg-white h-full pt-8 ml-4 mr-4">

            <table class="table table-auto">
                <thead>
                <tr>
                    <th class="py-4 px-6 font-sans font-medium uppercase text-sm text-black border-b border-grey-light">#</th>
                    <th class="py-4 px-6 font-sans font-medium uppercase text-sm text-black border-b border-grey-light">Title</th>
                    <th class="py-4 px-6 font-sans font-medium uppercase text-sm text-black border-b border-grey-light">Author</th>
                    <th class="py-4 px-6 font-sans font-medium uppercase text-sm text-black border-b border-grey-light">Created on</th>
                    <th class="py-4 px-6 font-sans font-medium uppercase text-sm text-black border-b border-grey-light"></th>
                    <th class="py-4 px-6 font-sans font-medium uppercase text-sm text-black border-b border-grey-light"></th>
                    <th class="py-4 px-6 font-sans font-medium uppercase text-sm text-black border-b border-grey-light"></th>
                </tr>
                </thead>
                <tbody>
                @if($posts)
                    @foreach($posts as $post)
                        <tr>
                            <th class="py-4 px-6 font-sans font-medium uppercase text-sm text-black border-b border-grey-light">{{ $loop->iteration }}</th>
                            <td class="py-4 px-6 font-sans font-medium uppercase text-sm text-black border-b border-grey-light">{{ $post->title }}</td>
                            <td class="py-4 px-6 font-sans font-medium uppercase text-sm text-black border-b border-grey-light">{{ $post->name }}</td>
                            <td class="py-4 px-6 font-sans font-medium uppercase text-sm text-black border-b border-grey-light">{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }}</td>
                            <td class="py-4 px-6 font-sans font-medium uppercase text-sm text-black border-b border-grey-light">
                                <a href="{{ route('post.edit', ['id' => $post->id]) }}">View/Edit</a>
                            </td>
                            <td class="py-4 px-6 font-sans font-medium uppercase text-sm text-black border-b border-grey-light">
                                <a href="{{ route('post.delete', ['id' => $post->id]) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <p class="text-center text-primary">No Posts created Yet!</p>
                @endif
            </table>
        </div>
    </div>
</div>

@endsection
