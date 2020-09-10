@extends('backendtemplate')
@section('contend')
	<div class="container-fluid">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Item Edit Form</h1>
			
		</div>
		<form action="{{route('items.update',$item->id)}}" method="post" enctype="multipart/form-data">

			@csrf
			@method('PUT')
		<div class="container-fluid">
			<div class="row form-group">
				<label class="col-md-1 form-control-label">Code NO</label>
				<div class="col-md-6">
					<input type="text" name="codeno"  class="form-control" value="{{$item->codeno}}" >
				</div>
				</div>
				<div class="row form-group">
				<label class="col-md-1 form-control-label">Name</label>
				<div class="col-md-6">
					<input type="text" name="name"  class="form-control" value="{{$item->name}}" >
				</div>
				</div>
				<div class="row form-group">
				<label class="col-md-1 form-control-label">Photo</label>
				<div class="col-md-6">
					<input type="file" name="photo"  class="form-control" value="{{$item->photo}}">
					<img src="{{asset($item->photo)}}" class="img-fluid">
					<input type="hidden" name="oldphoto" value="{{$item->discount}}">
				</div>
				</div>
				<div class="row form-group">
				<label class="col-md-1 form-control-label">Price</label>
				<div class="col-md-6">
					<input type="text" name="price"  class="form-control" value="{{$item->price}}">
				</div>
				</div>
				<div class="row form-group">
				<label class="col-md-1 form-control-label">Discount</label>
				<div class="col-md-6">
					<input type="text" name="discount"  required="required" class="form-control" value="{{$item->discount}}">
				</div>
				</div>
				<div class="row form-group">
				<label class="col-md-1 form-control-label">Description</label>
				<div class="col-md-6">
					<textarea name="description" rows="3" class="form-control">{{$item->description}}</textarea>
				</div>
				</div>
				<div class="row form-group">
					<label class="col-md-1 form-control-label">Brand</label>
					<div class="col-md-6">
						<select class="form-control form-control-md" id="inputbrand"
						name="brand">
						<optgroup label="Choose Brand">
							@foreach($brands as $brand)
							<option value="{{$brand->id}}">{{$brand->name}}</option>
							@endforeach
						</optgroup>
							
						</select>
						
					</div>
				</div>
				<div class="row form-group">
					<label class="col-md-1 form-control-label">Subcategory</label>
					<div class="col-md-6">
						<select class="form-control form-control-md" id="subcategory"
						name="subcategory">
						<optgroup label="Choose Subcategory">
							@foreach($subcategories as $category)
							<option value="{{$category->id}}">{{$category->name}}</option>
							@endforeach
						</optgroup>
							
						</select>
						
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