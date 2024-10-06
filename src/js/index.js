import Alpine from 'alpinejs'
import persist from '@alpinejs/persist'
import intersect from '@alpinejs/intersect'
import slideUp from './utils/slide.js';
import slideDown from './utils/slideDown.js';
import setCookie from './utils/setCookie.js';
import getCookie from './utils/getCookie.js';
import eraseCookie from './utils/eraseCookie.js';

import LazyLoad from 'vanilla-lazyload'

// Prevent scrolling while optionally allowing scrolling on specified elements
// Git: https://github.com/bameyrick/prevent-scrolling
import { PreventScrolling, ReEnableScrolling } from 'prevent-scrolling'


// Force Scroll to the Top of the Page on Page Reload
// Details: https://www.designcise.com/web/tutorial/how-to-force-scroll-to-the-top-of-the-page-on-page-reload-using-javascript
history.scrollRestoration
  ? (history.scrollRestoration = 'manual')
  : (window.onbeforeunload = () => window.scrollTo(0, 0))

// Global usage utils object
window.utils = {}

window.lazyLoadInstance = new LazyLoad({
  elements_selector: '[loading=lazy]',
  use_native: true
})

let isCeiling = true;

window.addEventListener('wheel', (e) => {

  const delta = e.deltaY;

  if (delta < 0 && !isCeiling) {
    document.documentElement.style.background = '#F5F5F5';
    isCeiling = true;
  } else if (delta > 0 && isCeiling) {
    document.documentElement.style.background = '#FF0E0F';
    isCeiling = false;
  }

});

window.utils.PreventScrolling = PreventScrolling
window.utils.ReEnableScrolling = ReEnableScrolling
window.utils.slideUp = slideUp
window.utils.slideDown = slideDown
window.utils.setCookie = setCookie
window.utils.getCookie = getCookie
window.utils.eraseCookie = eraseCookie

Alpine.plugin(persist)
Alpine.plugin(intersect)

Alpine.start()
