@extends('layouts/main')

@section('content')
<div class="" style="background: #bfbfbf;padding: 25px;">
    <div class="container mx-auto px-12">
        <div class="text-roboto text-[22px] font-bold text-[#353535] py-[20px]">Browsing category: {{$data['category']->name}}</div>
        <div class="grid grid-cols-1 sm: grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-2">
            @foreach($data['stores'] as $store)
                <div class="box-2 p-6 hover:shadow-md">
                    <a href="/{{$store->alias}}"><img src="{{$store->logo}}" alt="{{$store->name}}" class="text-center object-contain object-center md:object-center w-full h-full"></a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection