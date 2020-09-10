@extends('backendtemplate')
@section('contend')
<div class="container-fluid">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Item List</h1>
			</div>
			</div>
			<div class="row">
				<div class="col-lg-10 ">
					<a href="{{route('items.create')}}" class="btn btn-secondary float-right">Add New </a>
				</div>
			</div>
			<div class="container">
			<div class="row">
			<div class="col-md-12">
			<table  class="table table-bordered">
				<thead>
					<tr>
						<td>No</td>
						<td>Code No</td>
				        <td>Name</td>
				        <td>Price</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
					@php $i=1; @endphp
					@foreach($items as $item)
					<tr>
						<td>1</td>
						<td>{{$item->codeno}}</td>
						<td>{{$item->name}}</td>
						<td>{{$item->price}}</td>
						<td><a href="" class="btn btn-warning">Detail</a>
							<a href="{{route('items.edit',$item->id)}}" class="btn btn-dark">Edit</a>
							<a href="" class="btn btn-danger">Delete</a>
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
                