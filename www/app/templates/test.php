<?= snippet('site/header') ?>

<div class="flex-1 antialiased appearance-none bg-[#F5F5F5] pt-[16px] md:pt-[24px] lg:pt-[24px]">



    <header class="relative flex justify-between uppercase text-[16px] md:text-[24px] lg:text-[24px] h-[50px] lg:h-[104px] px-[16px] lg:px-[24px]">
        <div class="cursor-pointer hover:text-[#FF0E0F] transition ease-in-out font-ABCGravityCondensed" data-menu-button="open">меню</div>
        <div class="cursor-pointer text-[#F5F5F5] transition ease-in-out font-ABCGravityCondensed z-[100] absolute lg:left-[24px] hidden hover:opacity-40" data-menu-button="close">закрыть</div>
        <a class="absolute cursor-pointer left-[50%] translate-x-[-50%] h-full outline-none	z-[101] bg-[#F5F5F5] w-[96px] lg:w-[202px]" href="<?= $site->url() ?>" data-menu-logo>
            <svg width="100%" height="100%" viewBox="0 0 202 104" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.648438" width="200.704" height="104" fill="#F5F5F5"/>
            <path d="M123.553 50.2885V5.53308H150.269L158.789 30.8445L167.528 5.53308H193.588V50.2885H174.8V24.1031L165.874 50.2885H151.33L142.341 24.0719V50.2885H123.553Z" fill="#FF0E0F"/>
            <path d="M92.8551 51.6616C76.6258 51.6616 65.3277 46.8865 65.0156 37.1177H87.9551C88.0175 40.426 90.2959 42.2361 93.8538 42.2361C96.257 42.2361 98.3793 41.331 98.3793 39.1151C98.3793 36.8992 96.4443 35.9629 92.6678 35.0578L83.4296 32.9667C74.6908 30.8756 65.7022 27.8482 65.7022 19.2654C65.7022 8.34187 78.5608 4.19092 92.6678 4.19092C105.682 4.19092 119.04 8.18582 119.852 18.2355H97.7551C97.5054 14.8648 95.2895 13.5852 92.5118 13.5852C89.8901 13.5852 87.8927 14.8024 87.8927 16.7998C87.8927 18.8597 89.8901 19.4527 92.3557 20.1081L104.497 22.8546C113.547 25.1017 120.882 28.41 120.882 36.8992C120.882 47.5731 108.367 51.6616 92.8551 51.6616Z" fill="#FF0E0F"/>
            <path d="M35.2245 51.6929C16.0926 51.6929 7.57227 45.4508 7.57227 34.6833V5.53296H29.0449V33.31C29.0449 37.1489 31.2296 39.1776 35.2245 39.1776C39.2506 39.1776 41.4041 37.1489 41.4041 33.31V5.53296H62.8767V34.6833C62.8767 45.4508 54.3563 51.6929 35.2245 51.6929Z" fill="#FF0E0F"/>
            <path d="M161.631 98.775V54.0197H178.172C188.222 54.0197 194.682 57.6088 194.682 68.2203V68.7196C194.682 80.0177 188.128 83.6381 178.422 83.6381H175.332V98.775H161.631ZM175.332 74.7744H176.362C179.265 74.7744 181.044 73.1827 181.044 69.1878V67.9394C181.044 64.1005 179.358 62.8521 176.362 62.8521H175.332V74.7744Z" fill="#FF0E0F"/>
            <path d="M141.529 99.7114C129.919 99.7114 124.238 94.905 124.238 86.6031V54.0197H137.971V85.9789C137.971 88.2885 139.219 89.5993 141.529 89.5993C143.869 89.5993 145.087 88.2885 145.087 85.9789V54.0197H158.819V86.6031C158.819 94.905 153.139 99.7114 141.529 99.7114Z" fill="#FF0E0F"/>
            <path d="M102.985 99.7118C91.1252 99.7118 83.6035 93.7819 83.6035 81.1105V71.3417C83.6035 58.8888 91.1252 53.0837 102.985 53.0837C114.814 53.0837 122.367 58.7328 122.367 71.3417V81.1105C122.367 93.7819 114.814 99.7118 102.985 99.7118ZM98.085 83.3889C98.085 86.9468 99.4271 89.5685 102.985 89.5685C106.543 89.5685 107.885 86.9468 107.885 83.3889V69.4067C107.885 65.8487 106.543 63.2271 102.985 63.2271C99.4271 63.2271 98.085 65.8487 98.085 69.4067V83.3889Z" fill="#FF0E0F"/>
            <path d="M47.8652 98.775V54.0197H66.4041C77.234 54.0197 82.2276 57.6088 82.2276 65.7547C82.2276 72.777 78.6385 75.9604 73.9569 77.1464C79.8245 78.1763 82.2588 80.1114 82.2588 85.7292V98.775H68.4952V85.4795C68.4952 82.6394 66.9347 81.391 63.5015 81.391H61.5665V98.775H47.8652ZM61.5665 72.9018H63.7512C66.8098 72.9018 68.6512 71.4974 68.6512 67.8145V67.2528C68.6512 64.0381 66.9659 62.7585 63.72 62.7585H61.5665V72.9018Z" fill="#FF0E0F"/>
            <path d="M28.077 99.7118C15.0624 99.7118 7.32227 94.4685 7.32227 81.7035V70.8736C7.32227 58.4519 15.749 53.0837 27.0159 53.0837C37.0968 53.0837 45.2426 57.7653 45.2426 67.9086V69.0634H30.7611V67.9398C30.7611 65.2245 29.4815 63.071 26.6414 63.071C23.5516 63.071 21.9286 65.3494 21.9286 69.313V82.4525C21.9286 87.415 23.8325 89.6621 28.4516 89.6621C29.5439 89.6621 30.7611 89.4748 31.6974 89.1315V83.5761H25.0184V74.6812H45.2738V96.0914C41.9656 97.9328 34.756 99.7118 28.077 99.7118Z" fill="#FF0E0F"/>
            </svg>
        </a>
        <div class="flex gap-[12px]">
            <div class="hidden lg:block cursor-pointer hover:text-[#FF0E0F] transition ease-in-out font-ABCGravityCondensed" data-popup-button="open">связаться</div>
            <?php
                if(isset($_COOKIE['cartItems'])) {
                    $itemsCount = count(explode('|', htmlspecialchars($_COOKIE["cartItems"])));
                } else {
                    $itemsCount = 0;
                }
            ?>
            <div class="cursor-pointer hover:text-[#FF0E0F] transition ease-in-out font-ABCGravityCondensed" data-cart-button="open">корзина(<span class="font-ABCGravityCondensed" data-cart-items><?= $itemsCount ?></span>)</div>
        </div>
        <nav data-menu class="menu hidden fixed flex flex-col items-start w-full h-full bg-[#FF0E0F] text-[#F5F5F5] top-0 left-0 z-[99] p-[16px] lg:p-[24px] pt-[66px] md:pt[66px] lg:pt-[108px] overflow-auto">
            <div class="menu-inner flex items-center relative w-full h-full">
                <div class="menu-list flex flex-col gap-[18px] lg:gap-[24px]">
                    <?php foreach($site->menu()->toPages() as $menuItem): ?>
                        <a class="menu-link font-ABCGravityCondensed text-[40px] leading-[36px] md:text-[64px] md:leading-[57.6px] lg:text-[64px] lg:leading-[57.6px] xl:text-[76px] xl:leading-[68px] -tracking-[0.01em]" href="<?= $menuItem->url() ?>"><?= $menuItem->title() ?></a>
                    <?php endforeach ?>
                    <div data-popup-button="open" class="lg:hidden block cursor-pointer transition ease-in-out font-ABCGravityCondensed text-[40px] leading-[36px] md:text-[64px] md:leading-[57.6px] -tracking-[0.01em]">связаться</div>
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



    <div class="relative block text-center pt-[80px] lg:pt-[120px] px-[16px] md:px-[24px] lg:px-[24px]">
        <h1 class="font-ABCGravityExpanded uppercase text-[40px] leading-[36px] lg:text-[64px] lg:leading-[57.6px]"><?= $page->title() ?></h1>
        <div class="relative flex flex-col items-start gap-[24px] md:grid md:grid-cols-2 lg:grid lg:grid-cols-3 py-[80px] lg:py-[120px]">
            <?php
                $listedPages = $page->children();
                foreach($listedPages as $listedPage): ?>
                    <a class="case-card overflow-hidden relative block lg:col-span-1 hover:text-[#FF0E0F] text-[#F5F5F5] transition-colors ease-in-out duration-350 sm:w-full" href="<?= $listedPage->url() ?>">
                        <div class="relative block">
                            <img class="w-full" src="<?= $listedPage->preview()->toFile()->url() ?>" />
                        </div>
                        <div class="case-content absolute block w-full h-full z-1 top-0 left-0 p-[18px] lg:p-[24px] text-left">
                            <h3 class="font-ABCGravityExpanded text-[26px] leading-[31.2px] md:text-[24px] md:leading-[28.8px] lg:text-[32px] lg:leading-[38px] -tracking-[0.01em]"><?= $listedPage->title() ?></h3>
                        </div>
                    </a>
            <?php endforeach ?>
        </div>
    </div>
