@extends('layout')
@section('title','List of Comments')
@section('content')

	<div>
		 <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Comment Details</div>
    <div class="card-body">
      <div class="table-responsive">
		  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>User ID</th>
              <th>Post ID</th>
              <th>Comment</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#</th>
              <th>User ID</th>
              <th>Post ID</th>
              <th>Comment</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
              @foreach($data as $post)
              <tr>
              
              	<td>{{$post->id}}</td>
                <td>{{$post->user_id}}</td>
                <td>{{$post->post_id}}</td>
                <td>{{$post->comment }}</td>
                <td>
                 
                  <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm" href="{{url('admin/comment/delete/'.$post->id)}}">Delete</a>
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
		