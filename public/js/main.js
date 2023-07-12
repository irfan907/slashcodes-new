class CynosureDesginMenu {
    constructor(elm) {
        this.elm = elm;
        this.path = elm.querySelectorAll('path');
        this.numPoints = 4;
        this.duration = 800;
        this.delayPointsArray = [];
        this.delayPointsMax = 180;
        this.delayPerPath = 70;
        this.timeStart = Date.now();
        this.isOpened = false;
        this.isAnimating = false;
    }
    toggle() {
        this.isAnimating = true;
        const range = Math.random() * Math.PI * 2;
        for (var i = 0; i < this.numPoints; i++) {
            const radian = (i / (this.numPoints - 1)) * Math.PI * 2;
            this.delayPointsArray[i] = (Math.sin(radian + range) + 1) / 2 * this.delayPointsMax;
        }
        if (this.isOpened === false) {
            this.open();
        } else {
            this.close();
        }
    }
    open() {
        this.isOpened = true;
        this.elm.classList.add('is-opened');
        this.timeStart = Date.now();
        this.renderLoop();
    }
    close() {
        this.isOpened = false;
        this.elm.classList.remove('is-opened');
        this.timeStart = Date.now();
        this.renderLoop();
    }
    updatePath(time) {
        const points = [];
        for (var i = 0; i < this.numPoints; i++) {
            points[i] = ease.cubicInOut(Math.min(Math.max(time - this.delayPointsArray[i], 0) / this.duration, 1)) * 100
        }

        let str = '';
        str += (this.isOpened) ? `M 0 0 V ${points[0]} ` : `M 0 ${points[0]} `;
        for (var i = 0; i < this.numPoints - 1; i++) {
            const p = (i + 1) / (this.numPoints - 1) * 100;
            const cp = p - (1 / (this.numPoints - 1) * 100) / 2;
            str += `C ${cp} ${points[i]} ${cp} ${points[i + 1]} ${p} ${points[i + 1]} `;
        }
        str += (this.isOpened) ? `V 0 H 0` : `V 100 H 0`;
        return str;
    }
    render() {
        if (this.isOpened) {
            for (var i = 0; i < this.path.length; i++) {
                this.path[i].setAttribute('d', this.updatePath(Date.now() - (this.timeStart + this.delayPerPath * i)));
            }
        } else {
            for (var i = 0; i < this.path.length; i++) {
                this.path[i].setAttribute('d', this.updatePath(Date.now() - (this.timeStart + this.delayPerPath * (this.path.length - i - 1))));
            }
        }
    }
    renderLoop() {
        this.render();
        if (Date.now() - this.timeStart < this.duration + this.delayPerPath * (this.path.length - 1) + this.delayPointsMax) {
            requestAnimationFrame(() => {
                this.renderLoop();
            });
        } else {
            this.isAnimating = false;
        }
    }
}

