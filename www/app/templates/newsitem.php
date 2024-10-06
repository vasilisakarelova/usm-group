<?= snippet('site/header') ?>

<div class="flex-1 antialiased appearance-none bg-[#F5F5F5]">
    <?= snippet('site/nav') ?>
    <div class="relative block pt-[80px] px-[16px] lg:pt-[120px] md:px-[24px] lg:px-[24px]">
        <div class="case-header grid lg:grid-cols-10 lg:gap-x-[24px]">
            <div class="relative flex lg:row-start-1 lg:col-span-2">
                <div class="relative flex px-[15px] py-[10px] bg-[#0C0C0C] text-[#F5F5F5] text-[12px] leading-[14px]"><?= $page->date()->toDate('%w %B %Y') ?></div>
            </div>
            <h1 class="case-title font-ABCGravityCondensed uppercase text-[40px] leading-[36px] lg:text-[32px] lg:leading-[32px] pt-[16px] lg:row-start-2 lg:col-start-1 lg:col-end-7 -tracking-[0.01em]"><?= $page->titleCustom()->kirbytextinline() ?></h1>
            <?php if($page->cover()->isNotEmpty()): ?>
                <div class="case-cover w-full relative block pt-[32px] lg:pt-[48px] lg:row-start-3 lg:col-start-3 lg:col-end-9">
                    <img class="relative block w-full h-auto" src="<?= $page->cover()->toFile()->url() ?>"/>
                </div>
            <?php endif ?>
        </div>
        <div class="case-content pb-[64px] lg:pb-[120px]">
            <?php foreach ($page->story()->toBlocks() as $block): ?>
                <div id="<?= $block->id() ?>" class="block block-type-<?= $block->type() ?> w-full pt-[32px] lg:pt-[48px] grid lg:grid-cols-10 lg:gap-[24px]">
                  <?php snippet('blocks/' . $block->type(), [
                      'block' => $block,
                      'layout' => $block->galleryType(),
                      'template' => $page->template()
                    ]) ?>
                </div>
            <?php endforeach ?>
            <?php if($page->author()->isNotEmpty()): ?>
                <div class="relative block pt-[32px] lg:pt-[48px]">
                    <p class="text-[22px] leading-[26px] lg:text-[24px] lg:leading-[28px] -tracking-[0.01em] text-[#000000] opacity-30">Автор: <?= $page->author() ?></p>
                </div>
            <?php endif ?>
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
