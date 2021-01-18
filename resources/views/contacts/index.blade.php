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
												<h2>Messages List</h2>
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
                            <h4>Messages List</h4>
                            <div class="add-product">

                            </div>
                            <table>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Description</th>
                                    {{-- <th>Settings</th> --}}
                                </tr>
                                @foreach ($messages as $contact)
                                <tr>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->subject }}</td>
                                    <td>{{ $contact->description }}</td>
                                    {{-- <td>
                                        <a class="btn btn-danger" href="/delete/{{ $contact->id }}">Delete</a>
                                    </td> --}}
                                </tr>
                                @endforeach
                            </table>
                            <div class="custom-pagination">
								<ul class="pagination">
									{!! $messages->links() !!}
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
