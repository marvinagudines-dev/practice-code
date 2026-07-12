<?= $this->extend('layouts/all/layout') ?>

<?= $this->section('content') ?>

<div class="max-w-2xl mx-auto mt-5 mb-5">

    <form
        action="<?= base_url('auth/register-account') ?>"
        method="POST"
        class="mx-auto max-w-md space-y-4 rounded-lg border border-gray-300 bg-gray-100 p-6"
        autocomplete="off">

        <?= csrf_field() ?>

        <h1 class="text-4xl font-bold text-gray-700 text-center">
            Register Account
        </h1>

        <div>
            <label class="block text-sm font-medium text-gray-900" for="first_name">
                First Name
            </label>

            <input
                class="mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none"
                id="first_name"
                name="first_name"
                type="text"
                placeholder="John" 
                required/>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-900" for="last_name">
                Last Name
            </label>

            <input
                class="mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none"
                id="last_name"
                name="last_name"
                type="text"
                placeholder="Doe" 
                required/>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-900" for="email_address">
                Email Address
            </label>

            <input
                class="mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none"
                id="email_address"
                name="email_address"
                type="email"
                placeholder="example@gmail.com" 
                required/>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-900" for="password">
                Password
            </label>

            <input
                class="mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none password-input"
                id="password"
                name="password"
                type="password"
                placeholder="Password"
                pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{8,}"
                title="Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character."
                required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-900" for="confirm_password">
                Confirm Password
            </label>

            <input
                class="mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none password-input"
                id="confirm_password"
                name="confirm_password"
                type="password"
                placeholder="Confirm Password" 
                required/>
        </div>

        <div class="flex flex-col items-start gap-3">
            <label for="show_password" class="inline-flex items-center gap-3">
                <input
                    type="checkbox"
                    class="size-5 rounded border-gray-300 shadow-sm dark:border-gray-600 dark:bg-gray-900 dark:ring-offset-gray-900 dark:checked:bg-blue-600"
                    id="show_password" 
                    onclick="showPasswords()"/>

                <span class="font-medium text-gray-700 dark:text-gray-200"> Show Password </span>
            </label>

        </div>

        <button
            class="block w-full rounded-lg border border-blue-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition-colors hover:bg-transparent hover:text-indigo-600"
            type="submit">
            Login
        </button>
    </form>
</div>

<?= $this->endSection() ?>

