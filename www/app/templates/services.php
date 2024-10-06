<?= snippet('site/header') ?>
<div class="flex-1 antialiased appearance-none bg-[#F5F5F5]">
    <?= snippet('site/nav') ?>
    <div class="relative block text-center pt-[80px] px-[16px] lg:pt-[120px] md:px-[24px] lg:px-[24px]" x-data="{itemsShown: [], titleShown: false}">
        <div class='page-title' x-intersect="titleShown = true">
            <h1 class="font-ABCGravityExpanded uppercase text-[40px] leading-[36px] lg:text-[64px] lg:leading-[77.6px] transition-transform will-change-transform translate-y-[120%]"
                :class="{ 'translateZ': titleShown }"
                x-show="itemsShown"
            ><?= $page->title() ?>
            </h1>
        </div>
        <div class="relative grid py-[80px] lg:py-[120px]">
            <?php foreach ($page->listOfServices()->toBlocks() as $block): ?>
                <div class="block block-type-<?= $block->type() ?> w-full pt-[32px] lg:pt-[48px]">
                  <?php snippet('blocks/' . $block->type(), [
                      'block' => $block,
                      'blockIndex' => $page->listOfServices()->toBlocks()->indexOf($block)
                    ]) ?>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<script>
const slidingItems = [].slice.call(document.querySelectorAll('.block-type-service'))
slidingItems.forEach(item => {
    let duration = 500;
    let target = item.querySelector('.service-group-items');

    item.addEventListener('click', (ev) => {
        if (ev.target.tagName === 'BUTTON') return

        if (item.classList.contains('is-open')) {
            item.classList.remove('is-open');
            return window.utils.slideUp(target, duration);
        } else {
            item.classList.add('is-open');
            return window.utils.slideDown(target, duration);
        }
    })
})

</script>

<?= snippet('site/footer') ?>
</div>
</body>
</html>