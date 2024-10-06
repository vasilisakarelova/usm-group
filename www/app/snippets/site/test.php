<?php if($success): ?>
        <div class="alert success pt-[146px] lg:pt-[208px] text-center w-full">
            <div class="font-ABCGravityExpanded lg:text-[64px] lg:leading-[57px] text-[40px] leading-[36px] uppercase">спасибо!</div>
            <p class="relartive block pt-[24px] text-[16px] leading-[19px] lg:text-[18px] lg:leading-[21px]">Наш менеджер свяжется с Вами</br>в ближайшее время.</p>
            <img class="relative block mx-auto w-[273px] lg:w-[340px] pt-[43px] lg:pt-[20px]" src="/assets/baby.png" />
        </div>
    <?php else: ?>
        <?php if (isset($alert['error'])): ?>
            <div><?= $alert['error'] ?></div>
        <?php endif ?>
        <form class="relative w-full pt-[146px] lg:pt-[208px] px-[16px] lg:px-[24px] pb-[64px] lg:pb-[48px] flex flex-col lg:grid lg:grid-cols-2 lg:gap-[24px] items-stretch" method="post" action="<?= $page->url() ?>">
            <div class="honeypot">
                <label for="website">Website <abbr title="required">*</abbr></label>
                <input type="url" id="website" name="website" tabindex="-1">
            </div>
            <div class="form-field-group flex flex-col gap-[64px] lg:w-full flex-1 lg:col-start-2 lg:col-end-3">
                <div class="form-field relative flex flex-col h-[26px]">
                    <label class="font-ABCGravityExpanded text-[#0C0C0C] opacity-20 text-[24px] leading-[21px] uppercase" for="name">
                        Имя
                    </label>
                    <input class="form-input absolute transition transition-transorm duration-350 bottom-0 pb-[4px] w-full bg-[transparent] border-b-[1px] border-black border-solid outline-none font-ABCGravityCondensed text-[24px] leading-[21px] uppercase h-full" type="text" id="name" name="name" value="<?= esc($data['name'] ?? '', 'attr') ?>" required>
                    <?= isset($alert['name']) ? '<span class="alert error">' . esc($alert['name']) . '</span>' : '' ?>
                </div>
                <div class="form-field relative flex flex-col h-[26px]">
                    <label class="font-ABCGravityExpanded text-[#0C0C0C] opacity-20 text-[24px] leading-[21px] uppercase" for="company">
                        КОМПАНИЯ
                    </label>
                    <input class="form-input absolute transition transition-transorm duration-350 bottom-0 pb-[4px] w-full bg-[transparent] border-b-[1px] border-black border-solid outline-none font-ABCGravityCondensed text-[24px] leading-[21px] uppercase h-full" type="text" id="company" name="company" value="<?= esc($data['company'] ?? '', 'attr') ?>">
                </div>
                <div class="form-field relative flex flex-col h-[26px]">
                    <label class="font-ABCGravityExpanded text-[#0C0C0C] opacity-20 text-[24px] leading-[21px] uppercase" for="email">
                        почта
                    </label>
                    <input class="form-input absolute transition transition-transorm duration-350 bottom-0 pb-[4px] w-full bg-[transparent] border-b-[1px] border-black border-solid outline-none font-ABCGravityCondensed text-[24px] leading-[21px] uppercase h-full" type="email" id="email" name="email" value="<?= esc($data['email'] ?? '', 'attr') ?>" required>
                    <?= isset($alert['email']) ? '<span class="alert error">' . esc($alert['email']) . '</span>' : '' ?>
                </div>
                <div class="form-field relative flex flex-col h-[26px]">
                    <label class="font-ABCGravityExpanded text-[#0C0C0C] opacity-20 text-[24px] leading-[21px] uppercase" for="phone">
                        телефон
                    </label>
                    <input class="form-input absolute transition transition-transorm duration-350 bottom-0 pb-[4px] w-full bg-[transparent] border-b-[1px] border-black border-solid outline-none font-ABCGravityCondensed text-[24px] leading-[21px] uppercase h-full" type="phone" id="phone" name="phone" value="<?= esc($data['phone'] ?? '', 'attr') ?>" required>
                    <?= isset($alert['phone']) ? '<span class="alert error">' . esc($alert['phone']) . '</span>' : '' ?>
                </div>
            </div>
            <div class="form-field relative flex flex-col mt-[64px] lg:mt-0 h-[26px] lg:w-full lg:col-start-1 lg:col-end-2 lg:row-start-1 lg:row-end-2">
                <label class="font-ABCGravityExpanded text-[#0C0C0C] opacity-20 text-[24px] leading-[21px] uppercase" for="text">
                    Задача
                </label>
                <textarea id="text" name="text" rows="1" required class="form-input absolute transition transition-transorm duration-350 bottom-0 pb-[4px] w-full bg-[transparent] border-b-[1px] border-black border-solid outline-none font-ABCGravityCondensed text-[24px] leading-[21px] uppercase resize-none overflow-hidden h-full" value="<?= esc($data['text'] ?? '') ?>"></textarea>
                <?= isset($alert['text']) ? '<span class="alert error">' . esc($alert['text']) . '</span>' : '' ?>
            </div>
            <div class="flex flex-col flex-1 justify-end lg:col-start-2 lg:col-end-3 lg:row-start-2 lg:row-end-3">
                <label for="agreement" class="flex items-center gap-[24px] pb-[32px] cursor-pointer">
                    <input id="agreement" name="agreement" type="checkbox" value="true" class="form-agreementInput hidden" />
                    <span class="VCheckbox-input"></span>
                    <span class="VCheckbox-label text-[16px] leading-[19px] lg:text-[18px] lg:leading-[21px] -tracking-[0.01em]">Я согласен с <a class="underline" href="https://voskhod.agency/policy" target="_blank">политикой обработки персональных данных</a></span>
                </label>
                <input class="form-submitBtn flex items-center justify-center cursor-pointer w-full bg-[#0C0C0C] text-[#F5F5F5] text-[18px] leading-[21px] p-[15px]" type="submit" name="submit" value="Оставить заявку" disabled="true">
            </div>
        </form>
    <?php endif ?>