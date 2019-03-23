@extends('layouts.master')

@section('title')
    Welcome Laravel Blog Tutorial
@endsection

@section('content')

<div class="grid max-w-3xl mx-auto p-8">
    @foreach($posts as $post)
        <div class="mb-6 ml-2 mr-2 md:mb-0 max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" src="{{URL::to('/images/' . $post->imgpath)}}" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{ $post->title }}</div>
                <p class="text-black text-base">
                  {!! \Illuminate\Support\Str::words($post->description, 30, '...') !!}
                </p>
                <p class="text-grey-darker text-base mt-4">
                  {{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }} by <a href="#">{{ $post->name }}
                </p>
            </div>
            <div class="px-6 py-4">
                <a href="{{ route('post.read', ['post_id' => $post->id]) }}" class="bg-blue rounded-full px-3 py-1 pt-2 pb-2 text-sm font-semibold text-white mr-2">Read more</a>
            </div>
            <div class="px-6 py-4">
                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#winter</span>
            </div>
        </div>
        <!-- <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta"><small><i>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }} by <a href="#">{{ $post->name }}</a></i></small></p>

            <p>{!! \Illuminate\Support\Str::words($post->description, 30, '...') !!}</p>
            <blockquote>
                <p>
                    <a href="{{ route('post.read', ['post_id' => $post->id]) }}" class="btn btn-primary btn-sm">Learn more</a> </p>
            </blockquote>
        </div> --><!-- /.blog-post -->
    @endforeach
</div>
@endsection