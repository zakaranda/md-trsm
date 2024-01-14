import simpleParallax from 'simple-parallax-js';
import $script from 'scriptjs';
import { Modal } from './components/modal';

import './polyfill/polyfill';

const IE11 = !!window.MSInputMethodContext && !!document.documentMode;
if(!IE11) {
    $script('https://cdn.jsdelivr.net/npm/simple-parallax-js@5.4.0/dist/simpleParallax.min.js', () => {
        const images = document.getElementsByClassName('thumbnail');
        new simpleParallax(images);
    });
}
var treeDiag = document.querySelector('.treeDiag');
if(treeDiag) {
    var maxScrollLeft = treeDiag.scrollWidth - treeDiag.clientWidth;
    treeDiag.scrollTo(maxScrollLeft/2, 0);
}

const menuOpenBtn = document.querySelector('.js-menu-open-icon');
menuOpenBtn.addEventListener('click', function() {
    document.querySelector('.js-menu-close-icon').classList.remove('sr-only');
    document.querySelector('.js-mobile-menu').classList.add('open');
});

const menuCloseBtn = document.querySelector('.js-menu-close-icon');
menuCloseBtn.addEventListener('click', function() {
    document.querySelector('.js-menu-close-icon').classList.add('sr-only');
    document.querySelector('.js-mobile-menu').classList.remove('open');
});

const menuItemBtns = document.querySelectorAll('.js-mobile-menu-item');
menuItemBtns.forEach((menuItemBtn)=>{
    menuItemBtn.addEventListener('click', function() {
        document.querySelector('.js-menu-close-icon').classList.add('sr-only');
        document.querySelector('.js-mobile-menu').classList.remove('open');
    });
});

const projectItemBtns = document.querySelectorAll('.js-open-popin-item');
projectItemBtns.forEach((projectItemBtn)=>{
    projectItemBtn.addEventListener('click', function() {
        const modal = new Modal();
        const details = projectItemBtn.querySelector('.js-popin-details').innerHTML;
        modal.open(details, 'big');
    });
});





