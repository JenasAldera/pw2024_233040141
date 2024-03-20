<?php  

$mahasiswa = [
    [//1
    'gambar'    => 'kiryu.jpeg',
    'nrp'       => '233040101',
    'nama'      => 'Kazuma Kiryu',
    'email'     => 'Tigerdrop@gmail.com',
    'jurusan'   => 'Tojo Clan'
    ],
    [//2
    'gambar'    => 'majima.jpg',
    'nrp'       => '233040102',
    'nama'      => 'Goro Majima',
    'email'     => 'kiryuchan@gmail.com',
    'jurusan'   => 'Majima Clan'
    ],
    [//3
    'gambar'    => 'saejima.png',
    'nrp'       => '233040103',
    'nama'      => 'Taiga Saejima',
    'email'     => 'Rubberbullets@gmail.com',
    'jurusan'   => 'Tojo Clan'
    ],
    [//4
    'gambar'    => 'ichiban.jpg',
    'nrp'       => '233040104',
    'nama'      => 'Kasuga Ichiban',
    'email'     => 'dragonquest@gmail.com',
    'jurusan'   => 'Arakawa Clan'
    ],
    [//5
    'gambar'    => 'akiyama.png',
    'nrp'       => '233040105',
    'nama'      => 'Shun Akiyama',
    'email'     => 'loansharkfr@gmail.com',
    'jurusan'   => 'Sky Finance'
    ],
    [//6
    'gambar'    => 'jin.jpg',
    'nrp'       => '233040106',
    'nama'      => 'Jin Kazama',
    'email'     => 'DAH@gmail.com',
    'jurusan'   => 'Kazama Dojo'
    ],
    [//7
    'gambar'    => 'kazuya.png',
    'nrp'       => '233040107',
    'nama'      => 'Kazuya Mishima',
    'email'     => 'notgonnasugarcoatit@gmail.com',
    'jurusan'   => 'G Corporation'
    ],
    [//8
    'gambar'    => 'asuka.png',
    'nrp'       => '233040108',
    'nama'      => 'Asuka Kazama',
    'email'     => 'Hatelili101@gmail.com',
    'jurusan'   => 'Kazama Dojo'
    ],
    [//9
    'gambar'    => 'reina.png',
    'nrp'       => '233040109',
    'nama'      => 'Reina Mishima',
    'email'     => 'devilaunty@gmail.com',
    'jurusan'   => 'Mishima Dojo'
    ],
    [//10
    'gambar'    => 'lili.png',
    'nrp'       => '233040110',
    'nama'      => 'Emilie De Rochefort',
    'email'     => 'hateasuka101@gmail.com',
    'jurusan'   => 'Kazama Dojo Secondhand'
    ],

];

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Daftar Mahasiswa </title>
    <style>

        img {
            width : 200px;
            height: 200px;
            border: 4px solid;
        }

        ul li:first-child{
            list-style-type: none;
        }

    </style>
 </head>
 <body>

    <h1> Daftar Mahasiswa </h1>

    <?php foreach($mahasiswa as $mhs) : ?>

    <ul>
        <li> <img src = "img/<?= $mhs["gambar"]; ?>"></li>
        <li>Nama    : <?= $mhs["nama"]; ?></li>
        <li>NRP     : <?= $mhs["nrp"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        <li>Email   : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
    
 </body>
 </html>