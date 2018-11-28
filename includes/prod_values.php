<?php

  // $extension;

  // $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

  //   if (strpos($url,'catalog') !== false) {
  //       $extension = $row['PK'];
  //   } else if (strpos($url,'product') !== false){
  //       $extension = $_GET['id'];
  //   } else {
  //     null;
  //   }

  $prodValue = [
      '3D2H6LUKWEKD6',
      'SRCMPWWJTG59N',
      'D8Y6NPWMDMWAN',
      'M44MWPGGRCP88',
      'WUAHGSCKSE7Z8',
      'P38QXX343DCRE',
      '96HJ8GB64SHBC',
      'SNWKUF2KRJ26C',
      'YH872LXE49CAA',
      'JMA9AC9ARWXVL'
  ];

  switch ($_GET['id']) {

      case 1:
          $prodPrice = $prodValue[0];
          break;
      case 2:
          $prodPrice = $prodValue[1];
          break;
      case 3:
          $prodPrice = $prodValue[2];
          break;
      case 4:
          $prodPrice = $prodValue[3];
          break;
      case 5:
          $prodPrice = $prodValue[4];
          break;
      case 6:
          $prodPrice = $prodValue[5];
          break;
      case 7:
          $prodPrice = $prodValue[6];
          break;
      case 8:
          $prodPrice = $prodValue[7];
          break;
      case 9:
          $prodPrice = $prodValue[8];
          break;
      case 10:
          $prodPrice = $prodValue[9];
          break;

      default:
          '';
  }

?>