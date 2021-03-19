@extends('layout')
@section('title','List of Posts')
@section('content')

	<div>
		 <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Post Details</div>
    <div class="card-body">
      <div class="table-responsive">
		  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Detail</th>
              <th>Tags</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Detail</th>
              <th>Tags</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
              @foreach($data as $post)
              <tr>
              
              	<td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->detail}}</td>
                <td>{{$post->tags}}</td>
                <td>
                 
                  <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm" href="{{url('admin/post/'.$post->id.'/delete')}}">Delete</a>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
	</div>
		
			
		
	@endsection('content') 
<!-- @foreach($data as $category)
	      <li>
				{{$category->title}}
	      </li>
		@endforeach -->
		
