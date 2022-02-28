<?php

include "../netting/baglan.php";
require_once "../include/helper.php";
$sql = "SELECT * FROM tblconsultant order by id desc ";
$result = $db->query($sql);

?>

<div class="content">

    <?php
    if ($_GET['durumekle'] == "ok") {
        durumSuccess("Consultant Başarılı Bir Şekilde Eklendi. ");
    } else if ($_GET['durumekle'] == "no") {
        durumDanger("Consultant Eklenirken Bir Hata Oluştu !");
    } else if ($_GET['durumsil'] == "ok") {
        durumSuccess("Consultant Başarılı Bir Şekilde Silindi. ");
    } else if ($_GET['durumsil'] == "no") {
        durumDanger("Consultant Silinirken Bir Hata Oluştu.");
    } else if ($_GET['durumguncelleme'] == "ok") {
        durumSuccess("Consultant Başarılı Bir Şekilde Güncellendi. ");
    } else if ($_GET['durumguncelleme'] == "no") {
        durumDanger("Consultant Güncellenirken Bir Hata Oluştu.");
    } ?>

    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Consultant</th>
                                <th>İşlem</th>
                            </tr>
                            </thead>

                            <?php $sira = 1;
                            while ($row = $result->fetch_array()) { ?>
                                <tr>
                                    <td style="font-weight: bold"><?php echo $sira; ?></td>
                                    <td><?php echo $row['title']; ?></td>
                                    <td><a href=<?php echo "guncelle/?id=" . $row['id']; ?> class="btn
                                           btn-warning">Düzenle</a>
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