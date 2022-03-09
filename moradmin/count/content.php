<?php


include '../netting/baglan.php';

$sql = "SELECT * FROM tblcount WHERE id = '1'";
$result = mysqli_query($db, $sql);
$row = $result->fetch_assoc();

?>

<?php
if ($_GET['durumekle'] == "ok") {
    durumSuccess("Count Bilgileri Başarılı Bir Şekilde Eklendi. ");
} else if ($_GET['durumekle'] == "no") {
    durumDanger("Count Bilgileri Eklenirken Bir Hata Oluştu !");
} else if ($_GET['durumsil'] == "ok") {
    durumSuccess("Count Bilgileri Başarılı Bir Şekilde Silindi. ");
} else if ($_GET['durumsil'] == "no") {
    durumDanger("Count Bilgileri Silinirken Bir Hata Oluştu.");
} else if ($_GET['durumguncelleme'] == "ok") {
    durumSuccess("Count Bilgileri Page Başarılı Bir Şekilde Güncellendi. ");
} else if ($_GET['durumguncelleme'] == "no") {
    durumDanger("Count Bilgileri  Page Güncellenirken Bir Hata Oluştu.");
} ?>

<form method="post" action="../netting/count.php" enctype="multipart/form-data">
    <div class="card">

        <div class="card-body">
            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Müşteri / Clients</label>
                        <input type="number" class="form-control form-control-lg" name="clients"
                               value="<?php echo $row['clients'] ?>">
                    </div>
                </div>

                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Projeler / Projects</label>
                        <input type="number" class="form-control form-control-lg" name="projects"
                               value="<?php echo $row['projects'] ?>">
                    </div>
                </div>

                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Çalışma Vakitleri / Hours Of Support</label>
                        <input type="number" class="form-control form-control-lg" name="hours"
                               value="<?php echo $row['hours'] ?>">
                    </div>
                </div>

                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Çalışma Arkadaşları / Hard Workers </label>
                        <input type="number" class="form-control form-control-lg" name="workers"
                               value="<?php echo $row['workers'] ?>">
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="card-footer">
        <div>
            <button type="submit" name="countguncelleme" class="btn btn-info float-right">
                Güncelle
            </button>
            <a href="<?php echo base_url() . "count" ?>"
               class="btn btn-warning float-left">Vazgeç</a>
        </div>
    </div>
</form>
</section>