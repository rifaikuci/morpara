<?php


include '../netting/baglan.php';

$sql = "SELECT * FROM tblayar WHERE id = '1'";
$result = mysqli_query($db, $sql);
$row = $result->fetch_assoc();

?>

<?php
if ($_GET['durumekle'] == "ok") {
    durumSuccess("Ayarlar Başarılı Bir Şekilde Eklendi. ");
} else if ($_GET['durumekle'] == "no") {
    durumDanger("Ayarlar Eklenirken Bir Hata Oluştu !");
} else if ($_GET['durumsil'] == "ok") {
    durumSuccess("Ayarlar Başarılı Bir Şekilde Silindi. ");
} else if ($_GET['durumsil'] == "no") {
    durumDanger("Ayarlar Silinirken Bir Hata Oluştu.");
} else if ($_GET['durumguncelleme'] == "ok") {
    durumSuccess("Ayarlar Page Başarılı Bir Şekilde Güncellendi. ");
} else if ($_GET['durumguncelleme'] == "no") {
    durumDanger("Ayarlar  Page Güncellenirken Bir Hata Oluştu.");
} ?>

<form method="post" action="../netting/ayar.php" enctype="multipart/form-data">
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
                        <label>Ayarlar Başlık</label>
                        <input type="text" class="form-control form-control-lg" name="title"
                               value="<?php echo $row['title'] ?>"
                               placeholder="Ayarlar Başlık Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Ayarlar Alt Başlık</label>
                        <input type="text" class="form-control form-control-lg" name="subTitle"
                               value="<?php echo $row['subTitle'] ?>"
                               placeholder="Ayarlar Alt Başlık Giriniz...">
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
                        <label>Firma Adı</label>
                        <input type="text" class="form-control form-control-lg" name="firmTitle"
                               value="<?php echo $row['firmTitle'] ?>"
                               placeholder="Firma Adı Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Adres </label>
                        <input type="text" class="form-control form-control-lg" name="address"
                               value="<?php echo $row['address'] ?>"
                               placeholder="Adres Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Çalışma Zamanı </label>
                        <input type="text" class="form-control form-control-lg" name="workTime"
                               value="<?php echo $row['workTime'] ?>"
                               placeholder="Çalışma Zamanı Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Telefon </label>
                        <input type="text" class="form-control form-control-lg" name="phone"
                               value="<?php echo $row['phone'] ?>"
                               placeholder="Telefon Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Fax </label>
                        <input type="text" class="form-control form-control-lg" name="fax"
                               value="<?php echo $row['fax'] ?>"
                               placeholder="Fax Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Mail </label>
                        <input type="text" class="form-control form-control-lg" name="mail"
                               value="<?php echo $row['mail'] ?>"
                               placeholder="Mail Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Harita (iframe) </label>
                        <input type="text" class="form-control form-control-lg" name="map"
                               value="<?php echo $row['map'] ?>"
                               placeholder="Harita Giriniz...">
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
                        <label>Ayarlar Başlık</label>
                        <input type="text" class="form-control form-control-lg" name="titleE"
                               value="<?php echo $row['titleE'] ?>"
                               placeholder="Ayarlar Başlık Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Ayarlar Alt Başlık</label>
                        <input type="text" class="form-control form-control-lg" name="subTitleE"
                               value="<?php echo $row['subTitleE'] ?>"
                               placeholder="Ayarlar Alt Başlık Giriniz...">
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
                        <label>Firma Adı</label>
                        <input type="text" class="form-control form-control-lg" name="firmTitleE"
                               value="<?php echo $row['firmTitleE'] ?>"
                               placeholder="Firma Adı Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Adres </label>
                        <input type="text" class="form-control form-control-lg" name="addressE"
                               value="<?php echo $row['addressE'] ?>"
                               placeholder="Adres Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Çalışma Zamanı </label>
                        <input type="text" class="form-control form-control-lg" name="workTimeE"
                               value="<?php echo $row['workTimeE'] ?>"
                               placeholder="Çalışma Zamanı Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Telefon </label>
                        <input type="text" class="form-control form-control-lg" name="phoneE"
                               value="<?php echo $row['phoneE'] ?>"
                               placeholder="Telefon Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Fax </label>
                        <input type="text" class="form-control form-control-lg" name="faxE"
                               value="<?php echo $row['faxE'] ?>"
                               placeholder="Fax Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Mail </label>
                        <input type="text" class="form-control form-control-lg" name="mailE"
                               value="<?php echo $row['mailE'] ?>"
                               placeholder="Mail Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Harita (iframe) </label>
                        <input type="text" class="form-control form-control-lg" name="mapE"
                               value="<?php echo $row['mapE'] ?>"
                               placeholder="Harita Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Keywords (Seo)</label>
                        <input type="text" class="form-control form-control-lg" name="keywordsE"
                               value="<?php echo $row['keywordsE'] ?>"
                               placeholder="Anahtar Kelimeler Giriniz.">
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
            <button type="submit" name="ayarguncelleme" class="btn btn-info float-right">
                Güncelle
            </button>
            <a href="<?php echo base_url() . "ayar" ?>"
               class="btn btn-warning float-left">Vazgeç</a>
        </div>
    </div>
</form>
</section>