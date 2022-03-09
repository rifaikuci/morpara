<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div style="text-align: center">
        <a href="<?php echo base_url() ?>" class="brand-link">
            <span style="color: mediumpurple;font-weight: bold"><?php echo base_title(); ?></span>
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
                    <a href="<?php echo base_url() . 'intro' ?>" class="nav-link">
                        <i class="nav-icon fas fa-poll"></i>
                        <p>
                            Intro
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
                    <a href="<?php echo base_url() . 'ayar' ?>" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Ayarlar
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
                    <a href="<?php echo base_url() . 'about' ?>" class="nav-link">
                        <i class="nav-icon fas fa-people-carry"></i>
                        <p>
                            Hakkımızda
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'count' ?>" class="nav-link">
                        <i class="nav-icon fas fa-hourglass-start"></i>
                        <p>
                            Count Bilgileri
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'feature' ?>" class="nav-link">
                        <i class="nav-icon fas fa-skiing"></i>
                        <p>
                            Feature (Ana Sayfa)
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'features' ?>" class="nav-link">
                        <i class="nav-icon fas fa-skiing"></i>
                        <p>
                            Features
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'solution' ?>" class="nav-link">
                        <i class="nav-icon fas fa-sitemap"></i>
                        <p>
                            Solutions
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'solutionpage' ?>" class="nav-link">
                        <i class="nav-icon fas fa-comment-dots"></i>
                        <p>
                            Solution (Ana Sayfa)
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'service' ?>" class="nav-link">
                        <i class="nav-icon fas fa-sitemap"></i>
                        <p>
                            Services
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'servicepage' ?>" class="nav-link">
                        <i class="nav-icon fas fa-comment-dots"></i>
                        <p>
                            Service (Ana Sayfa)
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'values' ?>" class="nav-link">
                        <i class="nav-icon fas fa-sitemap"></i>
                        <p>
                            Değerlerimiz
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'valuespage' ?>" class="nav-link">
                        <i class="nav-icon fas fa-comment-dots"></i>
                        <p>
                            Değerlerimiz (Ana Sayfa)
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
                    <a href="<?php echo base_url() . 'sss' ?>" class="nav-link">
                        <i class="nav-icon fas fa-question"></i>
                        <p>
                            S.S.S.
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'news' ?>" class="nav-link">
                        <i class="nav-icon fas fa-street-view"></i>
                        <p>
                           Haberler
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'testimonials' ?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                           Sizden Gelenler
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'clients' ?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Referanslarımız
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'posts' ?>" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Duyurular
                        </p>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="<?php echo base_url_front()?>" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Siteye  Giriş</p>
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