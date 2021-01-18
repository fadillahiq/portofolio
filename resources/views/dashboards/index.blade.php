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

                            </div>
                            <table>
                                <tr>
                                    <th>No.</th>
                                    <th>Image</th>
                                    <th>Anime Title</th>
                                    <th>Description</th>
                                    <th>Type</th>
                                    <th>Genre</th>
                                    <th>Episode</th>
                                    <th>Duration</th>
                                    {{-- <th>Link 480p Uptobox</th>
                                    <th>Link 480p Acefile</th>
                                    <th>Link 480p Googledrive</th>
                                    <th>Link 720p Uptobox</th>
                                    <th>Link 720p Acefile</th>
                                    <th>Link 720p Googledrive</th>
                                    <th>Link 1080p Uptobox</th>
                                    <th>Link 1080p Acefile</th>
                                    <th>Link 1080p Googledrive</th> --}}
                                    <th>Setting</th>
                                </tr>
                                @foreach ($dashboards as $dashboard)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td><img src="{{ Storage::url($dashboard->image) }}" alt="" /></td>
                                    <td>{{ $dashboard->title }}</td>
                                    <td>{{ $dashboard->description }}</td>
                                    <td>{{ $dashboard->type }}</td>
                                    <td>{{ $dashboard->genre }}</td>
                                    <td>{{ $dashboard->episode }}</td>
                                    <td>{{ $dashboard->duration }}</td>
                                    {{-- <td>{{ $dashboard->link_480p_uptobox }}</td>
                                    <td>{{ $dashboard->link_480p_acefile }}</td>
                                    <td>{{ $dashboard->link_480p_googledrive }}</td>
                                    <td>{{ $dashboard->link_720p_uptobox }}</td>
                                    <td>{{ $dashboard->link_720p_acefile }}</td>
                                    <td>{{ $dashboard->link_720p_googledrive }}</td>
                                    <td>{{ $dashboard->link_1080p_uptobox }}</td>
                                    <td>{{ $dashboard->link_1080p_acefile }}</td>
                                    <td>{{ $dashboard->link_1080p_googledrive }}</td> --}}
                                    <td>
                                        <form action="{{ route('dashboards.destroy',$dashboard->id) }}" method="POST">

                                            <a class="btn btn-primary" href="{{ route('dashboards.edit',$dashboard->id) }}">Edit</a>

                                            <a class="btn btn-info" href="{{ route('anime-details',$dashboard->id) }}">Show</a>

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
                                    {!! $dashboards->links() !!}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
