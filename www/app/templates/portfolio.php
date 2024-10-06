<?= snippet('site/header') ?>

<div class="flex-1 antialiased appearance-none bg-[#F5F5F5]">
    <?= snippet('site/nav') ?>
    <div class="relative block text-center pt-[80px] lg:pt-[120px] px-[16px] md:px-[24px] lg:px-[24px]" x-data="{itemsShown: [], titleShown: false}">
        <div class='page-title' x-intersect="titleShown = true">
            <h1 class="font-ABCGravityExpanded uppercase text-[40px] leading-[36px] lg:text-[64px] lg:leading-[77.6px] transition-transform will-change-transform translate-y-[120%] duration-1000"
                :class="{ 'block translateZ': titleShown }"
                x-show="itemsShown"
            ><?= $page->title() ?>
            </h1>
        </div>
        <div class="relative flex flex-col items-start gap-[24px] md:grid md:grid-cols-2 lg:grid lg:grid-cols-3 py-[80px] lg:py-[120px] lg:gap-y-[48px]">
            <?php
                $listedPages = $page->children();
                foreach($listedPages as $listedPage): ?>
                <div x-intersect.half="setTimeout(()=>{itemsShown.push('<?= $listedPage->indexOf() ?>')},<?= ($listedPage->indexOf() / 3) * 150 ?>)" class="min-h-[300px]">
                    <a class="relative block lg:col-span-1 hover:text-[#FF0E0F] text-[#0C0C0C] transition-all ease-in-out duration-350"
                        href="<?= $listedPage->url() ?>"
                        @click="referrer = window.location.href"
                        x-show="itemsShown.includes('<?= $listedPage->indexOf() ?>')"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-50 translate-y-[90px]"
                        x-transition:enter-end="opacity-100 translate-y-0"
                    >
                        <div class="relative block w-full">
                            <?php if($listedPage->preview()->isNotEmpty()): ?>
                                <img
                                    class="grid-img relative block w-full object-cover opacity-0 transition-all duration-300"
                                    src="<?= $listedPage->preview()->toFile()->url() ?>"
                                    loading="lazy"
                                    onload="this.style.opacity=1"
                                />
                            <?php endif ?>
                        </div>
                        <div class="relative flex flex-col items-start w-full text-left pt-[12px] lg:pt-[16px]">
                            <?php if($listedPage->tag()->isNotEmpty()): ?>
                                <div class="relative flex px-[15px] py-[10px] bg-[#0C0C0C] text-[#F5F5F5] text-[12px] leading-[14px] mb-[12px] lg:mb-[16px] -tracking-[0.01em]"><?= $listedPage->tag() ?></div>
                            <?php endif ?>
                            <h4 class="font-ABCGravityCondensed text-[16px] leading-[16px] lg:text-[24px] lg:leading-[24px] lg:-tracking-[0.01em] uppercase"><?= $listedPage->title() ?></h4>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<?= snippet('site/footer') ?>
</body>
</html>
