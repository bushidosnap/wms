<template>
  <div class="row mt-5">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Container Section</div>
          <div class="card-body">
            <section class="content">
              <div class="row">
                <div class="col-md-6">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Container</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="inputName">Container Name</label>
                              <input type="text" id="inputName" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="inputName">Container Code</label>
                            <input type="text" id="inputName" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="inputDescription">Container Description</label>
                          <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="inputStatus">Status</label>
                        <select id="inputStatus" class="form-control custom-select">
                          <option selected disabled>Select one</option>
                          <option>On Hold</option>
                          <option>Canceled</option>
                          <option>Success</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                      <input type="submit" value="Create Container" class="btn btn-success float-right">
                      </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card card-secondary" style="height:420px;">
                    <div class="card-header">
                      <h3 class="card-title">Container List</h3>

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
                            <th>Container Name</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Functional-requirements.docx</td>
                            <td class="text-right py-0 align-middle">
                              <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>UAT.pdf</td>
                            <td class="text-right py-0 align-middle">
                              <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>Email-from-flatbal.mln</td>
                            <td class="text-right py-0 align-middle">
                              <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            <br><br>
              <div class="row">
                <div class="col-md-12">
                  <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">Container Details</h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body p-0">
                      <div class="row pt-3 pl-3">
                        <div class="col-md-8">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="text-muted">
                                <p class="text-sm">Container Name
                                  <b class="d-block">Deveint Inc</b>
                                </p>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="text-muted">
                                <p class="text-sm">Container Code
                                  <b class="d-block">C123BN456</b>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="text-muted">
                                <p class="text-sm">Container Description
                                  <b class="d-block">Raw denim you probably haven't heard of them jean shorts Austin. 
                                    Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. 
                                    Cosby sweater eu banh mi, qui irure terr.</b>
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="row">
                            <div class="col-md-10">
                              <div class="info-box bg-light">
                                <div class="info-box-content">
                                  <span class="info-box-text text-center text-muted">Total Crates</span>
                                  <span class="info-box-number text-center text-muted mb-0">20</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-10">
                              <div class="info-box bg-light">
                                <div class="info-box-content">
                                  <span class="info-box-text text-center text-muted">Total Items per Crate</span>
                                  <span class="info-box-number text-center text-muted mb-0">200</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">            
                            <div class="col-md-10">
                              <div class="info-box bg-light">
                                <div class="info-box-content">
                                  <span class="info-box-text text-center text-muted">Total Items in Container</span>
                                  <span class="info-box-number text-center text-muted mb-0">20000</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
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
