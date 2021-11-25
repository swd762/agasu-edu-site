'use strict';

const menuUnderline = () => {
    let links = document.querySelectorAll('.header-nav__item');
    let target = document.querySelector('.target');
    // console.log(links);
    // let t_left = target.getBoundingClientRect().left;
    let t_top = target.style.top;
    if (links.length !== 0) {
        target.style.left = `${links[0].getBoundingClientRect().left}px`;

    }


    function mouseenterFunc() {
        target.style.left = `${this.getBoundingClientRect().left}px`;
        // console.log(this.getBoundingClientRect().left);
        target.classList.add('active');
        const width = this.getBoundingClientRect().width;
        // const left = this.getBoundingClientRect().left;
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
    let menu = document.querySelector('.header-shortcuts');
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
    // todo сделать нормальную реализацию, без костыля
    document.addEventListener('click', (e) => {
        const target = e.target;
        const its_menu = target === menu || menu.contains(target);
        const its_btnMenu = target === shortcuts;
        let drops = document.querySelectorAll('.header-shortcuts .parent .nav-child');
        const is_menuActive = drops[0].classList.contains('active');
        if (!its_menu && !its_btnMenu && is_menuActive) {
            drops[0].classList.toggle('active');
        }
    })


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

const videoGalleryRender = () => {
    jQuery(function ($) {
        let search = 'https://www.googleapis' +
            '.com/youtube/v3/playlistItems?part=snippet&playlistId=PLqMqmny-BPjxegcUXxrzuB24phK40rI8N&key=AIzaSyDaHljvY2Ftw_oEzaALYzNzJeNY7L_FBLc' +
            '&maxResults=6';
        let playSign = "";
        if (search != null) {
            $.getJSON(search, function (data) {
                $.each(data.items, function (i, item) {
                    var htmlTemp = '<div class="video-item col-xl-4 col-lg-4 col-md-6 col-sm-6"><a target="_blank" href="https://www.youtube.com/watch?v=' + item.snippet.resourceId.videoId + '" ' +
                        'class="video-link" title="' + item.snippet.title + '">';
                    htmlTemp += '<img src="' + (typeof item.snippet.thumbnails.medium != 'undefined' ? item.snippet.thumbnails.medium.url : '') + '" alt="' + item.snippet.title + '"/><span class="video-title">' + item.snippet.title + '</span></a></div>';
                    playSign = '<i class="bi bi-play-circle"></i>';
                    $('#media-content').append(htmlTemp);
                })
                $('.video-item a').append(playSign);
            });
        }
    })
}

// videoGalleryRender();


// map and objects rendering

const mapRendering = () => {
    // ***
    let myMap;

    let mapItemsContainer = document.querySelector('.map-block__content-items');
    // Дождёмся загрузки API и готовности DOM.

    ymaps.ready(init);

    function init() {
        let collection = new ymaps.GeoObjectCollection(null, {preset: "twirl#redStretchyIcon"});

        myMap = new ymaps.Map('map', {
            center: [46.34, 48.02],
            zoom: 12
        }, {
            searchControlProvider: 'yandex#search'
        });
        myMap.behaviors.disable('scrollZoom');
        myMap.controls.add('zoomControl', {left: 5, top: 5});


        let agasuPlaceMarks = [
            {
                name: "Главный учебный корпус",
                address: "414056, г. Астрахань, ул. Татищева 18",
                phones: ["+7 (8512) 49-12-15 многоканальный"],
                email: "astbuild@mail.ru",
                center: [46.376533, 48.052439]
            },
            {
                name: "Колледж строительства и экономики",
                address: "414056, г. Астрахань, ул. Татищева 18Б",
                phones: ["+7 (8512) 49-42-00"],
                email: "acbe@mail.ru",
                center: [46.376384, 48.053642]
            },
            {
                name: "Профессиональное училище",
                address: "414042, г. Астрахань, ул. Магистральная, 18",
                phones:
                    [
                        "+7 (8512) 26-68-19 (вахта общежития)",
                        "+7 (8512) 57-73-88",
                        "8-937-120-64-16 (приемная комиссия)"
                    ],
                email: "pu-577388@mail.ru",
                center: [46.415751, 47.976387]
            },
            {
                name: "Колледж жилищно-коммунального хозяйства",
                address: "г. Астрахань, ул. Набережная 1 Мая, 117",
                phones:
                    [
                        "+7 (8512) 52-45-43"
                    ],
                email: "college-gkx@aucu.ru",
                center: [46.346407, 48.046456]
            },
            {
                name: "Общежитие №2",
                address: "г. Астрахань, ул. Украинская, 14",
                phones:
                    [
                        "+7 (8512) 49-11-45"
                    ],
                center: [46.358039, 48.115024]

            },
            {
                name: "Общежитие №1",
                address: "г. Астрахань, ул. Татищева 22А",
                phones:
                    [
                        "+7 (8512) 25-72-33"
                    ],
                center: [46.378504, 48.053517]

            }

        ];

        function createMapsItem(item, collection, menu) {
            // map item block
            let mapsItem = document.createElement('section');
            mapsItem.className = "maps-item";
            // map item header
            let itemHeader = document.createElement('h4');
            mapsItem.appendChild(itemHeader);
            // map item pin
            let itemPin = document.createElement('i');
            itemPin.className = "bi bi-geo-alt-fill"
            itemHeader.append(itemPin, item.name);
            // map item description
            let address = document.createElement('p');
            let addressIcon = document.createElement('i');
            addressIcon.className = "bi bi-map";
            address.append(addressIcon, item.address);
            mapsItem.appendChild(address);
            for (let i = 0; i < item.phones.length; i++) {
                let phones = document.createElement('p');
                let phonesIcon = document.createElement('i');
                phonesIcon.className = "bi bi-phone";
                phones.append(phonesIcon, item.phones[i]);
                mapsItem.appendChild(phones);
            }
            if (item.email != null) {
                let email = document.createElement('p');
                let emailIcon = document.createElement('i');
                let emailLink = document.createElement('a');
                emailLink.href = "mailto:" + item.email;
                emailLink.innerText = item.email;
                emailIcon.className = "bi bi-envelope";
                email.append(emailIcon, emailLink);
                mapsItem.appendChild(email);
            }




            menu.appendChild(mapsItem);

            itemPin.addEventListener('click', function (e) {
                e.preventDefault();
                if (geoObject.balloon.isOpen()) {
                    geoObject.balloon.close();
                } else {
                    geoObject.balloon.open();
                }

            });
            let geoObject = new ymaps.GeoObject({
                    geometry: {
                        type: "Point",
                        coordinates: item.center
                    },
                    properties: {
                        iconContent: item.name,
                        balloonContent: item.address,
                        balloonContentFooter: item.phones[0]

                    }
                },
                {
                    preset: 'twirl#blueStretchyIcon',
                }
            );
            collection.add(geoObject);
        }

        for (let i = 0; i < agasuPlaceMarks.length; i++) {
            createMapsItem(agasuPlaceMarks[i], collection, mapItemsContainer);
        }
        myMap.geoObjects.add(collection);
    }
}
// it calls from main page
// mapRendering();