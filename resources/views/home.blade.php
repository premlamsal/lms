@extends('layouts.master')
@section('title', 'Dashboard')

@section('PageContent')

          

@can('isAdmin')
  <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    @endcan

          <!-- Content Row -->
           <div>
    <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">
             Welcome {{Auth::user()->name}}
              @can('isAdmin')
                  Administrator Account
              @elsecan('isEmployee')
                  Employee Acount
              @elsecan('isKitchenStaff')
                  Kitchen Staff Acount
              @endcan

          </h1>
          <!-- <p class="mb-4"> -->
             
          </p>
          @can('isKitchenStaff')
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="display: inline-block;">Notifications</h6>
                 
            </div>
            <div class="card-body">
              @if($orders->count()>0)
                  <ul>

                    @foreach($orders as $order)
                    <li><b>{{$order->created_at->diffForHumans()}}</b> | <b>{{$order->user->name}}</b> ordered <b>{{$order->food->name}}</b></li>
                   @endforeach
                  </ul>
              @else
              Nothing to Show || Employee orders will be displayed here!!
              @endif
            </div>
          </div>
          @endcan




        @can('isEmployee')




         <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="display: inline-block;">Today's Menu</h6>
                 
            </div>
            <div class="card-body">
                  <ul>
                   
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="/img/2.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">{{$menu_of_day->name}}</h4>
                          <hr>
                          <h5>Food Items</h5>
                          <div class="food-list">
                            <ul>
                        @if($menu_of_day->menuItems->count()>0)
                           @foreach($menu_of_day->menuItems as $menuItem)

                           <li>{{$menuItem->food->name}}
                            <a href="/dashboard/makeOrder/{{$menu_of_day->id}}" style="margin-left: 5px;">Order</a>
                           </li>

                           @endforeach
                         @endif
                            </ul>
                          </div>
                          <br>
                        </div>
                      </div>
                 
                  </ul>
            </div>
          </div>


       







        @endcan





 </div>

@endsection
