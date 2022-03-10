<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="<?php echo base_url_front() ?>" class="logo d-flex align-items-center">
            <img src="<?php echo base_url() . $logo ?>" alt="<?php echo $genel['title'] ?>">
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto <?php echo $page == "Home" ? "active" : "" ?>" href="<?php echo base_url_front()?>"><?php echo $lang == "tr" ? "Ana Sayfa" : "Home"  ;?></a>
                </li>
                <li><a class="nav-link scrollto <?php echo $page == "About" ? "active" : "" ?>" href="<?php echo base_url_front(). "about"?>"><?php echo $lang == "tr" ? "Hakkımızda" : "About Us"  ;?></a></li>
                <li><a class="nav-link scrollto <?php echo $page == "Services" ? "active" : "" ?>" href="<?php echo base_url_front(). "services"?>"><?php echo $lang == "tr" ? "Hizmetlerimiz" : "Services"  ;?></a></li>
                <li><a class="nav-link scrollto <?php echo $page == "News" ? "active" : "" ?>" href="<?php echo base_url_front(). "news"?>"><?php echo $lang == "tr" ? "Haberler" : "News"  ;?></a></li>
                <li><a class="nav-link scrollto <?php echo $page == "Contact" ? "active" : "" ?>" href="<?php echo base_url_front(). "contact"?>"><?php echo $lang == "tr" ? "İletişim" : "Contact"  ;?></a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>

<div class="langs order-xl-3">

</div>