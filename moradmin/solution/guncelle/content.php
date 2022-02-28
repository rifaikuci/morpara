<?php
if ($_GET['id']) {

    $id = $_GET['id'];

    include '../../netting/baglan.php';

    $sql = "SELECT * FROM tblsolution WHERE id = '$id'";
    $result = mysqli_query($db, $sql);
    $row = $result->fetch_assoc();
} ?>

<form method="post" action="../../netting/solution.php" enctype="multipart/form-data">
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
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Solution Adı</label>
                        <input type="text" class="form-control form-control-lg" name="title"
                               value="<?php echo $row['title'] ?>"
                               placeholder="Title Giriniz...">
                        <input type="hidden" class="form-control form-control-lg" name="id"
                               value="<?php echo $row['id'] ?>">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Solution Detay Başlık</label>
                        <input type="text" class="form-control form-control-lg" name="detailTitle"
                               value="<?php echo $row['detailTitle'] ?>"
                               placeholder="Solution Detay Başlık Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Solution Alt Açıklama</label>
                        <input type="text" class="form-control form-control-lg" name="subTitle"
                               value="<?php echo $row['subTitle'] ?>"
                               placeholder="Alt Açıklama Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Açıklama Giriniz</label>
                        <textarea type="text" class="form-control form-control-lg" name="description" id="editor1"
                                  placeholder="Açıklama"><?php echo $row['description'] ?></textarea>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Skill (gireceğiniz Özellikler aralarında ; koyunuz)</label>
                        <textarea  type="text" class="form-control form-control-lg" name="skill"
                                   placeholder="Skill giriniz"><?php echo $row['skill'] ?></textarea>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Yetkinlik (gireceğiniz yetkinlikler aralarında ; koyunuz)</label>
                        <textarea  type="text" class="form-control form-control-lg" name="competence"
                                   placeholder="Yetkinlik giriniz"><?php echo $row['competence'] ?></textarea>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Modül (gireceğiniz Moduls aralarında ; koyunuz)</label>
                        <textarea  type="text" class="form-control form-control-lg" name="modul"
                                   placeholder="Modul giriniz"><?php echo $row['modul'] ?></textarea>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Features (gireceğiniz Features aralarında ; koyunuz)</label>
                        <textarea  type="text" class="form-control form-control-lg" name="features"
                                   placeholder="Features giriniz"><?php echo $row['features'] ?></textarea>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Infrastructure (gireceğiniz Infrastructures aralarında ; koyunuz)</label>
                        <textarea  type="text" class="form-control form-control-lg" name="infrastructure"
                                   placeholder="Infrastructures giriniz"><?php echo $row['infrastructure'] ?></textarea>
                    </div>
                </div>

                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Class Adı</label>
                        <input type="text" class="form-control form-control-lg" name="class"
                               value="<?php echo $row['class'] ?>"
                               placeholder="Class Adı Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Keywords (Seo)</label>
                        <input type="text" class="form-control form-control-lg" name="keywords"
                               value="<?php echo $row['keywords'] ?>"
                               placeholder="Anahtar Kelimeler Giriniz.">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Description(Seo) Giriniz</label>
                        <textarea type="text" class="form-control form-control-lg" name="metaDescription"
                                  placeholder="Description Girilecek seo için"><?php echo $row['metaDescription'] ?></textarea>
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
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Solution Adı</label>
                        <input type="text" class="form-control form-control-lg" name="titleE"
                               value="<?php echo $row['titleE'] ?>"
                               placeholder="Title Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Solution Detay Başlık</label>
                        <input type="text" class="form-control form-control-lg" name="detailTitleE"
                               value="<?php echo $row['detailTitleE'] ?>"
                               placeholder="Solution Detay Başlık Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Solution Alt Açıklama</label>
                        <input type="text" class="form-control form-control-lg" name="subTitleE"
                               value="<?php echo $row['subTitleE'] ?>"
                               placeholder="Alt Açıklama Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Açıklama Giriniz</label>
                        <textarea type="text" class="form-control form-control-lg" name="descriptionE" id="editor2"
                                  placeholder="Açıklama"><?php echo $row['descriptionE'] ?></textarea>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Skill (gireceğiniz yetkinlikler aralarında ; koyunuz)</label>
                        <textarea  type="text" class="form-control form-control-lg" name="skillE"
                                   placeholder="Skill giriniz"><?php echo $row['skillE'] ?></textarea>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Skill (gireceğiniz Özellikler aralarında ; koyunuz)</label>
                        <textarea  type="text" class="form-control form-control-lg" name="skillE"
                                   placeholder="Skill giriniz"><?php echo $row['skillE'] ?></textarea>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Yetkinlik (gireceğiniz yetkinlikler aralarında ; koyunuz)</label>
                        <textarea  type="text" class="form-control form-control-lg" name="competenceE"
                                   placeholder="Yetkinlik giriniz"><?php echo $row['competenceE'] ?></textarea>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Modül (gireceğiniz Moduls aralarında ; koyunuz)</label>
                        <textarea  type="text" class="form-control form-control-lg" name="modulE"
                                   placeholder="Modul giriniz"><?php echo $row['modulE'] ?></textarea>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Features (gireceğiniz Features aralarında ; koyunuz)</label>
                        <textarea  type="text" class="form-control form-control-lg" name="featuresE"
                                   placeholder="Features giriniz"><?php echo $row['featuresE'] ?></textarea>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Infrastructure (gireceğiniz Infrastructures aralarında ; koyunuz)</label>
                        <textarea  type="text" class="form-control form-control-lg" name="infrastructureE"
                                   placeholder="Infrastructures giriniz"><?php echo $row['infrastructureE'] ?></textarea>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Description(Seo) Giriniz</label>
                        <textarea type="text" class="form-control form-control-lg" name="metaDescriptionE"
                                  placeholder="Description Girilecek seo için"><?php echo $row['metaDescriptionE'] ?></textarea>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-sm-12" style="text-align: center">
        <div class="form-group">
            <input type="file" name="img">
        </div>
        <br>
        <br>
        <div style="text-align: center">
            <img src="<?php echo base_url() . $row['img']; ?>"
                 alt="<?php echo $row['title']; ?>"
                 class="img img-fluid">
        </div>
    </div>
    <div class="card-footer">
        <div>
            <button type="submit" name="solutionguncelleme" class="btn btn-info float-right">
                Güncelle
            </button>
            <a href="<?php echo base_url() . "solution" ?>"
               class="btn btn-warning float-left">Vazgeç</a>
        </div>
    </div>
</form>
</section>