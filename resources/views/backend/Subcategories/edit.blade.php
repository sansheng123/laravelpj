@extends('backendtemplate')
@section('contend')

	
	<div class="container-fluid">
		<div class="d-sm-flex align-items-center justify-cont  ent-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Subcategories Edit Form</h1>
			
		</div>
		<form action="{{route('subcategories.update',$subcategory->id)}}" method="post" enctype="multipart/form-data">

			@csrf
			@method('PUT')
		<div class="container-fluid">
			
				<div class="row form-group">
				<label class="col-md-1 form-control-label">Name</label>
				<div class="col-md-6">
					<input type="text" name="name"  class="form-control" value="{{$subcategory->name}}" >
				</div>
				</div>
				
					
				<div class="row form-group">
					<label class="col-md-1 form-control-label">Subcategory</label>
					<div class="col-md-6">
						<select class="form-control form-control-md" 
						name="category">
						<optgroup label="Choose Subcategory">
							@foreach($categories as $category)
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