<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>css/styles.css">
    <title>MEN Grooming & Beauty - Astrolab</title>
</head>

<body class="bg-[#CFC8BC]">
    <?php include('partials/navbar.php'); ?>
    <main class="bg-[#F5F5F5] py-[30px]">
        <p class="text-center text-[#11190C] mb-10 font-medium text-[32px]">GROOMING & BEAUTY</p>
        <div class="grid grid-cols-2 lg:p-0 p-2 md:grid-cols-4 gap-4 max-w-7xl mx-auto w-full">
            <?php
            $cards = [
                ['image' => 'assets/gb1.png', 'title' => 'BASTILLE FRAGRANCES', 'subtitle' => 'Hors - Piste', 'price' => 'IDR 151.200'],
                ['image' => 'assets/gb2.png', 'title' => 'BASTILLE FRAGRANCES', 'subtitle' => 'Hors - Piste', 'price' => 'IDR 151.200'],
                ['image' => 'assets/gb3.png', 'title' => 'BASTILLE FRAGRANCES', 'subtitle' => 'Hors - Piste', 'price' => 'IDR 151.200'],
                ['image' => 'assets/gb4.png', 'title' => 'BASTILLE FRAGRANCES', 'subtitle' => 'Hors - Piste', 'price' => 'IDR 151.200'],
                ['image' => 'assets/gb5.png', 'title' => 'BASTILLE FRAGRANCES', 'subtitle' => 'Hors - Piste', 'price' => 'IDR 151.200'],
                ['image' => 'assets/gb6.png', 'title' => 'BASTILLE FRAGRANCES', 'subtitle' => 'Hors - Piste', 'price' => 'IDR 151.200'],
                ['image' => 'assets/gb7.png', 'title' => 'BASTILLE FRAGRANCES', 'subtitle' => 'Hors - Piste', 'price' => 'IDR 151.200'],
                ['image' => 'assets/gb8.png', 'title' => 'BASTILLE FRAGRANCES', 'subtitle' => 'Hors - Piste', 'price' => 'IDR 151.200'],
            ];
            foreach ($cards as $card) {
                echo view('partials/card_category', $card);
            }
            ?>
        </div>
    </main>
    <?php include('partials/footer.php'); ?>

</body>

</html>