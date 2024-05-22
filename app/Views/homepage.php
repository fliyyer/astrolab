<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Astrolab</title>
    <Link rel="stylesheet" href="<?= base_url() ?>css/styles.css">
</head>

<body>
    <?php include('partials/navbar.php'); ?>
    <main class="flex relative bg-[#CFC8BC] w-full">
        <div class="flex max-w-7xl items-center mx-auto h-full">
            <div class="w-1/2">
                <div class="flex items-center gap-3">
                    <span class="bg-[#E6FF03] px-2 rounded-3xl py-[2px]">NEW</span>
                    <p class="text-[#11190C] text-[15px] font-medium">END OF SEASON SALE! Discount UP TO 50% OFF</p>
                </div>
                <p class="text-[48px] font-medium">SELECT BY</p>
                <img src="<?= base_url('assets/header.png') ?>" alt="Astrolab">
                <p class="uppercase text-[20px] font-medium text-[#11190C]">ASTROLAB’s very own line of exciting goods. Offering different kinds of objects, from artist collaborations to functional daily goods, Select by Sonderlab is here not to replace; but to complete.</p>
                <a href="<?= base_url('?category=astro') ?>">
                    <button class="text-[#E6FF03] mt-44 bg-[#11190C] rounded-3xl px-4 py-2 font-semibold text-lg">SELECT BY ASTRO</button>
                </a>
            </div>
            <div class="w-1/2 relative">
                <img class="absolute h-full z-0" src="<?= base_url('assets/petir.png') ?>" alt="Petir Kuning">
                <img class="h-full z-50" src="<?= base_url('assets/orang.png') ?>" alt="Orang">
            </div>
        </div>
    </main>

    <!-- carrousel -->
    <section class="my-[50px]">
        <div class="flex gap-[15px] relative max-w-7xl mx-auto w-full">
            <div class="w-3/4">
                <img src="<?= base_url('assets/sec1.png') ?>" alt="">
            </div>
            <div class="w-1/4">
                <img class="h-full" src="<?= base_url('assets/sec2.png') ?>" alt="">
            </div>
        </div>
    </section>

    <!-- Brands -->
    <section>
        <h1 class="text-center text-xl text-[#11190C] font-semibold mb-[50px] underline">BRANDS</h1>
        <div class="grid mb-[50px] grid-cols-4 max-w-7xl mx-auto w-full">
            <img class="hover:scale-110 hover:rounded-xl transition-all duration-300" src="<?= base_url('assets/brands1.png') ?>" alt="">
            <img class="hover:scale-110 hover:rounded-xl transition-all duration-300" src="<?= base_url('assets/brands2.png') ?>" alt="">
            <img class="hover:scale-110 hover:rounded-xl transition-all duration-300" src="<?= base_url('assets/brands3.png') ?>" alt="">
            <img class="hover:scale-110 hover:rounded-xl transition-all duration-300" src="<?= base_url('assets/brands4.png') ?>" alt="">
            <img class="hover:scale-110 hover:rounded-xl transition-all duration-300" src="<?= base_url('assets/brands5.png') ?>" alt="">
            <img class="hover:scale-110 hover:rounded-xl transition-all duration-300" src="<?= base_url('assets/brands6.png') ?>" alt="">
            <img class="hover:scale-110 hover:rounded-xl transition-all duration-300" src="<?= base_url('assets/brands7.png') ?>" alt="">
            <img class="hover:scale-110 hover:rounded-xl transition-all duration-300" src="<?= base_url('assets/brands8.png') ?>" alt="">
        </div>
    </section>
    <!-- Category Highlight -->
    <section class="bg-[#F5F5F5] py-[30px]">
        <h1 class="text-center text-xl font-semibold text-[#11190C] underline">CATEGORY HIGHLIGHT</h1>
        <p class="text-center text-[#11190C] mt-2 font-medium text-[32px]">[WO]men SCENT</p>
        <div class="grid grid-cols-4 gap-4 max-w-7xl mx-auto w-full">
            <?php
            $cards = [
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
        <div class="flex justify-center mt-[50px] mx-auto">
            <a href="/womenscent"><button class="uppercase text-[#E6FF03] px-[30px] py-3 bg-[#11190C] rounded-[90px] text-xl font-semibold">View All</button></a>
        </div>
    </section>
    <!-- men/women -->
    <section class="max-w-7xl mx-auto grid grid-cols-2">
        <a href="/men" class="cursor-pointer hover:scale-105 duration-300">
            <img class="w-full h-[800px]" src="<?= base_url('assets/men.png') ?>" alt="Men">
        </a>
        <a href="/women" class="cursor-pointer hover:scale-105 duration-300">
            <img class="w-full h-[800px]" src="<?= base_url('assets/women.png') ?>" alt="Women">
        </a>
    </section>
    <section class="max-w-7xl flex mx-auto gap-4 py-[50px]">
        <div class="col-span-4">
            <img src="<?= base_url('assets/category5.png') ?>" alt="">
        </div>
        <div class="col-span-1">
            <img src="<?= base_url('assets/category6.png') ?>" alt="">
        </div>
    </section>
    <section class="pb-[50px]">
        <div class="grid grid-cols-3 max-w-7xl mx-auto w-full">
            <img src="<?= base_url('assets/img1.png') ?>" alt="">
            <img src="<?= base_url('assets/img2.png') ?>" alt="">
            <img src="<?= base_url('assets/img3.png') ?>" alt="">
        </div>
    </section>

    <section class="pb-[50px] grid grid-cols-3 gap-[15px] max-w-7xl mx-auto w-full">
        <div>
            <img src="<?= base_url('assets/img4.png') ?>" alt="">
            <h1 class="text-[#11190C] mt-[15px] text-[15px] font-semibold">Embracing Purity and Modernity: Sonderlab and Toko Didiyo's Exclusive "White Serenity" Ramadan Collection</h1>
            <p class="text-[#11190C] text-[12px]">Ramadhan has come, mirroring the successful previous raya, this time Toko Didiyo is back to embrace the purity and tranquillity, and came up with perfect pieces to be part of the exclusive...</p>
            <button class="underline text-[#11190C]">READ MORE</button>
        </div>
        <div>
            <img src="<?= base_url('assets/img4.png') ?>" alt="">
            <h1 class="text-[#11190C] mt-[15px] text-[15px] font-semibold">Embracing Purity and Modernity: Sonderlab and Toko Didiyo's Exclusive "White Serenity" Ramadan Collection</h1>
            <p class="text-[#11190C] text-[12px]">Ramadhan has come, mirroring the successful previous raya, this time Toko Didiyo is back to embrace the purity and tranquillity, and came up with perfect pieces to be part of the exclusive...</p>
            <button class="underline text-[#11190C]">READ MORE</button>
        </div>
        <div>
            <img src="<?= base_url('assets/img4.png') ?>" alt="">
            <h1 class="text-[#11190C] mt-[15px] text-[15px] font-semibold">Embracing Purity and Modernity: Sonderlab and Toko Didiyo's Exclusive "White Serenity" Ramadan Collection</h1>
            <p class="text-[#11190C] text-[12px]">Ramadhan has come, mirroring the successful previous raya, this time Toko Didiyo is back to embrace the purity and tranquillity, and came up with perfect pieces to be part of the exclusive...</p>
            <button class="underline text-[#11190C]">READ MORE</button>
        </div>
    </section>
    <?php include('partials/footer.php'); ?>
</body>

</html>