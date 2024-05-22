<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>css/styles.css">
    <title>MEN - Astrolab</title>
</head>

<body class="bg-[#CFC8BC]">
    <?php include('partials/navbar.php'); ?>
    <section class="py-[50px]">
        <div class="grid grid-cols-2 max-w-7xl mx-auto w-full">
            <a href="<?= base_url('men?category=accessories') ?>" class="hover:scale-110 duration-300">
                <img src="<?= base_url('assets/men1.png') ?>" alt="Accessories">
            </a>
            <a href="<?= base_url('men?category=apparel') ?>" class="hover:scale-110 duration-300">
                <img src="<?= base_url('assets/men2.png') ?>" alt="Apparel">
            </a>
            <a href="<?= base_url('men?category=footwear') ?>" class="hover:scale-110 duration-300">
                <img src="<?= base_url('assets/men3.png') ?>" alt="Footwear">
            </a>
            <a href="<?= base_url('men?category=grooming') ?>" class="hover:scale-110 duration-300">
                <img src="<?= base_url('assets/men4.png') ?>" alt="">
            </a>
            <a href="<?= base_url('men?category=bags-wallets') ?>" class="hover:scale-110 duration-300">
                <img src="<?= base_url('assets/men5.png') ?>" alt="Bags & Walets">
            </a>
            <a href="<?= base_url('men?category=jewelry') ?>" class="hover:scale-110 duration-300">
                <img src="<?= base_url('assets/men6.png') ?>" alt="Jewelry">
            </a>
        </div>
    </section>
    <?php include('partials/footer.php'); ?>

</body>

</html>