<?php get_header(); ?>

<head>

<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri()); ?>/profile/profile.css">
</head>
  <body>
    <main>
      <div class="headerImg">
        <img src="./img/qrCode.svg" alt="QRコード読み取り" />
        <div class="userTop">
          <div class="userIcon"></div>
          <button class="editBtn">編集</button>
        </div>
      </div>
      <h2>名前</h2>
      <p class="prText">
        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
      </p>
      <div class="prizeWrap">
        <div class="prize">
          <img src="./img/prize.svg" alt="トロフィー" />
          <p>ゴミ拾い</p>
        </div>
        <div class="prize">
          <img src="./img/prize.svg" alt="トロフィー" />
          <p>ゴミ拾い</p>
        </div>
        <div class="prize">
          <img src="./img/prize.svg" alt="トロフィー" />
          <p>ゴミ拾い</p>
        </div>
        <div class="prize">
          <img src="./img/prize.svg" alt="トロフィー" />
          <p>ゴミ拾い</p>
        </div>
        <div class="lockWrap">
          <div class="prize lock"></div>
          <div class="prize lock"></div>
          <div class="prize lock"></div>
          <div class="prize lock"></div>
          <div class="prize lock"></div>
          <div class="prize lock"></div>
          <div class="prize lock"></div>
          <div class="prize lock"></div>
          <div class="prize lock"></div>
          <div class="prize lock"></div>
          <div class="prize lock"></div>
          <div class="prize lock"></div>
        </div>
        <div class="moreBtn">
          <button class="more">さらに表示</button>
        </div>
      </div>
      <section>
        <div class="postImg"></div>
        <div class="postText">
          <h3>name</h3>
          <p>
            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          </p>
        </div>
      </section>
      <section>
        <div class="postImg"></div>
        <div class="postText">
          <h3>name</h3>
          <p>
            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          </p>
        </div>
      </section>
    </main>
    <script>const btn = document.querySelector(".more");
const lockWrap = document.querySelector(".lockWrap");

btn.addEventListener("click", () => {
  console.log("clicked");
  if (lockWrap.style.height === "34vh") {
    lockWrap.style.height = "0vh";
    lockWrap.style.opacity = "100";
    btn.classList.add("rotated");
    setTimeout(() => {
      btn.innerText = "さらに表示";
    }, 500);
  } else {
    lockWrap.style.height = "34vh";
    btn.classList.remove("rotated");
    setTimeout(() => {
      btn.innerText = "閉じる";
    }, 500);
  }
});</script>
  </body>
</html>
<?php get_footer(); ?>