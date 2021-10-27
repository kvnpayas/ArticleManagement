@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">

        <p class="border-b-2 pb-2 corder-dotted italic text-gray-500">
            Search result for "{{ $searchText }}"
        </p>
        <div class="w-5/6 py-10">
            @foreach ($articles as $article)
                <div class="m-auto mb-8">

                    <h2 class="text-gray-700 text-5xl hover:text-gray-500 mb-4">
                        <a href="/articles/{{ $article->id }}">
                            {{ $article->title }}
                        </a>
                    </h2>

                    <span class="uppercase text-blue-500 font-bold text-xs italic">
                        Posted by: {{ $article->user->name }}
                    </span>
                    {{-- <hr class="mt-4 mb-4"> --}}
                    <p class="text-gray-500 font-bold text-xs italic">
                        Posted on: {{ $article->created_at }}
                    </p>
                    {{-- <hr class="mt-4 mb-8"> --}}
                    <img 
                    src="{{ asset('images/'. $article->image_path) }}" 
                    class="w-80 mb-8 shadwo-xl"
                    alt="">
                    <div class="w-64 truncate text-l italic mb-2 ">
                        <span>
                            {{ $article->article }} sadasdas
                        </span>
                    </div>
                    <a href="/articles/{{ $article->id }}"
                        class="corder-dotted italic text-gray-500">
                            Read more &rarr;
                    </a>
                </div> 
                <hr class="mt-4 mb-8">
            @endforeach
        </div>
        {{ $articles->links() }}
    </div>
@endsection