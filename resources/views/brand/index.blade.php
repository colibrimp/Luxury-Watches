@extends('layouts.header_footer')

@section('title', $brand->title)


@section('content')

    <!--start-breadcrumbs-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="i{{route('index')}}">Main page</a></li>
                    <li class="active">{{ $brand->title }}</li>
                </ol>
            </div>
        </div>
    </div>
    <!--end-breadcrumbs-->

    <div class="product">
        <div class="container">
            {{-- посчитать количество выведенных товаров в каждой категории каталога--}}
            <div class="count_text">Showing {{ $brand->products->count() }} results</div>
            <div class="prdt-top">

            <div class="product-top">
                <div class="product-one">

                    <div class="row row-cols-4">

                        <div class="product-one">
                            @foreach($brand->products as $product)
                                @include('layouts.card')
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection





