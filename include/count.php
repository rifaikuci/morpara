<section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

        <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <div>
                            <span data-purecounter-start="0" data-purecounter-end="<?php echo $count['clients'] ? $count['clients'] : 0  ?>" data-purecounter-duration="1"
                                  class="purecounter"></span>
                        <p><?php echo $lang == "tr" ? "Müşterilerimiz" : "Happy Clients"?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                    <div>
                            <span data-purecounter-start="0" data-purecounter-end="<?php echo $count['projects'] ? $count['projects'] : 0  ?>" data-purecounter-duration="1"
                                  class="purecounter"></span>
                        <p><?php echo $lang == "tr" ? "Projelerimiz" : "Projects"?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-headset" style="color: #15be56;"></i>
                    <div>
                            <span data-purecounter-start="0" data-purecounter-end="<?php echo $count['hours'] ? $count['hours'] : 0  ?>" data-purecounter-duration="1"
                                  class="purecounter"></span>
                        <p><?php echo $lang == "tr" ? "Destek Saatlerimiz" : "Hours Of Support"?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-people" style="color: #bb0852;"></i>
                    <div>
                            <span data-purecounter-start="0" data-purecounter-end="<?php echo $count['workers'] ? $count['workers'] : 0 ?>" data-purecounter-duration="1"
                                  class="purecounter"></span>
                        <p><?php echo $lang == "tr" ? "Çalışma Arkadaşlarımız" : "Hard Workers"?></p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
