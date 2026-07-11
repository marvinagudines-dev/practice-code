<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?= $title ?? 'CodeIgniter4 Test Code' ?></title>

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">

</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Navbar -->
    <?= $this->include('partials/navbar') ?>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-6 flex-1">

        <?= $this->renderSection('content') ?>

    </main>

    <!-- Footer -->
    <?= $this->include('partials/footer') ?>

    <!-- Flowbite JS -->
    <script src="<?= base_url('assets/js/flowbite.min.js') ?>"></script>

</body>

</html>