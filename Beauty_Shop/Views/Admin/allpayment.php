<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <div class="row">
            <h5 class="col-10">Payment</h5>
            <div class="table-responsive mt-5">
              <table class=" table text-nowrap mb-0 align-middle" style="border: solid 1px;">
                <thead class="text-dark">
                  <tr style="background: #0000002b;">
                    <th>
                      <h6 class="fw-semibold mb-0">No.</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Payment Id</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Customer Id</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Oredr Id</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Amount</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Payment Date</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Payment Type </h6>
                    </th>


                  </tr>
                </thead>
                <tbody>

                  <?php $index = 1;
                  foreach ($allpayment['Data'] as $key => $value) {
                    ?>

                    <tr>
                      <td>
                        <h6 class="fw-semibold mb-1">
                          <?php echo $index; ?>
                        </h6>
                      </td>
                      <td>
                        <h6 class="fw-semibold mb-1">
                          <?php echo $value->payment_id; ?>
                        </h6>
                      </td>
                      <td>
                        <h6 class="mb-1 fw-semibold">
                          <?php echo $value->username; ?>
                        </h6>
                      </td>
                      <td>
                        <h6 class="mb-1 fw-semibold">
                          <?php echo $value->product; ?>
                        </h6>
                      </td>
                      <td>
                        <h6 class="mb-1 fw-semibold">
                          <?php echo $value->pay_amount; ?>
                        </h6>
                      </td>
                      <td>
                        <h6 class="mb-1 fw-semibold">
                          <?php echo $value->pay_date; ?>
                        </h6>
                      </td>
                      <td>
                        <h6 class="mb-1 fw-semibold">
                          <?php echo $value->pay_type; ?>
                        </h6>
                      </td>
                    </tr>
                    <?php $index++;
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>