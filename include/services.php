<?php
$sqlservice = "SELECT * FROM tblservice order by id asc LIMIT 3 ";
$services = $db->query($sqlservice);

?>

<section id="services" class="services">

    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <p><?php echo $lang == "tr" ? $servicepage['title'] : $servicepage['titleE'] ?></p>
        </header>
        <div class="row gy-4">
            <?php while ($service = $services->fetch_array()) {
                $sira = 100; ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $sira; ?>">
                    <div class="service-box purple">
                        <i class="<?php echo $service['class'] . " icon"?>"></i>
                        <h3><?php echo $lang == "tr" ? $service['title'] : $service['titleE'] ?></h3>
                        <?php echo $lang == "tr" ? kelimeAyirma($service['description'], 15) : kelimeAyirma($service['descriptionE'], 15) ?>
                        <br>
                        <!--
                        <a href="#"
                           class="read-more"><span>Read More</span>
                            <i class="bi bi-arrow-right"></i></a> !-->
                    </div>
                </div>
                <?php $sira = $sira + 100;
            } ?>

        </div>

    </div>

</section>
