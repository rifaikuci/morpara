<?php


include '../netting/baglan.php';

$sql = "SELECT * FROM tblgeneral WHERE id = '1'";
$result = mysqli_query($db, $sql);
$row = $result->fetch_assoc();

?>

<?php
if ($_GET['durumekle'] == "ok") {
    durumSuccess("Genel Ayar Başarılı Bir Şekilde Eklendi. ");
} else if ($_GET['durumekle'] == "no") {
    durumDanger("Genel Ayar Eklenirken Bir Hata Oluştu !");
} else if ($_GET['durumsil'] == "ok") {
    durumSuccess("Genel Ayar Başarılı Bir Şekilde Silindi. ");
} else if ($_GET['durumsil'] == "no") {
    durumDanger("Genel Ayar Silinirken Bir Hata Oluştu.");
} else if ($_GET['durumguncelleme'] == "ok") {
    durumSuccess("Genel Ayar Page Başarılı Bir Şekilde Güncellendi. ");
} else if ($_GET['durumguncelleme'] == "no") {
    durumDanger("Genel Ayar  Page Güncellenirken Bir Hata Oluştu.");
} ?>

<form method="post" action="../netting/general.php" enctype="multipart/form-data">
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
                        <label>Genel Ayar Başlık</label>
                        <input type="text" class="form-control form-control-lg" name="title"
                               value="<?php echo $row['title'] ?>"
                               placeholder="Genel Ayar Başlık Giriniz...">
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
                        <label>Genel Ayar Başlık</label>
                        <input type="text" class="form-control form-control-lg" name="titleE"
                               value="<?php echo $row['titleE'] ?>"
                               placeholder="Genel Ayar Başlık Giriniz...">
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
            <button type="submit" name="generalguncelleme" class="btn btn-info float-right">
                Güncelle
            </button>
            <a href="<?php echo base_url() . "general" ?>"
               class="btn btn-warning float-left">Vazgeç</a>
        </div>
    </div>
</form>
</section>