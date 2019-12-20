
@extends('layouts.master')
@section('title', 'Dashboard')

@section('PageContent')
           <div>
    <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Edit</h1>
          <p class="mb-4">
             
          </p>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="display: inline-block;">Menu</h6>
            </div>
             <div class="card-body">
                <form method="post" action="{{route('kitchenStaff.updateMenu')}}" method="POST">
                  @csrf
                 
                <div class="form-group">
                  <label>Name</label>
                  <input type="hidden" name="id" value="{{$menu->id}}">
                  <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{$menu->name}}">
                </div>
 
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

            </div>
          </div>
 </div>

@endsection
