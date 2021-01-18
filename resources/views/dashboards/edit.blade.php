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
												<h2>Anime List</h2>
												<p>Welcome to Nalika <span class="bread-ntd">Admin</span></p>
											</div>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                      <form action="{{ route('dashboards.index') }}" method="GET">
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
                                        <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Add Anime</a></li>
                                    </ul>
                                    <div id="myTabContent" class="tab-content custom-product-edit">
                                        @if(session('status'))
                                            <div class="alert alert-success mb-1 mt-1">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <form action="{{ route('dashboards.update',$dashboard->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="product-tab-list tab-pane fade active in" id="description">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="review-content-section">
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                                <input type="text" name="title" value="{{ $dashboard->title }}" class="form-control" placeholder="Anime Title">
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
                                                                <img src="{{ Storage::url($dashboard->image) }}" height="200" width="200" alt="" />
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                                <textarea type="text" name="description" class="form-control" style="height:150px" placeholder="Description">{{ $dashboard->description }}</textarea>
                                                                @error('description')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                                                <input type="text" name="type" value="{{ $dashboard->type }}" class="form-control" placeholder="Type">
                                                                @error('type')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                                                                <input type="text" name="genre" value="{{ $dashboard->genre }}" class="form-control" placeholder="Genre">
                                                                @error('genre')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                                                                <input type="text" name="episode" value="{{ $dashboard->episode }}" class="form-control" placeholder="Episode">
                                                                @error('episode')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>
                                                                <input type="text" name="duration" value="{{ $dashboard->duration }}" class="form-control" placeholder="Duration">
                                                                @error('duration')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="review-content-section">
                                                            <p class="text-secondary">Link Download 480p :</p>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                                <input type="text" id="link_480p_uptobox" name="link_480p_uptobox" value="{{ $dashboard->link_480p_uptobox }}" class="form-control" placeholder="Uptobox">
                                                                @error('link_480p_uptobox')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                                <input type="text" id="link_480p_acefile" name="link_480p_acefile" value="{{ $dashboard->link_480p_acefile }}" class="form-control" placeholder="Acefile">
                                                                @error('link_480p_acefile')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                                <input type="text" id="link_480p_googledrive" name="link_480p_googledrive" value="{{ $dashboard->link_480p_googledrive }}" class="form-control" placeholder="Google Drive">
                                                                @error('link_480p_googledrive')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <p class="text-secondary">Link Download 720p :</p>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                                <input type="text" id="link_720p_uptobox" name="link_720p_uptobox" value="{{ $dashboard->link_720p_uptobox }}" class="form-control" placeholder="Uptobox">
                                                                @error('link_720p_uptobox')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                                <input type="text" id="link_720p_acefile" name="link_720p_acefile" value="{{ $dashboard->link_720p_acefile }}" class="form-control" placeholder="Acefile">
                                                                @error('link_720p_acefile')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                                <input type="text" id="link_720p_googledrive" name="link_720p_googledrive" value="{{ $dashboard->link_720p_googledrive }}" class="form-control" placeholder="Google Drive">
                                                                @error('link_720p_googledrive')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <p class="text-secondary">Link Download 1080p :</p>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                                <input type="text" id="link_1080p_uptobox" name="link_1080p_uptobox" value="{{ $dashboard->link_1080p_googledrive }}" class="form-control" placeholder="Uptobox">
                                                                @error('link_1080p_uptobox')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                                <input type="text" id="link_1080p_acefile" name="link_1080p_acefile" value="{{ $dashboard->link_1080p_googledrive }}" class="form-control" placeholder="Acefile">
                                                                @error('link_1080p_acefile')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                                <input type="text" id="link_1080p_googledrive" name="link_1080p_googledrive" value="{{ $dashboard->link_1080p_googledrive }}" class="form-control" placeholder="Google Drive">
                                                                @error('link_1080p_googledrive')
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
