<div class="flex flex-col lg:flex-row gap-[12px] lg:gap-[24px] lg:justify-between w-full lg:h-[450px] lg:col-span-10">
    <?php foreach ($block->images()->toFiles() as $image): ?>
        <div class="relative block h-full">
            <img class="relative block h-full transition ease-in" src="<?= $image->url() ?>" />
        </div>
    <?php endforeach ?>
</div>