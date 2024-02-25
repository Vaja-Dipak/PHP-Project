<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <div class="row">
            <h5 class="col-10">Order</h5>
            <div class="table-responsive mt-5">
              <table class=" table text-nowrap mb-0 text-center align-middle" style="border: solid 1px;">
                <thead class="text-dark">
                  <tr style="background: #0000002b;">
                    <th>
                      <h6 class="fw-semibold mb-0">Order Id</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Customer Name</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Product Name</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Order Date</h6>
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
                  <?php
                  foreach ($allorder['Data'] as $key => $value) {
                    ?>
                    <tr>
                      <td>
                        <h6 class="fw-semibold mb-1">
                          <?php echo $value->o_id; ?>
                        </h6>
                      </td>
                      <td>
                        <h6 class="fw-semibold mb-1">
                          <?php echo $value->username; ?>
                        </h6>
                      </td>
                      <td>
                        <h6 class="fw-semibold mb-1 text-wrap" style="width: 90%;">
                          <?php echo $value->p_name; ?>
                        </h6>
                      </td>
                      <td>
                        <h6 class="fw-semibold mb-1">
                          <?php echo $value->orderdate; ?>
                        </h6>
                      </td>
                      <td>
                        <h6 class="fw-semibold mb-1">
                          <?php echo $value->totalamount; ?>
                        </h6>
                      </td>
                      <td>
                        <?php if ($value->status == "Pending") { ?>
                          <div class="d-flex align-items-center gap-2">
                            <a href="acceptorder?o_id=<?php echo $value->o_id; ?>" class="btn btn-primary">Accept</a>
                            <a href="deleteorder?o_id=<?php echo $value->o_id; ?>" class="btn btn-danger">Reject</a>
                          </div>
                        <?php } else { ?>
                          <h6 class="fw-semibold mb-1">
                            <?php echo $value->status;
                        } ?>
                        </h6>
                      </td>
                    </tr>
                  <?php //$index++;
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>