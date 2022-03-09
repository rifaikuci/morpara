<?php

include "../netting/baglan.php";
require_once "../include/helper.php";
$sql = "SELECT * FROM tbltestimonials order by id desc ";
$result = $db->query($sql);

?>

<div class="content">

    <?php
    if ($_GET['durumekle'] == "ok") {
        durumSuccess("Sizden Gelenler Başarılı Bir Şekilde Eklendi. ");
    } else if ($_GET['durumekle'] == "no") {
        durumDanger("Sizden Gelenler Eklenirken Bir Hata Oluştu !");
    } else if ($_GET['durumsil'] == "ok") {
        durumSuccess("Sizden Gelenler Başarılı Bir Şekilde Silindi. ");
    } else if ($_GET['durumsil'] == "no") {
        durumDanger("Sizden Gelenler Silinirken Bir Hata Oluştu.");
    } else if ($_GET['durumguncelleme'] == "ok") {
        durumSuccess("Sizden Gelenler Başarılı Bir Şekilde Güncellendi. ");
    } else if ($_GET['durumguncelleme'] == "no") {
        durumDanger("Sizden Gelenler Güncellenirken Bir Hata Oluştu.");
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
                                <th>Ad Soyad</th>
                                <th>İşlem</th>
                            </tr>
                            </thead>

                            <?php $sira = 1;
                            while ($row = $result->fetch_array()) { ?>
                                <tr>
                                    <td style="font-weight: bold"><?php echo $sira; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><a href=<?php echo "guncelle/?id=" . $row['id']; ?> class="btn
                                           btn-warning">Düzenle</a>
                                        <a href=<?php echo base_url() . "netting/testimonials.php?testimonialssil=" . $row['id']; ?> class="btn
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