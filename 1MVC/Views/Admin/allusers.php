<div class="container-fluid">
  <!--  Row 1 -->
  <div class="row">

    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <h5 class="card-title fw-semibold mb-4">All Users</h5>
          <div class="table-responsive">
            <table class="table text-nowrap mb-0 align-middle">
              <thead class="text-dark fs-4">
                <tr>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Id</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">User Name</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Email</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Gender</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Mobile</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">City</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Address</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Action</h6>
                  </th>
                </tr>
              </thead>
              <?php
              foreach ($allUsers['Data'] as $key => $value) {
                ?>
                <tbody>
                  <tr>
                    <td>
                      <h6 class="fw-semibold mb-1">
                        <?php echo $value->c_id; ?>
                      </h6>
                      <!-- <span class="fw-normal">Web Designer</span>                           -->
                    </td>
                    <td>
                      <h6 class="fw-semibold mb-1">
                        <?php echo $value->username; ?>
                      </h6>
                      <!-- <span class="fw-normal">Web Designer</span>                           -->
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">
                        <?php echo $value->email; ?>
                      </p>
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">
                        <?php echo $value->gender; ?>
                      </p>
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">
                        <?php echo $value->mobile; ?>
                      </p>
                      <!-- <h6 class="fw-semibold mb-0 fs-4">$3.9</h6> -->
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">
                        <?php echo $value->city; ?>
                      </p>
                      <!-- <h6 class="fw-semibold mb-0 fs-4">$3.9</h6> -->
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">
                        <?php echo $value->address; ?>
                      </p>
                      <!-- <h6 class="fw-semibold mb-0 fs-4">$3.9</h6> -->
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <?php if ($value->role_id != 1) { ?>
                          <a href="edituser?c_id=<?php echo $value->c_id; ?>">
                            <span class="badge bg-primary rounded-3 fw-semibold">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                <path d="M16 5l3 3" />
                              </svg></span>
                          </a>
                          <a href="deleteuser?c_id=<?php echo $value->c_id; ?>">
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
                            </span>
                          </a>
                        <?php } ?>
                      </div>
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