@extends('layouts.backend.app')
@section('content')
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				    
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Détails du contact</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Contacts</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Détails du contact</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-xl-3 col-xxl-4 col-lg-4">
						<div class="row">
							
							<div class="col-lg-12">
								<div class="card">
									
									<div class="card-body pb-0">
										
										<ul class="list-group list-group-flush">
											<li class="list-group-item d-flex px-0 justify-content-between">
												<strong>Nom</strong>
												<span class="mb-0">{{$contact->name}}</span>
											</li>
											<li class="list-group-item d-flex px-0 justify-content-between">
												<strong>Sujet</strong>
												<span class="mb-0">{{$contact->subject}}</span>
											</li>
											<li class="list-group-item d-flex px-0 justify-content-between">
												<strong>Service</strong>
												<span class="mb-0">{{$contact->service}}</span>
											</li>
											<li class="list-group-item d-flex px-0 justify-content-between">
												<strong>Email</strong>
												<span class="mb-0">{{$contact->email}}</span>
											</li>
											<li class="list-group-item d-flex px-0 justify-content-between">
												<strong>Date de reception</strong>
												<span class="mb-0">{{$contact->created_at}}</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-xxl-8 col-lg-8">
						<div class="card">
							<div class="card-body">
								<p>{{$contact->message}}</p>
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="btn btn-outline-dark" onclick="history.back()">Retour</button>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

@endsection