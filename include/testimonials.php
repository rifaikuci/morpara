<?php
$sqltestimonials = "SELECT * FROM tbltestimonials order by id desc ";
$testimonialss = $db->query($sqltestimonials);

?>

<section id="testimonials" class="testimonials">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <p><?php echo $lang == "tr" ? "Sizden Gelenler" : "What they are saying about us" ?></p>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper">

                <?php while ($testimonials = $testimonialss->fetch_array()) { ?>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <?php $rating = $lang == "tr" ? $testimonials['rating'] : $testimonials['ratingE'];
                                for ($i = 0; $i < $rating; $i++) { ?>
                                    <i class="bi bi-star-fill"></i>
                                <?php } ?>
                            </div>
                            <?php echo $lang == "tr" ? $testimonials['comment'] : $testimonials['commentE'] ?>
                            <h3><?php echo $lang == "tr" ? $testimonials['name'] : $testimonials['nameE'] ?></h3>
                            <h4><?php echo $lang == "tr" ? $testimonials['job'] : $testimonials['jobE'] ?></h4>
                        </div>
                    </div>
                <?php } ?>

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section>
