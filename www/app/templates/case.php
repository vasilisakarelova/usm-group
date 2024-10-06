<?= snippet('site/header') ?>

<div class="flex-1 antialiased appearance-none bg-[#F5F5F5]">
    <?= snippet('site/nav') ?>
    <div class="relative block px-[16px] pt-[80px] lg:pt-[120px] md:px-[24px] lg:px-[24px]">
        <div class="case-header flex flex-col items-start">
            <div class="relative flex px-[15px] py-[10px] bg-[#0C0C0C] text-[#F5F5F5] text-[12px] leading-[14px]"><?= $page->date()->toDate('%w %B %Y') ?></div>
            <h1 class="case-title block  w-full font-ABCGravityExpanded uppercase text-[28px] leading-[24px] lg:text-[64px] lg:leading-[57px] pt-[16px]"><?= $page->titleCustom()->kirbytextinline() ?></h1>
            <?php if($page->cover()->isNotEmpty()): ?>
                <div class="case-cover w-full relative block pt-[32px] lg:pt-[48px] lg:grid lg:grid-cols-10 lg:gap-[24px]">
                    <img class="relative block w-full h-auto lg:col-start-3 lg:col-end-9" src="<?= $page->cover()->toFile()->url() ?>"/>
                </div>
            <?php endif ?>
            <?php foreach ($page->story()->toBlocks() as $block): ?>
                <div id="<?= $block->id() ?>" class="block block-type-<?= $block->type() ?> w-full pt-[32px] lg:pt-[48px]">
                  <?php snippet('blocks/' . $block->type(), [
                      'block' => $block,
                      'layout' => $block->galleryType(),
                      'template' => $page->template()
                    ]) ?>
                </div>
            <?php endforeach ?>
            <div class="relative grid lg:grid-cols-10 lg:gap-[24px] pt-[32px] lg:pt-[48px] pb-[64px] lg:pb-[120px]">
                <p class="lg:col-start-4 lg:col-end-8 text-[16px] leading-[19px] lg:text-[18px] lg:leading-[21px] lg:-tracking-[0.01em]"><?= $page->ending()->kirbytextinline() ?></p>
            </div>
        </div>
    </div>
</div>

<?php $blocks = $page->story()->toBlocks(); if($blocks->hasType('videolink') === true): ?>
<style>
.video-block {
    position: relative;
}

.video-wrapper iframe,
 .video-wrapper video {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

.video-cover {
    grid-column: 3 / 9;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 2;
    height: 100%;
}

@media screen and (min-width: 1280px) {
    .video-block {
        display: grid;
        grid-template-columns: repeat(10, minmax(0,1fr));
        gap: 24px;
    }

    .video-wrapper {
        grid-column: 3/9;
    }
}
</style>
<?php endif ?>

<?= snippet('site/footer') ?>
</body>
</html>
