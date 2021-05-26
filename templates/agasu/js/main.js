'use strict';

const menuUnderline = () => {
    let links = document.querySelectorAll('.main-menu-js');
    let target = document.querySelector('.target');
    // let t_left = target.getBoundingClientRect().left;
    target.style.left = `${links[0].getBoundingClientRect().left}px`;
    let t_top = target.style.top;

    function mouseenterFunc() {
        target.style.left = `${this.getBoundingClientRect().left}px`;
        console.log(this.getBoundingClientRect().left);
        target.classList.add('active');
        const width = this.getBoundingClientRect().width;
        const left = this.getBoundingClientRect().left;
        target.style.width = `${width}px`;
        // target.style.transform = `translateX(${left - t_left}px)`;
        target.style.transform = `translateY(-30px)`;
        target.style.top = `${t_top}px`;
    }

    function mouseleaveFunc() {
        target.style.removeProperty('width');
        // target.style.removeProperty('transform');
        target.style.transform = `none`;
        target.classList.remove('active');
    }

    for (let i = 0; i < links.length; i++) {
        links[i].addEventListener('mouseenter', mouseenterFunc);
        links[i].addEventListener('mouseleave', mouseleaveFunc);
    }
};

menuUnderline();