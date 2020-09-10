@extends('backendtemplate')
@section('contend')
<div class="container-fluid">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Subcategory List</h1>
			</div>
			</div>
			<div class="row">
				<div class="col-lg-10 ">
					<a href="{{route('subcategories.create')}}" class="btn btn-secondary float-right">Add New </a>
				</div>
			</div>
			<div class="container">
			<div class="row">
			<div class="col-md-12">
			<table  class="table table-bordered">
				<thead>
					<tr>
						<td>N0</td>
						<td>Name</td>
						<td>Category Name</td>
				        <td>Action</td>
				       
					</tr>
				</thead>
				<tbody>
					@php $i=1; @endphp
					@foreach($subcategories as $subcategory)
					<tr>
						<td>1</td>
						<td>{{$subcategory->name}}</td>
					 	<td>{{$subcategory->category_id}}</td>
						<td>
							<a href="{{route('subcategories.edit',$subcategory->id)}}" class="btn btn-dark">Edit</a>
							<form  action="{{route('subcategories.destroy',$subcategory->id)}}" method="post" class="d-inline-block">
								@csrf
								@method('DELETE')
							<input type="submit" class="btn btn-danger" value="Delete">
							</form>
							</td>
					</tr>
					 @endforeach
					
				</tbody>
			</table>
			</div>
			</div>
			</div>
				
		
	</div>
@endsection
                