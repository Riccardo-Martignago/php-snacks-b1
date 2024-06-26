<?php
    $posts = [
        '01/03/2020' => [
            [
                'title' => 'Post 7',
                'author' => 'Luca Rossi',
                'text' => 'Testo post 7'
            ],
            [
                'title' => 'Post 8',
                'author' => 'Luca Rossi',
                'text' => 'Testo post 8'
            ]
        ],
        '14/04/2020' => [
            [
                'title' => 'Post 9',
                'author' => 'Luca Rossi',
                'text' => 'Testo post 9'
            ],
            [
                'title' => 'Post 11',
                'author' => 'Luca Rossi',
                'text' => 'Testo post 11'
            ]
        ],
        '22/06/2020' => [
            [
                'title' => 'Post 10',
                'author' => 'Luca Rossi',
                'text' => 'Testo post 10'
            ],
            [
                'title' => 'Post 11',
                'author' => 'Luca Rossi',
                'text' => 'Testo post 11'
            ],
            [
                'title' => 'Post 12',
                'author' => 'Luca Rossi',
                'text' => 'Testo post 12'
            ]
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises</title>
</head>
<body>
    <?php   
        foreach ($posts as $date => $postArray) {
            echo "<p>" . $date . " ";
            foreach($postArray as $data) {
                echo $data['title'] . " ";
                echo $data['author'] . " ";
                echo $data['text'] . "</p>";
            }
        } 
    ?>
</body>
</html>