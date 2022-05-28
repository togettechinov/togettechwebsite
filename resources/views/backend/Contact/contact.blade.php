@extends('layouts.backend.app')
@section('css')
    <!-- Datatable -->
    <link href="{{asset('backend/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
@endsection
@section('content')
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                @include('components.alert')
				    
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Contacts</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Tableau de bord</a></li>
                            <li class="breadcrumb-item active"><a href="#">Contacts</a></li>
                            <li class="breadcrumb-item active"><a href="#">Tous les contacts</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
				
					<div class="col-lg-12">
						<div class="row tab-content">
							<div id="list-view" class="fade show col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Contacts  </h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example3" class="display" style="min-width: 845px">
												<thead>
													<tr>
                                                        <th>N</th>
														<th>Nom</th>
														<th>Sujet</th>
														<th>Service</th>
														<th>Message</th>
														<th>Email</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
                                                    @forelse($contacts as $key=>$contact)
													<tr>
                                                        <td>{{++$key}}</td>
														<td>{{$contact->name}}</td>
														<td>{{$contact->subject}}</td>
														<td>{{$contact->service}}</td>
														<td>{{$contact->message}}</td>
														<td><a href="#"><strong>{{$contact->email}}</strong></a></td>
														<td style="display:inline-flex;">
															<a href="{{route('contacts.show', $contact->id)}}" class="btn btn-sm btn-success" style="margin-right:2px;">
                                                                <i class="la la-eye"></i>
                                                            </a>
                                                            <form action="{{ route('contacts.destroy', $contact->id)}}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer ce contact?');">
                                                                    <i class="la la-trash-o"></i>
                                                                </button>
                                                            </form>
														</td>												
													</tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan="6"></td>
                                                    </tr>
                                                    @endforelse
											
												</tbody>
											</table>
										</div>
									</div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
				
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

@endsection
@section('js')	
	<!-- Datatable -->
    <script src="{{asset('backend/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/js/plugins-init/datatables.init.js')}}"></script>
@endsection