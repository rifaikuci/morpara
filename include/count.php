<section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

        <div class="row gy-4">

            <div class="col-lg-4 col-md-8">
                <div class="count-box">
                    <i class="bi bi-flag"></i>
                    <div>
                            <span data-purecounter-start="0"
                                  data-purecounter-end="<?php echo $count['clients'] ? $count['clients'] : 0 ?>"
                                  data-purecounter-duration="1"
                                  class="purecounter"></span>
                        <p><?php echo $lang == "tr" ? "Müşterilerimiz" : "Year of Foundation" ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-8">
                <div class="count-box">
                    <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                    <div>
                            <span data-purecounter-start="0"
                                  data-purecounter-end="<?php echo $count['projects'] ? $count['projects'] : 0 ?>"
                                  data-purecounter-duration="1"
                                  class="purecounter"></span>
                        <p><?php echo $lang == "tr" ? "Projelerimiz" : "Countries" ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-8">
                <div class="count-box">
                    <i class="bi bi-list-check" style="color: #15be56;"></i>
                    <div>
                            <span data-purecounter-start="0"
                                  data-purecounter-end="<?php echo $count['hours'] ? $count['hours'] : 0 ?>"
                                  data-purecounter-duration="1"
                                  class="purecounter"></span>
                        <p><?php echo $lang == "tr" ? "Destek Saatlerimiz" : "Years Experience" ?></p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
