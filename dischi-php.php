<?php 

include __DIR__ . '/db/db-dischi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi PHP</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div id="app">

        <!-- HEADER CON LOGO SPOTIFY  -->
        <header>
            <img src="img/logo-small.svg" alt="logo spotify">
        </header>

        <!-- CORPO CON CARD SINGOLI DISCHI -->
        <main>
            <div class="container py-5">
                <div class="row row-cols-5 gx-5 gy-3 mx-5 justify-content-center">

                    <!-- CICLO PER RIEMPIRE LE CARD CON LE INFORMAZIONI DEL DB PHP -->
                    <?php foreach ($arrayDischi as $disco) :
                        $immagine = $disco['poster'];
                        $titolo = $disco['title'];
                        $autore = $disco['author'];
                        $anno = $disco['year']; ?>

                        <div class="col">
                            <div class="my-card">
                                <img src="<?php echo $immagine ?>" alt="<?php echo "immagine dell'album di $autore" ?>">
                                <div class="title"><?php echo $titolo ?></div>
                                <div class="author"><?php echo $autore ?></div>
                                <div class="year"><?php echo $anno ?></div>
                            </div>
                        </div>

                    <?php endforeach ?>

                </div>
            </div>
        </main>

    </div>
</body>
</html>