(function() {
    const cynosure_logo = document.querySelector('.logo_bg');
    const elmHamburger = document.querySelector('.hamburger');
    const gNavItems = document.querySelectorAll('.global-menu__item');
    const elmOverlay = document.querySelector('.shape-overlays');
    const overlay = new CynosureDesginMenu(elmOverlay);

    elmHamburger.addEventListener('click', () => {
        if (overlay.isAnimating) {
            return false;
        }
        overlay.toggle();
        if (overlay.isOpened === true) {
            // $('body').css('overflow-y', 'hidden');
            window.setTimeout(function() {
                cynosure_logo.classList.add('is-opened-navi');
            }, 500);
            elmHamburger.classList.add('is-opened-navi');
            for (var i = 0; i < gNavItems.length; i++) {
                gNavItems[i].classList.add('is-opened');
            }
        } else {
            // $('body').css('overflow-y', 'scroll');
            elmHamburger.classList.remove('is-opened-navi');
            cynosure_logo.classList.remove('is-opened-navi');
            for (var i = 0; i < gNavItems.length; i++) {
                gNavItems[i].classList.remove('is-opened');
            }
        }
    });


    var isInViewport = function(elem) {
        var distance = elem.getBoundingClientRect();
        return (
            distance.top >= 0 &&
            distance.left >= 0 &&
            distance.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            distance.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    };
    // read the link on how above code works

    var findMe = document.querySelectorAll('.gallery-new');

    $('body').on('touchmove', GallaryScroll); // for mobile
    $(window).on('scroll', GallaryScroll);

    function GallaryScroll() {
        findMe.forEach(element => {
            //for each .thisisatest
            if (isInViewport(element)) {
                //if in Viewport
                element.classList.add("Active");
                console.log('addClassActive');

            } else {
                element.classList.remove("Active");
                console.log('removeClassActive');
            }
        });
    }

}());



var main_banner_heading = {};
main_banner_heading.opacityIn = [0, 1];
main_banner_heading.scaleIn = [0.2, 1];
main_banner_heading.scaleOut = 3;
main_banner_heading.durationIn = 800;
main_banner_heading.durationOut = 600;
main_banner_heading.delay = 500;

anime.timeline({ loop: true })
    .add({
        targets: '.main_banner_heading .letters-1',
        opacity: main_banner_heading.opacityIn,
        scale: main_banner_heading.scaleIn,
        duration: main_banner_heading.durationIn
    }).add({
        targets: '.main_banner_heading .letters-1',
        opacity: 0,
        scale: main_banner_heading.scaleOut,
        duration: main_banner_heading.durationOut,
        easing: "easeInExpo",
        delay: main_banner_heading.delay
    }).add({
        targets: '.main_banner_heading .letters-2',
        opacity: main_banner_heading.opacityIn,
        scale: main_banner_heading.scaleIn,
        duration: main_banner_heading.durationIn
    }).add({
        targets: '.main_banner_heading .letters-2',
        opacity: 0,
        scale: main_banner_heading.scaleOut,
        duration: main_banner_heading.durationOut,
        easing: "easeInExpo",
        delay: main_banner_heading.delay
    }).add({
        targets: '.main_banner_heading .letters-3',
        opacity: main_banner_heading.opacityIn,
        scale: main_banner_heading.scaleIn,
        duration: main_banner_heading.durationIn
    }).add({
        targets: '.main_banner_heading .letters-3',
        opacity: 0,
        scale: main_banner_heading.scaleOut,
        duration: main_banner_heading.durationOut,
        easing: "easeInExpo",
        delay: main_banner_heading.delay
    }).add({
        targets: '.main_banner_heading',
        opacity: 0,
        duration: 500,
        delay: 500
    });


$(function() {


    $('.theme_tooltip').tooltip();
    wow = new WOW({
        boxClass: 'wow', // default
        animateClass: 'animated', // default
        offset: 0, // default
        mobile: false, // default
        live: true // default
    })
    wow.init();
    $('.goto_sec').on('click', function(e) {

        var href = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(href).offset().top - 0
        }, 1000);
        e.preventDefault();
    });

    $('.mouse_view').hover(
        function() {
            $('#magicMouseCursor').addClass("view_cursor");
            $('#magicPointer').addClass("view_cursor");
        },
        function() {
            $('#magicMouseCursor').removeClass("view_cursor");
            $('#magicPointer').removeClass("view_cursor");
        }
    );
    $('.mouse_go').hover(
        function() {
            $('#magicMouseCursor').addClass("go_cursor");
            $('#magicPointer').addClass("go_cursor");
        },
        function() {
            $('#magicMouseCursor').removeClass("go_cursor");
            $('#magicPointer').removeClass("go_cursor");
        }
    );

    $(window).scroll(function() {

        // selectors
        var $window = $(window),
            $body = $('body'),
            $panel = $('.casestudy_panels');

        // Change 33% earlier than scroll position so colour is there when you arrive.
        var scroll = $window.scrollTop() + ($window.height() / 4);

        $panel.each(function() {
            var $this = $(this);

            // if position is within range of this panel.
            // So position of (position of top of div <= scroll position) && (position of bottom of div > scroll position).
            // Remember we set the scroll to 33% earlier in scroll var.
            if ($this.position().top <= scroll && $this.position().top + $this.height() > scroll) {

                // Remove all classes on body with body_bg_
                $body.removeClass(function(index, css) {
                    return (css.match(/(^|\s)body_bg_\S+/g) || []).join(' ');
                });

                // Add class of currently active div
                $body.addClass('body_bg_' + $(this).data('color'));
            }
        });

    }).scroll();








});




