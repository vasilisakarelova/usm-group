<?= snippet('site/header') ?>

<div class="flex-1 antialiased appearance-none bg-[#F5F5F5]">
    <?= snippet('site/nav') ?>
    <div class="relative block text-center pt-[80px] lg:pt-[120px]" x-data="{itemsShown: [], titleShown: false}">
        <div class='page-title' x-intersect="titleShown = true">
            <h1 class="font-ABCGravityExpanded uppercase text-[26px] leading-[23.4px] md:text-[40px] md:leading-[36px] lg:text-[64px] lg:leading-[57px] transition-transform will-change-transform translate-y-[120%] duration-1000"
                :class="{ 'translateZ': titleShown }"
                x-show="itemsShown"
            ><?= $page->title() ?>
            </h1>
        </div>
        <h2 class="relative block about-moto font-ABCGravityCondensed md:font-ABCGravityExpanded lg:font-ABCGravityExpanded uppercase text-[50px] leading-[45px] md:text-[64px] md:leading-[57.6px] md:w-[560px] md:mx-auto lg:text-[140px] lg:leading-[126px] pt-[80px] lg:pt-[120px] lg:w-[1220px] lg:mx-auto -tracking-[0.01em]"><?= $page->moto()->kirbytextinline() ?></h2>

        <article class="relative block lg:max-w-[826px] lg:mx-auto text-[22px] leading-[26px] lg:text-[24px] lg:leading-[28px] text-left py-[32px] lg:py-[48px] px-[16px] lg:px-0"><?= $page->story()->kt() ?></article>

        <div class="relative flex justify-center pb-[64px] lg:pb-[120px]">
            <button
                @click="contactFormIsOpen = true; hideMenu = false; toggleScroll()"
                class="flex items-center justify-center cursor-pointer hover:bg-[#FF0E0F] transition ease-in-out bg-[#0C0C0C] text-[#F5F5F5] w-full lg:w-[542px] h-[49px] lg:h-[52px] text-[16px] leading-[19px] mx-[16px] lg:mx-0"
            >Связаться</button>
        </div>
    </div>
</div>

<?= snippet('site/footer') ?>
</body>
</html>
