<?php
$sqlsolution = "SELECT * FROM tblsolution order by id asc ";
$solutions = $db->query($sqlsolution);

?>


<div class="row feature-icons" data-aos="fade-up">
    <h3><?php echo $lang == "tr" ? $solutionpage['title'] : $solutionpage['titleE'] ?> </h3>

    <div class="row">

        <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
            <img src="<?php echo base_url() . $solutionpage['img']; ?>" class="img-fluid p-4" alt="">
        </div>

        <div class="col-xl-8 d-flex content">
            <div class="row align-self-center gy-4">


                <?php while ($solution = $solutions->fetch_array()) {
                    $sira = 100; ?>
                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="<?php echo $sira;?>">
                        <i class="<?php echo  $solution['class'] ?>"></i>
                        <div>
                            <h4><?php echo $lang == "tr" ? $solution['title'] : $solution['titleE'] ?></h4>
                            <?php echo $lang == "tr" ? $solution['description'] : $solution['descriptionE'] ?>
                        </div>
                    </div>
                    <?php $sira = $sira + 100; } ?>

            </div>
        </div>

    </div>

</div>