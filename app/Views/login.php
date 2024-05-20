<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>css/styles.css">
    <title>Login - Astrolab</title>
</head>

<body class="bg-[#CFC8BC]">
    <?php include('partials/navbar.php'); ?>
    <main class="h-[850px] relative flex items-center justify-center">
        <img class="w-full absolute h-[850px] object-cover" src="<?= base_url('assets/login.png') ?>" alt="Petir">
        <!-- Form Login -->
        <div class="relative z-10 px-12 py-16 rounded-lg shadow-lg w-full max-w-md" style="background: rgba(245, 245, 245, 0.80);">
            <h2 class="text-[32px] uppercase font-bold mb-6 text-[#11190C] text-center">Login</h2>
            <?php if (session()->has('error')) : ?>
                <div class="text-red-600 font-medium text-center alert-danger">
                    <?= session('error') ?>
                </div>
            <?php endif; ?>
            <form action="<?= site_url('login') ?>" method="post">
                <div class="mb-4">
                    <input type="email" id="email" placeholder="Email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-[14px]">
                    <input type="password" id="password" placeholder="Password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <a href="/forgot-password" class="text-[#11190C] text-[15px] font-semibold">Forgot Password ?</a>
                <div class="flex flex-col justify-center">
                    <button class="bg-[#11190C] w-36 mx-auto px-12 py-2 my-6  rounded-[90px] text-[#E6FF03] text-[15px] font-bold">Submit</button>
                    <a href="/register" class="text-[#11190C] text-[15px] mt-[20px] mx-auto text-center">Don’t Have an account ? <span class="font-semibold">Register</span></a>
                </div>
            </form>
        </div>
    </main>
    <?php include('partials/footer.php'); ?>
</body>

</html>