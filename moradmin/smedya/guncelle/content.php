<?php
if ($_GET['id']) {

    $id = $_GET['id'];

    include '../../netting/baglan.php';

    $sql = "SELECT * FROM tblsmedya WHERE id = '$id'";
    $result = mysqli_query($db, $sql);
    $row = $result->fetch_assoc();
} ?>

<form method="post" action="../../netting/smedya.php" enctype="multipart/form-data">
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
                        <label>Sosyal Medya Adı</label>
                        <input type="text" class="form-control form-control-lg" name="title"
                               value="<?php echo $row['title'] ?>"
                               placeholder="Title Giriniz...">
                        <input type="hidden" class="form-control form-control-lg" name="id"
                               value="<?php echo $row['id'] ?>">
                    </div>
                </div>


                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Link</label>
                        <input type="text" class="form-control form-control-lg" name="link"
                               value="<?php echo $row['link'] ?>"
                               placeholder="Link Giriniz...">
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
                        <label>Sosyal Medya Adı</label>
                        <input type="text" class="form-control form-control-lg" name="titleE"
                               value="<?php echo $row['titleE'] ?>"
                               placeholder="Title Giriniz...">
                    </div>
                </div>


                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Link</label>
                        <input type="text" class="form-control form-control-lg" name="linkE"
                               value="<?php echo $row['linkE'] ?>"
                               placeholder="Link Giriniz...">
                    </div>
                </div>

                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Class Adı</label>
                        <input type="text" class="form-control form-control-lg" name="classE"
                               value="<?php echo $row['classE'] ?>"
                               placeholder="Class Adı Giriniz...">
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="card-footer">
        <div>
            <button type="submit" name="smedyaguncelleme" class="btn btn-info float-right">
                Güncelle
            </button>
            <a href="<?php echo base_url() . "smedya" ?>"
               class="btn btn-warning float-left">Vazgeç</a>
        </div>
    </div>
</form>
</section>