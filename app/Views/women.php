<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>css/styles.css">
    <title>Women - Astrolab</title>
</head>

<body class="bg-[#CFC8BC]">
    <?php include('partials/navbar.php'); ?>
    <section class="py-[50px]">
        <div class="grid grid-cols-2 max-w-7xl mx-auto w-full">
            <a href="<?= base_url('women?category=accessories') ?>" class="hover:scale-110 duration-300">
                <img src="<?= base_url('assets/women1.png') ?>" alt="Accessories">
            </a>
            <a href="<?= base_url('women?category=apparel') ?>" class="hover:scale-110 duration-300">
                <img src="<?= base_url('assets/women2.png') ?>" alt="Apparel">
            </a>
            <a href="<?= base_url('women?category=footwear') ?>" class="hover:scale-110 duration-300">
                <img src="<?= base_url('assets/women3.png') ?>" alt="Footwear">
            </a>
            <a href="<?= base_url('women?category=grooming') ?>" class="hover:scale-110 duration-300">
                <img src="<?= base_url('assets/women4.png') ?>" alt="">
            </a>
            <a href="<?= base_url('women?category=bags-wallets') ?>" class="hover:scale-110 duration-300">
                <img src="<?= base_url('assets/women5.png') ?>" alt="Bags & Walets">
            </a>
            <a href="<?= base_url('women?category=jewelry') ?>" class="hover:scale-110 duration-300">
                <img src="<?= base_url('assets/women6.png') ?>" alt="Jewelry">
            </a>
        </div>
    </section>
    <?php include('partials/footer.php'); ?>

</body>

</html>