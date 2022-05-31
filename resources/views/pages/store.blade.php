@extends('layouts.main')

@section('content') 

<div class="bg-[#E5E5E5]">
    <div class="container mx-auto px-12 py-[50px]" x-data="{ coupon: true, deal: true, offer: true }">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-0 lg:gap-10">
            <!-- sidebar -->
            <div>
                <div class="w-full">
                    <div class="bg-white rounded-[15px] shadow-md lg:mb-[25px]">
                        <img src="{{$data['store']->logo}}" alt="{{$data['store']->name}}" class="text-center object-center object-scale-down h-[230px] w-full p-[15px]">
                    </div>
                    <div class="text-slab text-[22px] text-[#646464] uppercase lg:mb-[25px]">{{$data['store']->name}}</div>
                    <div class="text-roboto text-[14px] text-[#646464] lg:mb-[25px]">{{$data['store']->short_description}}</div>
                    <div class="text-slab text-[22px] text-[#646464] lg:mb-[25px]">TOTAL OFFERS: {{count($data['coupons'])}}</div>
                    <div class="w-full flex items-center lg:mb-[10px]">
                        <input x-model="coupon"
                            type="checkbox" name="email" class="w-6 h-6 border border-gray-300 rounded-sm outline-none cursor-pointer checked:bg-blue-400"/>
                        <label class="text-roboto font-[16px] text-[#000000] ml-2 text-sm" for="email">Coupons</label>
                    </div>
                    <div class="w-full flex items-center lg:mb-[10px]">
                        <input x-model="deal"
                            type="checkbox" name="email" class="w-6 h-6 border border-gray-300 rounded-sm outline-none cursor-pointer checked:bg-blue-400"/>
                        <label class="text-roboto font-[16px] text-[#000000] ml-2 text-sm" for="email">Deals</label>
                    </div>
                    <div class="w-full flex items-center lg:mb-[10px]">
                        <input x-model="offer"
                            type="checkbox" name="email" class="w-6 h-6 border border-gray-300 rounded-sm outline-none cursor-pointer checked:bg-blue-400"/>
                        <label class="text-roboto font-[16px] text-[#000000] ml-2 text-sm" for="email">Great Offer</label>
                    </div>
                </div>
            </div>
            <!-- coupon list -->
            <div class="col-span-3">
                <div class="w-full">
                    <div class="text-slab text-[32px] text-[#646464] uppercase lg:mb-[25px] leading-none">{{$data['store']->name}} COUPONS & PROMO CODES</div>
                    @foreach($data['coupons'] as $coupon)
                    <?php  $color = '646464';
                        if ($coupon->currency == '%') {
                            if($coupon->discount >= 25 && $coupon->discount < 50 ) { $color = 'F8C100';
                            } else if ($coupon->discount >= 50) { $color = 'C92022'; } 
                            else { $color = '7AC920'; }
                        } 
                    ?>
                    <div class="bg-white rounded-[15px] shadow-md lg:mb-[25px] grid grid-cols-1 md:grid-cols-4 p-5 grid-rows-2 auto-rows-min"
                        @if($coupon->type == 'Coupon Code')
                        x-show="coupon"
                        @elseif($coupon->type == 'Deal Type')
                        x-show="deal"
                        @elseif($coupon->type == 'Great Offer')
                        x-show="offer"
                        @endif
                        >
                        <div class="text-slab border-r border-dashed border-black row-span-2" style="color: #{{$color}}">
                            @if($coupon->currency == '%')
                            <div class="font-regular text-[20px] md:text-[35px] xl:text-[60px] leading-none text-center">{{$coupon->discount . $coupon->currency}}</div>
                            @else
                            <div class="font-regular text-[20px] md:text-[35px] xl:text-[60px] leading-none text-center">{{$coupon->currency . $coupon->discount}}</div>
                            @endif
                            <div class="font-regular text-[14px] md:text-[18px] xl:text-[30px] text-center">DISCOUNT</div>
                        </div>
                        <div class="col-span-3 px-8 pt-2">
                            <div class="text-slab font-bold text-[24px] text-[#646464] mb-[5px]">{{$coupon->title}}</div>
                            <div class="text-roboto font-regular text-[14px] text-[#646464]">{{$coupon->description}}</div>
                        </div>
                        <div class="px-8 pt-2 self-end text-[#7AC920]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check-circle inline" width="25" height="26" viewBox="0 1 19 18">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                            </svg>
                            <span class="leading-none text-[24px]">Verified</span>
                        </div>
                        <div class="px-8 pt-2 col-span-2 place-self-end">
                            @if($coupon->type == 'Coupon Code')
                            <button class="text-slab bg-[#7AC920] text-white text-[24px] font-bold px-[30px] py-[3px] rounded-[6px] hover:shadow-lg">Get Code</button>
                            @elseif($coupon->type == 'Deal Type')
                            <button class="text-slab bg-[#F8C100] text-white text-[24px] font-bold px-[30px] py-[3px] rounded-[6px] hover:shadow-lg">Get Deal</button>
                            @elseif($coupon->type == 'Great Offer')
                            <button class="text-slab bg-[#6c51b6] text-white text-[24px] font-bold px-[30px] py-[3px] rounded-[6px] hover:shadow-lg">Get Offer</button>
                            @endif
                        </div>
                        
                    </div>
                    <div class="bg-white rounded-[15px] shadow-md lg:mb-[25px] grid grid-rows-3 grid-flow-col gap-4" style="display:none">
                        <div class="row-span-3 auto-rows-auto" style="border:1px solid red">01</div>
                        <div class="col-span-2"  style="border:1px solid red">02</div>
                        <div class="row-span-2 col-span-2"  style="border:1px solid red">03</div>
                    </div>

                    @endforeach
                </div>
            </div>
            <!-- faq / saving tips -->
            <div class="col-span-4">
                <!-- faq -->
                @if(count($data['faqtips']))
                <section class="bg-white">
                    <div class="container px-6 py-12 mx-auto">
                        <h1 class="text-4xl font-semibold text-gray-800">Frequently asked questions</h1>

                        @foreach($data['faqtips'] as $faq)
                            @if($faq->type == 'FAQ')
                            <div class="mt-8 space-y-8 lg:mt-12">
                                <div class="p-8 bg-gray-100 rounded-lg">
                                    <button class="flex items-center justify-between w-full">
                                        <h1 class="font-semibold text-gray-700">{{$faq->title}}</h1>
                                    </button>

                                    <div class="mt-6 text-sm text-gray-500">{{htmlentities($faq->description)}}</div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </section>
                @endif

                <!-- saving tips -->
                @if(count($data['faqtips']))
                <section class="bg-white">
                    <div class="container px-6 py-12 mx-auto">
                        <h1 class="text-4xl font-semibold text-gray-800">Saving Tips</h1>

                        @foreach($data['faqtips'] as $tips)
                            @if($tips->type == 'Saving Tips')
                            <div class="mt-8 space-y-8 lg:mt-12">
                                <div class="p-8 bg-gray-100 rounded-lg">
                                    <button class="flex items-center justify-between w-full">
                                        <h1 class="font-semibold text-gray-700">{{$tips->title}}</h1>
                                    </button>

                                    <div class="mt-6 text-sm text-gray-500">{{htmlentities($tips->description)}}</div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </section>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="bg-white">
    <div class="container mx-auto px-12 py-[50px]" >
        <div class="text-slab text-[#646464] text-[32px] font-bold">Others Also Like</div>
    </div>
</div>

<div class="bg-white pb-[25px]">
    <div class="container mx-auto px-12">
        <div class="grid grid-cols-1 sm: grid-cols-2 md:grid-cols-4 xl:grid-cols-4 gap-2">
            @foreach($data['suggested'] as $suggested)
                <div class="box-2 p-6 hover:shadow-md">
                    <a href="/{{$suggested->alias}}"><img src="{{$suggested->logo}}" alt="{{$suggested->name}}" class="object-contain object-center md:object-center w-full h-full"></a>
                </div>
            @endforeach
        </div>
    </div>
</div>

@include('elements.contents.subscribe')

@endsection