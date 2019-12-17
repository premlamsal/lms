 <div>
    <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Customer</h1>
          <p class="mb-4">
             <b-button id="show-btn" @click="showAddModal" class="btn btn-success" style="margin-top: 8px;">
                       <span class="fa fa-plus-circle"></span>
                     Add Customer</b-button>
          </p>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="display: inline-block;">Customers</h6>
                 <div class="searchTable">
                       <!-- Topbar Search -->
                   <div class="input-group">
                      <input type="text" class="form-control border-primary small" placeholder="Search for Customer" aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>Updated at</th>
                      <th>Modify</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>id</td>
                      <td>name</td>
                      <td>address</td>
                      <td>phone</td>
                      <td>updated at</td>
                      <td><button class="btn btn-outline-success" style="margin-right: 5px;" ><span class="fa fa-edit"></span></button><button class="btn btn-outline-danger"><span class="fa fa-trash"></span></button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
 </div>
