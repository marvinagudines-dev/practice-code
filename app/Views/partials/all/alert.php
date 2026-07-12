<?php if (session()->getFlashdata('status')): ?>
    <div
        class="fixed top-20 right-10 z-50 w-full max-w-sm"
        role="alert"
        id="alertNotification"
    >
        <div class="rounded-lg border <?= session()->getFlashdata('alertStyle') ?> p-4 shadow-lg">
            <strong class="block font-medium <?= session()->getFlashdata('alertText') ?>">
                <?= session()->getFlashdata('alertTitle') ?>
            </strong>

            <p class="mt-1 text-sm <?= session()->getFlashdata('alertText') ?>">
                <?= session()->getFlashdata('message') ?>
            </p>
        </div>
    </div>
<?php endif; ?>

<script>
     const alert = document.getElementById('alertNotification');

        setTimeout(() => {
            if (alert) {
                alert.classList.add('hidden');
            }
        }, 3000);
</script>