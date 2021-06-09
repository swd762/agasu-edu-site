'use strict';

const menuUnderline = () => {
    let links = document.querySelectorAll('.header-nav__item');
    let target = document.querySelector('.target');
    // let t_left = target.getBoundingClientRect().left;
    target.style.left = `${links[0].getBoundingClientRect().left}px`;
    let t_top = target.style.top;

    function mouseenterFunc() {
        target.style.left = `${this.getBoundingClientRect().left}px`;
        // console.log(this.getBoundingClientRect().left);
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

// sitemap events

const siteMapEvents = () => {
    let siteMapHamburger = document.querySelector('.btn-burger');
    let siteMapClose = document.querySelector('.sitemap-close');

    let menuSiteMap = document.querySelector('.menu-sitemap');

    function disableSitemap() {
        menuSiteMap.style.display = "none";
    }

    function sitemapOpen() {
        menuSiteMap.style.display = "flex";
    }

    siteMapHamburger.addEventListener('click', sitemapOpen);
    siteMapClose.addEventListener('click', disableSitemap);
}

siteMapEvents();

// sticky header

const stickyHeader = () => {
    let header = document.querySelector('.header');
    let body = document.querySelector('body');

    // console.log(body);

    function showHeader(scrollTop) {
        if (scrollTop >= 180) {
            header.classList.add('fix');
            body.classList.add('body-fix');
        } else {
            header.classList.remove('fix');
            body.classList.remove('body-fix');
        }
    }

    window.addEventListener('scroll', () => {

        let scrollHeight = window.scrollY;
        // console.log(scrollHeight);
        showHeader(scrollHeight);
    })


}

stickyHeader();

