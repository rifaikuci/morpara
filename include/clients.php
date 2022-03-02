<?php
$sqlclients = "SELECT * FROM tblclients order by id asc ";
$clientss = $db->query($sqlclients);

?>

<section id="clients" class="clients">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <p><?php echo $lang == "tr" ? "Referanslarımız" : "Our Clients" ?></p>
        </header>

        <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
                <?php while ($clients = $clientss->fetch_array()) { ?>

                    <div class="swiper-slide"><img src="<?php echo base_url() . $clients['img']; ?>"
                                                   class="img-fluid"
                                                   alt="<?php echo $lang == "tr" ? $clients['title'] : $clients['titleE'] ?>">
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

</section>
