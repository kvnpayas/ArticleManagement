@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                All Posts
            </h1>
        </div>

        <div class="py-10 text-center">
            <table class="table-auto">
                <tr class="bg-blue-100">
                    <th class="w-80 border-4 border-gray-500">
                        ID
                    </th>
                    <th class="w-80 border-4 border-gray-500">
                        Title
                    </th>
                    <th class="w-80 border-4 border-gray-500">
                        Date Posted
                    </th>
                    <th class="w-80 border-4 border-gray-500">
                        Action
                    </th>
                </tr>
                @forelse ($user->articles as $article)
                    <tr>
                        <td class="border-4 border-gray-500">
                            {{ $article->id }}
                        </td>
                        <td class="border-4 border-gray-500">
                            <a href="/articles/{{ $article->id }}">
                                {{ $article->title }}
                            </a>
                        </td>

                        <td class="border-4 border-gray-500">
                            {{ date('d-m-Y', strtotime($article->created_at)) }}
                        </td>
                        <td class="border-4 border-gray-500">
                            <a 
                            href="/articles/{{ $article->id }}/edit"
                            class="border-b-2 pb-2 corder-dotted italic text-green-500"    
                            >
                                Edit &rarr;
                            </a>
                            <form action="/articles/{{ $article->id }}" method="POST" class="pt-3">
                                @csrf
                                @method('delete')
                                <button type="submit" class="border-b-2 pb-2 corder-dotted italic text-red-500">
                                    Delete &rarr;
                                </button>
                            </form>
                        </td>

                    </tr>
                @empty
                    <p>
                        No Car models Found
                    </p>
                @endforelse
            </table>


        </div>
    </div>

@endsection