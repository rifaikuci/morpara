<?php

ini_set('display_errors', 1);



function base_url()
{
    return "http://localhost/morpara/moradmin/";
}

function base_url_front()
{
    return "http://localhost/morpara/";
}

function base_title()
{
    return "morpara";
}

function seo($text)
{
    $find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
    $replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
    $text = strtolower(str_replace($find, $replace, $text));
    $text = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $text);
    $text = trim(preg_replace('/\s+/', ' ', $text));
    $text = str_replace(' ', '-', $text);

    return $text;
}

function kelimeAyirma($metin, $sayi)
{

    $uzunluk = count(explode(' ', $metin));
    if ($uzunluk > $sayi) {
        return implode(' ', array_slice(explode(' ', $metin), 0, $sayi)) . " ...";
    } else {
        return $metin;
    }

}

function tarih($tarih)
{
    $tarih = date("d.m.Y", strtotime(explode(" ", $tarih)[0]));

    return $tarih;
}

function imageUpload($image, $path)
{

    $img_name = $_FILES[$image]['name'];
    $img_size = $_FILES[$image]['size'];
    $tmp_name = $_FILES[$image]['tmp_name'];
    $error = $_FILES[$image]['error'];
    if ($error == 0) {
        if ($img_size > 7000000) {
            return "hataboyimage";

        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array("jpg", "jpeg", "png", "svg", 'ico');

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid() . '.' . $img_ex_lc;
                $img_upload_path = "../" . $path . "/" . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
    
                return $path . "/" . $new_img_name;

            } else {
                return "gecersizturimage";
            }
        }

    } else {
        return "hataimage";
    }
}

function durumSuccess($content)
{
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Başarılı!</strong> $content
        <button type='button' class='close' data-dismiss='alert' aria-label='close'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div>";
}

function durumDanger($content)
{
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Hata!</strong> $content
        <button type='button' class='close' data-dismiss='alert' aria-label='close'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div>";
}

function tablogetir($table, $kriter, $deger, $db)
{
    $sql = "SELECT * FROM $table WHERE $kriter = '$deger'";
    $result = mysqli_query($db, $sql);
    $row = $result->fetch_assoc();
    return $row;
}



?>