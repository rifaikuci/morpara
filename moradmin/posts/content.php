<?php

include "../netting/baglan.php";
require_once "../include/helper.php";
$sql = "SELECT * FROM tblposts order by id desc ";
$result = $db->query($sql);

?>

<div class="content">

    <?php
    if ($_GET['durumekle'] == "ok") {
        durumSuccess("Duyuru Başarılı Bir Şekilde Eklendi. ");
    } else if ($_GET['durumekle'] == "no") {
        durumDanger("Duyuru Eklenirken Bir Hata Oluştu !");
    } else if ($_GET['durumsil'] == "ok") {
        durumSuccess("Duyuru Başarılı Bir Şekilde Silindi. ");
    } else if ($_GET['durumsil'] == "no") {
        durumDanger("Duyuru Silinirken Bir Hata Oluştu.");
    } else if ($_GET['durumguncelleme'] == "ok") {
        durumSuccess("Duyuru Başarılı Bir Şekilde Güncellendi. ");
    } else if ($_GET['durumguncelleme'] == "no") {
        durumDanger("Duyuru Güncellenirken Bir Hata Oluştu.");
    } ?>

    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div style="text-align: right;margin-right: auto">
                    <a href="ekle/" class="btn btn-primary"><i class="fa fa-plus"><?php echo "\t\t\t\t" ?>
                            Ekle</i></a>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Duyuru</th>
                                <th>Tarih</th>
                                <th>İşlem</th>
                            </tr>
                            </thead>

                            <?php $sira = 1;
                            while ($row = $result->fetch_array()) { ?>
                                <tr>
                                    <td style="font-weight: bold"><?php echo $sira; ?></td>
                                    <td><?php echo $row['title']; ?></td>
                                    <td><?php echo tarih($row['date']); ?></td>
                                    <td><a href=<?php echo "guncelle/?id=" . $row['id']; ?> class="btn
                                           btn-warning">Düzenle</a>
                                        <a href=<?php echo base_url() . "netting/posts.php?postssil=" . $row['id']; ?> class="btn
                                           btn-danger">Sil</a>
                                    </td>
                                </tr>
                                <?php $sira++;
                            } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</section>