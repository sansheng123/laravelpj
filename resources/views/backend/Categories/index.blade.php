@extends('backendtemplate')
@section('contend')
<div class="container-fluid">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Category List</h1>
			</div>
			</div>
			<div class="row">
				<div class="col-lg-10 ">
					<a href="{{route('categories.create')}}" class="btn btn-secondary float-right">Add New </a>
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
						<td>Photo</td>
				        <td>Action</td>
				       
					</tr>
				</thead>
				<tbody>
					@php $i=1; @endphp
					@foreach($categories as $category)
					<tr>
						<td>1</td>
						<td>{{$category->name}}</td>
					 	<td><img src="{{asset($category->photo)}}" width="300px" height="300px"> </td>
						<td>
							<a href="{{route('categories.edit',$category->id)}}" class="btn btn-dark">Edit</a>
							<form  action="{{route('categories.destroy',$category->id)}}" method="post" class="d-inline-block">
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
                