@extends('layouts.master')

@section('title')
    Welcome Mindvalley Blog
@endsection

@section('content')
    <main role="main" class="max-w-3xl mx-auto p-8">

        <div class="mb-6 ml-2 mr-2 rounded overflow-hidden shadow-lg">
            <img class="w-full h-64" src="{{URL::to('/images/' . $post->imgpath)}}" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{ $post->title }}</div>
                {{$post->description}}
                <p class="text-grey-darker text-base mt-4">
                  {{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }} by <a href="#">{{ $post->name }}
                </p>
            </div>
            <div class="px-6 py-4">
                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#winter</span>
            </div>
        </div>

    </main><!-- /.container -->
@endsection