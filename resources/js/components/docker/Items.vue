<template>
  <div class="row mt-5">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Item Section</div>
        <div class="card-body">
          <section class="content">
            <div class="row">
              <div class="col-md-6">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Item</h3>
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
                            <label for="inputName">Item Name</label>
                            <input type="text" id="inputName" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputName">Item Code</label>
                          <input type="text" id="inputName" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Item Description</label>
                        <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="image">Image</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <input type="submit" value="Create Item" class="btn btn-success float-right">
                    </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card card-secondary" style="height:420px;">
                  <div class="card-header">
                    <h3 class="card-title">Item List</h3>

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
                          <th>Item Name</th>
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
                    <h3 class="card-title">Item Details</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="row pt-3 pl-3">
                      <div class="col-md-10">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="text-muted">
                              <p class="text-sm">Item Name
                                <b class="d-block">Deveint Item</b>
                              </p>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="text-muted">
                              <p class="text-sm">Item Code
                                <b class="d-block">5123BN456C</b>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="text-muted">
                              <p class="text-sm">Item Description
                                <b class="d-block">Raw denim you probably haven't heard of them jean shorts Austin. 
                                  Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. 
                                  Cosby sweater eu banh mi, qui irure terr.</b>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2 product-image-thumbs pb-5">
                        <div class="product-image-thumb"><img src="images/img.jpg" alt="Product Image"></div>
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
