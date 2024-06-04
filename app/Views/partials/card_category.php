<a href="<?= base_url('/detail_product') ?>">
    <div class="flex flex-col items-start">
        <img class="w-[348px] hover:scale-110 duration-300 h-[364px]" src="<?= base_url($image) ?>" alt="<?= $title ?> ">
        <p class="text-[15px] mt-[15px] text-[#11190C] font-medium"><?= $title ?></p>
        <p class="text-[15px] text-[#11190C]"><?= $subtitle ?></p>
        <p class="text-[15px] text-[#11190C] font-light"><?= $price ?></p>
    </div>
</a>