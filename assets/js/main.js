/* ===============================================
 *  ハンバーガーメニュー
 =============================================== */
document.addEventListener("DOMContentLoaded", () => {
  const header = document.querySelector("header");
  const headerNavButton = document.querySelector(".header__nav-button");
  const headerNavGlobal = document.querySelector(".header__nav-global");
  const headerNavGlobalImage = document.querySelector(".header__nav-global-image");
  const body = document.body;

  headerNavButton.addEventListener("click", () => {
    if (header.classList.contains("is-open")) {
      headerNavGlobalImage.classList.remove("is-active");
      setTimeout(() => {
        header.classList.remove("is-open");
        body.style.overflow = "";
      }, 200);
    } else {
      header.classList.add("is-open");
      body.style.overflow = "hidden";
      setTimeout(() => {
        headerNavGlobalImage.classList.add("is-active");
      }, 700);
    }
  });
});

/* ===============================================
 *  フォームの送信が完了したらThanksページに遷移
 =============================================== */
document.addEventListener(
  "wpcf7mailsent",
  function () {
    setTimeout(() => (window.location.href = "/thanks"), 2000);
  },
  false
);
