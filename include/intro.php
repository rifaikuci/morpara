<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up"><?php echo $lang == "tr" ? $intro['title'] : $intro['titleE'] ?></h1>
                <h2 data-aos="fade-up"
                    data-aos-delay="400"><?php echo $lang == "tr" ? $intro['subTitle'] : $intro['subTitleE'] ?></h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <?php if (($intro['btnTitle'] || $intro['btnTitleE']) && ($intro['link'] || $intro['linkE'])) { ?>
                        <div class="text-center text-lg-start">
                            <a href="<?php echo $lang == "tr" ? $intro['link'] : $intro['linkE'] ?>"
                               class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span><?php echo $lang == "tr" ? $intro['btnTitle'] : $intro['btnTitleE'] ?></span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="<?php echo base_url(). $intro['img']; ?>" class="img-fluid"
                     alt="<?php echo $lang == "tr" ? $intro['btnTitle'] : $intro['btnTitleE'] ?>">
            </div>
        </div>
    </div>
</section>