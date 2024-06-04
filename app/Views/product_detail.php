<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>css/styles.css">
    <title> Detail Product - Astrolab</title>
</head>

<body class="bg-[#CFC8BC]">
    <?php include('partials/navbar.php'); ?>
    <main class="bg-[#F5F5F5] py-[30px]">
        <div class="grid grid-cols-2 max-w-7xl gap-10 mx-auto w-full">
            <img src="<?= base_url('assets/d1.png') ?>" alt="">
            <div class="text-[#11190C]">
                <p class="text-2xl font-bold">Toko Didiyo</p>
                <p class="mt-3">Baloon Sleeve Shirt Navy</p>
                <p class="xl mt-12 font-bold">EDITOR’S NOTES</p>
                <p class="mt-3">Masou Atelier for Sonderlab proudly presents an exclusive line that serves as a testament to the inherent beauty dwelling within every soul. This collection is a celebration of unique and irreplaceable essence, poised to bloom and inspire the world. <br class="mt-12"> Shirt with a puffy sleeve and signature Masou prints.</p>
                <p class="xl mt-12 font-bold">DETAILS & CARE</p>
                <ul class="list-disc ml-5 mt-3">
                    <li>Material :</li>
                    <li>Care Instruction : Dry Clean Only</li>
                </ul>
                <p class="xl mt-5 font-bold">SIZE GUIDE</p>
                <div class="text-[#11190C] flex gap-10 mt-2 text-base">
                    <div class="flex flex-col">
                        <p class="font-bold">SIZE</p>
                        <p>ALL SIZE</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="font-bold">WAIST</p>
                        <p>108CM</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="font-bold">LENGTH</p>
                        <p>64CM</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="font-bold">BUST</p>
                        <p>64CM</p>
                    </div>
                </div>
                <a href="/carts">
                    <button class="w-full bg-[#11190C] text-[#E6FF03] font-bold py-3 mt-10">Add to cart</button>
                </a>
            </div>
        </div>
        <div class="grid grid-cols-4 max-w-7xl gap-10 mx-auto w-full mt-10">
            <?php
            $cards = [
                ['image' => 'assets/d2.png', 'title' => 'BASTILLE FRAGRANCES', 'subtitle' => 'Hors - Piste', 'price' => 'IDR 151.200'],
                ['image' => 'assets/d3.png', 'title' => 'BASTILLE FRAGRANCES', 'subtitle' => 'Hors - Piste', 'price' => 'IDR 151.200'],
                ['image' => 'assets/d4.png', 'title' => 'BASTILLE FRAGRANCES', 'subtitle' => 'Hors - Piste', 'price' => 'IDR 151.200'],
                ['image' => 'assets/d5.png', 'title' => 'BASTILLE FRAGRANCES', 'subtitle' => 'Hors - Piste', 'price' => 'IDR 151.200'],
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