@extends('layouts.master')
@section('title', 'Dashboard')

@section('PageContent')
           <div>
    <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Orders</h1>
          <p class="mb-4">
             
          </p>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="display: inline-block;">List Orders</h6>
                 
            </div>
             <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Employee Name</th>
                      <th>Food Name</th>
                      <th>Ordered At</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($orders as $order)
                    <tr>
                      <td>{{$order->user->name}}</td>
                      <td>{{$order->food->name}}</td>
                      <td>{{$order->created_at->diffForHumans()}}</td>
                      <td>
                        @if($order->status=='r')
                          <button class="btn btn-success">Ready</a>  
                        @elseif($order->status=='p')
                          <button class="btn btn-warning">Preparing</a> 
                        @else
                          <button class="btn btn-danger">Not Ready</a> 
                        @endif
                      </td>
                      <td>
                        <a href="order/ready/{{$order->id}}" class="btn btn-outline-success">Ready</a> 
                        <a href="order/preparing/{{$order->id}}" class="btn btn-outline-warning">Preparing</a> 
                        <a href="order/notready/{{$order->id}}" class="btn btn-outline-danger">Not Ready</a> 
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
