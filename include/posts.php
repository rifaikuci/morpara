<?php
$sqlposts = "SELECT * FROM tblposts order by id desc LIMIT 3 ";
$posts = $db->query($sqlposts);

?>

<section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <a href="<?php echo base_url_front() . "news" ?>">
            <p><?php echo $lang == "tr" ? "Duyurular" : "Announcements" ?></p>
            </a>
        </header>
        <div class="row">
            <?php while ($post = $posts->fetch_array()) { ?>
                <div class="col-lg-4">
                    <div class="post-box">
                        <div class="post-img"><img src="<?php echo base_url() . $post['img']; ?>"
                                                   class="img-fluid" alt=""></div>
                        <span class="post-date"><?php echo tarih($post['date']) ?></span>
                        <h3 class="post-title"><?php echo $lang == "tr" ? $post['title'] : $post['titleE'] ?></h3>
                        <a href="<?php echo $lang == "tr" ? $post['link'] : $post['linkE'] ?>"
                           class="readmore stretched-link mt-auto"><span><?php echo $lang == "tr" ? "Daha Fazlası için" : "Read More" ?></span><i
                                    class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>

</section>
