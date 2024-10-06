<div x-cloak x-show="cartIsOpen" class="form-wrapper fixed flex w-full h-full top-0 left-0 bg-[#F5F5F5] z-[100]">
    <div
        x-cloak
        x-show="cartItems.length"
        class="relative w-full pt-[102px] lg:pt-[208px] px-[16px] lg:px-[24px] flex flex-col lg:flex-row lg:gap-[24px] items-stretch overflow-auto"
    >
        <div class="font-ABCGravityExpanded lg:text-[64px] lg:leading-[57px] text-[40px] leading-[36px] uppercase lg:w-[50%] md:sticky md:top-0 lg:sticky lg:top-0 bg-[#F5F5F5] z-[2]">корзина</div>
        <div class="flex flex-col gap-[36px] lg:w-[50%] pt-[48px] md:pt-[48px] lg:pt-0 md:flex-1">
            <template x-for="(item, index) in cartItems" :key="index">
                <div
                    class="cart-item relative flex items-start justify-between border-b-[1px] border-black border-solid pb-[4px] lg:gap-[48px] cursor-pointer"
                    @click="cartItems.splice(index, 1); indexes.splice(index, 1);"
                >
                    <span x-html="item"></span>
                    <span class="relative block shrink-0">
                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 0L19 18" stroke="#0C0C0C"/>
                            <path d="M19 0L1 18" stroke="#0C0C0C"/>
                        </svg>
                    </span>
                </div>
            </template>
            <div class="flex flex-1 flex-col justify-end pb-[64px] lg:pb-[48px]">
                <span class="relative block pb-[32px]">Оформляя заказ, вы ничего не платите</span>
                <button class="form-submitBtn flex items-center justify-center cursor-pointer w-full bg-[#0C0C0C] text-[#F5F5F5] text-[18px] leading-[21px] p-[15px]" @click="checkoutCart()">Оформить заказ</button>
            </div>
        </div>
    </div>
    <div
        x-cloak
        x-show="!cartItems.length"
        class="alert success pt-[102px] lg:pt-[208px] text-center w-full flex flex-col justify-between items-center pb-[40px] px-[16px] md:px-[24px] lg:px-[24px]"
    >
        <div class="font-ABCGravityExpanded text-[40px] leading-[36px] lg:text-[64px] lg:leading-[57px] pt-[8px] uppercase lg:max-w-[826px] mx-auto<?= e(!$site->find('cart')->placeholderImage()->isNotEmpty() && !$site->find('cart')->placeholderGif()->isNotEmpty(), ' flex items-center flex-1')?>"><?= $site->find('cart')->emptyText() ?></div>
        <?php if($site->find('cart')->placeholderImage()->isNotEmpty() || $site->find('cart')->placeholderGif()->isNotEmpty()): ?>
            <div class="flex items-center flex-1 py-[43px] lg:py-[20px] h-[273px] lg:h-[340px] w-[273px] lg:w-[340px]">
                <?php if($site->find('cart')->placeholderImage()->isNotEmpty() && $site->find('cart')->placeholderType() == 'image'): ?>
                    <img class="relative block mx-auto max-w-full max-h-full object-cover" src="<?= $site->find('cart')->placeholderImage()->toFile()->url() ?>" />
                <?php elseif($site->find('cart')->placeholderGif()->isNotEmpty() && $site->find('cart')->placeholderType() == 'gif'): ?>
                    <div class="cart-placeholder relative block mx-auto w-[273px] lg:w-[340px] h-[273px] lg:h-[340px]">
                        <img class="w-full h-full relative block object-cover" src="<?= $site->find('cart')->placeholderGif() ?>" />
                    </div>
                <?php endif ?>
            </div>
        <?php endif ?>
        <a class="shrink-0 flex items-center justify-center hover:bg-[#FF0E0F] transition ease-in-out bg-[#0C0C0C] text-[#F5F5F5] w-full lg:w-[542px] h-[49px] lg:h-[52px] text-[16px] leading-[19px] lg:text-[18px] lg:leading-[21px] -tracking-[0.01em] mx-[16px] lg:mx-auto" href="/services">Смотреть все услуги</a>
    </div>
</div>