<?= $this->extend('layouts/all/layout') ?>

<?= $this->section('content') ?>

<div class="max-w-5xl mx-auto bg-white rounded-lg shadow p-8">

    <h1 class="text-4xl font-bold text-gray-800 mb-6">
        About the System
    </h1>

    <p class="text-gray-600 leading-8">
        The Inventory Management System is designed to help organizations
        efficiently manage inventory records, monitor stock levels, and simplify
        inventory-related operations.
    </p>

    <p class="text-gray-600 leading-8 mt-4">
        This system provides an easy-to-use interface for managing products,
        suppliers, stock transactions, and inventory reports while ensuring
        accurate and organized data.
    </p>

    <hr class="my-8">

    <h2 class="text-2xl font-semibold mb-4">
        Key Features
    </h2>

    <ul class="list-disc list-inside text-gray-600 space-y-2">
        <li>Product Management</li>
        <li>Inventory Tracking</li>
        <li>Stock In and Stock Out Monitoring</li>
        <li>Supplier Management</li>
        <li>Report Generation</li>
        <li>User Authentication</li>
    </ul>

    <hr class="my-8">

    <h2 class="text-2xl font-semibold mb-4">
        Technologies Used
    </h2>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

        <div class="bg-gray-100 p-4 rounded text-center">
            CodeIgniter 4
        </div>

        <div class="bg-gray-100 p-4 rounded text-center">
            PHP
        </div>

        <div class="bg-gray-100 p-4 rounded text-center">
            MySQL
        </div>

        <div class="bg-gray-100 p-4 rounded text-center">
            Tailwind CSS
        </div>

    </div>

</div>

<?= $this->endSection() ?>