
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
              <h6 class="m-0 font-weight-bold text-primary" style="display: inline-block;">Kitchen Staff</h6>
                 
            </div>
             <div class="card-body">
                <form method="post" action="{{route('admin.createKitchenStaff')}}" method="POST">
                  @csrf
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" placeholder="Enter name" name="name">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" placeholder="Enter email" name="email">
                 
                </div>
                <div class="form-group">
                   <label>Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                 <div class="form-group">
                  <label>Verified ?</label>
                  <select class="form-control" name="isVerified">
                    <option value="1">Verified</option>
                    <option value="0" selected="">Not Verified</option>
                  </select>
                </div>
                 <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status">
                    <option value="1">Active</option>
                    <option value="0" selected="">Not Active</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

            </div>
          </div>
 </div>

@endsection
