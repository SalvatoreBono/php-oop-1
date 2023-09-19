<?php
/* importare il file classes */
require_once __DIR__ . "/models/Movie.php";

/* creiamo l'istanza 1 */
/*mettere l'argomento obbligatorio*/
$movie1 = new Movie("Oppenheimer");
$movie1->releaseDate = "23 agosto 2023";
$movie1->duration = "3 ore";

var_dump($movie1);
echo $movie1->getFullInfoMovie();

/* creiamo l'istanza 2 */
$movie2 = new Movie("Spider-Man: Across the Spider-Verse");
$movie2->releaseDate = "2 giugno 2023 ";
$movie2->duration = "2h 20m";
var_dump($movie2);
echo $movie2->getFullInfoMovie();


/* creiamo l'istanza 3 */
$movie3 = new Movie("The Bear");
$movie3->releaseDate = "23 giugno 2022 ";
$movie3->duration = "18 puntate";
var_dump($movie3);
echo $movie3->getFullInfoMovie();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div id="app"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>

</html>