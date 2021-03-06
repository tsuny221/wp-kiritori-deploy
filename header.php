<!-- ここからheader.php -->
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf8" />
    <title>KIRITORI｜日常をきりとる</title>
    <link rel="icon" href="<?php echo get_template_directory_uri();?>/images/hasami.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="images/hasami.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script
      src="https://kit.fontawesome.com/f3fffa880e.js"
      crossorigin="anonymous"
    ></script>
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- ローディング画面 -->
    <div class="loading">
      <div class="loading__item">
        <img src="<?php echo get_template_directory_uri();?>/images/hasami.png" class="loading__icon" />
        <img src="<?php echo get_template_directory_uri();?>/images/logo.png" class="loading__img" />
      </div>
    </div>
    <!-- 全てフェードイン -->
    <div id="global-container">
      <!-- ハンバーガーメニュー -->
      <button class="mobile-menu__btn onclick__btn">
        <span>
          <svg
            version="1.1"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px"
            y="0px"
            viewBox="0 0 1024 768"
            style="enable-background: new 0 0 1024 768"
            xml:space="preserve"
          >
            <path
              d="M570.4,367.6c-3.4,0.5-5,1.1-6.6,1c-11.8-1.1-19.7,4.1-25,13.6c-9.2,16.4-23.3,21-42.9,20.8c-109.5-1-218.9-0.8-328.4-1
                              	c-2,0-4-0.2-6.2-0.3c-0.7-5.5,1.8-7.3,7.1-7.9c92-10.6,184-21.5,276-32.2c36.3-4.2,72.5-8.4,108.8-12.8c4.2-0.5,6.4,0.3,8.2,4
                              	C563.8,357.5,567,362,570.4,367.6z M456.6,369.3c-6.7,3.6-8.9,11.4-5.1,17.7c3.8,6.3,12.2,8.4,18.8,4.7c6.2-3.5,8.5-11.4,5-17.4
                              	C471.7,368.1,463.1,365.8,456.6,369.3z"
            />
            <path
              d="M558.2,342.8c11.8-1.5,21.4-2.6,30.9-4c14.6-2.2,29.4-4,43.8-7.2c24.1-5.3,38.1-20.2,44.9-42.6c9.9-32.8,45.1-48,69.9-47.3
                              	c40.1,1.2,67.5,30.5,70.7,61.5c5.3,50.5-49.5,89.4-99,69.6c-21.3-8.5-42.8-10.5-65.4-8c-24.6,2.6-49.2,4.5-73.9,6.4
                              	c-1.8,0.1-4.7-0.7-5.6-2C569.1,361,564.1,352.5,558.2,342.8z M795.2,284.4c-15.8-24.8-46.3-35.2-74.7-20.9
                              	c-27,13.6-37.6,45-23.5,70.1c14.6,26,48.1,35.9,75.4,22.3C799.7,342.2,809.9,310.3,795.2,284.4z"
            />
          </svg>
        </span>
        <span>
          <svg
            version="1.1"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px"
            y="0px"
            viewBox="0 0 1024 768"
            style="enable-background: new 0 0 1024 768"
            xml:space="preserve"
          >
            <path
              d="M571.9,386.8c-3.5-0.2-5.2-0.6-6.7-0.3c-11.6,2.3-20.1-2-26.5-10.9c-11.1-15.4-25.7-18.6-45.2-16.4
                            	c-109,12.3-218.2,23.4-327.3,34.9c-2,0.2-4,0.6-6.1,0.9c-0.1,5.6,2.6,7.1,8,7.2c93,1.1,186,2.4,279,3.7c36.7,0.5,73.3,0.9,110,1.6
                            	c4.2,0.1,6.3-0.9,7.7-4.8C566.4,397.6,569.1,392.7,571.9,386.8z M458.1,396.8c-7.1-2.9-10.2-10.4-7.1-17.2
                            	c3.1-6.7,11.2-9.6,18.2-6.6c6.6,2.9,9.8,10.5,7,16.8C473.4,396.4,465,399.6,458.1,396.8z"
            />
            <path
              d="M562.5,412.7c11.9,0.3,21.6,0.3,31.3,0.8c14.9,0.7,29.8,1,44.5,2.6c24.6,2.8,40.4,16.2,49.7,37.8
                            	c13.7,31.7,50.5,43.3,75.2,40c39.9-5.3,63.7-37.4,63.4-68.6c-0.6-50.9-59.7-84-106.8-59.2c-20.2,10.7-41.5,14.9-64.3,14.8
                            	c-24.8-0.1-49.6,0.6-74.4,1.2c-1.8,0-4.6,1.2-5.3,2.6C571.3,393.5,567.3,402.5,562.5,412.7z M805.6,446.5
                            	c-12.9,26.4-42.1,39.8-72,28.5c-28.5-10.7-42.7-41-31.5-67.5c11.6-27.5,43.8-40.8,72.6-30C803.4,388.5,817.2,419.3,805.6,446.5z"
            />
          </svg>
        </span>
      </button>
      <nav class="mobile-menu">
        <ul class="mobile-menu__main">
          <a href="<?php echo home_url();?>">
            <div class="logo mobile-menu__item">
              <img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="" class="logo__img" />
            </div>
          </a>
          <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="<?php echo home_url('/about');?>">
              <span class="main-title">About</span>
              <span class="sub-title">わたしについて</span>
            </a>
          </li>
          <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="<?php echo home_url('/blog');?>">
              <span class="main-title">Blog</span>
              <span class="sub-title">ブログ</span>
            </a>
          </li>
          <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="<?php echo home_url('/contact');?>">
              <span class="main-title">Contact</span>
              <span class="sub-title">お問い合わせ</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="mobile-menu__cover onclick__btn"></div>
      <div id="container">
        <!-- ヘッダー-->
        <header class="header">
          <div class="header__inner">
            <a href="<?php echo home_url();?>" class="logo">
                <img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="" class="logo__img" />
            </a>
            <nav class="header__nav">
              <ul class="header__ul">
                <li class="header__li"><a href="<?php echo home_url('/about');?>">About</a></li>
                <li class="header__li"><a href="<?php echo home_url('/blog');?>">Blog</a></li>
                <li class="header__li"><a href="<?php echo home_url('/contact');?>">Contact</a></li>
              </ul>
            </nav>
          </div>
        </header>
        <!-- ここまでheader.php -->
