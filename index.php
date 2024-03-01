<?php
/* 
## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60
*/

$matches = [
    [
        'teamAway' => 'Team Away 1',
        'teamHome' => 'Team Home 1',
        'points_teamAway' => 80,
        'points_teamHome' => 88,
    ],
    [
        'teamAway' => 'Team Away 2',
        'teamHome' => 'Team Home 2',
        'points_teamAway' => 65,
        'points_teamHome' => 92,
    ],
    [
        'teamAway' => 'Team Away 3',
        'teamHome' => 'Team Home 3',
        'points_teamAway' => 78,
        'points_teamHome' => 62,
    ],
    [
        'teamAway' => 'Team Away 4',
        'teamHome' => 'Team Home 4',
        'points_teamAway' => 66,
        'points_teamHome' => 64,
    ],
    [
        'teamAway' => 'Team Away 5',
        'teamHome' => 'Team Home 5',
        'points_teamAway' => 63,
        'points_teamHome' => 79,
    ]
    ];

/* 
## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
*/

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

/* foreach ($posts as $key => $value) {
    var_dump($key);
    foreach ($value as $ke => $post) {
        foreach ($post as $key => $info) {
            var_dump($key, $info);
        }
    }
} */

/* 
## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

$numbers = [];
while(count($numbers) < 15){
    $numb = rand(1, 15);
    /* var_dump($numb); */
    if(!in_array($numb, $numbers)){
        $numbers[] = $numb;
        /* var_dump($numbers); */
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks B1</title>
</head>
<body>
    <!-- Snack 1 -->
    <?php foreach ($matches as $match) : ?>
        <div>
            <span><?php echo $match['teamAway']?></span> -
            <span><?php echo $match['teamHome']?></span> | 
            <span><?php echo $match['points_teamAway']?></span> -
            <span><?php echo $match['points_teamHome']?></span>
        </div> 
    <?php endforeach; ?>
    <!-- end Snack 1 -->

    <!-- Snack 3 -->
    <?php foreach ($posts as $key => $allPostOfDay) {?>
        <div style="color: red; margin: 5px 0;"> <?php echo $key ?></div>
        <?php foreach ($allPostOfDay as $singlePost) {?>
            <div style="margin: 5px 0;">
            <?php foreach ($singlePost as $key => $post) {?>
                <div>
                   <span style="color: green;"><?php echo $key ?></span>:
                   <span><?php echo $post ?></span>
                </div>
            <?php }; ?>
            </div>
        <?php }; ?>

    <?php }; ?>
    <!-- end Snack 3 -->


</body>
</html>