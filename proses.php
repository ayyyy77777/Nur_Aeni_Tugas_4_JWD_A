<?php

if ($_POST) {
  $satu = $_POST['input_bil_satu'];
  $dua = $_POST['input_bil_dua'];
  $tiga = $_POST['input_bil_tiga'];
  $error_satu = "";
  $error_dua = "";
  $error_tiga = "";
  $error = false;
  $luas = "";

  if ($satu == "") {
    $error_satu = "Input bilangan kesatu tidak boleh kosong";
    $error = true;
  }

  if ($dua == "") {
    $error_dua = "Input bilangan kedua tidak boleh kosong";
    $error = true;
  }

  if ($tiga == "") {
    $error_tiga = "Input bilangan ketiga tidak boleh kosong";
    $error = true;
  }

  if ($error == false) {
    $rata_rata = ($satu + $dua + $tiga) / 3;
  }

  header("location:http://localhost/jwd_4/index.php?error_satu=" . $error_satu . "&error_dua=" . $error_dua . "&error_tiga=" . $error_tiga . "&rata_rata=" . $rata_rata);

}