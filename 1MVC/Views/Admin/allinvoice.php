<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <div class="row">
            <h5 class="col-10">Invoice</h5>
            <div class="col-2 text-right">
              <!-- <a class="btn btn-md btn-primary" href="addinvoice">Add Invoice</a> -->
            </div>
            <div class="table-responsive mt-5">
              <table class=" table text-nowrap mb-0 align-middle" style="border: solid 1px;">
                <thead class="text-dark">
                  <tr style="background: #0000002b;">
                    <th>
                      <h6 class="fw-semibold mb-0">Invoice Id</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Product Id</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Customer Name</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Invoice Date</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Amount</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Action</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php //$index = 1;
                  if ($allinvoice['Code'] == 1) {
                    foreach ($allinvoice['Data'] as $key => $value) {
                      ?>
                      <tr>
                        <td>
                          <h6 class="fw-semibold mb-1">
                            <?php echo $value->i_id; ?>
                          </h6>
                        </td> 
                        <td>
                          <h6 class="fw-semibold mb-1">
                            <?php echo $value->p_name; ?>
                          </h6>
                        </td>
                        <td>
                          <h6 class="fw-semibold mb-1">
                            <?php echo $value->username; ?>
                          </h6>
                        </td>
                        <td>
                          <h6 class="fw-semibold mb-1">
                            <?php echo $value->o_date; ?>
                          </h6>
                        </td>
                        <td>
                          <h6 class="fw-semibold mb-1">
                            <?php echo $value->Amount; ?>
                          </h6>
                        </td>
                        <td>
                          <div class="d-flex align-items-center gap-2">
                            <a href="editinvoice?i_id=<?php echo $value->i_id; ?>">
                              <span class="badge bg-primary rounded-3 fw-semibold">
                                Edit
                              </span></a>
                            <a href="downloadinvoice?i_id=<?php echo $value->i_id; ?>">
                              <span class="badge bg-danger rounded-3 fw-semibold">
                                Download
                              </span></a>
                            <a href="deleteinvoice?i_id=<?php echo $value->i_id; ?>">
                              <span class="badge bg-success rounded-3 fw-semibold">
                                Delete
                              </span></a>
                          </div>
                        </td>
                      </tr>

                      <?php
                    }
                  } else { ?>
                    <tr>
                      <td>
                        <h6 class="fw-semibold mb-1">No Data Found</h6>
                      </td>
                    </tr>
                  <?php } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>