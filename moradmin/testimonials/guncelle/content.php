<?php
if ($_GET['id']) {

    $id = $_GET['id'];

    include '../../netting/baglan.php';

    $sql = "SELECT * FROM tbltestimonials WHERE id = '$id'";
    $result = mysqli_query($db, $sql);
    $row = $result->fetch_assoc();
} ?>


<form method="post" action="../../netting/testimonials.php" enctype="multipart/form-data">
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
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Ad Soyad</label>
                        <input type="text" class="form-control form-control-lg" name="name"
                               value="<?php echo $row['name'] ?>">
                        <input type="hidden" class="form-control form-control-lg" name="id"
                               value="<?php echo $row['id'] ?>">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Yorumunuz</label>
                        <textarea type="text" class="form-control form-control-lg" name="comment" id="editor3"
                                  placeholder="Yorumunuzu Giriniz...">  <?php echo $row['comment'] ?> </textarea>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Mesleğiniz</label>
                        <input type="text" class="form-control form-control-lg" name="job"
                               value="<?php echo $row['job'] ?>">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Puanınız</label>
                        <input type="number" max="5" min="0" class="form-control form-control-lg" name="rating"
                               value="<?php echo $row['rating'] ?>">
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
                        <label>Ad Soyad</label>
                        <input type="text" class="form-control form-control-lg" name="nameE"
                               value="<?php echo $row['nameE'] ?>">

                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Yorumunuz</label>
                        <textarea type="text" class="form-control form-control-lg" name="commentE" id="editor2"
                                  placeholder="Yorumunuzu Giriniz...">  <?php echo $row['commentE'] ?> </textarea>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Mesleğiniz</label>
                        <input type="text" class="form-control form-control-lg" name="jobE"
                               value="<?php echo $row['jobE'] ?>">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Puanınız</label>
                        <input type="number" max="5" min="0" class="form-control form-control-lg" name="ratingE"
                               value="<?php echo $row['ratingE'] ?>">
                    </div>
                </div>

            </div>
        </div>

        <div class="card-footer">
            <div>
                <button type="submit" name="testimonialsguncelleme" class="btn btn-info float-right">Güncelle</button>
                <a href="<?php echo base_url() . "testimonials/" ?>"
                   class="btn btn-warning float-left">Vazgeç</a>
            </div>
        </div>
</form>
</section>