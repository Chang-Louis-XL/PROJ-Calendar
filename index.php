<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#">
  <title>萬年曆作業</title>
  <style>
    /* 以下為框架樣式 */
    * {
      box-sizing: border-box;
    }

    .container {
      width: 80%;
      margin: auto;
      /* position: relative;
      display: flex;
      justify-content: space-between; */
      border: 1px solid transparent;
      border-radius: 60px;
      padding: 60px;
      background-color: #FEFEFE;
      box-shadow: 9px 11px 11px 3px black;

      /* position: relative;
      display: flex;
      justify-content: space-between;
      margin: auto;
      margin-top: 50px;
      border: 2px solid black;
      border-radius: 25px;
      padding: 15px;
      position: relative; */
    }


    .row {
      margin: auto;
      position: relative;
      display: flex;
      justify-content: space-between;
    }

    .leftbox {
      margin: 0;
      /* border: 3px dotted #7F989E; */
      border-radius: 60px;
      box-shadow: 3px 4px 12px 0px #7A7567;
      background: url(https://images.unsplash.com/photo-1520853538280-53740d2bd110?ixlib=rb-1.2.1&auto=format&fit=crop&w=633&q=80);
      background-repeat: no-repeat;
      background-size: cover;
      width: 49%;
      height: 650px;

      /* position: absolute;
      width: 49%;
      height: 750px;
      margin-right: 20px;
      border: 2px solid black;
      background-color: lightyellow; */
    }

    .rightbox {
      margin: 0px;
      padding-top: 50px;
      border: 1px solid transparent;
      width: 49%;
      height: 650px;

      /* position: absolute;
      right: 10px;
      width: 49%;
      height: 750px;
      border: 2px solid black;
      background-color: lightgreen; */

    }

    /* 以下為萬年曆CSS */
    .block-table {
      width: 380px;
      display: flex;
      flex-wrap: wrap;
    }

    .item {
      margin-left: -1px;
      margin-top: -1px;
      display: inline-block;
      width: 50px;
      height: 50px;
      border: 1px solid lightgreen;
      position: relative;
      transition: all 0.3s;
      background: white;
    }

    .item-header {
      margin-left: -1px;
      margin-top: -1px;
      display: inline-block;
      width: 50px;
      height: 25px;
      border: 1px solid lightgreen;
      text-align: center;
      background-color: darkgreen;
      color: lightgreen
    }

    .item:hover {
      background: yellow;
      transform: scale(1.3);
      font-weight: bold;
      color: blue;
      transition: all 0.3s;
      z-index: 10;

    }

    .holiday {
      background: pink;
    }

    .othermday{
    font-weight: bold;       
    color: gray;  
    opacity: 0.3;       
    }
  </style>
</head>

<body>
  <!-- <h1>萬年曆</h1>
  請在這裹撰寫你的萬年曆程式碼 -->

  <br>
  <div class="container">
    <div class="row">
      <div class="leftbox">
      </div>
      <div class="rightbox">
        <?php   
        $month = $_GET['month'] ?? date("m");
        $year = $_GET['year'] ?? date("Y");
        $firstDay = strtotime(date("$year-$month-1"));
        $firstWeekStartDay = date("w", $firstDay);
        $days = date("t", $firstDay);
        $lastDay = strtotime(date("Y-$month-$days"));

        $days = [];
        for ($i = 0; $i < 42; $i++) {
          $diff = $i - $firstWeekStartDay;
          $days[] = date("Y-m-d", strtotime("$diff days", $firstDay));
        }

        if ($month - 1 < 1) {
          $prev = 12;
          $prev_year = $year - 1;
        } else {
          $prev = $month - 1;
          $prev_year = $year;
        }

        if ($month + 1 > 12) {
          $next = 1;
          $next_year = $year + 1;

        } else {
          $next = $month + 1;
          $next_year = $year;
        }

        ?>
        <div style="width:384px;">
          <div class="nav" style="text-align: center;">
            <?= $year; ?>年 <?= $month; ?>月
          </div>
          <div class="nav" style="text-align: left;">
            <a href="index.php?year=<?= $prev_year; ?>&month=<?= $prev; ?>">上一個月</a>
          </div>
          <div class="nav" style="text-align: right;">
            <a href="index.php?year=<?= $next_year; ?>&month=<?= $next; ?>">下一個月</a>
          </div>
        </div>

        <?php

        echo "<div class='block-table'>";
        echo "<div class='item-header'>日</div>";
        echo "<div class='item-header'>一</div>";
        echo "<div class='item-header'>二</div>";
        echo "<div class='item-header'>三</div>";
        echo "<div class='item-header'>四</div>";
        echo "<div class='item-header'>五</div>";
        echo "<div class='item-header'>六</div>";
        foreach ($days as $day) {
          $format = explode("-", $day)[2];
          $w = date("w", strtotime($day));
          $m = date("m", strtotime($day));
          if($month!=$m){
            echo "<div class='item othermday'>$format</div>";
          } else if ($w == 0 || $w == 6) {
            echo "<div class='item holiday'>$format</div>";
          } else {

            echo "<div class='item'>";
            echo "<div class='date'>$format</div>";
            echo "</div>";
          }
        }
        echo "</div>";

        ?>
      </div>
    </div>
  </div>



</body>

</html>