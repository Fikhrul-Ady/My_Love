<?php date_default_timezone_set('Asia/Jakarta');
if (isset($_POST['pesan'])) {
  $fp = fopen('p.txt', 'a');
  fwrite($fp, '
<div class="cp"><p><span>Pesan :</span><br />' . $_POST['pesan'] . '</p><h6>' . date("d-M-Y (H:i)") . '</h6></div>');
  echo json_encode(array("s" => 200));
  fclose($fp);
  die;
}
if (isset($_POST['d'])) {
  $fa = fopen('p.txt', 'a');
  fwrite($fa, $_POST['d']);
  echo json_encode(array("s" => 200));
  fclose($fa);
  die;
}
if (isset($_GET['d'])) {
  $fa = fopen('p.txt', 'a');
  fclose($fa);
  $fr = fopen('p.txt', 'r');
  echo json_encode(array("d" => fgets($fr)));
  fclose($fr);
  die;
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Saudah</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>
  <script src="script.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body> <?php if (isset($_GET['pesan'])) {
          echo "<div id='ccp'>";
          $fp = fopen('p.txt', 'r');
          fgets($fp);
          while (!feof($fp)) {
            echo "" . fgets($fp);
          }
          fclose($fp);
          echo "</div></body></html>";
          die;
        } ?> <script>
    dt()
  </script>
  <div class="ctnr">
    <div class="lv">
      <img src="lv.svg" />
      <p>Klik Love-nya</p>
    </div>
    <div class="ctn">
      <button class="btn next">[ Lanjut ]</button>
      <button class="btn send">[ Kirim Pesan ]</button>
    </div>
  </div>
  <script>
    konten = [{
        gambar: "stiker1.gif",
        ucapan: "Hai Saudah",
      },
      {
        gambar: "stiker3.gif",
        ucapan: "Sekarang tanggal 21 November ya 🤗",
      },
      {
        gambar: "stiker2.gif",
        ucapan: "Berarti Umur mu sudah 20 tahun ya",
      },
      {
        gambar: "stiker4.gif",
        ucapan: "Yuhu alhamdulillah kamu naik umur 🫶",
      },
      {
        gambar: "stiker5.gif",
        ucapan: "بارك الله في عمرك ",
      },
      {
        gambar: "stiker9.gif",
        ucapan: "Sehat Selalu 🫶`",
      },
      {
        gambar: "stiker10.gif",
        ucapan: "Semoga selalu bahagia 🤗",
      },
      {
        gambar: "stiker6.gif",
        ucapan: "Semoga apa yang kita inginkan dikabulkan oleh Allah 🎉",
      },
      {
        gambar: "stiker7.gif",
        ucapan: "And akhir kata... ",
      },
      {
        gambar: "stiker8.gif",
        ucapan: "I love u with Allah, dan semoga kita bisa menjadi partner dan sahabat selamanya ❤️❤️",
      }
    ];

    nomorWhatsapp = "6281xxx";

    /*=========================*/
  </script>
  <script>
    Fikhrul(konten, nomorWhatsapp);
  </script>
</body>

</html>