</div>


  <footer class="relative block bg-[#FF0E0F] text-[#F5F5F5] px-[16px] lg:px-[24px] lg:pb-[48px] pb-[64px] pt-[64px] lg:pt-[80px]">
    <div class="flex flex-col center items-center gap-[24px]">
        <?php foreach ($site->footer()->toBlocks() as $block): ?>
            <div class="footer-links font-Inter text-[16px] leading-[19px] lg:text-[18px] lg:leading-[21px] flex flex-col lg:flex-row gap-[8px] lg:gap-[16px] text-center">
                <?= $block->text()->kt() ?>
            </div>
        <?php endforeach ?>
    </div>
  </footer>

  <?php snippet('site/form-custom') ?>
  <?php snippet('site/cart') ?>

  <?php if (!option('debug') and $site->scrips_footer()->isNotEmpty()) : ?>
    <?= $site->scrips_footer() ?>
  <?php endif; ?>

<script>
const menuBtnOpen = document.querySelector('[data-menu-button="open"]');
const menuBtnClose = document.querySelector('[data-menu-button="close"]');
const menu = document.querySelector('[data-menu]');

menuBtnOpen.addEventListener('click', () => {
    menu.style.pointerEvents = 'all';
    document.body.style.overflow = 'hidden';
    menu.classList.add('is-open');
    menuBtnClose.style.display = 'block';
});

