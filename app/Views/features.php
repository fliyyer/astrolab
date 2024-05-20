<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>css/styles.css">
    <title>Features - Astrolab</title>
</head>

<body class="bg-[#CFC8BC]">
    <?php include('partials/navbar.php'); ?>
    <main>
        <section class="pb-[50px] grid grid-cols-3 gap-[15px] max-w-7xl mx-auto w-full">
            <!-- Card 1 -->
            <div>
                <img src="<?= base_url('assets/img4.png') ?>" alt="">
                <h1 class="text-[#11190C] mt-[15px] text-[15px] font-semibold">Embracing Purity and Modernity: Sonderlab and Toko Didiyo's Exclusive "White Serenity" Ramadan Collection</h1>
                <p class="text-[#11190C] text-[12px]">Ramadhan has come, mirroring the successful previous raya, this time Toko Didiyo is back to embrace the purity and tranquillity, and came up with perfect pieces to be part of the exclusive...</p>
                <button class="underline text-[#11190C]">READ MORE</button>
            </div>
            <!-- Card 2 -->
            <div>
                <img src="<?= base_url('assets/img4.png') ?>" alt="">
                <h1 class="text-[#11190C] mt-[15px] text-[15px] font-semibold">Embracing Purity and Modernity: Sonderlab and Toko Didiyo's Exclusive "White Serenity" Ramadan Collection</h1>
                <p class="text-[#11190C] text-[12px]">Ramadhan has come, mirroring the successful previous raya, this time Toko Didiyo is back to embrace the purity and tranquillity, and came up with perfect pieces to be part of the exclusive...</p>
                <button class="underline text-[#11190C]">READ MORE</button>
            </div>
            <!-- Card 3 -->
            <div>
                <img src="<?= base_url('assets/img4.png') ?>" alt="">
                <h1 class="text-[#11190C] mt-[15px] text-[15px] font-semibold">Embracing Purity and Modernity: Sonderlab and Toko Didiyo's Exclusive "White Serenity" Ramadan Collection</h1>
                <p class="text-[#11190C] text-[12px]">Ramadhan has come, mirroring the successful previous raya, this time Toko Didiyo is back to embrace the purity and tranquillity, and came up with perfect pieces to be part of the exclusive...</p>
                <button class="underline text-[#11190C]">READ MORE</button>
            </div>
            <!-- Card 4 -->
            <div>
                <img src="<?= base_url('assets/f1.png') ?>" alt="">
                <h1 class="text-[#11190C] mt-[15px] text-[15px] font-semibold">Embracing Purity and Modernity: Sonderlab and Toko Didiyo's Exclusive "White Serenity" Ramadan Collection</h1>
                <p class="text-[#11190C] text-[12px]">Ramadhan has come, mirroring the successful previous raya, this time Toko Didiyo is back to embrace the purity and tranquillity, and came up with perfect pieces to be part of the exclusive...</p>
                <button class="underline text-[#11190C]">READ MORE</button>
            </div>
            <!-- Card 5 -->
            <div>
                <img src="<?= base_url('assets/f2.png') ?>" alt="">
                <h1 class="text-[#11190C] mt-[15px] text-[15px] font-semibold">Embracing Purity and Modernity: Sonderlab and Toko Didiyo's Exclusive "White Serenity" Ramadan Collection</h1>
                <p class="text-[#11190C] text-[12px]">Ramadhan has come, mirroring the successful previous raya, this time Toko Didiyo is back to embrace the purity and tranquillity, and came up with perfect pieces to be part of the exclusive...</p>
                <button class="underline text-[#11190C]">READ MORE</button>
            </div>
            <!-- Card 6 -->
            <div>
                <img src="<?= base_url('assets/f3.png') ?>" alt="">
                <h1 class="text-[#11190C] mt-[15px] text-[15px] font-semibold">Embracing Purity and Modernity: Sonderlab and Toko Didiyo's Exclusive "White Serenity" Ramadan Collection</h1>
                <p class="text-[#11190C] text-[12px]">Ramadhan has come, mirroring the successful previous raya, this time Toko Didiyo is back to embrace the purity and tranquillity, and came up with perfect pieces to be part of the exclusive...</p>
                <button class="underline text-[#11190C]">READ MORE</button>
            </div>
        </section>
    </main>
    <?php include('partials/footer.php'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const featureCards = document.querySelectorAll('.feature-card');
            featureCards.forEach(card => {
                card.addEventListener('click', function() {
                    const featureId = this.getAttribute('data-id');
                    window.location.href = '/feature/' + featureId;
                });
            });
        });
    </script>

</body>

</html>