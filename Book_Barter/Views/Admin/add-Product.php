<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">Add Products</h4>
    <div class="row">
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-body">
            <form method="post" enctype="multipart/form-data" id="addprodform">
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Title</label>
                <div class="col-sm-10">
                  <input type="text" required class="form-control" id="title" name="title" placeholder="Title" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-email">Author</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <input type="text" required id="author" name="author" class="form-control" placeholder="Author" />
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-phone">Rating</label>
                <div class="col-sm-10">
                  <select class="form-select" name="rating" id="rating">
                    <option selected>Rating</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
                <div class="col-sm-10">
                  <textarea id="basic-default-message" name="description" required class="form-control" placeholder="Description"></textarea>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-message">Specification</label>
                <div class="col-sm-10">
                  <textarea id="basic-default-message" required class="form-control" placeholder="Specification"
                    aria-label="Hi, Do you have a moment to talk Joe?"
                    aria-describedby="basic-icon-default-message2"></textarea>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-message">Price</label>
                <div class="col-sm-10">
                <input type="number" required id="price" name="price" class="form-control" placeholder="Price" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-message">images</label>
                <div class="col-sm-10">
                <input class="form-control" type="file" id="productimage" name="productimage" />
                </div>
              </div>
              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <input type="submit" class="btn btn-primary" value="Add Product" name="addprod" id="addprod">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / Content -->
  <div class="content-backdrop fade"></div>
</div>
