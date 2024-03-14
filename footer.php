



  <footer class="footer">

<ul class="footer__unkar">

     <li class="footer__list"><a href="<?php echo esc_url(home_url('/index.php')); ?>"> </a></li>
     <li class="footer__list"><a href="<?php echo esc_url(home_url('/index.php')); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
<path d="M16 10.667V16.0003L19.32 18.667" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.6667 21.6201H4.66675V27.6201" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M6.66675 23.5667C8.34056 25.627 10.6503 27.0741 13.2343 27.6816C15.8184 28.289 18.5309 28.0226 20.9474 26.9238C23.3638 25.8251 25.3477 23.9562 26.5886 21.6096C27.8295 19.2629 28.2573 16.5711 27.805 13.9554C27.3527 11.3397 26.0459 8.94784 24.0891 7.15413C22.1323 5.36043 19.636 4.26617 16.991 4.04264C14.3459 3.8191 11.7014 4.47892 9.47131 5.9188C7.24126 7.35867 5.55158 9.49734 4.66675 12" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg></a></li>
      <li class="footer__list"><a href="<?php echo esc_url(home_url('/index.php')); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 40 40" fill="none">
  <circle cx="20" cy="20" r="20" fill="white"/>
  <path d="M12 27V25H14V18C14 16.6167 14.4167 15.3875 15.25 14.3125C16.0833 13.2375 17.1667 12.5333 18.5 12.2V11.5C18.5 11.0833 18.6458 10.7292 18.9375 10.4375C19.2292 10.1458 19.5833 10 20 10C20.4167 10 20.7708 10.1458 21.0625 10.4375C21.3542 10.7292 21.5 11.0833 21.5 11.5V12.2C22.8333 12.5333 23.9167 13.2375 24.75 14.3125C25.5833 15.3875 26 16.6167 26 18V25H28V27H12ZM20 30C19.45 30 18.9792 29.8042 18.5875 29.4125C18.1958 29.0208 18 28.55 18 28H22C22 28.55 21.8042 29.0208 21.4125 29.4125C21.0208 29.8042 20.55 30 20 30ZM16 25H24V18C24 16.9 23.6083 15.9583 22.825 15.175C22.0417 14.3917 21.1 14 20 14C18.9 14 17.9583 14.3917 17.175 15.175C16.3917 15.9583 16 16.9 16 18V25Z" fill="black"/>
</svg></a></li>


      <li class="footer__list">
        <a href="<?php echo get_option('home'); ?>/profile/">
<div class="about__icon"><?php bp_loggedin_user_avatar("type=thumb&width=50&height=50" ); ?></div>
</a>
</li>
</ul>

  </footer>





  <script src="https://cdnjs.cloudflare.com/ajax/libs/quo.js/2.3.6/quo.min.js"></script>
    <script>
      const menu = document.querySelector(".menu");
      $$("body").swipeRight(() => {
        menu.classList.add("on");
      });

      $$("body").swipeLeft(() => {
        menu.classList.remove("on");
      });


    </script>
    <script>
          const moreMenu = document.querySelector(".moreMenu");
const moreBtn = document.querySelector(".moreBtn");

moreBtn.addEventListener("click", () => {
  if (moreMenu.style.display === "block") {
    moreMenu.style.display = "none";
    moreBtn.classList.remove("rotated");
  } else {
    moreMenu.style.display = "block";
    moreBtn.classList.add("rotated");
  }
});
</script>