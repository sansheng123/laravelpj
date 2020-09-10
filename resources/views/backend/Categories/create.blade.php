@extends('backendtemplate')
@section('contend')
	<div class="container-fluid">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Categories Create Form</h1>
			
		</div>
		<form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
			@csrf
		<div class="container-fluid">
			
				<div class="row form-group">
				<label class="col-md-1 form-control-label">Name</label>
				<div class="col-md-6">
					<input type="text" name="name"  class="form-control">
				</div>
				</div>
				<div class="row form-group">
				<label class="col-md-1 form-control-label">Photo</label>
				<div class="col-md-6">
					<input type="file" name="photo"  class="form-control">
				</div>
				</div>
				
				
				
				
				

				<div class="row ">
					<div class="col-md-10">
					<input type="submit"  class="btn btn-primary" value="Create" name="btnsubmit">
				</div>
			</div>
				

				
			
				
			
			

			
		</div>
		</form>
	</div>
@endsection