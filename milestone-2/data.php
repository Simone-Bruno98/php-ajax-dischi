<?php
$database = [
    [   
        'title' => 'New Jersey',
        'author' => 'Bon Jovi',
        'year' => '1988',
        'poster' => 'https:\/\/www.onstageweb.com\/wp-content\/uploads\/2018\/09\/bon-jovi-new-jersey.jpg',
        'genre' => 'Rock',
    ],
    [   
        'title' => 'Live at Wembley 86',
        'author' => 'Queen',
        'year' => '1992',
        'poster' => 'https:\/\/www.onstageweb.com\/wp-content\/uploads\/2018\/09\/bon-jovi-new-jersey.jpg',
        'genre' => 'Pop',
    ],
    [   
        'title' => 'Tens Summoners Tales',
        'author' => 'Sting',
        'year' => '1993',
        'poster' => 'https:\/\/www.onstageweb.com\/wp-content\/uploads\/2018\/09\/bon-jovi-new-jersey.jpg',
        'genre' => 'Pop',
    ],
    [   
        'title' => 'Steve Gadd Band',
        'author' => 'Steve Gadd Band',
        'year' => '2018',
        'poster' => 'https:\/\/www.onstageweb.com\/wp-content\/uploads\/2018\/09\/bon-jovi-new-jersey.jpg',
        'genre' => 'Jazz',
    ],
    [   
        'title' => 'Brave new World',
        'author' => 'Iron Maiden',
        'year' => '2000',
        'poster' => 'https:\/\/images-na.ssl-images-amazon.com\/images\/I\/810nSIQOLiL._SY355_.jpg',
        'genre' => 'Metal',
    ],
    [   
        'title' => 'One more car, one more raider',
        'author' => 'Eric Clapton',
        'year' => '2002',
        'poster' => 'https:\/\/upload.wikimedia.org\/wikipedia\/en\/9\/97\/Eric_Clapton_OMCOMR.jpg',
        'genre' => 'Rock',
    ],
    [   
        'title' => 'Made in Japan',
        'author' => 'Deep purple',
        'year' => '1972',
        'poster' => 'https:\/\/images-na.ssl-images-amazon.com\/images\/I\/51rggtPgmRL.jpg',
        'genre' => 'Rock',
    ],
    [   
        'title' => 'And Justice for All',
        'author' => 'Metallica',
        'year' => '1988',
        'poster' => 'https:\/\/images-na.ssl-images-amazon.com\/images\/I\/81r3FVfNG3L._SY355_.jpg',
        'genre' => 'Metal',
    ],
    [   
        'title' => 'Hard Wired',
        'author' => 'Dave Weckl',
        'year' => '1994',
        'poster' => 'https:\/\/img.discogs.com\/KOBsqQwKiNKH-q927oHMyVdDzSo=\/fit-in\/596x596\/filters:strip_icc():format(jpeg):mode_rgb():quality(90)\/discogs-images\/R-6406665-1418464475-6120.jpeg.jpg',
        'genre' => 'Jazz',
    ],
    [   
        'title' => 'Bad',
        'author' => 'Michael Jackson',
        'year' => '1987',
        'poster' => 'https:\/\/m.media-amazon.com\/images\/I\/71K9CbNZPsL._SS500_.jpg',
        'genre' => 'Pop', 
    ],
];

header ('Content-Type: application/json');
echo json_encode($database);
?>

