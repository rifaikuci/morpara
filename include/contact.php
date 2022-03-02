<section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <p><?php echo $lang == "tr" ? "Bizimle İletişime Geçin" : "Contact Us" ?></p>
        </header>

        <div class="row gy-4">
            <div class="col-lg-6">
                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-geo-alt"></i>
                            <h3><?php echo $lang == "tr" ? "Adres" : "Address" ?></h3>
                            <p><?php echo $lang == "tr" ? $ayar['address'] : $ayar['addressE'] ?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-telephone"></i>
                            <h3><?php echo $lang == "tr" ? "Bizi Arayın" : "Call Us" ?></h3>
                            <p><?php echo $lang == "tr" ? $ayar['phone'] : $ayar['phoneE'] ?>
                                <br><?php echo $lang == "tr" ? $ayar['fax'] : $ayar['faxE'] ?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-envelope"></i>
                            <h3><?php echo $lang == "tr" ? "Mail Gönderin" : "Email Us" ?></h3>
                            <p><?php echo $lang == "tr" ? $ayar['mail'] : $ayar['mailE'] ?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-clock"></i>
                            <h3><?php echo $lang == "tr" ? "Çalışma Saatleri" : "Open Hours" ?></h3>
                            <p><?php echo $lang == "tr" ? $ayar['workTime'] : $ayar['workTimeE'] ?></p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                <form action="#" method="post" class="php-email-form">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control"
                                   placeholder="<?php echo $lang == "tr" ? "Adınız" : "Your Name" ?>" required>
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email"
                                   placeholder="<?php echo $lang == "tr" ? "Mail Adresiniz" : "Your Email" ?>" required>
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject"
                                   placeholder="<?php echo $lang == "tr" ? "Konu" : "Subject" ?>" required>
                        </div>

                        <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6"
                                          placeholder="<?php echo $lang == "tr" ? "Mesajınız" : "Message" ?>"
                                          required></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading"><?php echo $lang == "tr" ? "Mesajınız" : "Message" ?></div>

                            <button type="submit"><?php echo $lang == "tr" ? "Gönderiniz" : "Send Message" ?></button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>

</section>
