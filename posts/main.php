<?php


$sqlpostss = "SELECT * FROM tblposts order by id desc";
$postss = $db->query($sqlpostss);


$sqlservice = "SELECT * FROM tblservice order by id asc  LIMIT 5";
$services = $db->query($sqlservice);


$sqlsolution = "SELECT * FROM tblsolution order by id asc  LIMIT 5";
$solutions = $db->query($sqlsolution);
?>

<main id="main">

    <section class="breadcrumbs">
        <div class="container" style="padding: 20px">

        </div>
    </section>

    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p><?php echo $lang == "tr" ? "Duyurular" : "Announcements" ?></p>

            </header>

            <div class="row">

                <div class="col-lg-7 entries">
                    <?php while ($posts = $postss->fetch_array()) { ?>
                        <article class="entry">


                            <div class="entry-img">
                                <img src="<?php echo base_url() . $posts['img']; ?>" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="<?php echo $lang == "tr" ? $posts['link'] : $posts['linkE'] ?>"><?php echo $lang == "tr" ? $posts['title'] : $posts['titleE'] ?></a>
                            </h2>

                            <div class="entry-meta">
                                <ul>

                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                                        <time datetime="<?php echo tarih($posts['date']) ?>"><?php echo tarih($posts['date']) ?></time>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <?php echo $lang == "tr" ? kelimeAyirma( $posts['description'], 20 ) : kelimeAyirma( $posts['descriptionE'], 20) ?>
                                <div class="read-more">
                                    <a href="<?php echo $lang == "tr" ? $posts['link'] : $posts['linkE'] ?>">
                                        <?php echo $lang == "tr" ? "Daha Fazlası için" : "Read More" ?>
                                    </a>
                                </div>
                            </div>

                        </article>
                    <?php } ?>

                </div>

                <div class="col-lg-5">

                    <div class="sidebar">

                        <h3 class="sidebar-title"><?php echo $lang == "tr" ? "Servislerimiz" : "Services" ?></h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <?php while ($service = $services->fetch_array()) { ?>
                                    <li>
                                        <a href="<?php echo $lang == "tr" ? $service['link'] : $service['linkE'] ?>"><?php echo $lang == "tr" ? $service['tiStle'] : $service['titleE'] ?></a>
                                    </li>

                                    <hr>
                                <?php } ?>
                            </ul>
                        </div>

                    </div>

                    <div class="sidebar">

                        <h3 class="sidebar-title"><?php echo $lang == "tr" ? "Çözümlerimiz" : "Solutions" ?></h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <?php while ($solution = $solutions->fetch_array()) { ?>
                                    <li>
                                        <a href="<?php echo $lang == "tr" ? $solution['link'] : $solution['linkE'] ?>"><?php echo $lang == "tr" ? $solution['title'] : $solution['titleE'] ?></a>
                                    </li>

                                    <hr>
                                <?php } ?>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>