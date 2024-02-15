document.addEventListener("DOMContentLoaded", function () {
  const profileKey = localStorage.getItem("selectedProfile");
  console.log("Loaded profile:", profileKey);
  updateProfile(profileKey);
});

const profiles = {
  sieun: {
    name: "김시은_AI_6기_제발도와조",
    image: "../img/zepSieun.png",
    stats: ["34", "1K", "219"],
    comments: [
      "22살 ISTP",
      "노래와 게임을 좋아해요 🍀",
      "멋있는 개발자가 되는 그날까지... 👊",
    ],
    time: "3:22",
  },
  yeeun: {
    name: "김예은_AI_6기_제발도와조",
    image: "../img/zepYeeun.png",
    stats: ["13", "661", "259"],
    comments: [
      "24살 ISTJ",
      "세 마리 고양이 집사😺",
      "게임이랑 팝송을 좋아하고 음식중에선 해물을 싫어해요..",
      "코딩 하나도 모르는 응애라 질문 살인마가 될 예정입니다",
      "잘부탁드려요! (_ _)",
    ],
    time: "1:23",
  },
  Hyosang: {
    name: "지효상_AI_6기_제발도와조",
    image: "../img/zepHyosang.png",
    stats: ["23", "1054", "824"],
    comments: [
      "31살 ENTP",
      "게임 좋아하는 아저씨 🎯",
      "포기하지 말고 끝까지 완주해요! 아 늙기싫다..",
    ],
    time: "5:7",
  },
  Jonghyun: {
    name: "류종현_AI_6기_제발도와조",
    image: "../img/zepJonghyun.png",
    stats: ["21", "2K", "246"],
    comments: [
      "32살 INTP",
      "다크서클 확장공사 중",
      "지속적으로 발전하는 개발자를 향해 다같이 힘내요...",
    ],
    time: "2:29",
  },
};

function updateProfile(profileKey) {
  if (!profiles[profileKey]) return;

  const profile = profiles[profileKey];
  document.getElementById("profileName").innerText = profile.name;
  document.getElementById("profileImage").setAttribute("src", profile.image);
  document.getElementById("postsCount").innerText = profile.stats[0];
  document.getElementById("followersCount").innerText = profile.stats[1];
  document.getElementById("followingCount").innerText = profile.stats[2];
  document.getElementById("currentTime").innerText = profile.time;

  const commentsContainer = document.getElementById("profileComments");
  profile.comments.forEach((comment) => {
    const span = document.createElement("span");
    span.className = "comment";
    span.innerText = comment;
    commentsContainer.appendChild(span);
  });
}
