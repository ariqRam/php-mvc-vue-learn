<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'] ?></title>

    <link rel="stylesheet" href="<?= BASEURL ?>/css/bootstrap.css">
</head>

<body>
    <nav id="nav" class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL ?>">MyMVC Journey</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= BASEURL ?>/home" :click="isActive = 1">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL ?>/about" :click="isActive = 2">About</a>
                    </li>
                    <li class="nav-item" :class="{ active: isActive === 3}">
                        <a class="nav-link" href="<?= BASEURL ?>/mahasiswa" :click="isActive = 3">Mahasiswa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
