//ローディング画面
jQuery(window).on("load", function () {
  jQuery(".loading").fadeOut();
  jQuery("#global-container").css({ cssText: "opacity: 1 !important;" });
});

// $(function () {
//   // スクロールでトップに戻る
//   // #back-to-topを消す
//   $("#back-to-top").hide();

//   // スクロールが十分された時に#back-to-topを表示。スクロールされたら非表示
//   $(window).scroll(function () {
//     // this(window要素)がどれだけスクロールしたかをscrollTop()を使って値を取る
//     $("#pos").text($(this).scrollTop());
//     if ($(this).scrollTop() > 60) {
//       $("#back-to-top").fadeIn();
//     } else {
//       $("#back-to-top").fadeOut();
//     }
//   });

//   //#back-to-topがクリックされたら上に戻る
//   // animateメソッドを使用
//   $("#back-to-top a").click(function () {
//     $("html, body").animate(
//       {
//         scrollTop: 0,
//       },
//       800
//     );
//     return false;
//   });
// });
