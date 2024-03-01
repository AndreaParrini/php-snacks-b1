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
]


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


</body>
</html>