<header
    @scroll.window="() => { hideMenu = (window.pageYOffset <= 0 || window.pageYOffset < prevState) ? false: true; prevState = window.pageYOffset; }"
    :class="{ 'translate-y-[-100%]': hideMenu }"
    class="transition-transform duration-[300ms] fixed top-0 w-full z-[101] bg-[#F5F5F5] flex justify-between uppercase text-[16px] md:text-[24px] lg:text-[24px] h-[72px] md:h-[108px] lg:h-[119px] px-[16px] md:px-[24px] lg:px-[24px] py-[16px] md:py-[24px] lg:py-[24px]"
>
    <div
        class="cursor-pointer transition ease-in-out font-ABCGravityCondensed self-start"
        :class="{ 'z-[100] text-[#F5F5F5] hover:opacity-40  z-[100]': menuIsOpen, 'hover:text-[#FF0E0F]': !menuIsOpen }"
        @click="if ('<?= $page->template() == 'case' ?>' && !menuIsOpen && !cartIsOpen && !contactFormIsOpen) { if (referrer) {window.location.href = referrer} else {window.location.href = '/portfolio'} } else { togglePopup(); toggleScroll() }"
        x-text="(menuIsOpen || cartIsOpen || contactFormIsOpen || '<?= $page->template() == 'case' ?>') ? 'закрыть' : 'меню'"
    ></div>
    <a class="absolute cursor-pointer left-[50%] translate-x-[-50%] h-[39px] md:h-[70px] lg:h-[70px] outline-none z-[101] bg-[#F5F5F5] w-[77px] md:w-[135px] lg:w-[135px]" href="<?= $site->url() ?>" data-menu-logo>
        <svg width="100%" height="100%" viewBox="0 0 136 70" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.455078" width="135.09" height="70" fill="#F5F5F5"/>
            <path d="M83.1777 33.8465V3.72266H101.16L106.894 20.7592L112.776 3.72266H130.317V33.8465H117.671V16.2217L111.663 33.8465H101.874L95.8239 16.2007V33.8465H83.1777Z" fill="#FF0E0F"/>
            <path d="M62.5174 34.7708C51.5938 34.7708 43.9894 31.5567 43.7793 24.9816H59.2193C59.2613 27.2083 60.7948 28.4267 63.1896 28.4267C64.8072 28.4267 66.2356 27.8175 66.2356 26.326C66.2356 24.8345 64.9332 24.2043 62.3914 23.5951L56.1733 22.1877C50.2914 20.7802 44.2414 18.7425 44.2414 12.9656C44.2414 5.61325 52.8963 2.81934 62.3914 2.81934C71.1512 2.81934 80.1422 5.50821 80.6883 12.2724H65.8155C65.6474 10.0037 64.1559 9.1424 62.2863 9.1424C60.5218 9.1424 59.1773 9.96167 59.1773 11.3061C59.1773 12.6926 60.5218 13.0917 62.1813 13.5328L70.353 15.3814C76.445 16.8939 81.3816 19.1207 81.3816 24.8345C81.3816 32.0189 72.9578 34.7708 62.5174 34.7708Z" fill="#FF0E0F"/>
            <path d="M23.7273 34.7918C10.8501 34.7918 5.11523 30.5904 5.11523 23.3431V3.72266H19.568V22.4188C19.568 25.0026 21.0384 26.3681 23.7273 26.3681C26.4372 26.3681 27.8867 25.0026 27.8867 22.4188V3.72266H42.3394V23.3431C42.3394 30.5904 36.6045 34.7918 23.7273 34.7918Z" fill="#FF0E0F"/>
            <path d="M108.811 66.4832V36.3594H119.944C126.708 36.3594 131.057 38.7752 131.057 45.9175V46.2536C131.057 53.8581 126.645 56.2949 120.112 56.2949H118.033V66.4832H108.811ZM118.033 50.3289H118.726C120.679 50.3289 121.877 49.2576 121.877 46.5687V45.7284C121.877 43.1446 120.742 42.3043 118.726 42.3043H118.033V50.3289Z" fill="#FF0E0F"/>
            <path d="M95.2804 67.1134C87.4658 67.1134 83.6426 63.8784 83.6426 58.2905V36.3594H92.8856V57.8704C92.8856 59.4249 93.7259 60.3072 95.2804 60.3072C96.8559 60.3072 97.6752 59.4249 97.6752 57.8704V36.3594H106.918V58.2905C106.918 63.8784 103.095 67.1134 95.2804 67.1134Z" fill="#FF0E0F"/>
            <path d="M69.3402 67.1128C61.3576 67.1128 56.2949 63.1215 56.2949 54.5927V48.0175C56.2949 39.6358 61.3576 35.7285 69.3402 35.7285C77.3018 35.7285 82.3854 39.5308 82.3854 48.0175V54.5927C82.3854 63.1215 77.3018 67.1128 69.3402 67.1128ZM66.0421 56.1262C66.0421 58.521 66.9454 60.2856 69.3402 60.2856C71.735 60.2856 72.6383 58.521 72.6383 56.1262V46.7151C72.6383 44.3203 71.735 42.5557 69.3402 42.5557C66.9454 42.5557 66.0421 44.3203 66.0421 46.7151V56.1262Z" fill="#FF0E0F"/>
            <path d="M32.2383 66.4832V36.3594H44.7163C52.0057 36.3594 55.3668 38.7752 55.3668 44.2579C55.3668 48.9845 52.951 51.1272 49.8 51.9254C53.7493 52.6187 55.3878 53.9211 55.3878 57.7023V66.4832H46.1238V57.5343C46.1238 55.6227 45.0735 54.7824 42.7627 54.7824H41.4603V66.4832H32.2383ZM41.4603 49.0685H42.9308C44.9894 49.0685 46.2288 48.1232 46.2288 45.6444V45.2663C46.2288 43.1026 45.0945 42.2413 42.9098 42.2413H41.4603V49.0685Z" fill="#FF0E0F"/>
            <path d="M18.9188 67.1128C10.1589 67.1128 4.94922 63.5836 4.94922 54.9918V47.7024C4.94922 39.3417 10.6211 35.7285 18.2045 35.7285C24.9898 35.7285 30.4725 38.8795 30.4725 45.7068V46.484H20.7254V45.7278C20.7254 43.9002 19.8641 42.4507 17.9525 42.4507C15.8728 42.4507 14.7804 43.9842 14.7804 46.6521V55.496C14.7804 58.8361 16.0618 60.3486 19.1709 60.3486C19.9061 60.3486 20.7254 60.2225 21.3556 59.9915V56.2522H16.8601V50.2653H30.4936V64.676C28.2668 65.9154 23.4142 67.1128 18.9188 67.1128Z" fill="#FF0E0F"/>
        </svg>
    </a>
    <div class="flex gap-[12px]">
        <div @click="contactFormIsOpen = true; hideMenu = false; toggleScroll()" class="hidden lg:block cursor-pointer hover:text-[#FF0E0F] transition ease-in-out font-ABCGravityCondensed">связаться</div>
        <div @click="cartIsOpen = true; hideMenu = false; toggleScroll()" class="cursor-pointer hover:text-[#FF0E0F] transition ease-in-out font-ABCGravityCondensed">корзина(<span class="font-ABCGravityCondensed" x-text='cartItems.length'></span>)</div>
    </div>
    <nav x-cloak x-show="menuIsOpen" class="menu fixed flex flex-col items-start w-full h-full bg-[#FF0E0F] text-[#F5F5F5] top-0 left-0 z-[99] p-[16px] lg:p-[24px] pt-[66px] md:pt[66px] lg:pt-[108px] overflow-auto">
        <div class="menu-inner flex items-center relative w-full h-full">
            <div class="menu-list flex flex-col gap-[18px] lg:gap-[24px]">
                <?php foreach($site->menu()->toPages() as $menuItem): ?>
                    <a class="menu-link font-ABCGravityCondensed text-[40px] leading-[36px] md:text-[64px] md:leading-[57.6px] lg:text-[64px] lg:leading-[57.6px] xl:text-[76px] xl:leading-[68px] -tracking-[0.01em]" href="<?= $menuItem->url() ?>"><?= $menuItem->title() ?></a>
                <?php endforeach ?>
                <div
                    @click="menuIsOpen = false; contactFormIsOpen = true; toggleScroll()"
                    class="lg:hidden block cursor-pointer transition ease-in-out font-ABCGravityCondensed text-[40px] leading-[36px] md:text-[64px] md:leading-[57.6px] -tracking-[0.01em]"
                >связаться</div>
            </div>
        </div>
        <div class="menu-footer flex flex-1 w-full items-end sm:flex-wrap md:flex-wrap gap-[18px] md:gap-[32px] lg:gap-[32px]">
            <?php if ($site->phone()->isNotEmpty()): ?>
              <div class="menu-footer-link text-[#F5F5F5] font-ABCGravityCondensed relative transition hover:opacity-40 sm:basis-full"><?= Html::tel($site->phone()) ?></div>
            <?php endif ?>
            <?php if ($site->email()->isNotEmpty()): ?>
              <div class="menu-footer-link text-[#F5F5F5] font-ABCGravityCondensed relative transition hover:opacity-40 sm:basis-full"><?= Html::email($site->email()) ?></div>
            <?php endif ?>
            <?php foreach ($site->socialsList()->toBlocks() as $block): ?>
              <?php snippet('blocks/' . $block->type(), [
                  'block' => $block
                ]) ?>
            <?php endforeach ?>
            <?php if ($site->address()->isNotEmpty()): ?>
              <div class="font-ABCGravityCondensed flex-1 flex lg:justify-end sm:basis-full md:basis-full"><?= $site->address() ?></div>
            <?php endif ?>
        </div>
    </nav>
</header>