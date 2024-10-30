<?php
$data_pribadi = [
    'Nama' => 'Diki Sugiri',
    'Alamat' => 'Desa Cijagamulya, Kecamatan Ciawigebang, Kabupaten Kuningan',
    'Telepon' => '+62 813-2278-9164',
    'Email' => 'dikisugiri29@gmail.com'
];

$pengalaman = [
    ['Perusahaan' => 'PT. Jakartanotebook', 'Posisi' => 'Data Input', 'Tahun' => '2018 - 2021'],
    ['Perusahaan' => 'Segerr Indonesia', 'Posisi' => 'Crew Store', 'Tahun' => '2021 - 2023']
];

$keterampilan = ['Adobe Photoshop', 'Adobe Illustrator'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My CV - Diki Sugiri</title>

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="Cv.php">Diki Sugiri</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="Cv.php">My CV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container my-5">
        <h1 class="text-center mb-5">My CV</h1>

        <!-- Data Pribadi -->
        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-primary text-white">
                Data Pribadi
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <?php foreach ($data_pribadi as $key => $value): ?>
                        <li class="list-group-item">
                            <strong><?= $key ?>:</strong> <?= $value ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <!-- Pengalaman Kerja -->
        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-success text-white">
                Pengalaman Kerja
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <?php foreach ($pengalaman as $job): ?>
                        <li class="list-group-item">
                            <strong><?= $job['Perusahaan'] ?></strong> - <?= $job['Posisi'] ?> (<?= $job['Tahun'] ?>)
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <!-- Keterampilan -->
        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-info text-white">
                Keterampilan
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <?php foreach ($keterampilan as $skill): ?>
                        <li class="list-group-item"><?= $skill ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Diki Sugiri. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
