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

/* 
## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/

$paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat veritatis alias non corrupti odit pariatur minima quis voluptates unde aliquam tenetur, repellat necessitatibus magni quaerat labore? Maxime, ratione placeat perferendis eius nam asperiores sint dolore, quas nihil aspernatur explicabo cupiditate! Mollitia similique molestias eius magni. Est consequatur atque ut iure doloremque itaque placeat, dolorum officia perferendis quia, velit sint ab dicta, dolore cupiditate explicabo molestiae exercitationem? Aut officia, rem numquam quis dolore voluptate architecto illum laborum amet voluptas sit consectetur laboriosam quia excepturi nulla, unde asperiores, sapiente maxime optio natus exercitationem deleniti recusandae quasi nobis. Commodi quibusdam odio, neque atque natus est rem itaque ipsum! Nam voluptatem obcaecati in natus? Iure, aliquam. Sed mollitia earum eaque dolores nostrum, pariatur quam. Est maxime odit facere dignissimos doloremque iusto error nesciunt dolor laborum? Voluptate modi tenetur ex cupiditate asperiores in quibusdam, ipsam molestias a nam ratione impedit aperiam fugiat accusantium maxime sit eveniet hic, architecto autem omnis voluptas adipisci. Fuga est sit molestias rem harum laboriosam quaerat numquam ea! Quidem sapiente natus sit. Modi quisquam voluptatum praesentium, amet culpa libero, accusamus esse incidunt iure optio ullam cum totam illo temporibus quis eveniet vitae officia maxime. Hic ullam ea sequi delectus facilis molestiae.';

var_dump(explode(".", $paragraph));

/* 
## Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
*/

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

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

    <!-- Snack 6 -->
    <?php foreach ($db as $key => $person) :?>
        <?php if ($key === 'teachers') :?>
            <div style="background-color: gray;">
                <?php foreach ($person as $key => $value) :?>
                    <div>
                       <span><?php echo $value['name'] ?></span> 
                       <span><?php echo $value['lastname'] ?></span> 
                    </div>
                <?php endforeach;?>
            </div>
        <?php else :?>
            <div style="background-color: red;">
                <?php foreach ($person as $key => $value) :?>
                    <div>
                        <span><?php echo $value['name'] ?></span> 
                        <span><?php echo $value['lastname'] ?></span>
                    </div>
                    
                <?php endforeach;?>
            </div>
        <?php ?>
        <?php endif;?>
    <?php endforeach; ?>
    <!-- end Snack 6 -->

</body>
</html>