<?php
$sqlfeatures = "SELECT * FROM tblfeatures order by id desc ";
$items = $db->query($sqlfeatures);

?>




        <header class="section-header">
            <h2>Features</h2>
            <p>Laboriosam et omnis fuga quis dolor direda fara</p>
        </header>

        <div class="row">

            <div class="col-lg-6">
                <img src="<?php echo base_url(). $feature['img']; ?>" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                <div class="row align-self-center gy-4">
                    <?php while ($item = $items->fetch_array()) { $sira = 200; ?>
                    <div class="col-md-6" data-aos="zoom-out" data-aos-delay="<?php echo $sira; ?>">
                        <div class="feature-box d-flex align-items-center">
                            <i class="<?php echo $feature['class']?>"></i>
                            <h3><?php echo $lang == "tr" ? $item['title'] : $item['titleE'] ?></h3>
                        </div>
                    </div>
                    <?php  $sira = $sira + 100; } ?>


                </div>
            </div>

        </div> <!-- / row -->



