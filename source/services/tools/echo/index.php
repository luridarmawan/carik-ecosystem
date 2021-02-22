<?php
include_once "../../lib/lib.php";


$FullName = urldecode(@$_POST['FullName']);
$OriginalText = urldecode(@$_POST['Keyword']);
$OriginalText = trim(str_replace('echo ', '', $OriginalText));


$Text = "*Contoh Integrasi Sistem Anda*

Ini adalah [Contoh API Echo](https://public-nlp.carik.id/services/tools/echo/echo.png) jika anda akan menghubungkan API Anda kepada Ecosytem.
Contoh desain Mind Flow dan kode API juga sudah disertakan di dalam [repositori](https://github.com/CarikBot/ecosystem/).

Silakan coba kirim pesan:
`echo kalimat yang mau diecho`
";

if (!empty($OriginalText)){
  $Text = "Hi $FullName";
  $Text .= "\nAnda menuliskan: '$OriginalText'";
}

Output(200, $Text);