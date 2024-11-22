<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="styles/stylesheet.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-dark text-light">
    <!-- playlist header -->
    <header class="container-fluid">
        <!-- playlist image -->
        <img src="/images/placeholder.jpg" alt="playlist image" class="img-fluid" />
        <!-- playlist information -->
        <!-- Action buttons -->
        <!-- Song information row -->
    </header>
    <!-- Songs -->
    <main class="container-fluid" id="songs">

        <?php
        include 'songs.php';
        $songs = [
            [
                'cover' => 'images/Marca_Registrada.jpeg',
                'title' => 'Clausurado',
                'album' => 'EVO LUXURY 2',
                'artist' => 'Grupo Marca Registrada, Junior H',
                'duration' => '3:06',
            ],
            [
                'cover' => 'images/Junior_H',
                'title' => 'Las Noches',
                'album' => '$AD BOYZ 4 LIFE II',
                'artist' => 'Junior',
                'duration' => '3:46',
            ]

        ];

        ?>
    </main>

    <!-- Media controls -->
    <footer class="footer fixed-bottom bg-dark">
        <div class="text-center">
            <!-- shuffle -->
            <button type="button" class="btn"><i class="bi bi-shuffle text-secondary"></i></button>
            <!-- back -->
            <button type="button" class="btn"><i class="bi bi-skip-start-fill text-white"></i></button>
            <!--resume/pause -->
            <button type="button" class="btn btn-play" arial-label="Play/Pause"><i class="bi bi-play-fill text-white"></i></button>
            <!-- skip forward -->
            <button type="button" class="btn"><i class="bi bi-skip-end-fill text-white"></i></button>
            <!-- repeat -->
            <button type="button" class="btn"><i class="bi bi-arrow-repeat text-secondary"></i></button>
        </div>

        <!-- Progress bar -->
        <div class="container text-center pb-3">
            <div class="row align-items-center ">
                <small class="col-2 text-end">00:00</small>
                <div class="progress col " style="height: 5px">
                    <div class=" progress-bar" style="width:0%  "></div>
                </div>
                <small class="col-2 text-start">00:00</small>
            </div>
        </div>
    </footer>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
</body>

</html>