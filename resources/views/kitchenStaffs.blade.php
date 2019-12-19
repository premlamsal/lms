@extends('layouts.master')
@section('title', 'Dashboard')

@section('PageContent')
           <div>
    <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Kitchen Staff</h1>
          <p class="mb-4">
             
          </p>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="display: inline-block;">List of Kitchen Staffs</h6>
                 
            </div>
             <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Verified</th>
                      <th>Created at</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($users as $user)
                    <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>
                        @if($user->status==1)
                          Active
                        @else
                          Not Active
                        @endif
                      </td>
                      <td>
                         @if($user->isVerified==1)
                          Verified
                        @else
                          Not Verified
                        @endif
                      </td>
                      <td>{{$user->created_at->diffForHumans()}}</td>
                      <td><a class="btn btn-outline-success" style="margin-right: 5px;" href="/dashboard/editKitchenStaff/{{$user->id}}"><span class="fa fa-edit"></span></a><a class="btn btn-outline-danger" href="/dashboard/deleteKitchenStaff/{{$user->id}}"><span class="fa fa-trash"></span></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
 </div>

@endsection
