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
                         @if($menu->menuItems->count()>0)
                           @foreach($menu->menuItems as $menuItem)

                           <li>{{$menuItem->food->name}} <a href="/dashboard/deleteMenuItem/{{$menuItem->id}}">Delete</a> </li>


                           @endforeach
                         @endif

                        </ul>
                      </td>
                      <td>{{$menu->created_at->diffForHumans()}}</td>

                      <td>
                        <a href="/dashboard/editMenu/{{$menu->id}}" class="btn btn-outline-success">Edit</a> 
                        <a href="/dashboard/deleteMenu/{{$menu->id}}" class="btn btn-outline-warning">Delete</a> 
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
