<style>
    img {
        width: 400px;
        /* Adjust the width as needed */
        height: 225px;
        /* Adjust the height as needed */
        object-fit: cover;
        /* Maintain aspect ratio and cover container */
        border-radius: 5px;
        /* Optional: add border radius for rounded corners */
    }
</style>

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
        <li class="breadcrumb-item">Gallery</li>
    </ol>

</nav>
<!-- //breadcrumbs -->
<!-- single -->
<div class="single-w3l">
    <div class="container py-xl-5 py-lg-3">
        <div class="row inner_sec_info pt-md-4">
            <!-- left side -->
            <?php
            $card = 0;
            foreach ($galleryimages['Data'] as $key => $value) {
                ?>

                <div class="col-lg-3">
                    <!-- blog grid -->
                    <div class="full_width_blog_grid">
                        <div class="card">
                            <div class="card-header p-0">

                                <img class="card-img-bottom"style="height:225px"
                                    src="<?php echo $this->base_url . "images/" . $value->g_path; ?>" alt="Card image cap">

                            </div>
                            <!-- <div class="card-body">

                                

                                <div class="text-center"><br><br>
                                    <a href="addcart?productid=<?php echo $value->g_id; ?>"><button type="button" class="btn"
                                            style="width:48%">Add To Cart</button></a>
                                    <button type="button" class="btn" style="background: #e83e8c; color:white;width:48%">Buy
                                        Now</button>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- //blog grid -->
                </div>
                <!-- blog grid -->
                <?php
                $card++;
                if ($card == 4) { ?>
                </div>
                <div class="row inner_sec_info pt-md-4">
                    <?php $card = 0;
                }
            }
            ?>
            <!-- //single -->