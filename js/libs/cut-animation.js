//カットアニメーション
jQuery("#scissors").on("click", function () {
  jQuery(".cut").addClass("fall");
  jQuery("#scissors")
    .children("img")
    .attr(
      "src",
      "http://kiritori.work/wp-content/themes/kiritori/images/hasami-close.png"
    )
    .css({ cssText: "width: 15px !important;" });
});
