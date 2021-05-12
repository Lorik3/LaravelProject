@extends('layouts.app')

@section('content')


    <div class="w-4/5 m-auto text-center">
    
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">Blog Posts</h1>
        
        </div>
    </div>
    @if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a href="/blog/create" class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">Create Post</a>
    </div>
    @endif
    @foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    

    <div>
    <div>
         <img  src="https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849822_960_720.jpg" width="600px" alt="">
    </div>
    </div>
    
    <div>
        <h2 class="text-gray-700 font-bold text-5xl pb-4">{{ $post->title }}</h2>

        <span class="text-gray-500">By <span class="font-bold italic text-gray-800">By Steve Job </span> </span>

        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">{{ $post->description }}</p>

        <a href=""class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">Keep Reading</a>

        @if(isset(Auth::user()->id) && Auth::user()->id==$post->user_id)
        <span class="float-right">
            <a class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2"  href="/blog/{{$post->slug}}/edit">Edit</a>
        </span>
        @endif
    </div>
</div>
    @endforeach
    
    


@endsection