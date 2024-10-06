<div class="relative grid <?php e($template == 'case', 'lg:grid-cols-10 lg:gap-[24px]') ?><?php e($template == 'newsitem', 'lg:col-start-5 lg:col-end-11 lg:gap-[24px]') ?>">
    <div class="case-block-text <?php e($template == 'case', 'lg:col-span-6 text-[22px] leading-[26px] lg:text-[24px] lg:leading-[28.8px] -tracking-[0.01em]') ?><?php e($template == 'newsitem', 'lg:col-span-6 text-[22px] leading-[26px] lg:text-[24px] lg:leading-[28.8px] -tracking-[0.01em]') ?>">
        <?= $block->text()->kirbytextinline() ?>
    </div>
</div>