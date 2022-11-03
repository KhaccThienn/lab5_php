<?php
  function _image($link, $width, $height){
    echo "<img src='$link' width='$width' height='$height' alt='$link' />";
  }

  echo _image("https://c4.wallpaperflare.com/wallpaper/246/739/689/digital-digital-art-artwork-illustration-abstract-hd-wallpaper-preview.jpg", "1650px", "760px")
?>