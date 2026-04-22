document.addEventListener("DOMContentLoaded", () => {
  const readerBtn = document.getElementById("commmon3Reader");
  const spGnaviItems = document.querySelectorAll(".spGnavi");

  // 元画像とバツ画像のパス
  const normalSrc = "/assets/images/common/spNavireader.png";
  const closeSrc  = "/assets/images/common/spNavireader-close.png"; // バツ画像

  readerBtn.addEventListener("click", (e) => {
    e.preventDefault();

    spGnaviItems.forEach(item => {
      item.classList.toggle("active");
    });

    // 画像切り替え
    if (readerBtn.src.includes("spNavireader.png")) {
      readerBtn.src = closeSrc;
    } else {
      readerBtn.src = normalSrc;
    }
  });
});