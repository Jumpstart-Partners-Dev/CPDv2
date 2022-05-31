@extends('layouts/main')

@section('content')

<?php
    foreach($data['categories'] as $category){ 
        $data[$category->alias] = '';
    }
    $data['apparel-accessories'] = 'https://www.cnnphilippines.com/.imaging/mte/demo-cnn-new/750x450/dam/cnn/2018/1/2/ecsImgPacsafe_SMnorth_CNNPH-4554315463191767537.jpg/jcr:content/ecsImgPacsafe_SMnorth_CNNPH-4554315463191767537.jpg';
    $data['automotive'] = 'https://www.cherishyourcar.com/wp-content/uploads/2021/07/black-leather-car-interior.jpg';
    $data['baby'] = 'http://cdn.home-designing.com/wp-content/uploads/2009/03/kids-room-design1.jpg';
    $data['beauty'] = 'https://indian-retailer.s3.ap-south-1.amazonaws.com/s3fs-public/article5874.jpg';
    $data['books-media'] = 'https://media.istockphoto.com/photos/books-on-display-in-the-corner-of-a-second-hand-bookstore-picture-id1129874863?b=1&k=20&m=1129874863&s=170667a&w=0&h=FTGHLcHTwhBCwYVQ-P4pJgrkIbwK0Kh94aYOUxTBRmg=';
    $data['business'] = 'https://cloudinary.hbs.edu/hbsit/image/upload/s--Fm3oHP0m--/f_auto,c_fill,h_375,w_750,/v20200101/79015AB87FD6D3284472876E1ACC3428.jpg';
    $data['cbd'] = 'https://www.nm.org//-/media/northwestern/healthbeat/images/medical-advances/science-research/nm-cbd-oil_feature.jpg';
    $data['clothing'] = 'https://www.thoughtco.com/thmb/C7RiS4QG5TXcBG2d_Sh9i4hFpg0=/3620x2036/smart/filters:no_upscale()/close-up-of-clothes-hanging-in-row-739240657-5a78b11f8e1b6e003715c0ec.jpg';
    $data['education-training'] = 'https://habitatbroward.org/wp-content/uploads/2020/01/10-Benefits-Showing-Why-Education-Is-Important-to-Our-Society.jpg';
    $data['electronics'] = 'https://thegadgetflow.com/wp-content/uploads/2021/04/Must-have-iPhone-gadgets-for-your-everyday-life-featured-1200x675.jpeg';
    $data['entertainment'] = 'https://cdn.vox-cdn.com/thumbor/qAOExpJwBQrvWqssMEY2JlNFZN4=/0x0:3000x2000/1200x800/filters:focal(1021x1075:1501x1555)/cdn.vox-cdn.com/uploads/chorus_image/image/70310267/RoundUpArt_LEDESTREAM.0.jpg';
    $data['flowers'] = 'https://www.1800flowers.com/blog/wp-content/uploads/2021/05/Birthday-Flowers-Colors.jpg';
    $data['food'] = 'https://pizzapalaceburwell.com/wp-content/uploads/2021/11/Food.jpg';
    $data['furniture'] = 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/sculptural-furniture-1574790540.jpg?crop=1.00xw:0.534xh;0.00160xw,0.367xh&resize=640:*';
    $data['games'] = 'https://static.wikia.nocookie.net/aeea333b-4a87-41ea-b3c5-10832d149d31/scale-to-width-down/800';
    $data['gifts'] = 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/christmas-gifts-for-her-1597762646.jpg?crop=1.00xw:0.752xh;0,0.149xh&resize=1200:*';
    $data['health'] = 'https://www.german-heart-centre.com/uploads/blog/post/8d5d30ac0af2b07932ba54bf05905edb.jpg';
    $data['home-garden'] = 'https://img.krishijagran.com/media/52315/home-garden123456789.jpg';
    $data['jewelry'] = 'https://static01.nyt.com/images/2022/04/13/t-magazine/13tmag-raymond-slide-K086/13tmag-raymond-slide-K086-articleLarge.jpg?quality=75&auto=webp&disable=upscale';
    $data['musical-instruments'] = 'https://verbnow.com/wp-content/uploads/2021/06/1-studio-music-instruments-June222021-1.jpg.webp';
    $data['office-supplies'] = 'https://thelocalbrand.com/wp-content/uploads/2013/11/Office-Supplies.jpg';
    $data['party-supplies'] = 'https://partycorner.com/wp-content/uploads/2020/03/boy-birthday-party-supplies-in-new-jersey.jpg';
    $data['pets'] = 'https://blogs.cdc.gov/wp-content/uploads/sites/6/2020/05/golden_retiver_cat_cropped.jpg';
    $data['photography'] = 'https://www.thoughtco.com/thmb/GAtp0KJWAXudEuz9ufGu2jKAdYQ=/3909x2199/smart/filters:no_upscale()/film-photography-592347645-59e4d0609abed500119e7b14.jpg';
    $data['services'] = 'https://www.thoughtco.com/thmb/GAtp0KJWAXudEuz9ufGu2jKAdYQ=/3909x2199/smart/filters:no_upscale()/film-photography-592347645-59e4d0609abed500119e7b14.jpg';
    $data['sexual-wellness'] = 'https://i0.wp.com/covenantfamilysolutions.com/wp-content/uploads/2020/12/hero-sexualwellness.jpg?fit=1920%2C1080&ssl=1';
    $data['shoes'] = 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/best-running-shoes-lead-1576249557.jpg?crop=0.665xw:0.892xh;0.335xw,0.00855xh&resize=640:*';
    $data['software'] = 'https://wp-assets.futurism.com/2022/01/best-desktop-computers.jpg';
    $data['sporting-goods'] = 'https://cdn2.howtostartanllc.com/images/business-ideas/business-idea-images/Sporting-Goods-Store.jpg';
    $data['toys'] = 'https://www.consumersinternational.org/media/1389/connected-toys.jpg?width=1120';
    $data['travel'] = 'https://cdn.insuremytrip.com/resources/30987/travel-documents-to-remember.jpg';
    $data['uncategory'] = '';
    $data['web-hosting'] = 'https://387solutions.com/wp-content/uploads/2021/05/webhosting.jpg';
    $data['webmaster-tools'] = 'https://www.infinitemediacorp.com/wp-content/uploads/2017/04/web-tools-i-cant-live-without.png';
    $data['weddings'] = 'https://acuaverderesort.com.ph/wp-content/uploads/2021/12/wedding-01-min.jpg';

?>

<div>
    <div class="container mx-auto px-12 py-12">
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-4">
            @foreach($data['categories'] as $category)
            <?php $bg = $data[$category->alias]; ?>
            <a class="cat__1 text-[22px] hover:text-[24px]" href="/category/{{$category->alias}}">
                <div class="px-[30px] py-[20px] border bg-no-repeat bg-cover relative hover:shadow-md hover:border" style="background-image: url('{{$bg}}')">
                    <div class="absolute w-full h-full" style="top:0; left:0; background: black; opacity: 50%; z-index:5"></div>
                    <div class="text-white filter-none text-center mt-[50px]" style="z-index:10; position: inherit">
                    {{$category->name}}
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>

@endsection