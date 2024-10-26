<?php
get_header();
?>
<!-- Content Container -->
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-12 col-xl-10">
            <div class="bg-white text-center p-4 p-xl-5 mx-auto shadow-sm rounded" style="max-width: 1340px;">

                <!-- Title -->
                <h1><?php the_title(); ?></h1>
                <!-- Copy -->
                <div class="mb-3">
                    <?php the_content(); ?>
                </div>
                <!-- Buttons -->
                <div>
                    <a href="https://www.uab.edu" class="btn btn-link">Link 1<i class="fas fa-arrow-right ms-1 small"
                            aria-hidden="true"></i></a>
                    <a href="https://www.uab.edu/2" class="btn btn-link">Link 2<i class="fas fa-arrow-right ms-1 small"
                            aria-hidden="true"></i></a>
                    <a href="https://www.uab.edu/3" class="btn btn-link">Link 3<i class="fas fa-arrow-right ms-1 small"
                            aria-hidden="true"></i></a>
                    <a href="https://www.uab.edu/4" class="btn btn-link">Link 4<i class="fas fa-arrow-right ms-1 small"
                            aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<main class="flex-shrink-0">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    }
    ?>
</main>
<?php
get_footer();
?>