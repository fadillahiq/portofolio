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
												<h2>Carousel List</h2>
												<p>Welcome to Animol <span class="bread-ntd">Admin</span></p>
											</div>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Anime List</h4>
                            <div class="add-product">
                                <a href="{{ route('carousels.create') }}">Add Carousel</a>
                            </div>
                            <table>
                                <tr>
                                    <th>No.</th>
                                    <th>Image</th>
                                    <th>Carousel Title</th>
                                    <th>Description</th>
                                    <th>Genre</th>
                                    <th>Link</th>
                                    <th>Setting</th>
                                </tr>
                                @foreach ($carousels as $carousel)
                                <tr>
                                    <td>{{ $carousel->id }}</td>
                                    <td><img src="{{ Storage::url($carousel->image) }}" alt="" /></td>
                                    <td>{{ $carousel->title }}</td>
                                    <td>{{ $carousel->description }}</td>
                                    <td>{{ $carousel->genre }}</td>
                                    <td>{{ $carousel->link_download }}</td>
                                    <td>
                                        <form action="{{ route('carousels.destroy',$carousel->id) }}" method="POST">

                                            <a class="btn btn-primary" href="{{ route('carousels.edit',$carousel->id) }}">Edit</a>
                                            <a class="btn btn-info" href="{{ route('index') }}">Show</a>
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            <div class="custom-pagination">
								<ul class="pagination">
									{!! $carousels->links() !!}
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
