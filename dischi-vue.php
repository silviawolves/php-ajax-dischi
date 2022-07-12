<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi VUE</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- VUE -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    <!-- AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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

                    <!-- CICLO CON VUE PER STAMPARE SINGOLE CARD -->
                    <div class="col" v-for="(disco, i) in listaDischi" :key="i">
                        <div class="my-card">
                            <img :src="disco.poster" :alt="`immagine dell'album di ${disco.author}`">
                            <div class="title">{{ disco.title }}</div>
                            <div class="author">{{ disco.author }}</div>
                            <div class="year">{{ disco.year }}</div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>

    <!-- JS -->
    <script src="script.js"></script>

</body>
</html>