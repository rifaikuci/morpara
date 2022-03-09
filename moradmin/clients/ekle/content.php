
<section class="content">

    <form method="post" action="../../netting/clients.php" enctype="multipart/form-data">
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
                            <label>Müşteri Adı</label>
                            <input  type="text" class="form-control form-control-lg" name="title"
                                   placeholder="Title Giriniz...">
                        </div>
                    </div>

                    <div class="col-sm-7">
                        <div class="form-group">
                            <label>Link</label>
                            <input  type="text" class="form-control form-control-lg" name="link"
                                    placeholder="Link Giriniz...">
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
                            <label>Müşteri Adı</label>
                            <input  type="text" class="form-control form-control-lg" name="titleE"
                                    placeholder="Title Giriniz...">
                        </div>
                    </div>

                    <div class="col-sm-7">
                        <div class="form-group">
                            <label>Link</label>
                            <input  type="text" class="form-control form-control-lg" name="linkE"
                                    placeholder="Link Giriniz...">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-sm-7">
            <div class="form-group">
                <input type="file" name="img" id="img">
            </div>
        </div>

        <div class="card-footer">
            <div>
                <button type="submit" name="clientsekleme" class="btn btn-info float-right">Ekle</button>
                <a href="<?php echo base_url() . "clients/" ?>"
                   class="btn btn-warning float-left">Vazgeç</a>
            </div>
        </div>
    </form>


</section>


