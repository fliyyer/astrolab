<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>css/styles.css">
    <title>Collection - Astrolab</title>
</head>

<body class="bg-[#CFC8BC]">
    <?php include('partials/navbar.php'); ?>
    <main class="flex flex-col max-w-7xl mx-auto my-[50px]">
        <section class="max-w-7xl mx-auto grid grid-cols-2">
            <a href="/men" class="cursor-pointer hover:scale-105 duration-300">
                <img class="w-full h-[800px]" src="<?= base_url('assets/men.png') ?>" alt="Men">
            </a>
            <a href="/women" class="cursor-pointer hover:scale-105 duration-300">
                <img class="w-full h-[800px]" src="<?= base_url('assets/women.png') ?>" alt="Women">
            </a>
        </section>
        <div class="grid grid-cols-3">
            <a href="<?= base_url('collection?category=goods-trinkets') ?>" class="cursor-pointer hover:scale-105 duration-300">
                <img src="<?= base_url('assets/col1.png') ?>" alt="">
            </a>
            <a href="<?= base_url('collection?category=exclusive-release') ?>" class="cursor-pointer hover:scale-105 duration-300">
                <img src="<?= base_url('assets/col2.png') ?>" alt="">
            </a>
            <a href="<?= base_url('collection?category=astro') ?>" class="cursor-pointer hover:scale-105 duration-300">
                <img src="<?= base_url('assets/col3.png') ?>" alt="">
            </a>
        </div>
    </main>
    <?php include('partials/footer.php'); ?>
</body>

</html>