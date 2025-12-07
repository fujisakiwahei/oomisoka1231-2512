document.addEventListener("DOMContentLoaded", (event) => {
  gsap.registerPlugin(ScrollTrigger);
  document.querySelectorAll(".fade-up").forEach((el) => {
    ScrollTrigger.create({
      trigger: el,
      start: "top 80%", // 上端が画面下30%で発火
      onEnter: () => el.classList.add("is-visible"),
      onEnterBack: () => el.classList.add("is-visible"),
      once: true, // 1回のみ
    });
  });
});
