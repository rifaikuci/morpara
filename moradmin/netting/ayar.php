<?php
include '../netting/baglan.php';
include '../include/helper.php';


if (isset($_POST['ayarguncelleme'])) {

    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title']  ;
    $subTitle = $_POST['subTitle'];
    $subTitleE = $_POST['subTitleE'] != "" ? $_POST['subTitleE'] : $_POST['subTitle']  ;
    $description = $_POST['description'];
    $descriptionE = $_POST['descriptionE'] != "" ? $_POST['descriptionE'] : $_POST['description'];
    $firmTitle = $_POST['firmTitle'];
    $firmTitleE =  $_POST['firmTitleE'] != "" ? $_POST['firmTitleE'] : $_POST['firmTitle'];
    $address = $_POST['address'];
    $addressE = $_POST['addressE'] != "" ? $_POST['addressE'] : $_POST['address'];
    $workTime = $_POST['workTime'];
    $workTimeE = $_POST['workTimeE'] != "" ? $_POST['workTimeE'] : $_POST['workTime'];
    $phone = $_POST['phone'];
    $phoneE = $_POST['phoneE'] != "" ? $_POST['phoneE'] : $_POST['phone'];
    $fax = $_POST['fax'];
    $faxE = $_POST['faxE'] != "" ? $_POST['faxE'] : $_POST['fax'];
    $mail = $_POST['mail'];
    $mailE = $_POST['mailE'] != "" ? $_POST['mailE'] : $_POST['mail'];
    $map = $_POST['map'];
    $mapE = $_POST['mapE'] != "" ? $_POST['mapE'] : $_POST['map'];
    $metaDescription = $_POST['metaDescription'];
    $metaDescriptionE = $_POST['metaDescriptionE'] != "" ? $_POST['metaDescriptionE'] : $_POST['metaDescription'];
    $keywords = $_POST['keywords'];
    $keywordsE = $_POST['keywordsE'] != "" ? $_POST['keywordsE'] : $_POST['keywords'];
    $seoTitle = seo($title);
    $seoTitleE = seo($titleE);
    $link = base_url_front();
    $linkE = base_url_front();

    if ($_FILES['img']['size'] > 0) {
        $resimbul = tablogetir("tblayar", 'id', 1, $db)['img'];
        unlink("../" . $resimbul);

        $img = imageUpload("img", "asset/ayar");

        $sql = "UPDATE tblayar set 
        title = '$title',
        titleE = '$titleE',
        subTitle = '$subTitle',
        subTitleE = '$subTitleE',
        description = '$description',
        descriptionE = '$descriptionE',
        firmTitle = '$firmTitle',
        firmTitleE = '$firmTitleE',
        address = '$address',
        addressE = '$addressE',
        workTime = '$workTime',
        workTimeE = '$workTimeE',
        phone = '$phone',
        phoneE = '$phoneE',
        fax = '$fax',
        faxE = '$faxE',
        mail = '$mail',
        mailE = '$mailE',
        map = '$map',
        mapE = '$mapE',
        keywords = '$keywords',
        keywordsE = '$keywordsE',
        metaDescription = '$metaDescription',
        metaDescriptionE = '$metaDescriptionE',
        seoTitle = '$seoTitle',
        seoTitleE = '$seoTitleE',
        link = '$link',
        linkE = '$linkE',
        img = '$img'  WHERE id= '1'";

    } else {
        $sql = "UPDATE tblayar set 
        title = '$title',
        titleE = '$titleE',
        subTitle = '$subTitle',
        subTitleE = '$subTitleE',
        description = '$description',
        descriptionE = '$descriptionE',
        firmTitle = '$firmTitle',
        firmTitleE = '$firmTitleE',
        address = '$address',
        addressE = '$addressE',
        workTime = '$workTime',
        workTimeE = '$workTimeE',
        phone = '$phone',
        phoneE = '$phoneE',
        fax = '$fax',
        faxE = '$faxE',
        mail = '$mail',
        mailE = '$mailE',
        map = '$map',
        mapE = '$mapE',
        keywords = '$keywords',
        keywordsE = '$keywordsE',
        metaDescription = '$metaDescription',
        metaDescriptionE = '$metaDescriptionE',
        seoTitle = '$seoTitle',
        seoTitleE = '$seoTitleE',
        link = '$link',
        linkE = '$linkE'
        WHERE id= '1'";

    }

    if (mysqli_query($db, $sql)) {
        header("Location:../ayar/?durumguncelleme=ok");
        exit();
    } else {
        header("Location:../ayar/?durumguncelleme=no");
        exit();
    }
}



