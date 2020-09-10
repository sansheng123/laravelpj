@extends('backendtemplate')
@section('contend')

	
	<div class="container-fluid">
		<div class="d-sm-flex align-items-center justify-cont  ent-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Brand Edit Form</h1>
			
		</div>
		<form action="{{route('brands.update',$brand->id)}}" method="post" enctype="multipart/form-data">

			@csrf
			@method('PUT')
		<div class="container-fluid">
			
				<div class="row form-group">
				<label class="col-md-1 form-control-label">Name</label>
				<div class="col-md-6">
					<input type="text" name="name"  class="form-control" value="{{$brand->name}}" >
				</div>
				</div>
				<div class="row form-group">
				<label class="col-md-1 form-control-label">Photo</label>
				<div class="col-md-6">
					<input type="file" name="photo"  class="form-control" value="{{$brand->photo}}">
					<img src="{{asset($brand->photo)}}" class="img-fluid">
					<input type="hidden" name="oldphoto" value="{{asset($brand->photo)}}">
				</div>
				</div>
				
				
				
				
				

				<div class="row ">
					<div class="col-md-10">
					<input type="submit"  class="btn btn-primary" value="Update" name="btnsubmit">
				</div>
			</div>
				

				
			
				
			
			

			
		</div>
		</form>
	</div>
@endsection