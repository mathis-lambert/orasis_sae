// gsap animation, scroll trigger, hero scalling on scroll
gsap.registerPlugin(ScrollTrigger);

const body = document.querySelector("body");
const hero = document.querySelector(".hero_container");
const heroHeight = hero.offsetHeight;

gsap.to(hero, {
  scale: 1.075,
  scrollTrigger: {
    trigger: hero,
    start: `top top`,
    end: `bottom top `,
    scrub: true,
    pin: true,
  },
});

const navbar = document.querySelector("header");

document.addEventListener("scroll", () => {
  console.log(window.scrollY);
  if (window.scrollY > 50) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});
