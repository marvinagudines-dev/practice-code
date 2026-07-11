<?php
    $page = service('uri')->getSegment(1);
?>

<nav class="bg-neutral-primary w-full z-20 top-0 start-0 border-b border-default">

    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-xl text-heading font-semibold whitespace-nowrap"> Steph Marvin </span>
        </a>

        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-default rounded-base bg-neutral-secondary-soft md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-neutral-primary">

                <li>
                    <a href="/" class="block py-2 px-3 text-heading rounded 
                    <?= $page == '' ? 'text-blue-600 font-bold' : 'text-gray-700 hover:text-blue-600' ?>"> Home </a>
                </li>

                <li>
                    <a href="/about" class="block py-2 px-3 text-heading rounded <?= $page == 'about' ? 'text-blue-600 font-bold' : 'text-gray-700 hover:text-blue-600' ?>"> About </a>
                </li>

                <li>
                    <a href="/login" class="block py-2 px-3 text-heading rounded <?= $page == 'login' ? 'text-blue-600 font-bold' : 'text-gray-700 hover:text-blue-600' ?>"> Login </a>
                </li>
            </ul>
        </div>
    </div>
</nav>