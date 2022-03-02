<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <p><?php echo $lang == "tr" ? $about['title'] : $about['titleE'] ?></p>
        </header>

        <div class="row gx-0">

            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                    <h3><?php echo $lang == "tr" ? $about['subTitle'] : $about['subTitleE'] ?></h3>
                    <?php echo $lang == "tr" ? kelimeAyirma($about['description'], 25) : kelimeAyirma($about['descriptionE'], 25) ?>
                    <div class="text-center text-lg-start">
                        <a href="#"
                           class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                            <span><?php echo $lang == "tr" ? "Daha fazlası için" : "Detay" ?></span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="<?php echo base_url() . $about['img']; ?>" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>