<div class="container-fluid pt-5">
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="row">
                        <h5 class="col-10">Product</h5>
                        <div class="col-2 text-right">
                            <a class="btn btn-md btn-primary" href="addproduct">Add Product</a>
                        </div>

                        <form action="">
                            <div class="row">
                                <div class="col-3 form-outline" style="margin-right: -72px;" data-mdb-input-init>
                                    <input type="search" name="searchtxt" id="form1" class="form-control"
                                        style="border: solid 1px #0000004f;" required placeholder="Search" />
                                </div>
                                <div class="col-1">
                                    <button type="submit" name="srch" class="btn btn-primary" data-mdb-ripple-init>
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="col-12">
                            <a href="product" class="btn  my-3 btn-primary">Show All Product</a>
                        </div>

                        <div class="table-responsive">
                            <table class=" table text-nowrap mb-0 align-middle" style="border: solid 1px;">
                                <thead class="text-dark">
                                    <tr style="text-align:middel;vertical-align: middle;text-align: center;background: #0000002b;">
                                        <th>
                                            <h6 class="fw-semibold mb-0">Product <br> Id</h6>
                                        </th>
                                        <th>
                                            <h6 class="fw-semibold mb-0">sub category <br> Id</h6>
                                        </th>
                                        <th>
                                            <h6 class="fw-semibold mb-0">Product Name</h6>
                                        </th>
                                        <th>
                                            <h6 class="fw-semibold mb-0">Product <br> Price</h6>
                                        </th>
                                        <th>
                                            <h6 class="fw-semibold mb-0">Discount</h6>
                                        </th>
                                        <th>
                                            <h6 class="fw-semibold mb-0">Product image</h6>
                                        </th>
                                        <th>
                                            <h6 class="fw-semibold mb-0">Product Description</h6>
                                        </th>
                                        <th>
                                            <h6 class="fw-semibold mb-0">Action</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $index = 1;
                                    if ($allproduct['Data'] != 0) {
                                        foreach ($allproduct['Data'] as $key => $value) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <h6 class="fw-semibold mb-1">
                                                        <?php echo $index; ?>
                                                    </h6>
                                                </td>
                                                <td style="width: 13%;" class="text-wrap">
                                                    <h6 class="fw-semibold mb-1">
                                                        <?php echo $value->sc_name; ?>
                                                    </h6>

                                                </td>
                                                <td style="width: 15%;" class="text-wrap">
                                                    <h6 class="fw-semibold mb-1">
                                                        <?php echo $value->p_name; ?>
                                                    </h6>

                                                </td>
                                                <td>
                                                    <h6 class="fw-semibold mb-1">
                                                        <?php echo $value->p_price; ?>
                                                    </h6>

                                                </td>
                                                <td>
                                                    <h6 class="fw-semibold mb-1">
                                                        <?php echo $value->p_discount . " %"; ?>
                                                    </h6>

                                                </td>
                                                <td>
                                                    <!-- <h6 class="fw-semibold mb-1">
                                                    <?php //echo $value->p_image;            ?>
                                                    </h6> -->
                                                    <img width="100px"
                                                        src="<?php echo $this->base_url . "images/" . $value->p_image; ?>"
                                                        alt="">

                                                </td>
                                                <td>
                                                    <h6 class="fw-semibold mb-1 text-wrap">
                                                        <?php echo $value->p_des; ?>
                                                    </h6>

                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <a href="editproduct?p_id=<?php echo $value->p_id; ?>">
                                                            <span class="badge bg-primary rounded-3 fw-semibold">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="icon icon-tabler icon-tabler-edit" width="24"
                                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                    <path
                                                                        d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                                    <path
                                                                        d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                                    <path d="M16 5l3 3" />
                                                                </svg>

                                                            </span></a>
                                                        <a href="deleteproduct?p_id=<?php echo $value->p_id; ?>">
                                                            <span class="badge bg-danger rounded-3 fw-semibold">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="icon icon-tabler icon-tabler-trash" width="24"
                                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round">
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
                                            <?php
                                            $index++;
                                        }
                                    } else { ?>
                                        <tr>
                                            <th colspan="8" style="text-align:center; font-size:20px; padding:10px ">No Data
                                                Found</th>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>