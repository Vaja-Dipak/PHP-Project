<!-- banner -->
    <!-- banner-slider -->
    <section class="diagonal-stripe-one inner-bg">
        <div class="container">
            <div class="ml-md-5 pl-md-5">
            </div>
        </div>
    </section>
    <!-- banner-slider -->
</div>
<!-- //banner -->
<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="home">Home</a>
        </li>
        <li class="breadcrumb-item">Makeup</li>
        <li class="breadcrumb-item active" aria-current="page">
            <a href="eyelinear">Eyelinear</a>
        </li>
    </ol>
</nav>
<!-- //breadcrumbs -->
<!-- single -->
<div class="single-w3l py-5">
    <div class="container py-xl-5 py-lg-3">
        <div class="row inner_sec_info pt-md-4">
            <!-- left side -->
            <?php
            $card = 0;
            foreach ($eyelineardata['Data'] as $key => $value) {
                ?>
                <div class="col-lg-4">
                    <!-- blog grid -->
                    <div class="full_width_blog_grid">
                        <div class="card">
                            <div class="card-header p-0">
                                <img class="card-img-bottom"
                                    src="<?php echo $this->base_url . "images/" . $value->p_image; ?>" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <?php echo $value->p_des ?><br>
                                MRP:₹
                                <?php echo $value->p_price ?>
                                <div class="text-center"><br>
                                <a href="addcart?productid=<?php echo $value->p_id; ?>"><button type="button" class="btn"
                                            style="width:48%">Add To Cart</button></a>
                                    <a href="buynow"> <button type="button" class="btn" name="btn-buynow" style="background: #e83e8c; color:white;width:48%">Buy
                                        Now</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //blog grid -->
                </div>
                <!-- blog grid -->
                <?php
                $card++;
                if ($card == 3) { ?>
                </div>
                <div class="row inner_sec_info pt-md-4">
                    <?php $card = 0;
                }
            }
            ?>
                </div>
            <!-- //single -->
    </div>
</div>