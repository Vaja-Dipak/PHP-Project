<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <h5 class="card-title fw-semibold mb-4">Edit Offer</h5>
          <div class="row">
            <div class="col-8">
            <div class="card-body">
               
                <form method="post">
                    <div class="row">
                    <div class="col">
                    <label for="offerid" class="input__label"><b>Offer Id</b></label>
                            <input type="text" placeholder="Enter Offer Id" disabled class="form-control" disabled name="of_id" value="<?php echo $editoffers['Data'][0]->of_id ?>" id="">
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col">
                        <label for="productid" class="input__label"><b>Product Id</b></label>
                            <input type="text" placeholder="Enter Product Id" class="form-control" name="p_id" value="<?php echo $editoffers['Data'][0]->p_id ?>" id="">
                        </div>
                    </div>
                   
                    <div class="row mt-3">
                        <div class="col">
                        <label for="offerstartdate" class="input__label"><b>Offer Start Date</b></label>
                            <input type="date" placeholder="Enter Offer Start Date " class="form-control" name="of_startdate" value="<?php echo $editoffers['Data'][0]->of_startdate ?>" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                        <label for="offerenddate" class="input__label"><b>Offer End Date</b></label>
                            <input type="date" placeholder="Enter Offer End Date " class="form-control" name="of_enddate" value="<?php echo $editoffers['Data'][0]->of_enddate ?>" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                        <label for="offerdetail" class="input__label"><b>Offer Detail</b></label>
                            <input type="tel" placeholder="Enter Offer Detail " class="form-control" name="of_detail" value="<?php echo $editoffers['Data'][0]->of_detail ?>" id="">
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