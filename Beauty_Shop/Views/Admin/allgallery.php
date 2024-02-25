<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <div class="row">
            <h5 class="col-10"><b>Gallery</b></h5>
            <div class="col-2 text-right">
              <a class="btn btn-md btn-primary" href="addgallery">Add Image</a>
            </div>
            <div class="table-responsive mt-5">
              <table class=" table text-nowrap align-middle">
                <thead class="text-dark">
                  <?php
                  $col=0;
                  foreach ($galleryimages['Data'] as $key => $value) {
                      ?>
                      <td class="p-0 text-center pb-4"><img class="p-1 pb-2" width="320px" height="200px"
                          src="<?php echo $this->base_url . "images/".$value->g_path; ?>" alt="">
                        <br><a href="deletegallery?g_id=<?php echo $value->g_id; ?>">
                          <span class="badge bg-danger rounded-3 fw-semibold">
                            Delete
                          </span></a>
                      </td>
                      <?php
                      $col++;
                      if($col==3){ echo "</tr><tr>"; $col=0;} 
                    }
                    ?>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>