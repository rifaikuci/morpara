<section class="content">

    <form method="post" action="../../netting/testimonials.php" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Türkçe</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                            title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Ad Soyad</label>
                            <input  type="text" class="form-control form-control-lg" name="name"
                                    placeholder="Ad Soyad Giriniz...">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Yorumunuz</label>
                            <textarea type="text" class="form-control form-control-lg" name="comment" id="editor3"
                                      placeholder="Yorumunuzu Giriniz..."> </textarea>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Mesleğiniz</label>
                            <input  type="text" class="form-control form-control-lg" name="job"
                                    placeholder="Mesleğinizi Giriniz...">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Puanınız</label>
                            <input  type="number" max="5" min="0" class="form-control form-control-lg" name="rating"
                                    placeholder="0">
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">İngilizce</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                            title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Ad Soyad</label>
                            <input  type="text" class="form-control form-control-lg" name="nameE"
                                    placeholder="Ad Soyad Giriniz...">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Yorumunuz</label>
                            <textarea type="text" class="form-control form-control-lg" name="commentE" id="editor2"
                                      placeholder="Yorumunuzu Giriniz..."> </textarea>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Mesleğiniz</label>
                            <input  type="text" class="form-control form-control-lg" name="jobE"
                                    placeholder="Mesleği Giriniz...">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Puanınız</label>
                            <input  type="number" max="5" min="0" class="form-control form-control-lg" name="ratingE"
                                    placeholder="0">
                        </div>
                    </div>

                </div>
            </div>

            <div class="card-footer">
                <div>
                    <button type="submit" name="testimonialsekleme" class="btn btn-info float-right">Ekle</button>
                    <a href="<?php echo base_url() . "testimonials/" ?>"
                       class="btn btn-warning float-left">Vazgeç</a>
                </div>
            </div>
    </form>


</section>


