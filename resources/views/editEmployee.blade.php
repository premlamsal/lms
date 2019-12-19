
@extends('layouts.master')
@section('title', 'Dashboard')

@section('PageContent')
           <div>
    <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Add</h1>
          <p class="mb-4">
             
          </p>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="display: inline-block;">Employee</h6>
                 
            </div>
             <div class="card-body">
                <form method="post" action="{{route('admin.updateEmployee')}}" method="POST">
                  @csrf
                  <input type="hidden" name="id" value="{{$user->id}}">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{$user->name}}">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{$user->email}}">
                 
                </div>
                <div class="form-group">
                   <label>Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="password" value="{{$user->password}}">
                </div>
                 <div class="form-group">
                  <label>Verified ?</label>
                  <select class="form-control" name="isVerified">
                    @if($user->isVerified==1)
                      <option value="1" selected="">Verified</option>
                      <option value="0">Not Verified</option>
                    @else
                      <option value="1">Verified</option>
                      <option value="0" selected="">Not Verified</option>
                    @endif
                  </select>
                </div>
                 <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status">
                     @if($user->status==1)
                    <option value="1" selected="">Active</option>
                    <option value="0">Not Active</option>
                     @else
                     <option value="1" >Active</option>
                    <option value="0" selected="">Not Active</option>
                    @endif
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

            </div>
          </div>
 </div>

@endsection
