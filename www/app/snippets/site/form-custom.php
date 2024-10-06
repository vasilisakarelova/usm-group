<div
    x-cloak
    x-show="contactFormIsOpen"
    class="form-wrapper fixed flex w-full h-full top-0 left-0 bg-[#F5F5F5] z-[100] overflow-auto"
>
    <div class="w-full h-full flex min-h-[700px]">
        <?php snippet('form', ['page' => $site->find('forms')]) ?>
        <div @click="contactFormIsOpen = false; toggleScroll()" class="cursor-pointer uppercase text-[#0C0C0C] transition-opacity ease-in-out font-ABCGravityCondensed absolute left-[16px] top-[16px] lg:left-[24px] lg:top-[24px] text-[16px] lg:text-[24px] z-[101] hover:opacity-40">закрыть</div>
    </div>
</div>

<script>
const fields = [].slice.call(document.querySelectorAll('.form-input'));
fields.forEach(input => {
    input.onfocus = function() {
        const parent = input.parentNode;
        parent.classList.add('is-active')
    }

    input.onblur = function() {
        const parent = input.parentNode;
        if (input.value === '' || input.value === null) {
            parent.classList.remove('is-active')
        }
    }
})

document.querySelectorAll('textarea').forEach( element => {
  element.addEventListener('input', event => {
    event.target.style.height = 'auto';
    event.target.style.height = `${event.target.scrollHeight}px`;

    if (window.innerWidth < 519) {
        if (event.target.value === '') {
            event.target.parentNode.style.height = '';
        } else {
            event.target.parentNode.style.height = 'auto';
        }
    }
  })
})

const agreementInput = document.querySelector('.form-agreementInput');
const formSubmit = document.querySelector('.form-submitBtn');
agreementInput.addEventListener('change', (ev) => {
    formSubmit.disabled = !ev.target.checked;
})
</script>