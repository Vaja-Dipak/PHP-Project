<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <div class="row">
            <h5 class="col-10">Offers</h5>
            <div class="col-2 text-right">
                            <a class="btn btn-md btn-primary" href="addoffer">Add Offers</a>
                        </div>
            <div class="table-responsive mt-5">
              <table class=" table text-nowrap mb-0 align-middle" style="border: solid 1px;">
                <thead class="text-dark">
                  <tr style="background: #0000002b;">
                    <th>
                      <h6 class="fw-semibold mb-0">Offer Id</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Product Id</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Offer Start date</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Offer End date</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Offer Details</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Action</h6>
                    </th>

                  </tr>
                </thead>
                <tbody>
                <?php
                  
                  foreach($alloffer['Data'] as $key => $value) {
                    // echo "<pre>";
                    // print_r($value->role_id);
                    // echo "</pre>";
                  ?>
                  <tr>
                  <td>
                        <h6 class="fw-semibold mb-1">
                          <?php echo $value->of_id; ?>
                        </h6>
                      </td>
                      <td>
                        <h6 class="fw-semibold mb-1">
                          <?php echo $value->p_name; ?>
                        </h6>
                      </td>
                      <td>
                        <h6 class="fw-semibold mb-1">
                          <?php echo $value->of_startdate; ?>
                        </h6>
                      </td>
                      <td>
                        <h6 class="fw-semibold mb-1">
                          <?php echo $value->of_enddate; ?>
                        </h6>
                      </td>
                      <td>
                        <h6 class="fw-semibold mb-1">
                          <?php echo $value->of_detail; ?>
                        </h6>
                      </td>
                      
                    
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <a href="editoffers?of_id=<?php echo $value->of_id; ?>">
                          <span class="badge bg-primary rounded-3 fw-semibold">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                <path d="M16 5l3 3" />
                              </svg>
                          </span></a>
                        <a href="deleteoffers?of_id=<?php echo $value->of_id; ?>">
                          <span class="badge bg-danger rounded-3 fw-semibold">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 7l16 0" />
                                <path d="M10 11l0 6" />
                                <path d="M14 11l0 6" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                              </svg>
                          </span></a>
                      </div>
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