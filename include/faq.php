<?php
$sqlfaq = "SELECT * FROM tblsss order by id desc ";
$faqs = $db->query($sqlfaq);

?>

<section id="faq" class="faq">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <p><?php echo $lang == "tr" ? "S.S.S." : "F.A.Q" ?></p>
        </header>

        <div class="row">
            <div class="col-lg-12">
                <div class="accordion accordion-flush" id="faqlist1">
                    <?php while ($faq = $faqs->fetch_array()) { ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="<?php echo "#faq-content-" . $faq['id'] ?>">
                                    <?php echo $lang == "tr" ? $faq['title'] : $faq['titleE'] ?>
                                </button>
                            </h2>
                            <div id="<?php echo "faq-content-" . $faq['id'] ?>" class="accordion-collapse collapse"
                                 data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    <?php echo $lang == "tr" ? $faq['answer'] : $faq['answerE'] ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>

        </div>

    </div>

</section>