// Plugin isInViewport
! function(e, n) { "object" == typeof exports && "undefined" != typeof module ? n(require("jquery"), require("window")) : "function" == typeof define && define.amd ? define("isInViewport", ["jquery", "window"], n) : n(e.$, e.window) }(this, function(e, n) {
    "use strict";

    function t(n) { var t = this; if (1 === arguments.length && "function" == typeof n && (n = [n]), !(n instanceof Array)) throw new SyntaxError("isInViewport: Argument(s) passed to .do/.run should be a function or an array of functions"); return n.forEach(function(n) { "function" != typeof n ? (console.warn("isInViewport: Argument(s) passed to .do/.run should be a function or an array of functions"), console.warn("isInViewport: Ignoring non-function values in array and moving on")) : [].slice.call(t).forEach(function(t) { return n.call(e(t)) }) }), this }

    function o(n) {
        var t = e("<div></div>").css({ width: "100%" });
        n.append(t);
        var o = n.width() - t.width();
        return t.remove(), o
    }

    function r(t, i) {
        var a = t.getBoundingClientRect(),
            u = a.top,
            c = a.bottom,
            f = a.left,
            l = a.right,
            d = e.extend({ tolerance: 0, viewport: n }, i),
            s = !1,
            p = d.viewport.jquery ? d.viewport : e(d.viewport);
        p.length || (console.warn("isInViewport: The viewport selector you have provided matches no element on page."), console.warn("isInViewport: Defaulting to viewport as window"), p = e(n));
        var w = p.height(),
            h = p.width(),
            v = p[0].toString();
        if (p[0] !== n && "[object Window]" !== v && "[object DOMWindow]" !== v) {
            var g = p[0].getBoundingClientRect();
            u -= g.top, c -= g.top, f -= g.left, l -= g.left, r.scrollBarWidth = r.scrollBarWidth || o(p), h -= r.scrollBarWidth
        }
        return d.tolerance = ~~Math.round(parseFloat(d.tolerance)), d.tolerance < 0 && (d.tolerance = w + d.tolerance), l <= 0 || f >= h ? s : s = d.tolerance ? u <= d.tolerance && c >= d.tolerance : c > 0 && u <= w
    }

    function i(n) { if (n) { var t = n.split(","); return 1 === t.length && isNaN(t[0]) && (t[1] = t[0], t[0] = void 0), { tolerance: t[0] ? t[0].trim() : void 0, viewport: t[1] ? e(t[1].trim()) : void 0 } } return {} }
    e = "default" in e ? e.default : e, n = "default" in n ? n.default : n,
        /**
         * @author  Mudit Ameta
         * @license https://github.com/zeusdeux/isInViewport/blob/master/license.md MIT
         */
        e.extend(e.expr[":"], { "in-viewport": e.expr.createPseudo ? e.expr.createPseudo(function(e) { return function(n) { return r(n, i(e)) } }) : function(e, n, t) { return r(e, i(t[3])) } }), e.fn.isInViewport = function(e) { return this.filter(function(n, t) { return r(t, e) }) }, e.fn.run = t
});
//# isInViewport



// images lazyloader

document.addEventListener("DOMContentLoaded", function() {
    var lazyImages = [].slice.call(document.querySelectorAll("img.lazyload"));

    if ("IntersectionObserver" in window) {
        let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    let lazyImage = entry.target;
                    lazyImage.src = lazyImage.dataset.src;
                    lazyImage.srcset = lazyImage.dataset.srcset;
                    lazyImage.classList.remove("lazyload");
                    lazyImageObserver.unobserve(lazyImage);
                }
            });
        });

        lazyImages.forEach(function(lazyImage) {
            lazyImageObserver.observe(lazyImage);
        });
    } else {
        // Possibly fall back to a more compatible method here
    }
});