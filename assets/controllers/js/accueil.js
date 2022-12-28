// gsap animation, scroll trigger, hero scalling on scroll
gsap.registerPlugin(ScrollTrigger);

const body = document.querySelector("body");
const hero = document.querySelector(".hero_container");

if (hero) {
  function heroScale() {
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
  }
  if (window.innerWidth > 1024 && window.location.hash.includes("#") == false) {
    heroScale();
    window.scrollTo(0, 0);
  } else if (window.location.hash.includes("#") && window.innerWidth > 1024) {
    heroScale();
    gsap.set(hero, { scale: 1 });
  } else {
    // disable gsap animation
    gsap.set(hero, { scale: 1 });

    // remove scroll trigger
    ScrollTrigger.getAll().forEach((trigger) => trigger.kill());
  }

  window.addEventListener("resize", () => {
    if (window.innerWidth > 1024) {
      heroScale();
      /* window.scrollTo(0, 0); */
    } else {
      // disable gsap animation
      gsap.set(hero, { scale: 1 });

      // remove scroll trigger
      ScrollTrigger.getAll().forEach((trigger) => trigger.kill());
    }
  });
}

const clippedImg = document.querySelector(".clippedImage");
const imgPath = document.querySelector(".imgReveal");

if (imgPath) {
  imgPath.addEventListener("mousemove", (e) => {
    const x = e.pageX - imgPath.offsetLeft;
    const y = e.pageY - imgPath.offsetTop - window.scrollY;

    let clip_size = 150;

    clippedImg.style.clipPath = `circle(${clip_size}px at ${x}px ${y}px)`;
  });
  imgPath.addEventListener("mouseleave", (e) => {
    const x = e.pageX - imgPath.offsetLeft;
    const y = e.pageY - imgPath.offsetTop;

    clippedImg.style.clipPath = `circle(0px at ${x}px ${y}px)`;
  });

  const picOverlay = document.querySelector(".infoOverlay");
  const overlayBtn = document.querySelector(".overlayBtn");

  overlayBtn.addEventListener("click", () => {
    picOverlay.classList.toggle("opened");
  });
}
