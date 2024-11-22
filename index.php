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
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-dark text-light">
    <!-- playlist header -->
    <header class="container-fluid">
        <div class=" row">
            <div class=" col-5 text-center">
                <img class="m-2 p-5" src="/logo.jpeg" alt="playlist image" class="D img-fluid" />
                <div class=" d-flex gap-3 p-2 m 2 ">

                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-play-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-heart" viewBox="0 0 16 16">
                        <path
                            d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-three-dots" viewBox="0 0 16 16">
                        <path
                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                    </svg>

                </div>
            </div>
            <div class="col align-content-center">
                <div>
                    <p>
                        Playlist
                    </p>
                    <h1> Daily Mix </h1>
                    <p>This a daily mix combined with your favorite songs and songs we'd think you'd like. All these
                        songs are recommended personally on your tastes!</p>
                </div>

            </div>
    </header>
    <!-- playlist image -->
    <!-- playlist information -->
    <!-- Action buttons -->
    <!-- Song information row -->
    <!-- Songs -->
    <div class="row border">
        <small class="col-1">#</small>
        <small class="col">Title</small>
        <small class="col-2">Album</small>
        <small class="col-2">Artist</small>
        <small class="col-2"><i class="bi bi-clock-fill"></i></small>
    </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>