@extends('layouts.header_footer')

@section('title', 'Search')


@section('content')

<div class="container">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    @if(session()->has('warning'))
        <div class="alert alert-warning">
            {{ session()->get('warning') }}
        </div>
    @endif
</div>

        <!--product-starts-->
        <div class="product">
            <div class="container">
{{--           надпись количество найденных часов в search--}}
                <div class="alert alert-success">
                    <div>Found {{$products->count()}} Watches in catalog</div>
                </div>
                <div class="product-top">
                    <div class="product-one">

                        <div class="row row-cols-4">

                            @forelse($products as $product)

                                {{-- для появления картинок--}}
                                @php
                                    $image = '';
                                    if(count($product->images)  > 0){
                                        $image = $product->images[0]['img_file'];
                                    }else{
                                        $image = 'no_image.png';
                                    }
               //                      обращаемся к массиву через count()
               //                      images() метод из Модели
                                @endphp

                                <div class="col-md-3 product-left mt-3">
                                    <div class="product-main simpleCart_shelfItem">
                                        <a href="{{ route('showProduct', ['catalog', $product->id]) }}"
                                           class="mask"><img class="img-responsive zoom-img" src="images/{{ $image }}"
                                                             alt="{{ $product->title }}"/></a>
                                        <div class="product-bottom">
                                            <h3>
                                                <a href="{{ route('showProduct', ['catalog', $product->id]) }}">{{ $product->title }}</a>
                                            </h3>
                                            <p>Explore Now</p>
                                            <h4><a class="item_add" href="#"><i></i></a> <span
                                                    class=" item_price">€ {{ $product->price }}</span></h4>
                                        </div>
                                        <div class="srch">
                                            <span>-50%</span>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="alert alert-warning">
                                Sorry, no results were found for you search
                                </div>
                            @endforelse


                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--product-end-->

@endsection





