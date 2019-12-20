
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
              <h6 class="m-0 font-weight-bold text-primary" style="display: inline-block;">Foods to Menu Item</h6>
            </div>
             <div class="card-body">
                <form method="post" action="{{route('kitchenStaff.createMenuItem')}}" method="POST">
                  @csrf
                 
                <div class="form-group">
                  <label>Select Menu</label>
                  <select class="form-control" name="menu_id">
                    @foreach($menus as $menu)
                    <option value="{{$menu->id}}">{{$menu->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Select Food Item</label>
                  <select class="form-control" name="food_id">
                    @foreach($foods as $food)
                    <option value="{{$food->id}}">{{$food->name}}</option>
                    @endforeach
                  </select>
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
              </form>

            </div>
          </div>
 </div>

@endsection
