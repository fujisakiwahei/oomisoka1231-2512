document.addEventListener("DOMContentLoaded", () => {
  gsap.registerPlugin(ScrollTrigger);

  if (!document.querySelector(".fade-up")) {
    return;
  }

  // 要素ごとに create すると件数分の監視が走る。batch でまとめて発火し軽量化。
  ScrollTrigger.batch(".fade-up", {
    start: "top 80%",
    once: true,
    interval: 0.12,
    batchMax: 12,
    onEnter: (elements) => {
      elements.forEach((el) => el.classList.add("is-visible"));
    },
    onEnterBack: (elements) => {
      elements.forEach((el) => el.classList.add("is-visible"));
    },
  });
});
