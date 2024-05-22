<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>css/styles.css">
    <title>WomenScent - Astrolab</title>
</head>

<body class="bg-[#CFC8BC]">
    <?php include('partials/navbar.php'); ?>
    <main class="bg-[#F5F5F5] py-[30px]">
        <p class="text-center text-[#11190C] mb-10 font-medium text-[32px]">[WO]men SCENT</p>
        <div class="grid grid-cols-4 gap-4 max-w-7xl mx-auto w-full">
            <?php
            $cards = [
                ['image' => 'assets/category1.png', 'title' => 'BASTILLE FRAGRANCES', 'subtitle' => 'Hors - Piste', 'price' => 'IDR 151.200'],
                ['image' => 'assets/category2.png', 'title' => 'BASTILLE FRAGRANCES', 'subtitle' => 'Hors - Piste', 'price' => 'IDR 151.200'],
                ['image' => 'assets/category3.png', 'title' => 'BASTILLE FRAGRANCES', 'subtitle' => 'Hors - Piste', 'price' => 'IDR 151.200'],
                ['image' => 'assets/category4.png', 'title' => 'BASTILLE FRAGRANCES', 'subtitle' => 'Hors - Piste', 'price' => 'IDR 151.200'],
                ['image' => 'assets/category1.png', 'title' => 'BASTILLE FRAGRANCES', 'subtitle' => 'Hors - Piste', 'price' => 'IDR 151.200'],
                ['image' => 'assets/category2.png', 'title' => 'BASTILLE FRAGRANCES', 'subtitle' => 'Hors - Piste', 'price' => 'IDR 151.200'],
                ['image' => 'assets/category3.png', 'title' => 'BASTILLE FRAGRANCES', 'subtitle' => 'Hors - Piste', 'price' => 'IDR 151.200'],
                ['image' => 'assets/category4.png', 'title' => 'BASTILLE FRAGRANCES', 'subtitle' => 'Hors - Piste', 'price' => 'IDR 151.200'],
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