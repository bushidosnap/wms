<template>
  <div class="row mt-5">
    <div class="col-md-12">
      <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-header p-0 border-bottom-0">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" 
              data-toggle="pill" 
              href="#list-inbound" 
              role="tab" 
              aria-controls="list-inbound" 
              aria-selected="true">List Inbound</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  
              data-toggle="pill" 
              href="#set-inbound" 
              role="tab" 
              aria-controls="set-inbound" 
              aria-selected="false">Set Inbound</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content" id="tabContent">
            <div class="tab-pane fade active show" 
            id="list-inbound" 
            role="tabpanel" 
            aria-labelledby="list-inbound-tab">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card card-info" style="height:420px;">
                    <div class="card-header">
                      <h3 class="card-title">Inbound List</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body p-0">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Created On</th>
                            <th>ETA</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Inbound 1</td>
                            <td>0923419ABC</td>
                            <td>09-09-2021</td>
                            <td>09-21-2021</td>
                            <td class="text-right py-0 align-middle">
                              <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>Inbound 2</td>
                            <td>7023419ABC</td>
                            <td>09-03-2021</td>
                            <td>09-25-2021</td>
                            <td class="text-right py-0 align-middle">
                              <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>Inbound 3</td>
                            <td>0903419ABC</td>
                            <td>09-10-2021</td>
                            <td>09-24-2021</td>
                            <td class="text-right py-0 align-middle">
                              <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-primary card-outline">
                      <div class="card-header">
                        <h3 class="card-title">
                          <i class="fas fa-truck-loading"></i>
                          Inbound Details
                        </h3>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-5 col-sm-3">
                            <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                              <a class="nav-link active" 
                              id="summary-details-tab" 
                              data-toggle="pill" 
                              href="#summary-details" 
                              role="tab" 
                              aria-controls="summary-details" 
                              aria-selected="true">Summary Details</a>

                              <a class="nav-link" 
                              id="container-tab" 
                              data-toggle="pill" 
                              href="#container" 
                              role="tab" 
                              aria-controls="container" 
                              aria-selected="false">Container</a>

                              <a class="nav-link" 
                              id="crates-tab" 
                              data-toggle="pill" 
                              href="#crates" 
                              role="tab" 
                              aria-controls="crates" 
                              aria-selected="false">Crates</a>

                              <a class="nav-link" 
                              id="items-tab" 
                              data-toggle="pill" 
                              href="#items" 
                              role="tab" 
                              aria-controls="items" 
                              aria-selected="false">Items</a>
                            </div>
                          </div>
                          <div class="col-7 col-sm-9">
                            <div class="tab-content" id="tabContent">
                              <div class="tab-pane text-left fade show active" 
                              id="summary-details" 
                              role="tabpanel" 
                              aria-labelledby="summary-details-tab">
                               summary details
                              </div>
                              <div class="tab-pane fade" 
                              id="container" 
                              role="tabpanel" 
                              aria-labelledby="container-tab">
                                container
                              </div>
                              <div class="tab-pane fade" 
                              id="crates" 
                              role="tabpanel" 
                              aria-labelledby="crates-tab">
                                crates
                              </div>
                              <div class="tab-pane fade" 
                              id="items" 
                              role="tabpanel" 
                              aria-labelledby="items-tab">
                                items
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.card -->
                    </div>
                    <!-- /.card -->
                  </div>
                </div>
            </div>
            <div class="tab-pane fade" 
            id="set-inbound" 
            role="tabpanel" 
            aria-labelledby="set-inbound-tab">
                Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
            </div>
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
