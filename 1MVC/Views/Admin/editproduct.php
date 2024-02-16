<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <h5 class="card-title fw-semibold mb-4">Edit Product</h5>
          <div class="row">
            <div class="col-8">
            <div class="card-body">
               
                <form method="post">
                    <div class="row">
                    <div class="col">
                    <label for="subcategoryid" class="input__label"><b>SubCategory Id</b></label>
                            <input type="text" placeholder="Enter Sub Category id"  class="form-control" disabled name="sc_id" value="<?php echo $editproduct['Data'][0]->sc_id ?>" id="">
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col">
                        <label for="productname" class="input__label"><b>Product Name</b></label>
                            <input type="text" placeholder="Enter Product Name" class="form-control" name="p_name" value="<?php echo $editproduct['Data'][0]->p_name ?>" id="">
                        </div>
                    </div>
                   
                    <div class="row mt-3">
                        <div class="col">
                        <label for="productprice" class="input__label"><b>Product Price</b></label>
                            <input type="tel" placeholder="Enter Product Price" class="form-control" name="p_price" value="<?php echo $editproduct['Data'][0]->p_price ?>" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                            <div class="col">
                            <label for="profile_pic" class="input__label"><b>profile_pic</b></label>
                                <input type="file" name="p_image" class="form-control">
                            </div>
                        </div>
                    <div class="row mt-3">
                        <div class="col">
                        <label for="productdes" class="input__label"><b>Product Description</b></label>
                            <input type="tel" placeholder="Enter Product Description" class="form-control" name="p_des" value="<?php echo $editproduct['Data'][0]->p_des ?>" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                        <label for="productdiscount" class="input__label"><b>Product Discount</b></label>
                            <input type="tel" placeholder="Enter Product Discount" class="form-control" name="p_discount" value="<?php echo $editproduct['Data'][0]->p_discount ?>" id="">
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