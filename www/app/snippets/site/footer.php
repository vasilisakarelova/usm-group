
  <footer class="relative block bg-[#FF0E0F] text-[#F5F5F5] px-[16px] lg:px-[24px] pb-[24px] pt-[64px] lg:pt-[80px]">
    <div class="flex flex-col center items-center md:gap-[24px] lg:gap-[24px]">
        <?php foreach ($site->footer()->toBlocks() as $block): ?>
            <div class="footer-links font-Inter text-[16px] leading-[19px] lg:text-[18px] lg:leading-[21px] flex flex-col lg:flex-row gap-[8px] lg:gap-[16px] text-center">
                <?= $block->text()->kt() ?>
            </div>
        <?php endforeach ?>
    </div>
    <div class="flex justify-between pt-[64px]">
        <span x-data="{ year: `©${new Date().getFullYear()}` }" x-text="year"></span>
        <span>All rights reserved</span>
    </div>
  </footer>

  <?php snippet('site/form-custom') ?>
  <?php snippet('site/cart') ?>

  <?php if (!option('debug') and $site->scrips_footer()->isNotEmpty()) : ?>
    <?= $site->scrips_footer() ?>
  <?php endif; ?>
