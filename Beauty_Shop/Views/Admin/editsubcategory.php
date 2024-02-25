<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <h5 class="card-title fw-semibold mb-4">Edit Category</h5>
          <div class="row">
            <div class="col-8">
              <div class="card-body">

                <form method="post">
                  <div class="row">
                    <div class="col">
                      <label for="subcategoryid" class="input__label"><b>SubCategory Id</b></label>
                      <input type="text" placeholder="Enter Sub Category Id" class="form-control" disabled name="sc_id"
                        value="<?php echo $editsubcategory['Data'][0]->sc_id ?>" id="">
                    </div>
                  </div>

                  <div class="row mt-3">
                    <div class="col">
                      <label for="categoryid" class="input__label"><b>Category Id</b></label>
                      <input type="text" placeholder="Enter Category Id" class="form-control" name="cat_id"
                        value="<?php echo $editsubcategory['Data'][0]->cat_id ?>" id="">
                    </div>
                  </div>

                  <div class="row mt-3">
                    <div class="col">
                      <label for="subcategoryname" class="input__label"><b>SubCategory Name</b></label>
                      <input type="tel" placeholder="Enter Sub Category " class="form-control" name="sc_name"
                        value="<?php echo $editsubcategory['Data'][0]->sc_name ?>" id="">
                    </div>
                  </div>

                  <div class="row mt-3">
                    <div class="col text-center">
                      <input type="submit" class="btn btn-primary" value="Update" name="btn-update" id="">
                      <input type="reset" class="btn btn-danger" name="" id="">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>