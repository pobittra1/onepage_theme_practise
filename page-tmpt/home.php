<?php
/* Template Name: Home page custome Template */
?>

<?php get_header() ?>
<!-- hero section start here -->
<div class="hero-sec text-light container-fluid text-uppercase text-white">
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Content Section -->
            <div class="col-md-6">
                <div class="content-area">
                    <h1 class="display-1 text-bold">The New Way</h1>
                    <h4>To manage your <br> small to enterprise business</h4>
                    <button class="btn text-white border-1 rounded-0 border-white mt-4 px-4 py-2">Learn More</button>
                </div>
            </div>
            <!-- Image Section -->
            <div class="col-md-6 text-center">
                <img src="./img/hero.png" alt="Hero Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>


<div class="row g-4 container m-auto my-5 text-center">
    <!-- Card 1 -->
    <div class="col-md-4 ">
        <div class="card p-4">
            <img src="<?php echo get_template_directory_uri() ?>/img/clock.png" class="card-img-top img-fluid" alt="Card Image 1">
            <div class="card-body">
                <h5 class="card-title">Metronic is time saver</h5>
                <p class="card-text"><?php echo limitString("Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id, perferendis. jjjjjjjjjjjjjjjjjj") ?></p>
            </div>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4">
        <div class="card p-4">
            <img src="<?php echo get_template_directory_uri() ?>/img/lightbulb.png" class="card-img-top img-fluid" alt="Card Image 2">
            <div class="card-body">
                <h5 class="card-title">created for all type devices</h5>
                <p class="card-text"><?php echo limitString("Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur qui earum recusandae.") ?></p>
            </div>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4">
        <div class="card p-4">
            <img src="<?php echo get_template_directory_uri() ?>/img/user.png" class="card-img-top img-fluid" alt="Card Image 3">
            <div class="card-body">
                <h5 class="card-title">great individual design</h5>
                <p class="card-text"><?php echo limitString("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, nobis.") ?></p>
            </div>
        </div>
    </div>
</div>
<!-- hero section end here -->
<?php get_footer() ?>