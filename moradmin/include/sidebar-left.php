<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div style="text-align: center">
        <a href="<?php echo base_url() ?>" class="brand-link">
            <span style="color: #7f8c8d;font-weight: bold">Mor Ödeme</span>
        </a>
    </div>
    <?php
    session_start();
    if (!isset($_SESSION['kullanici'])) {
        header("Location:" . base_url() . "login/");
    }

    ?>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'solution' ?>" class="nav-link">
                        <i class="nav-icon fas fa-sitemap"></i>
                        <p>
                            Solutions
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'slider' ?>" class="nav-link">
                        <i class="nav-icon fas fa-images"></i>
                        <p>
                            Slider
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'solutionpage' ?>" class="nav-link">
                        <i class="nav-icon fas fa-comment-dots"></i>
                        <p>
                            Solution Desc.
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'product' ?>" class="nav-link">
                        <i class="nav-icon fas fa-project-diagram"></i>
                        <p>
                            Product
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'infrastructure' ?>" class="nav-link">
                        <i class="nav-icon fas fa-ethernet"></i>
                        <p>
                            Alt Yapılar
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'infrastitem' ?>" class="nav-link">
                        <i class="nav-icon fas fa-wifi"></i>
                        <p>
                            Alt Yapı Modülleri
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'consultant' ?>" class="nav-link">
                        <i class="nav-icon fas fa-handshake"></i>
                        <p>
                            Danışmanlık
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'consultantitem' ?>" class="nav-link">
                        <i class="nav-icon fas fa-hands-helping"></i>
                        <p>
                            Danışmanlık Modülleri
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'maincontact' ?>" class="nav-link">
                        <i class="nav-icon fas fa-phone"></i>
                        <p>
                            Contact Ana Sayfa
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'ayar' ?>" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Ayarlar
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'about' ?>" class="nav-link">
                        <i class="nav-icon fas fa-people-carry"></i>
                        <p>
                            Hakkımızda
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'smedya' ?>" class="nav-link">
                        <i class="nav-icon fas fa-share-alt"></i>
                        <p>
                            Sosyal Medyalar
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'footer' ?>" class="nav-link">
                        <i class="nav-icon fas fa-magnet"></i>
                        <p>
                            Footer
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'general' ?>" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Genel Ayarlar
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url_front() ?>" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Siteye Giriş</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url() . "netting/login.php/?cikisyap=true" ?>" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Çıkış Yap</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>