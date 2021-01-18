@extends('layouts.main')

@section('content')
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">

            <div class="hero__slider owl-carousel">
                @foreach ($carousels as $carousel)
                <div class="hero__items set-bg" data-setbg="{{ Storage::url($carousel->image) }}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">{{ $carousel->genre }}</div>
                                <h2>{{ $carousel->title }}</h2>
                                <p>{{ $carousel->description }}</p>
                                <a href="{{ $carousel->link_download }}"><span>Download Now</span><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Recently Added</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($datas as $data)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{ Storage::url($data->image) }}">
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>{{ $data->genre }}</li>
                                        </ul>
                                        <h5><a href="{{ route('anime-details',$data->id) }}">{{ $data->title }}</a></h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="custom-pagination">
                            <ul class="pagination">
                                {!! $datas->links() !!}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <!-- Product Section End -->

@endsection
