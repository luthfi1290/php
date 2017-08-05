<html>
  <head>
    <title>Belajar PHP </title>
  </head>
  <body>
    <?php
      // $nama = "Moch Luthfi Pratama Putra";
      // $angka = 100;
      // $angka2 = 120;
      // $angka3 = $angka + $angka2;
      // $angka4 = 3.55;
      // echo "<h1>Belajar PHP!!</h1>";
      // echo "Nama saya adalah ".$nama."<br>";
      // echo $angka + $angka2;
      // echo "<br>" . $angka3 . "<br>";
      // echo round($angka4) . "<br>";
      // echo rand(4,10) . "<br>";
      // echo max($angka,$angka2,$angka3,$angka4) . "<br>";
      // echo min($angka,$angka2,$angka3,$angka4);

      // $text = "Hai semuanyaa !! kaka ";
      // echo strlen($text)."<br>";
      // echo str_word_count($text);
      // echo str_replace("semuanyaa","sadayana",$text);
      // echo str_repeat("hai ",4);
      // echo str_repeat($text,4)."<br>";
      // echo str_shuffle($text);

      $kotak = array('anjing','kura kura','koala','anjing');
      $angka = array(2,3,4,6,1,8,7,9,5);
      $data = array(
                array('Luthfi','18','smkn 1 katapang'),
                array('mira','18','sirnamiskin'),
                array('amel','18','smkn 1 katapang')
              );
      echo $data[1][2];
      // sort($angka);
      // print_r($angka);
      // echo "Tamatan dari " . $data['lulusan'];
    ?>
  </body>
</html>

<!-- metode math atau metode angka -->
<!-- 1. round(var); membulatkan angka 
     2. rand(min,max); menampilkan nilai random
     3. max(var,var2,var3,dll); mencari nilai tertinggi
     4. min(var,var2,var3,dll); mencari nilai terendah 
 -->


<!-- metode string -->
<!-- 1. strlen(var); menghitung jumlah huruf pada variable
     2. str_word_count(var); menghitung jumlah kata
     3. str_replace("kata yang mau diganti","diganti dengan apa",sumber variable); mengganti string
     4. str_repeat("variable atau kata yang mau diulang",berapa kali pengulangan)
 -->

 <!-- metode array -->
 <!-- 1. array_unique(array); menampilkan nilai yang unik
      2. array_reverse(array); mengurutkan nilai array dari belakang 
      3. shuffle(array); mengacak array
      4. sort(array); mengurutkan array
      5. count(array); menghitung jumlah nilai array
      6. array_values(array); menampilkan nilai pada array assosiative
      7. array_keys(array); menampilkan keys pada array assosiative
      8. array_merge(array,array2,dll); menggabungkan beberapa array
 -->

 <!-- contoh penulisan array assosiative -->
 <!-- $siswa = array(
                "nama" => "Moch Luthfi Pratama Putra",
                "Kelas" => "XII - TKJ 1",
               ) 
      cara manggilnya:
      echo "Namanya adalah " . $siswa["nama"] . "Kelas " . $siswa["kelas"];
  -->

