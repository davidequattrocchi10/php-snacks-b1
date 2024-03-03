<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->
<?php
$matches = [
    ['home' => 'Olimpia Milano', 'away' => 'Cantu', 'points_home' => '55', 'points_away' => '60'],
    ['home' => 'Orlandina', 'away' => 'Barcellona', 'points_home' => '77', 'points_away' => '82'],
    ['home' => 'Varese', 'away' => 'Bologna', 'points_home' => '69', 'points_away' => '67'],
    ['home' => 'Sassari', 'away' => 'Pistoia', 'points_home' => '98', 'points_away' => '100'],
    ['home' => 'Reggiana', 'away' => 'Scafati', 'points_home' => '102', 'points_away' => '87']
];
?>
<!-- Snack 3 
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
-->
<?php
$posts = [
    '02/03/2021' => ['Title' => 'Sport', 'Author' => 'Davide', 'Text' => 'Sport is life'],
    '15/03/2021' => ['Title' => 'Medicine', 'Author' => 'Angela', 'Text' => 'Medicine in 2021'],
    '01/09/2021' => ['Title' => 'Healthy', 'Author' => 'Pippo', 'Text' => 'Eat and Drink'],
    '01/07/2022' => ['Title' => 'Study', 'Author' => 'Marco', 'Text' => 'Improve study'],
    '14/04/2022' => ['Title' => 'Animals', 'Author' => 'Peppe', 'Text' => 'Dogs and Cat']
];
?>
<!-- Snack 4 
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
-->
<?php
$numbers = [];
while (count($numbers) < 15) {
    $number = rand(1, 100);
    if (!in_array($number, $numbers)) {
        $numbers[] = $number;
    }
}
?>
<!-- Snack 5 
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
-->
<?php
$paragraph = 'The sun was setting, casting a warm glow over the city. Buildings stood tall against the orange and pink sky, 
their windows reflecting the last light of day. People were hurrying home, their shadows long and stretched out on the pavement. 
The air was filled with the sounds of traffic, the occasional laughter, and the distant hum of life. As the night began to take over, 
the city transformed, ready to tell another set of stories.';
$sentenceParagraph = explode('.', $paragraph);
?>
<!-- Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
-->
<?php
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
<!-- Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, 
Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
-->
<?php
$students = [
    [
        "name" => "Luca",
        "lastname" => "Pesce",
        "votes" => [7, 9, 8, 8, 9, 7]
    ],
    [
        "name" => "Sara",
        "lastname" => "Poli",
        "votes" => [6, 5, 8, 5, 5, 9]
    ],
    [
        "name" => "Cristina",
        "lastname" => "D'avena",
        "votes" => [5, 6, 3, 9, 5, 6]
    ],
    [
        "name" => "Davide",
        "lastname" => "Quattrocchi",
        "votes" => [8, 7, 7, 7, 6, 9]
    ]
];

// var_dump(array_sum($students[1]['votes']) / count($students[1]['votes']))


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SNACKS</title>

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />


</head>

<body>
    <h2>Snack 1</h2>
    <!-- foreach  classic way -->
    <?php foreach ($matches as $match) { ?>
        <span>
            <?php echo $match["home"] . " - " . $match["away"] . " | " . $match["points_home"] . " - " . $match["points_away"]; ?>
        </span> <br>
    <?php } ?>
    <br>
    <!-- same way but more clear  -->
    <?php foreach ($matches as $match) : ?>
        <span>
            <?php echo $match["home"] . " - " . $match["away"] . " | " . $match["points_home"] . " - " . $match["points_away"]; ?>
        </span> <br>
    <?php endforeach; ?>

    <!-- Snack 3  -->
    <h2>Snack 3</h2>
    <?php foreach ($posts as $key => $post) : ?>
        <h4> <?php echo $key; ?></h4>
        <?php foreach ($post as $info => $value) : ?>
            <span> <?php echo $info . " => " . $value ?> </span> <br>
        <?php endforeach; ?>
    <?php endforeach; ?>

    <!-- Snack 4  -->
    <h2>Snack 4</h2>
    <span> Numbers: </span>
    <?php foreach ($numbers as $number) : ?>
        <span><?php echo $number ?> </span>
    <?php endforeach; ?>

    <!-- Snack 5  -->
    <h2>Snack 5</h2>
    <?php foreach ($sentenceParagraph as $sentence) :  ?>
        <!-- php echo forma abbreviata -->
        <p> <?= $sentence ?> </p>
        <!-- php echo forma estesa -->
        <p> <?php echo $sentence ?> </p>
    <?php endforeach; ?>

    <!-- Snack 6  -->
    <h2>Snack 6</h2>
    <?php foreach ($db as $category => $list) :  ?>
        <div class=" <?php echo $category === 'teachers' ? 'bg-success' : 'bg-secondary' ?>">
            <?php foreach ($list as $employee) : ?>
                <span> <?= $employee['name'] . " " . $employee['lastname']  ?> </span>
                <br>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>

    <!-- Snack 6  -->
    <h2>Snack 7</h2>
    <?php foreach ($students as $student) {
        echo '<div class="card bg-light">';
        echo $student['name'] . " " . $student['lastname'] . " votes average  -> " . array_sum($student['votes']) / count($student['votes']);
        echo '</div>';
    } ?>






</body>

</html>
<style>
    h2 {
        padding: 1rem;
    }
</style>