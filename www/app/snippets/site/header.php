<!DOCTYPE html>
<html lang="<?= $kirby->languageCode() ?>">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?= snippet('site/seo') ?>
  <?= snippet('site/icons') ?>
  
  <script
    src="https://unpkg.com/quicklink@2.2.0/dist/quicklink.umd.js"
    async
    onload="quicklink.listen({ throttle: 2 })"
  ></script>

  <style>
    [x-cloak] { opacity: 0 !important; }
    img:not([src]):not([srcset]) { visibility: hidden !important; }
  </style>

  <?= vite()->client() ?>
  <?= vite()->css() ?>
  <?= vite()->js() ?>

  <?php if (!option('debug') and $site->scrips_head()->isNotEmpty()) : ?>
    <?= $site->scrips_head() ?>
  <?php endif; ?>

  <?php if ($page->template() == 'home') : ?>
      <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanilla-infinite-marquee@1.0.12/infinite-marquee.min.css">
  <?php endif; ?>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

</head>

<body class="flex flex-col min-h-[100vh] bg-[#F5F5F5] text-[#0C0C0C] pt-[66px] md:pt-[108px] lg:pt-[108px]"
    x-data='{scrollPosition: window.pageYOffset}' @scroll.window='scrollPosition = window.pageYOffset'
>
<div x-data="{
    cartItems: $persist([]).as('cartItems').using(sessionStorage),
    indexes: $persist([]).as('indexes').using(sessionStorage),
    contactFormIsOpen: false,
    menuIsOpen: false,
    cartIsOpen: false,
    hideMenu: false,
    prevState: 0,
    referrer: $persist('').as('referrer').using(sessionStorage),
    toggleScroll() { document.body.style.overflow = (this.contactFormIsOpen || this.menuIsOpen || this.cartIsOpen) ? 'hidden' : ''; },
    togglePopup() {
        if(this.contactFormIsOpen) {
            this.contactFormIsOpen = false;
        } else if(this.cartIsOpen) {
            this.cartIsOpen = false;
        } else if(this.menuIsOpen) {
            this.menuIsOpen = false;
        } else {
            this.menuIsOpen = true;
        }
    },
    checkoutCart() {
        this.cartIsOpen = false;
        this.contactFormIsOpen = true;
        const textArea = document.querySelector('textarea')
        textArea.innerHTML = Array.from(this.cartItems).join('; ');
        this.cartItems = [];
        setTimeout(()=> {
            textArea.parentNode.classList.add('is-active')
            textArea.style.height = `${textArea.scrollHeight}px`;
        },10)
    },
}">
