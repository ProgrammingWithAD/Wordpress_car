<?php
/* Template Name: Home Template */
get_header();
?>

<div id="primary" <?php astra_primary_class(); ?>>
    <main id="main">
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <!-- <div class="ast-container">
                <div class="ast-row">
                    <div class="ast-width-50">
                        <div class="left-content">
                            <small>Lorem ipsum dolor sit amet consectetur.</small>
                            <h2 class="h1"><strong>Feel the heat with our car wheel</strong></h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, consectetur.</p>
                        </div>
                    </div>
                    <div class="ast-width-50">
                        <figure>
                            <img src="https://placeholder.com/500X400" style="width: 100%; height: 100%;" alt="">
                        </figure>
                    </div>
                </div>
            </div> -->

            <div class="carousel-container">
                <div class="carousel">
                    <div class="slide active">
                        <div class="hero">
                            <img src="http://carr.test/wp-content/uploads/2024/05/seltos-so.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="featured-cars-text">
                <h2>Our Best Featured Cars</h2>
            </div>


            <div class="card-container">
                <div class="card">
                    <img src="http://carr.test/wp-content/uploads/2024/05/seltos-pormance.png" alt="Kia Seltos">
                    <div class="card-body">
                        <h5 class="card-title">Kia Seltos</h5>
                        <p class="card-text">Experience luxury and performance like never before.</p>
                        <a href="/cars" class="btn">Explore</a>
                    </div>
                </div>

                <div class="card">
                    <img src="http://carr.test/wp-content/uploads/2024/05/sonata-turbo-highlights-closer-v.jpg" alt="Hyundai Sonata">
                    <div class="card-body">
                        <h5 class="card-title">Hyundai Sonata</h5>
                        <p class="card-text">Redefined elegance with cutting-edge technology.</p>
                        <a href="/cars" class="btn">Explore</a>
                    </div>
                </div>

                <div class="card">
                    <img src="http://carr.test/wp-content/uploads/2024/05/istockphoto-1137550850-612x612-1.jpg" alt="Toyota Camry">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Camry</h5>
                        <p class="card-text">Unmatched reliability meets unparalleled comfort.</p>
                        <a href="/cars" class="btn">Explore</a>
                    </div>
                </div>
            </div>

        </article>
    </main>
</div>

<?php
get_footer();
?>