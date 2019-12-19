
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
              <h6 class="m-0 font-weight-bold text-primary" style="display: inline-block;">Food</h6>
            </div>
             <div class="card-body">
                <form method="post" action="{{route('kitchenStaff.updateFood')}}" method="POST">
                  @csrf
                  <input type="hidden" name="id" value="{{$food->id}}">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{$food->name}}">
                </div>
                <div class="form-group">
                  <label>Decription</label>
                  <textarea class="form-control" name="description">{{$food->description}}</textarea>
                </div>

                 <div class="form-group">
                  <label>Category</label>
                  <select class="form-control" name="cat_id">
                  @foreach($categories as $category)

                    @if($food->cat_id== $category->id)
                       <option value="{{$category->id}}" selected="">{{$category->name}}</option>
                    @else
                       <option value="{{$category->id}}">{{$category->name}}</option>
                    @endif
                  @endforeach
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

            </div>
          </div>
 </div>

@endsection
