@extends('layouts.app')

@section('content')


<form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('post.store') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="title" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            Title
                        </label>

                        <input id="title" type="text" class="form-input w-full @error('title')  border-red-500 @enderror"
                            name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                        @error('title')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="description" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            Description
                        </label>

                        <input id="description" type="text" class="form-input w-full @error('description')  border-red-500 @enderror"
                            name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                        @error('description')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>     
                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                            Create Post
                        </button>
                    </div>                 

                </form>





@endsection