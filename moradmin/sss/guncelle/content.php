<?php
if ($_GET['id']) {

    $id = $_GET['id'];

    include '../../netting/baglan.php';

    $sql = "SELECT * FROM tblsss WHERE id = '$id'";
    $result = mysqli_query($db, $sql);
    $row = $result->fetch_assoc();
} ?>

<form method="post" action="../../netting/sss.php" enctype="multipart/form-data">
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
                <div class="row">

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Soru</label>
                            <textarea type="text" class="form-control form-control-lg" name="title" id="editor1"
                                      placeholder="Link Giriniz...">
                            <?php echo $row['title']?>
                            </textarea>
                            <input type="hidden" class="form-control form-control-lg" name="id"
                                   value="<?php echo $row['id'] ?>">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Cevap</label>
                            <textarea type="text" class="form-control form-control-lg" name="answer" id="editor2"
                                      placeholder="Link Giriniz...">
                            <?php echo $row['answer']?>
                            </textarea>
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
                        <label>Soru</label>
                        <textarea type="text" class="form-control form-control-lg" name="titleE" id="editor3"
                                  placeholder="Link Giriniz...">
                            <?php echo $row['titleE']?>
                            </textarea>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Cevap</label>
                        <textarea type="text" class="form-control form-control-lg" name="answerE" id="editor4"
                                  placeholder="Link Giriniz...">
                            <?php echo $row['answerE']?>
                            </textarea>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="card-footer">
        <div>
            <button type="submit" name="sssguncelleme" class="btn btn-info float-right">
                Güncelle
            </button>
            <a href="<?php echo base_url() . "sss" ?>"
               class="btn btn-warning float-left">Vazgeç</a>
        </div>
    </div>
</form>
</section>