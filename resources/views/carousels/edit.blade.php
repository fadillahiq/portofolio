@extends('layouts.dashboard')
@section('content')
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
											<div class="breadcomb-icon">
												<i class="icon nalika-home"></i>
											</div>
											<div class="breadcomb-ctn">
												<h2>Edit Carousel</h2>
												<p>Welcome to Animol <span class="bread-ntd"></span></p>
											</div>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                      <form action="{{ route('carousels.index') }}" method="GET">
                                        <div class="breadcomb-report custom-pro-edt-ds">
											<button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Back</button>
                                        </div>
                                      </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- Single pro tab start-->
            <div class="single-product-tab-area mg-b-30">
                <!-- Single pro tab review Start-->
                <div class="single-pro-review-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="review-tab-pro-inner">
                                    <ul id="myTab3" class="tab-review-design">
                                        <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Add Carousel</a></li>
                                    </ul>
                                    <div id="myTabContent" class="tab-content custom-product-edit">
                                        @if(session('status'))
                                            <div class="alert alert-success mb-1 mt-1">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <form action="{{ route('carousels.update',$carousel->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="product-tab-list tab-pane fade active in" id="description">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="review-content-section">
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                                <input type="text" name="title" value="{{ $carousel->title }}" class="form-control" placeholder="Anime Title">
                                                                @error('title')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                                <input type="file" name="image" class="form-control" placeholder="Image">
                                                                @error('image')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <img src="{{ Storage::url($carousel->image) }}" height="200" width="200" alt="" />
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="review-content-section">
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                                <textarea type="text" name="description" class="form-control" style="height:150px" placeholder="Description">{{ $carousel->description }}</textarea>
                                                                @error('description')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                                <input type="text" name="genre" value="{{ $carousel->genre }}" class="form-control" placeholder="Link Download">
                                                                @error('genre')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                                <input type="text" name="link_download" value="{{ $carousel->link_download }}" class="form-control" placeholder="Link Download">
                                                                @error('link_download')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="text-center custom-pro-edt-ds">
                                                            <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
