@extends('layouts.master')
@section('title', 'Dashboard')

@section('PageContent')
           <div>
    <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Menus</h1>
          <p class="mb-4">
             
          </p>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="display: inline-block;">List of Menu</h6>
                 
            </div>
             <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Items</th>
                      <th>Created At</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($menus as $menu)
                    <tr>
                      <td>{{$menu->name}}</td>
                      <td>
                        <ul>
                          @foreach($menu->menuItems as $item)
                          <li>
                              {{$item->name}}
                          </li>
                          @endforeach
                        </ul>
                      </td>
                      <td>{{$menu->created_at->diffForHumans()}}</td>

                      <td>
                        <a href="order/ready/{{$order->id}}" class="btn btn-outline-success">Edit</a> 
                        <a href="order/preparing/{{$order->id}}" class="btn btn-outline-warning">Delete</a> 
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
