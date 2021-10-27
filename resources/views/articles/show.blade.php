@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                {{ $article->title }}
            </h1>
        </div>

        <div class="py-10 text-center">
            <div class="m-auto">
                <span class="uppercase text-blue-500 font-bold text-xs italic">
                    Posted by: {{ $article->user->name }}
                </span>
                <p class="text-gray-500 font-bold text-xs italic">
                    Posted on: {{ $article->created_at }}
                </p>

                <hr class="mt-4 mb-8">
                <div class="m-auto ">
                    <img 
                    src="{{ asset('images/'. $article->image_path) }}" 
                    class="w-4/5 mb-8 shadwo-xl"
                    alt="">
                </div>
                
                <div class="w-auto m-2 text-l italic">
                    <span>
                        {{ $article->article }}
                    </span>
                </div>
                

                <hr class="mt-4 mb-8">
            </div> 

        </div>
    </div>

@endsection