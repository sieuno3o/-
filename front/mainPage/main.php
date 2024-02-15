<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TEAM 제발구해조</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="mainStyle.css" />
    <style></style>
  </head>

  <body class="background">
    <div class="container">
      <!-- 팀 소개 박스-->
      <div class="teamIntroduction">
        <div id="teamIntroductionTitle">
          <a style="color: red">T</a><a style="color: orange">E</a
          ><a style="color: yellow">A</a><a style="color: greenyellow">M</a
          ><a style="color: palegreen">제</a><a style="color: skyblue">발</a
          ><a style="color: blue">구</a><a style="color: blueviolet">해</a
          ><a style="color: violet">조</a>
        </div>
        <div class="teamIntroDetail">
          팀 소개/목표 : 개발자가 되기를 꿈꾸는 사람들이 모여 협업과 코딩을
          배워나가는 팀입니다!
        </div>
        <div class="teamIntroDetail">팀 약속 : 13~14시 점심시간. 18~19시 저녁시간</div>
        <div id="teamIntroRule">팀 규칙</div>
        <div class="teamIntroDetail">
          시은 : PR은 매일 19시에 보내기 (코드 작성시 주석 필수!)<br />
          종현 : 생각나는대로 편하게 서로의 의견을 공유하기<br />
          예은 : 모르는 거 있으면 바로바로 물어보기<br />
          효상 : 포기하지말고 어떻게든 해결하기
        </div>
      </div>

      <!-- 팀 사진 박스 -->
      <div class="teamMembersPicture">
        <div class="MembersPicture">
          <div class="picContainer">
            <span class="membersName">시은</span>
            <button data-profile="sieun" onclick="openProfile('sieun')">
              <img class="profilePic" src="../img/Sieun.png" />
            </button>
          </div>
          <div class="picContainer">
            <span class="membersName">종현</span>
            <button data-profile="Jonghyun" onclick="openProfile('Jonghyun')">
              <img class="profilePic" src="../img/Jonghyun.png" />
            </button>
          </div>
        </div>
        <div style="margin-top: -15px" class="MembersPicture">
          <div class="picContainer">
            <span class="membersName">예은</span>
            <button data-profile="yeeun" onclick="openProfile('yeeun')">
              <img class="profilePic" src="../img/Yeeun.jpg" />
            </button>
          </div>
          <div class="picContainer">
            <span class="membersName">효상</span>
            <button data-profile="Hyosang" onclick="openProfile('Hyosang')">
              <img class="profilePic" src="../img/Hyosang.png" />
            </button>
          </div>
        </div>
        <div class="clickThat">
          <span>사진들을 누르면 인스타그램이 나와요! </span>
        </div>
      </div>

      <!-- 방명록 입력 박스 -->
      <div class="enterGuestbook">
        <div><방명록></div>
        <div class="inputGuestbook">
        <form action="../../back/post.php" method="post">
            <input
            type="text"
            name="visitor_name"
            class="form-control"
            placeholder="이름(닉네임)"
            onfocus="placeholder=''"
            onblur="placeholder='이름(닉네임)'"
          />
          <input
            type="text"
            name="comment"
            class="form-control"
            placeholder="남길 한마디"
            onfocus="placeholder=''"
            onblur="placeholder='남길 한마디'"
          />
          <button type="submit" class="btn btn-primary">저장</button>
          </form>
        </div>
        <div>소개해조 팀에게 응원메세지 또는 하고 싶은 말을 적어주세요!</div>
      </div>

      <!-- 방명록 출력 박스 -->
      <div class="printGuestbook" style="overflow: auto">
        <?php
          include_once("../../back/test.php");
        ?>
        </div>
    </div>

    <script>
      function openProfile(profileKey) {
        console.log("Selected profile:", profileKey);
        localStorage.setItem("selectedProfile", profileKey);
        window.open(
          "../profile/profile.html",
          "popup",
          "width=800,height=800,left=200,top=100"
        );
      }
    </script>
  </body>
</html>
