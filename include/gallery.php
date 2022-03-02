<?php
$sqlnews = "SELECT * FROM tblnews order by id desc ";
$news = $db->query($sqlnews);

?>

<section id="portfolio" class="portfolio">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <p><?php echo $lang == "tr" ? "Bizden Haberler" : "News From Us" ?></p>
        </header>
        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <?php while ($new = $news->fetch_array()) { ?>
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <a href="#">
                        <div class="portfolio-wrap">
                            <img src="<?php echo base_url() . $new['img']; ?>" class="img-fluid"
                                 alt="<?php echo $lang == "tr" ? $new['title'] : $new['titleE'] ?>">
                            <div class="portfolio-info">
                                <h4><?php echo $lang == "tr" ? $new['title'] : $new['titleE'] ?></h4>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>

        </div>

    </div>

</section>
