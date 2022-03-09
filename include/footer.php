<?php
$sqlsmedya = "SELECT * FROM tblsmedya order by id asc ";
$smedyas = $db->query($sqlsmedya);

$sqlservice = "SELECT * FROM tblservice order by id asc ";
$services = $db->query($sqlservice);

$sqlsolution = "SELECT * FROM tblsolution order by id asc ";
$solutions = $db->query($sqlsolution);

?>


<div class="footer-top">
    <div class="container">
        <div class="row gy-12">
            <div class="col-lg-3 col-md-12 footer-info">
                <a href="<?php echo base_url_front() ?>" class="logo d-flex align-items-center">
                    <img src="<?php echo base_url() . $logo ?>" alt="<?php echo $genel['title'] ?>">
                </a>
                <?php echo $lang == "tr" ? $genel['description'] : $genel['descriptionE'] ?>

                <div class="social-links mt-3">
                    <?php while ($smedya = $smedyas->fetch_array()) { ?>
                        <a href="<?php echo $lang == "tr" ? $smedya['link'] : $smedya['linkE'] ?>"><i
                                    class="<?php echo $smedya['class'] ?>"></i></a>
                    <?php } ?>
                </div>
            </div>

            <div class="col-lg-3 col-12 footer-links">
                <h4><?php echo $lang == "tr" ? $servicepage['title'] : $servicepage['titleE'] ?></h4>
                <ul>
                    <?php while ($service = $services->fetch_array()) { ?>
                        <li><i class="bi bi-chevron-right"></i> <a
                                    href="<?php echo $lang == "tr" ? $service['link'] : $service['linkE'] ?>"><?php echo $lang == "tr" ? $service['title'] : $service['titleE'] ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <div class="col-lg-3 col-12 footer-links">
                <h4><?php echo $lang == "tr" ? "Çözümlerimiz" : "Solutions" ?></h4>
                <ul>
                    <?php while ($solution = $solutions->fetch_array()) { ?>
                        <li><i class="bi bi-chevron-right"></i> <a
                                    href="<?php echo $lang == "tr" ? $solution['link'] : $solution['linkE'] ?>"><?php echo $lang == "tr" ? $solution['title'] : $solution['titleE'] ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4><?php echo $lang == "tr" ? "Bizimle İletişime Geçin" : "Contact Us" ?></h4>
                <p>
                    <?php echo $lang == "tr" ? $ayar['address'] : $ayar['addressE'] ?> <br>
                    <strong><?php echo $lang == 'tr' ? "Telefon" : "Phone"; ?>
                        :</strong> <?php echo $lang == "tr" ? $ayar['phone'] : $ayar['phoneE'] ?><br>
                    <strong><?php echo $lang == 'tr' ? "Email " : "Mail"; ?>
                        :</strong> <?php echo $lang == "tr" ? $ayar['mail'] : $ayar['mailE'] ?><br>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="copyright">
        &copy; Copyright - <?php echo date("Y")?>
    </div>
</div>
