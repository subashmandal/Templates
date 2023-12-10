gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(ScrollToPlugin);
gsap.registerPlugin(SplitText);

console.clear();

select = e => document.querySelector(e);
selectAll = e => document.querySelectorAll(e);

const stage = select('.stage');
const slides = selectAll(".slide");
const links = selectAll(".slide__scroll-link");
const titles = selectAll('.col__content-title');
const introTitle = new SplitText('.intro__title', {type: "lines", linesClass: "intro-line"});
const splitTitles = new SplitText(titles, {type: "lines, chars", linesClass: "line", charsClass: "char", position: "relative" });
let slideID = 0;

function initHeader() {
    
    // animate the logo and fake burger button into place
    
    let tl = gsap.timeline({delay: 0.5});
    
    tl.from('.logo', {
        y: -40,
        opacity: 0,
        duration: 2,
        ease: 'power4'
    })
    .from('.nav-btn__svg rect', {
        scale: 0,
        transformOrigin: "center right",
        duration: 0.6,
        ease: 'power4',
        stagger: 0.1
    }, 0.6)
    .to('.nav-rect', {
        scale: 0.8,
        transformOrigin: "center left",
        duration: 0.4,
        ease: 'power2',
        stagger: 0.1
    }, "-=0.6")
    
    // create mouse animations for the faux burger button
    
    let navBtn = select('.nav-btn');
    
    navBtn.addEventListener("mouseover", (e) => {
        gsap.to('.nav-rect', {
            scaleX: 1,
            transformOrigin: "top left",
            duration: 0.4, 
            ease: "power4"
        });
    });
    
    navBtn.addEventListener("mouseout", (e) => {
        gsap.to('.nav-rect', {
            scaleX: 0.8,
            transformOrigin: "top left",
            duration: 0.6, 
            ease: "power4"
        });
    });
}

function initIntro() {
    
    // animate the intro elements into place
    
    let tl = gsap.timeline({delay: 1.2});
    
    tl.from('.intro-line', {
        // x: 100,
        y: 400,
        ease: 'power4',
        duration: 3
    })
    .from('.intro__txt', {
        x: -100,
        opacity: 0,
        ease: 'power4',
        duration: 3
    }, 0.7)
    .from('.intro__img--1', {
        // x: -50,
        y: 50,
        opacity: 0,
        ease: 'power2',
        duration: 10
    }, 1)
    .from('.intro__img--2', {
        // x: 50,
        y: -50,
        opacity: 0,
        ease: 'power2',
        duration: 10
    }, 1);
    
    // set up scrollTrigger animation for the when the intro scrolls out
    
    let stl = gsap.timeline({
        scrollTrigger: {
            trigger: '.intro',
            scrub: 1,
            start: "top bottom", // position of trigger meets the scroller position
            end: "bottom top"
        }
    });
    
    stl.to('.intro__title', {
        x: 400,
        ease: 'power4.in',
        duration: 3,
        
    })
    .to('.intro__txt', {
        y: 100,
        ease: 'power4.in',
        duration: 3,
    }, 0);
}

function initSlides() {
    
    // Animation of each slide scrolling into view
    
    slides.forEach((slide, i) => {   
        
        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: slide,
                start: "40% 50%", // position of trigger meets the scroller position
            }
        });
 
       
	});
}

function initParallax() {
    
    slides.forEach((slide, i) => {
        let imageWrappers = slide.querySelectorAll('.col__image-wrap');
        
        gsap.fromTo(imageWrappers, {
            y: "-30vh"
        },{
            y: "30vh",
            scrollTrigger: {
                trigger: slide,
                scrub: true,
                start: "top bottom", // position of trigger meets the scroller position
                snap: {
                    snapTo: 0.5, // 0.5 'cause the scroll animation range is 200vh for parallax effect
                    duration: 1,
                    ease: 'power4.inOut'
                }
            },
            ease: 'none'
        })
    });
}

function scrollTop() {
    gsap.to(window, {
        duration: 2, 
        scrollTo: {
            y: "#slide-0"
        },
        ease: "power2.inOut"
    });
    gsap.to('.footer__link-top-line', {
        scaleY: 1,
        transformOrigin: "bottom center",
        duration: 0.6, 
        ease: "power4"
    });
}


function init() {
    gsap.set(stage, { autoAlpha: 1 });
    initHeader();
    initIntro();
	
	initSlides();
	initParallax();
   
}

window.onload = () => {
	init();
};