<?= snippet('site/header') ?>

<div class="flex-1 antialiased appearance-none bg-[#F5F5F5]">
    <?= snippet('site/nav') ?>

    <?php if($page->slider()->isNotEmpty()):
        $cases = $page->slider()->toPages();
    ?>
        <div class="relative block text-center pt-[80px] lg:pt-[100px] xl:pt-[120px]">
            <div class="stage mx-auto z-[1]" :class="{ 'opacity-0': menuIsOpen || cartIsOpen || contactFormIsOpen }">
              <div class="cubespinner z-[1]">
                <div class="face1 font-ABCGravityExpanded uppercase text-[40px] leading-[36px] md:text-[64px] md:leading-[57.6px] lg:text-[125px] lg:leading-[111px] xl:text-[140px] xl:leading-[126px] -tracking-[0.01em]">Стратегия</div>
                <div class="face2 font-ABCGravityExpanded uppercase text-[40px] leading-[36px] md:text-[64px] md:leading-[57.6px] lg:text-[125px] lg:leading-[111px] xl:text-[140px] xl:leading-[126px] -tracking-[0.01em]">продакшн</div>
                <div class="face3 font-ABCGravityExpanded uppercase text-[40px] leading-[36px] md:text-[64px] md:leading-[57.6px] lg:text-[125px] lg:leading-[111px] xl:text-[140px] xl:leading-[126px] -tracking-[0.01em]">медиа</div>
                <div class="face4 font-ABCGravityExpanded uppercase text-[40px] leading-[36px] md:text-[64px] md:leading-[57.6px] lg:text-[125px] lg:leading-[111px] xl:text-[140px] xl:leading-[126px] -tracking-[0.01em]">креатив</div>
              </div>
            </div>
            <div class="relative block w-full h-[320px] md:h-[320px] lg:h-[320px] xl:h-[380px] pt-[32px]">
                <div class="relative block h-full w-full lg:w-full">
                    <div class="swiper h-full">
                        <div class="swiper-wrapper">
                            <?php foreach($cases as $case): ?>
                                <?php if($case->separatePhotoEnable()->toBool() == true): ?>
                                    <div class="swiper-slide h-full bg-[#E6E6E6]" data-desc="<?= $case->titleForGallery() ?>">
                                        <img
                                            class="opacity-0 transition-all duration-300 relative block gallery-item-img w-full h-full object-cover"
                                            alt="<?= $case->separatePhoto()->toFile()->alt() ?>"
                                            src="<?= $case->separatePhoto()->toFile()->url() ?>"
                                            loading="lazy"
                                            onload="this.style.opacity=1"
                                        />
                                        <a
                                            href="<?= $case->url() ?>"
                                            class="swiper-slide-link absolute w-full h-full top-0 left-0 pointer-events-none"
                                            @click="referrer = window.location.href"
                                        ></a>
                                    </div>
                                <?php elseif($case->cover()->isNotEmpty()): ?>
                                    <div class="swiper-slide h-full bg-[#E6E6E6]" data-desc="<?= $case->titleForGallery() ?>">
                                        <img
                                            class="opacity-0 transition-all duration-300 relative block gallery-item-img w-full h-full object-cover"
                                            alt="<?= $case->cover()->toFile()->alt() ?>"
                                            src="<?= $case->cover()->toFile()->url() ?>"
                                            loading="lazy"
                                            onload="this.style.opacity=1"
                                        />
                                        <a
                                            href="<?= $case->url() ?>"
                                            class="swiper-slide-link absolute w-full h-full top-0 left-0 pointer-events-none"
                                            @click="referrer = window.location.href"
                                        ></a>
                                    </div>
                                <?php endif ?>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative block my-[24px] swiper-caption font-ABCGravityExpanded uppercase text-[16px] leading-[19.2px] h-[28.4px] md:h-[28.8px] lg:h-[28.8px] md:text-[24px] md:leading-[28.8px] lg:text-[24px] lg:leading-[28.8px] -tracking-[0.01em]"></div>
        </div>
    <?php endif ?>

    <div class="relative flex justify-center">
        <a class="flex items-center justify-center hover:bg-[#FF0E0F] transition ease-in-out bg-[#0C0C0C] text-[#F5F5F5] w-full md:w-[500px] lg:w-[542px] h-[49px] lg:h-[52px] text-[16px] leading-[19px] lg:text-[18px] lg:leading-[21px] -tracking-[0.01em] mx-[16px] lg:mx-0" href="<?= $page->buttonLink()->toPage()->url() ?>"><?= $page->button() ?></a>
    </div>

    <div class="relative block text-center pt-[80px] lg:pt-[120px]">
        <h3 class="font-ABCGravityExpanded uppercase text-[40px] leading-[36px] lg:text-[64px] lg:leading-[57px] -tracking-[0.01em]">партнеры</h3>
        <div class="relative block overflow-hidden pt-[24px] pb-[64px] lg:pb-[80px]">
            <?php foreach($page->sponsors()->toBlocks() as $sponsorsBlock): ?>

                <div class="mt-[16px] lg:mt-[24px]">
                   <div class=" marquee-container relative overflow-x-hidden	flex flex-row w-full" style="--pause-on-hover: paused; --pause-on-click: running;">
                      <div class="marquee" style="--play: running; --direction: <?php e($sponsorsBlock->indexOf() % 2 === 0, 'reverse') ?><?php e($sponsorsBlock->indexOf() % 2 !== 0, 'normal') ?>; --duration: 38.54921875s; --delay: 0s; --iteration-count: infinite;">
                         <div class="page_main_awards__line__LkUnZ whitespace-nowrap overflow-hidden">
                            <?php if($sponsorsBlock->isNotEmpty()):
                                $images = $sponsorsBlock->images()->toFiles();
                            ?>
                                <?php foreach($images as $image): ?>
                                    <div class="page_main_award__42DgV inline-block	align-top mx-[30px]">
                                       <img class="relative block h-[32px] lg:h-[48px] w-auto" alt="<?= $image->alt() ?>" src="<?= $image->url() ?>">
                                    </div>
                                <?php endforeach ?>
                            <?php endif ?>
                         </div>
                      </div>
                      <div class="marquee" style="--play: running; --direction: <?php e($sponsorsBlock->indexOf() % 2 === 0, 'reverse') ?><?php e($sponsorsBlock->indexOf() % 2 !== 0, 'normal') ?>; --duration: 38.54921875s; --delay: 0s; --iteration-count: infinite;">
                         <div class="page_main_awards__line__LkUnZ whitespace-nowrap overflow-hidden">
                            <?php if($sponsorsBlock->isNotEmpty()):
                                $images = $sponsorsBlock->images()->toFiles();
                            ?>
                                <?php foreach($images as $image): ?>
                                    <div class="page_main_award__42DgV inline-block	align-top mx-[30px]">
                                       <img class="relative block h-[32px] lg:h-[48px] w-auto" alt="<?= $image->alt() ?>" src="<?= $image->url() ?>">
                                    </div>
                                <?php endforeach ?>
                            <?php endif ?>
                         </div>
                      </div>
                   </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<?= snippet('site/footer') ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script>
const swiper = new Swiper('.swiper', {
  slidesPerView: 'auto',
  loop: true,
  centeredSlides: true,
  centeredSlidesBounds: true,
  grabCursor: true,
  updateOnWindowResize: true,
  slideToClickedSlide: true,
  breakpoints: {
      // mobile + tablet - 320-990
      520: {
        spaceBetween: 8,
      },
      // desktop >= 991
      1280: {
        spaceBetween: 12,
      }
    },
  on: {
      slideChange: function (swiper) {
        const caption = document.querySelector('.swiper-caption');
        caption.innerHTML = swiper.slides[swiper.activeIndex].dataset.desc;
      },
    },
    autoplay: {
          delay: 1500,
          disableOnInteraction: false,
          pauseOnMouseEnter: true,
      },
});
</script>

</body>
</html>