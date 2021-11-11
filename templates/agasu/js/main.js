'use strict';

const menuUnderline = () => {
    let links = document.querySelectorAll('.header-nav__item');
    let target = document.querySelector('.target');
    console.log(links);
    // let t_left = target.getBoundingClientRect().left;
    if (links.length !== 0) {
        target.style.left = `${links[0].getBoundingClientRect().left}px`;
        let t_top = target.style.top;
    }


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

//siteMapEvents();

// header shortcut menu events
const headerShortcuts = () => {
    let shortcuts = document.querySelectorAll('.header-shortcuts .parent');
    let drops = document.querySelectorAll('.header-shortcuts .parent .nav-child');
    //let target;
    // console.log(drops);
    shortcuts.forEach(({firstChild, lastChild}) => {
        firstChild.addEventListener('click', function (e) {
            e.preventDefault();
            lastChild.classList.toggle('active');
        });

    });
    // document.addEventListener('click', (e) => {
    //     let target = e.target;
    //     drops.forEach(element => {
    //         if (!element.contains(target) && element.style.display === 'block') {
    //             // element.lastChild.style.display = '';
    //             console.log(element);
    //         } else {
    //             // e.style.display = '';
    //         }
    //     })
    //
    // })


}

headerShortcuts();


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

const searchHeader = () => {
    let headerSearchBtn = document.querySelector('.header-search-btn');
    let HeaderNav = document.querySelector('.header-nav');

    let headerSearch = document.querySelector('.header-search');
    let headerSearchBtnClose = document.querySelector('.search-close-btn');

    headerSearchBtn.addEventListener('click', function (evt) {
        evt.preventDefault();
        headerSearch.classList.add('js-active');
        HeaderNav.classList.add('js-no-action');

    });

    headerSearchBtnClose.addEventListener('click', function () {
        headerSearch.classList.remove('js-active');
        HeaderNav.classList.remove('js-no-action');
    });

};

searchHeader();

// lang switcher
const langSwitcher = () => {
    let switcher = document.querySelector('.mod-languages .btn-group');
    switcher.addEventListener('click', function () {
        console.log(switcher.querySelector('ul').classList.toggle('opened'));

    });
}

langSwitcher();