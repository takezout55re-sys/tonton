document.addEventListener("DOMContentLoaded", () => {
  const tabButtons = document.querySelectorAll(".tab-btn");
  const tabContents = document.querySelectorAll(".tab-content");

  tabButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const targetId = button.getAttribute("data-target");

      // すべてのタブボタンから active を外す
      tabButtons.forEach((btn) => btn.classList.remove("active"));
      // クリックしたタブボタンに active を付ける
      button.classList.add("active");

      // すべてのコンテンツを非表示にする
      tabContents.forEach((content) => content.classList.remove("active"));
      // 対象のコンテンツだけ表示
      document.getElementById(targetId).classList.add("active");
    });
  });
});