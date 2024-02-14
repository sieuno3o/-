const profiles = {
  sieun: {
    name: "김시은_AI_6기_제발도와조",
    image: "zepSieun.png",
    stats: [34, "1K", 219],
    comments: [
      "22살 ISTP",
      "노래와 게임을 좋아해요 🍀",
      "멋있는 개발자가 되는 그날까지... 👊",
    ],
  },
  yeeun: {
    name: "김예은_AI_6기_제발도와조",
    image: "zepYeeun.png",
    stats: [13, "661", 259],
    comments: [
      "24살 ISTJ",
      "세 마리 고양이 집사😺",
      "게임이랑 팝송을 좋아하고 음식중에선 해물을 싫어해요..",
      "코딩 하나도 모르는 응애라 질문 살인마가 될 예정입니다",
      "잘부탁드려요! (_ _)",
    ],
  },
};

function updateProfile(profileKey) {
  const profile = profiles[profileKey];
  if (!profile) return;
  document.querySelector(".top span").textContent = profile.name;
  document.querySelector(".profileImg .zepImg").src = `./img/${profile.image}`;
  const statsElements = document.querySelectorAll(
    ".statsTable tr:first-child td"
  );
  profile.stats.forEach((stat, index) => {
    statsElements[index].textContent = stat;
  });

  const commentContainer = document.querySelector(".main > div:last-child");
  commentContainer.innerHTML = "";
  profile.comments.forEach((comment) => {
    const span = document.createElement("span");
    span.classList.add("comment");
    span.textContent = comment;
    commentContainer.appendChild(span);
  });
}

function initializeButtons() {
  document.querySelectorAll(".main button").forEach((button) => {
    button.addEventListener("click", function () {
      updateProfile(this.dataset.profile);
    });
  });
}

window.addEventListener("load", initializeButtons);
