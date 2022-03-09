<main id="main">
    <section class="breadcrumbs">
        <div class="container" style="padding: 20px">

        </div>
    </section>

    <section class="inner-page">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12">
                    <header class="section-header">
                        <p><?php echo $lang == "tr" ? $about['title'] : $about['titleE']?></p>

                    </header>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1">
                            <?php echo $lang== "tr" ? $about['description'] : $about['descriptionE'] ?>
                        </div>
                    </div>
                </div>

                <?php if(($lang == "tr" && $about['mission'] ) || ($lang == "en" && $about['missionE'] ) ) { ?>
                <div class="col-lg-12">
                    <header class="section-header">
                        <p><?php echo $lang == "tr" ? "Misyounumuz" : "Mission"?></p>

                    </header>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab2">
                            <?php echo $lang== "tr" ? $about['mission'] : $about['missionE'] ?>
                        </div>
                    </div>
                </div>
                <?php }  ?>

                <?php if(($lang == "tr" && $about['vission'] ) || ($lang == "en" && $about['vissionE'] ) ) { ?>

                <div class="col-lg-12">
                    <header class="section-header">
                        <p><?php echo $lang == "tr" ? "Vizyonumuz" : "Vission"?></p>

                    </header>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab3">
                            <?php echo $lang== "tr" ? $about['vission'] : $about['vissionE'] ?>
                        </div>
                    </div>
                </div>
                <?php }  ?>

            </div>
        </div>
    </section>

</main>