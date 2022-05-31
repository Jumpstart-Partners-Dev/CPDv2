@extends('layouts.main')

@section('content')
<div>
    <div class="container px-12 mx-auto">
        <div class="flex flex-wrap">
            <div class="mt-8 lg:mt-0 lg:w-1/3">
                <div class="flex items-center justify-center lg:justify-start">
                    <div class="max-w-lg">
                    <img class="object-cover object-center w-full h-64 rounded-md shadow" src="{{$data['blog']->thumbnail}}" alt="">
                    </div>
                </div>
            </div>
            <div class="lg:w-2/3">
                <h2 class="text-3xl font-bold text-gray-800 text-roboto mt-10 ">{{$data['blog']->title}}</h2>
            </div>
            
        </div>
        <div class="pb-10">{!! $data['blog']->content !!}</div>
    </div>
</div>

@endsection