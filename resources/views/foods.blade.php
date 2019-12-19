@extends('layouts.master')
@section('title', 'Dashboard')

@section('PageContent')
           <div>
    <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Foods</h1>
          <p class="mb-4">
             
          </p>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="display: inline-block;">List of Foods</h6>
                 
            </div>
             <div class="card-body">
              @if($foods->count()>0)
              <div class="table-responsive">
                <table class="table table-striped table-bordered" width="100%" cellspacing="0">

                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Category</th>
                      <th>Created at</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($foods as $food)
                    <tr>
                      <td>{{$food->id}}</td>
                      <td>{{$food->name}}</td>
                      <td>{{$food->description}}</td>

                      <td>{{$food->category->name}}</td>

                      <td>{{$food->created_at->diffForHumans()}}</td>
                      <td><a class="btn btn-outline-success" style="margin-right: 5px;" href="/dashboard/editFood/{{$food->id}}"><span class="fa fa-edit"></span></a><a class="btn btn-outline-danger" href="/dashboard/deleteFood/{{$food->id}}"><span class="fa fa-trash"></span></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              @else
               No data found 
              @endif
            </div>
          </div>
 </div>

@endsection
