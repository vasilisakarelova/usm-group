<?php if($layout == 'small'): ?>
    <div class="relative inline-block left-[50%] translate-x-[-50%] lg:col-span-10" id="clickbox">
        <div class="flex flex-wrap lg:h-[104px] gap-[4px] lg:gap-[24px] justify-center w-full case-gallery -mt-[24px]">
            <?php foreach ($block->images()->toFiles() as $image): ?>
                <div class="case-gallery-item relative block h-[78px] pt-[24px] lg:h-full cursor-pointer hover:-translate-y-[5px] transition will-change-transform z-10"
                    data-index="<?= $block->images()->toFiles()->indexOf($image) ?>"
                >
                    <img
                        class="opacity-0 transition-all duration-300 relative block h-full transition ease-in bg-[#E6E6E6]"
                        src="<?= $image->url() ?>"
                        loading="lazy"
                        onload="this.style.opacity=1"
                     />
                </div>
            <?php endforeach ?>
        </div>

        <div class="case-gallery-active relative block w-full md:h-[550px] lg:h-[550px] lg:mx-auto cursor-pointer pt-[32px] lg:pt-[48px]" style="display: none;">
            <img class="relative block w-full h-auto md:h-full md:w-auto lg:h-full lg:w-auto mx-auto" />
        </div>
    </div>

    <script>
        const gallery = document.querySelector('.case-gallery');
        const activeImageContainer = document.querySelector('.case-gallery-active');
        const images = [].slice.call(gallery.querySelectorAll('img'));
        let currentImageIndex = null;

        images.forEach(image => {
            image.addEventListener('click', (ev) => {
                currentImageIndex = image.parentNode.dataset.index;
                images.forEach(image => {
                    image.style.transform = '';
                })

                const imgEl = activeImageContainer.querySelector('img');
                imgEl.src = image.src;
                activeImageContainer.style.display = '';
                image.style.transform = 'translateY(-16px)';

                image.parentNode.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                })
            })
        })

        activeImageContainer.addEventListener('click', (ev) => {
            const newIndex = parseInt(currentImageIndex) + 1;
            if (newIndex === images.length) {
                images[0].click()
            } else {
                images[newIndex].click()
            }
        })

        const close = () => {
            const imgEl = activeImageContainer.querySelector('img');
            imgEl.src = '';
            activeImageContainer.style.display = 'none';

            images.forEach(image => {
                image.style.transform = '';
            })
        }

        window.addEventListener('click', (ev)=>{
          if (!document.getElementById('clickbox').contains(ev.target)){
            close();
          }
        })
    </script>
<?php elseif($layout == 'big'): ?>
    <div class="flex flex-col lg:grid lg:grid-cols-<?= $block->images()->toFiles()->count() ?><?= e($block->images()->toFiles()->count() > 1, ' lg:h-[450px]') ?> gap-[12px] lg:gap-[24px] lg:justify-center w-full lg:col-span-10">
        <?php foreach ($block->images()->toFiles() as $image): ?>
            <div class="relative block h-full w-full overflow-hidden bg-[#E6E6E6]">
                <img
                    class="opacity-0 transition-all duration-300 relative block h-full w-full object-cover ease-in"
                    src="<?= $image->url() ?>"
                    loading="lazy"
                    onload="this.style.opacity=1"
                />
            </div>
        <?php endforeach ?>
    </div>
<?php endif ?>