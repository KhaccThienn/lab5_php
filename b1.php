<?php 
  function _format($money, $currency){
    if($currency == 'vnd'){
      echo number_format($money, 0, '', ',') .' ' .$currency .'<br>';
    } else {
      echo number_format($money, 3, '.', ',') . ' ' . $currency . '<br>';
    }
  }

  echo _format(150000000, 'vnd');
  echo _format(6.23, '$');
