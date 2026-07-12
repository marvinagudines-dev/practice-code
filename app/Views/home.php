<?= $this->extend('layouts/all/layout') ?>

<?= $this->section('content') ?>
<div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-lg text-center">
        <h2 class="text-3xl/tight font-bold text-gray-900 sm:text-4xl">
            Inventory Management System
        </h2>

        <p class="mt-4 text-lg text-pretty text-gray-700">
            Welcome to the Inventory Management System. This application helps
            manage products, monitor stock levels, track inventory movements,
            and generate reports efficiently.
        </p>
    </div>

    <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-3">
        <div class="rounded-lg border border-gray-200 p-6">
            <div class="inline-flex rounded-lg bg-gray-100 p-3 text-gray-700">
                <svg
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-6">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                </svg>
            </div>

            <h3 class="mt-4 text-lg font-semibold text-gray-900">
                Product Management
            </h3>

            <p class="mt-2 text-pretty text-gray-700">            
                Add, edit, update, and organize products in the inventory.
            </p>

        </div>

        <div class="rounded-lg border border-gray-200 p-6">
            <div class="inline-flex rounded-lg bg-gray-100 p-3 text-gray-700">
                <svg
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-6">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                </svg>
            </div>

            <h3 class="mt-4 text-lg font-semibold text-gray-900">              
                Stock Monitoring
            </h3>

            <p class="mt-2 text-pretty text-gray-700">
                Keep track of available stock and receive low-stock alerts.
            </p>
        </div>

        <div class="rounded-lg border border-gray-200 p-6">
            <div class="inline-flex rounded-lg bg-gray-100 p-3 text-gray-700">
                <svg
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-6">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 13.5V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 9.75V10.5" />
                </svg>
            </div>

            <h3 class="mt-4 text-lg font-semibold text-gray-900">             
                Reports
            </h3>

            <p class="mt-2 text-pretty text-gray-700">
                Generate inventory reports to support better decision-making.   
            </p>
        </div>
    </div>
</div>

<?= $this->endSection() ?>