<?php
$sqlvalues = "SELECT * FROM tblvalues order by id asc ";
$values = $db->query($sqlvalues);

?>

<section id="values" class="values">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <p><?php echo $lang == "tr" ? $valuespage['title'] : $valuespage['titleE'] ?></p>
        </header>

        <div class="row">

            <?php while ($value = $values->fetch_array()) {
            $sira = 100; ?>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo $sira;?>">
                <div class="box">
                    <img src="<?php echo base_url() . $value['img']; ?>" class="img-fluid" alt="">
                    <h3><?php echo $lang == "tr" ? $value['title'] : $value['titleE'] ?></h3>
                    <?php echo $lang == "tr" ? kelimeAyirma($value['description'],15) : kelimeAyirma($value['descriptionE'],15) ?>
                </div>
            </div>
                <?php $sira = $sira + 100; } ?>

        </div>

    </div>

</section>
