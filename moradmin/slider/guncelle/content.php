<?php
if ($_GET['id']) {

    $id = $_GET['id'];

    include '../../netting/baglan.php';

    $sql = "SELECT * FROM tblslider WHERE id = '$id'";
    $result = mysqli_query($db, $sql);
    $row = $result->fetch_assoc();
} ?>

<form method="post" action="../../netting/slider.php" enctype="multipart/form-data">
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
                        <label>Slider Adı</label>
                        <input type="text" class="form-control form-control-lg" name="title"
                               value="<?php echo $row['title'] ?>"
                               placeholder="Title Giriniz...">
                        <input type="hidden" class="form-control form-control-lg" name="id"
                               value="<?php echo $row['id'] ?>">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Buton Title</label>
                        <input type="text" class="form-control form-control-lg" name="btnTitle"
                               value="<?php echo $row['btnTitle'] ?>"
                               placeholder="Buton Açıklama Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Açıklama Giriniz</label>
                        <textarea type="text" class="form-control form-control-lg" name="description"
                                  placeholder="Açıklama"><?php echo $row['description'] ?></textarea>
                    </div>
                </div>

                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Buton Linki</label>
                        <input type="text" class="form-control form-control-lg" name="link"
                               value="<?php echo $row['link'] ?>"
                               placeholder="Buton Gidecek Link Giriniz...">
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
                        <label>Slider Adı</label>
                        <input type="text" class="form-control form-control-lg" name="titleE"
                               value="<?php echo $row['titleE'] ?>"
                               placeholder="Title Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Buton Title</label>
                        <input type="text" class="form-control form-control-lg" name="btnTitleE"
                               value="<?php echo $row['btnTitleE'] ?>"
                               placeholder="Buton Açıklama Giriniz...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Açıklama Giriniz</label>
                        <textarea type="text" class="form-control form-control-lg" name="descriptionE"
                                  placeholder="Açıklama"><?php echo $row['descriptionE'] ?></textarea>
                    </div>
                </div>

                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Buton Linki</label>
                        <input type="text" class="form-control form-control-lg" name="linkE"
                               value="<?php echo $row['linkE'] ?>"
                               placeholder="Buton Gidecek Link Giriniz...">
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
            <button type="submit" name="sliderguncelleme" class="btn btn-info float-right">
                Güncelle
            </button>
            <a href="<?php echo base_url() . "slider" ?>"
               class="btn btn-warning float-left">Vazgeç</a>
        </div>
    </div>
</form>
</section>