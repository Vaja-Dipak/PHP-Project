<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <!-- Total Revenue -->
      <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
        <div class="card">
          <div class="row row-bordered g-0">

          <div class="col-md-3">
          <div class="card-header d-flex align-items-center justify-content-between pb-0">
              <div class="card-title mb-0">
                <h5 class="m-0 me-2">Order Statistics</h5>
                <small class="text-muted">42.82k Total Sales</small>
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                  <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                  <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                  <a class="dropdown-item" href="javascript:void(0);">Share</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex flex-column align-items-center gap-1">
                  <h2 class="mb-2">8,258</h2>
                  <span>Total Orders</span>
                </div>
                <div id="orderStatisticsChart"></div>
              </div>
              <ul class="p-0 m-0">
                <li class="d-flex mb-4 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-mobile-alt"></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Biographies</h6>
                      <small class="text-muted">Books</small>
                    </div>
                    <div class="user-progress">
                      <small class="fw-medium">82.5k</small>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-4 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Technologies</h6>
                      <small class="text-muted">Books</small>
                    </div>
                    <div class="user-progress">
                      <small class="fw-medium">23.8k</small>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-4 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">History</h6>
                      <small class="text-muted">Books</small>
                    </div>
                    <div class="user-progress">
                      <small class="fw-medium">849k</small>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>

            <div class="col-md-6">
              <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
              <div id="totalRevenueChart" class="px-2 pb-5"></div>
            </div>
            <div class="col-md-3">
              <div class="card-body">
                <div class="text-center">
                  <div class="dropdown">
                    <button class="btn btn-sm btn-outline-primary" type="button" id="growthReportId"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      2022
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                      <!-- <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                <a class="dropdown-item" href="javascript:void(0);">2019</a> -->
                    </div>
                  </div>
                </div>
              </div>
              <div id="growthChart"></div>
              <div class="text-center fw-medium pt-3 mb-2">62% Company Growth</div>

              <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                <div class="d-flex">
                  <div class="me-2">
                    <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
                  </div>
                  <div class="d-flex flex-column">
                    <small>2022</small>
                    <h6 class="mb-0">$32.5k</h6>
                  </div>
                </div>
                <div class="d-flex">
                  <div class="me-2">
                    <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                  </div>
                  <div class="d-flex flex-column">
                    <small>2021</small>
                    <h6 class="mb-0">$41.2k</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Total Revenue -->
      <!-- Order Statistics -->
      <!-- <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                  <div class="card h-100">

                  </div>
                </div> -->
      <!--/ Order Statistics -->
    </div>
  </div>
  <!-- / Content -->