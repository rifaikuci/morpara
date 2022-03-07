<?php
$sqlnewss = "SELECT * FROM tblnews order by id desc";
$newss = $db->query($sqlnewss);

$sqlposts = "SELECT * FROM tblposts order by id desc  LIMIT 5";
$postss = $db->query($sqlposts);

$sqlfeatures = "SELECT * FROM tblfeatures order by id desc  LIMIT 5";
$features = $db->query($sqlfeatures);

?>

<main id="main">

    <section class="breadcrumbs">
        <div class="container" style="padding: 20px">

        </div>
    </section>

    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p><?php echo $lang == "tr" ? "Bizden Haberler" : "News" ?></p>

            </header>

            <div class="row">

                <div class="col-lg-7 entries">
                    <?php while ($news = $newss->fetch_array()) { ?>
                        <article class="entry">


                            <div class="entry-img">
                                <img src="<?php echo base_url() . $news['img']; ?>" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="<?php echo $lang == "tr" ? $news['link'] : $news['linkE'] ?>"><?php echo $lang == "tr" ? $news['title'] : $news['titleE'] ?></a>
                            </h2>

                            <div class="entry-meta">
                                <ul>

                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                                        <time datetime="<?php echo tarih($news['date']) ?>"><?php echo tarih($news['date']) ?></time>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <?php echo $lang == "tr" ? kelimeAyirma( $news['description'], 20 ) : kelimeAyirma( $news['descriptionE'], 20) ?>
                                <div class="read-more">
                                    <a href="<?php echo $lang == "tr" ? $news['link'] : $news['linkE'] ?>">
                                        <?php echo $lang == "tr" ? "Daha Fazlası için" : "Read More" ?>
                                    </a>
                                </div>
                            </div>

                        </article>
                    <?php } ?>

                </div>

                <div class="col-lg-5">

                    <div class="sidebar">

                        <h3 class="sidebar-title"><?php echo $lang == "tr" ? "Son Duyurular" : "Announcements" ?></h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <?php while ($posts = $postss->fetch_array()) { ?>
                                    <li>
                                        <a href="<?php echo $lang == "tr" ? $posts['link'] : $posts['linkE'] ?>"><?php echo $lang == "tr" ? $posts['title'] : $posts['titleE'] ?></a>
                                    </li>

                                    <hr>
                                <?php } ?>
                            </ul>
                        </div>

                    </div>

                    <div class="sidebar">

                        <h3 class="sidebar-title"><?php echo $lang == "tr" ? "Özellikler" : "Features" ?></h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <?php while ($feature = $features->fetch_array()) { ?>
                                    <li>
                                        <a href="#"><?php echo $lang == "tr" ? $feature['title'] : $feature['titleE'] ?></a>
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