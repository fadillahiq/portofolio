@extends('layouts.main')

@section('content')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('index') }}"><i class="fa fa-home"></i> Home</a>
                        <span>Details</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="{{ Storage::url($data->image) }}">
                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>{{ $data->title }}</h3>
                                <span>フェイト／ステイナイト, Feito／sutei naito</span>
                            </div>
                            <p>{{ $data->description }}</p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Type:</span> {{ $data->type }}</li>
                                            <li><span>Genre:</span> {{ $data->genre }}</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Episode:</span> {{ $data->episode }}</li>
                                            <li><span>Duration:</span>{{ $data->duration }}</li>
                                            {{-- <li><span>Quality:</span> {{ $data->quality }}</li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="dlmn321">
                                <div class="dlmn-wrap">
                                        <div class="dlmn-head">1080p <b></b></div>
                                            <ul>
                                                <li><a href="{{ $data->link_1080p_uptobox }}" class="link-download" rel="noopener" target="_blank">Uptobox</a><span class=".text-secondary"> | </span><a href="{{ $data->link_1080p_acefile }}" class="link-download" rel="noopener" target="_blank">Acefile</a><span class=".text-secondary"> | </span><a href="{{ $data->link_1080p_googledrive }}" class="link-download" rel="noopener" target="_blank">Googledrive</a></li>
                                            </ul>
                                        <div class="dlmn-head">720p <b></b></div>
                                            <ul>
                                                <li><a href="{{ $data->link_720p_uptobox }}" class="link-download" rel="noopener" target="_blank">Uptobox</a><span class=".text-secondary"> | </span><a href="{{ $data->link_720p_acefile }}" class="link-download" rel="noopener" target="_blank">Acefile</a><span class=".text-secondary"> | </span><a href="{{ $data->link_720p_googledrive }}" class="link-download" rel="noopener" target="_blank">Googledrive</a></li>
                                            </ul>
                                        <div class="dlmn-head">480p <b></b></div>
                                            <ul>
                                                <li><a href="{{ $data->link_480p_uptobox }}" class="link-download"  rel="noopener" target="_blank">Uptobox</a><span class=".text-secondary"> | </span><a href="{{ $data->link_480p_acefile }}" class="link-download" rel="noopener" target="_blank">Acefile</a><span class=".text-secondary"> | </span><a href="{{ $data->link_480p_googledrive }}" class="link-download" rel="noopener" target="_blank">Googledrive</a></li>
                                            </ul>
                                </div>
                            </div>
                            {{-- <div class="anime__details__btn">
                                <a href="{{ $data->link_download }}" class="watch-btn"><span>Download Now</span><i
                                    class="fa fa-angle-right"></i></a>
                                </div>
                            </div> --}}
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="anime__details__review">
                            <div class="section-title">
                                <h5>Reviews</h5>
                            </div>
                            @foreach ($comments as $comment)
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="{{ asset('assets/img/anime/review-1.jpg') }}" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>{{ $comment->name }}<span> - {{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</span></h6>
                                    <p>{{ $comment->comment }}</p>
                                </div>
                            </div>
                            @endforeach
                        <div class="anime__details__form">
                            <div class="section-title">
                                <h5>Your Comment</h5>
                            </div>
                            <form action="{{ route('commentPost') }}" method="POST">
                                @csrf
                                <input type="text" name="name" placeholder="Your Name">
                                <textarea placeholder="Your Comment" name="comment"></textarea>
                                <button type="submit"><i class="fa fa-location-arrow"></i> Comment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Anime Section End -->

@endsection
