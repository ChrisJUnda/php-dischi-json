<!-- PHP -->
<!-- /PHP -->


<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAD BUNNY'S ALBUMS</title>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- /Link Bootstrap -->


    <!-- Link css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Link css -->

</head>

<body class="bg-black">
    <div id="app" v-cloak>
        <header class="text-center  p-4">
            <h1 class="green-color ">{{title}}</h1>
        </header>
        <main class="p-5">
            <div class="container">
                <div class="row">
                    <div class="col-4 text-white" v-for="card in data">
                        <div class="text-center p-2">
                            <img :src="card.foto" alt="">
                            <div class="p-2 fw-bold">
                                {{card.nome_album}}
                            </div>
                            <div class="p-2 fw-light">
                                {{card.artista}}
                            </div>
                            <div class="p-2 fw-bold">
                                {{card.anno}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    </div>

    <!-- Script vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- /Script vue js -->

    <!-- Script axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- /Script axios -->

    <!-- Script main js -->
    <script src="./js/main.js"></script>
    <!-- /Script main js -->
</body>

</html>