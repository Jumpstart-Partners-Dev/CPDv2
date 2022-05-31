@extends('layouts.main')

@section('content')
<div class="container px-12 mx-auto">
    <div class="text-roboto py-5 text-[52px]; lg:text-[66px]">Blogs</div>
    @foreach($data['blogs'] as $idx => $blog)
    <a href="/blog/{{$blog->slug}}">
        <section class="bg-white hover:bg-[#f0f0f0] rounder-[15px]">
            <div class="container px-6 py-8 mx-auto">
                <div class="items-center lg:flex gap-4">
                    <?php 
                        $content = strip_tags(htmlspecialchars_decode($blog->content));
                        $shortContent = substr($content, 0, 150);
                        $timeToRead = ceil(str_word_count($blog->content) / 200);
                    ?>
                    @if(($idx + 1) % 2 == 0)
                    <div class="mt-8 lg:mt-0 lg:w-1/3">
                        <div class="flex items-center justify-center lg:justify-start">
                            <div class="max-w-lg">
                                <img class="object-cover object-center w-full h-64 rounded-md shadow" src="{{$blog->thumbnail}}" alt="">
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="lg:w-2/3">
                        <h2 class="text-3xl font-bold text-gray-800 ">{{$blog->title}}</h2>

                        <p class="mt-4 text-gray-500  lg:max-w-md">
                            {!! html_entity_decode($shortContent) !!}
                        </p>
                        <p class="mt-3 text-gray-500 lg:max-w-md italic text-[#9f9f9f]">
                            {{$timeToRead}} minutes to read
                        </p>
                    </div>
                    
                    @if(($idx + 1) % 2 != 0)
                    <div class="mt-8 lg:mt-0 lg:w-1/3">
                        <div class="flex items-center justify-center lg:justify-end">
                            <div class="max-w-lg">
                            <img class="object-cover object-center w-full h-64 rounded-md shadow" src="{{$blog->thumbnail}}" alt="">
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </section>
    </a>
    @endforeach
</div>

@endsection