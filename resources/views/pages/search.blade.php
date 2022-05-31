@extends('layouts.main')

@section('content') 

<div class="bg-[#E5E5E5]">
    <div class="container mx-auto px-12 py-[50px]">
        <div class="flex flex-wrap">
            <div class="w-1/2 text-[28px] xl:text-[35px] pb-10">{{count($data['search'])}} results found for '{{$data['key']}}'</div>
            <div class="w-1/2">
                <form action="/search" type="get">
                    @csrf
                    <input type="text" name="key" class="p-[10px] text-[22px] text-roboto" placeholder="Search">
                </form>
            </div>
        </div>
        @if(count($data['search']))
            @foreach($data['search'] as $search)
            <div class="bg-white px-[20px] py-[15px]">
                <div><a href="/{{$search->alias}}" class="text-[#5430ff] text-[28px]">{{$search->name}}</a></div>
                <div><a href="/{{$search->alias}}">www.couponsplusdeals.com/{{$search->alias}}</a></div>
                <div>{{$search->short_description}}</div>
            </div>
            @endforeach
        @else
        <div>0 results</div>
        @endif
    </div>
</div>


@endsection