menuBtnClose.addEventListener('click', () => {
    menu.style.pointerEvents = '';
    document.body.style.overflow = '';
    menu.classList.remove('is-open');
    menuBtnClose.style.display = '';
})

const popupBtnOpenAll = [].slice.call(document.querySelectorAll('[data-popup-button="open"]'));
const popupBtnClose = document.querySelector('[data-popup-button="close"]');
const popup = document.querySelector('[data-popup]');

popupBtnOpenAll.forEach(popupBtnOpen => {
    popupBtnOpen.addEventListener('click', () => {
        popup.classList.add('is-open');
        popup.style.pointerEvents = 'all';
        document.body.style.overflow = 'hidden';
        popupBtnClose.style.display = 'block';
    });
})

popupBtnClose.addEventListener('click', () => {
    popup.classList.remove('is-open');
    popup.style.pointerEvents = '';
    popupBtnClose.style.display = '';
    document.body.style.overflow = '';
    menuBtnClose.click();
})

const cartBtnOpenAll = [].slice.call(document.querySelectorAll('[data-cart-button="open"]'));
const cartBtnClose = document.querySelector('[data-cart-button="close"]');
const cart = document.querySelector('[data-cart]');

cartBtnOpenAll.forEach(cartBtnOpen => {
    cartBtnOpen.addEventListener('click', () => {
        cart.classList.add('is-open');
        cart.style.pointerEvents = 'all';
        document.body.style.overflow = 'hidden';
        cartBtnClose.style.display = 'block';
    });
})

cartBtnClose.addEventListener('click', () => {
    cart.classList.remove('is-open');
    cart.style.pointerEvents = '';
    cartBtnClose.style.display = '';
    document.body.style.overflow = '';
    menuBtnClose.click();
})
</script>

</body>
</html>
