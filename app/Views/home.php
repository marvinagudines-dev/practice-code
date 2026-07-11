<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>

<div class="max-w-7xl mx-auto">

    <!-- Hero Section -->
    <div class="bg-white rounded-lg shadow p-8">

        <h1 class="text-4xl font-bold text-gray-800">
            Inventory Management System
        </h1>

        <p class="mt-4 text-gray-600">
            Welcome to the Inventory Management System. This application helps
            manage products, monitor stock levels, track inventory movements,
            and generate reports efficiently.
        </p>

        <div class="mt-6">
            <a href="#"
                class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg">
                Get Started
            </a>
        </div>

    </div>

    <!-- Features -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">

        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-2">
                Product Management
            </h2>

            <p class="text-gray-600">
                Add, edit, update, and organize products in the inventory.
            </p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-2">
                Stock Monitoring
            </h2>

            <p class="text-gray-600">
                Keep track of available stock and receive low-stock alerts.
            </p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-2">
                Reports
            </h2>

            <p class="text-gray-600">
                Generate inventory reports to support better decision-making.
            </p>
        </div>

    </div>

</div>

<?= $this->endSection() ?>