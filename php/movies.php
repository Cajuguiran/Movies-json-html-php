<?php
    header('Access-Control-Allow-Origin: *');

    $movies = [
        [   
            "img" => "Plane.jpg",
            "title" => "Plane",
            "director" => "Jean-François Richet",
            "artist" => "Gerard James Butler",
            "country" => "United States of America",
            "year" => "2023",
            "duration" => "107 min",
            "genre" => ["Thriller","Action","Adventure","Mystery"]
        ],
        [
            "img" => "Black.jpg",
            "title" => "Black Adam",
            "director" => "Jaume Collet-Serra",
            "artist" => "Dwayne Douglas Johnson",
            "country" => "United States of America",
            "year" => "2022",
            "duration" => "125 min",
            "genre" => ["Sci-Fi","Action","Fantasy","Thriller"]
        ],
        [
            "img" => "Venom.jpg",
            "title" => "Venom: Let There Be Carnage",
            "director" => "Andrew Serkis",
            "artist" => "Edward Thomas Hardy",
            "country" => "United States of America",
            "year" => "2021",
            "duration" => "97 min",
            "genre" => ["Thriller","Action","Adventure","Sci-Fi"]
        ],
        [
            "img" => "Dolittle.jpg",
            "title" => "Dolittle",
            "director" => "Stephen Gaghan",
            "artist" => "Robert John Downey Jr.",
            "country" => "United States of America",
            "year" => "2020",
            "duration" => "101 min",
            "genre" => ["Comedy","Fantasy","Adventure","Family"]
        ],
        [
            "img" => "JW3.jpg",
            "title" => "John Wick: Chapter 3 - Parabellum",
            "director" => "Chad Stahelski",
            "artist" => "Keanu Reeves",
            "country" => "United States of America",
            "year" => "2019",
            "duration" => "130 min",
            "genre" => ["Thriller","Action","Crime","Mystery"]
        ],
        [   
            "img" => "bee.jpg",
            "title" => "Bumblebee",
            "director" => "Travis Knight",
            "artist" => "Hailee Steinfeld",
            "country" => "United States of America",
            "year" => "2018",
            "duration" => "114 min",
            "genre" => ["Science Fiction","Action","Adventure","Thriller"]
        ]

    ];

    $data = json_encode($movies);
    echo $data;
    
?>