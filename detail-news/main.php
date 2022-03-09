<main id="main">

    <section class="breadcrumbs">
        <div class="container" style="padding: 20px">
        </div>
    </section>

    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p><?php echo $lang == "tr" ? $item['title'] : $item['titleE'] ?></p>

            </header>

            <div class="row">
                <article>

                    <div class="entry-img" style="text-align: center">
                        <img src="<?php echo base_url() . $item['img']; ?>" alt="" class="img-fluid">
                    </div>


                    <div class="col-lg-12 entries">
                        <div class="entry-content">
                            <br>
                            <?php echo $lang == "tr" ? $item['description'] : $item['descriptionE'] ?>
                        </div>

                    </div>
                </article>

            </div>

        </div>
    </section>