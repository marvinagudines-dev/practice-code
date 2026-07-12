<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?= $title ?? 'CodeIgniter4 Test Code' ?></title>

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/icons/web-icon.png') ?>">

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">

</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Navbar -->
    <?= $this->include('partials/users/navbar') ?>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-6 flex-1">

        <?= $this->include('partials/all/alert') ?>


        <?= $this->renderSection('content') ?>

    </main>

    <!-- Footer -->
    <?= $this->include('partials/all/footer') ?>

    <script>
        function showPasswords() {
            const passwordInputs = document.querySelectorAll('.password-input');

            passwordInputs.forEach(input => {
                input.type = input.type === 'password' ? 'text' : 'password'
            });
        }       
    </script>

</body>

</html>