
			@extends('admin-dashboard.dashboard-lyout')

			@section('content')
				
			

			
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">product cart</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>e-commerce</span></a></li>
							<li class="active"><span>cart</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
		
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div class="panel-body row">
										<form id="example-advanced-form" action="#">
											<div class="table-wrap">
												<div class="table-responsive">
													<table class="table display product-overview mb-30" id="datable_1">
														<thead>
															<tr>
																<th>Photo</th>
																<th>Product</th>
																<th>Quantity</th>
																<th>price</th>
																<th>Actions</th>
															</tr>
														</thead>
														<tfoot>
															<tr>
																<th colspan="3">Subtotal:</th>
																<th></th>
																<th></th>
															</tr>
														</tfoot>
														<tbody>
															<tr>
																<td>
																	<img src="../img/chair.jpg" alt="iMac" width="80">
																</td>
																<td class="txt-dark">Rounded Chair</td>
																<td>
																<input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-default"   data-bts-button-up-class="btn btn-default" value="20" name="vertical-spin">
																</td>
																<td>$400</td>
																
																<td><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
															</tr>
															<tr>
																<td>
																	<img src="../img/chair2.jpg" alt="iMac" width="80">
																</td>
																<td class="txt-dark">Circle Chair</td>
																<td>
																	<input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-default"   data-bts-button-up-class="btn btn-default" value="10" name="vertical-spin">
																</td>
																<td>$450</td>
																<td><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
															</tr>
															<tr>
																<td>
																	<img src="../img/chair3.jpg" alt="iMac" width="80">
																</td>
																<td class="txt-dark">Square Chair</td>
																<td>
																<input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-default"   data-bts-button-up-class="btn btn-default" value="15" name="vertical-spin">
																</td>
																<td>$470</td>
																
																<td><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
															</tr>
														</tbody>
													</table>
													<div class="form-actions pull-right pr-15">
														<button class="btn btn-success btn-anim mr-10 pull-left"><i class="fa fa-shopping-cart"></i><span class="btn-text">continue shopping</span></button>
														<button class="btn btn-warning btn-anim pull-left"><i class="fa fa-sign-out"></i><span class="btn-text">checkout</span></button>
														<div class="clearfix"></div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
				
				</div>
				@endsection
				