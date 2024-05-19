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

        body {
            background-image: url('https://images.unsplash.com/photo-1547044479-59ce6c0a784a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
        }

        .container {
            width: 60%;
            margin: auto;
            margin-top: 40px;
            border: 1px solid transparent;
            border-radius: 16px;
            padding: 50px;
            background-color: #FEFEFE;
            box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.3);
            background-image: url('https://i.pinimg.com/564x/1b/ff/98/1bff98f304f47b83f0a5c96f48e2f443.jpg');
            background-size: cover;
        }


        .row {
            width: 95%;
            margin: auto;
            position: relative;
            display: flex;
            justify-content: space-between;
            /* background-color: lightcoral */
        }

        .leftbox {
            margin: 0;
            border-radius: 16px;
            box-shadow: 3px 4px 12px 0px #7A7567;
            /* background: url(https://picsum.photos/600/500?random=1)no-repeat center center; */
            background: linear-gradient(45deg, #f8f9f4 30%, #c4e2d8 30%);
            background-size: cover;
            width: 47%;
            height: 600px;
            /* background-color: aqua; */

        }

        .leftbox>img {
            width: 100%;
            height: 100%;
        }

        .rightbox {
            width: 47%;
            height: 600px;
            /* background-color: lightgoldenrodyellow; */

        }

        .rightbox-top {
            height: 85%;
            /* background-color: aqua; */
            margin: auto;
        }

        .calendar {
            width: 90;
            padding-left: 30px;
            padding-top: 30px;
            text-align: center;
            /* background-color: yellowgreen; */

        }

        .calendar-top {
            display: flex;
            justify-content: space-between;
            /* background-color: pink; */
            padding-top: 50px;
            padding-bottom: 20px;
        }

        .nav1 {
            /* background-color: yellow; */
            text-align: left;
        }

        .nav2 {
            /* background-color: red; */
            /* font-family: 'Itim', cursive; */
            font-family: 'PT Serif', serif;
            font-weight: 600;
            text-align: center;
            font-size: 24px;
        }

        .nav3 {
            /* background-color: blue; */
            text-align: right;
        }


        .calendar-top2>form {
            /* border-collapse: collapse; */
            /* background-color: pink; */
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;


        }

        .nav4>select {
            margin: 0 10px;
            border-collapse: collapse;
            font-family: 'PT Serif', serif;
            background-color: white;
            border: 1px solid #2c3e50;
            border-radius: 5px;
            padding: 0 1em 0 0;
            width: 70px;
            font-size: 15px;
            color: #2c3e50;

        }

        .nav5>.enter_y {
            margin: 0 10px;
            border-collapse: collapse;
            font-family: 'PT Serif', serif;
            background-color: white;
            border: 1px solid #2c3e50;
            border-radius: 5px;
            font-size: 15px;
            color: #2c3e50;
        }

        .nav6 >.btn{
            margin: 0 10px;
        }


        .rightbox-bottom {
            height: 15%;
            /* background-color: pink */
        }

        /* 以下為萬年曆CSS */
        .block-table {
            width: 397px;
            display: flex;
            flex-wrap: wrap;
        }

        .item {
            margin-left: -1px;
            margin-top: -1px;
            display: inline-block;
            width: 55px;
            height: 55px;
            border: 1px solid gray;
            /* position: relative; */
            transition: all 0.3s;
            background: white;
        }

        .item-header {
            margin-left: -1px;
            margin-top: -1px;
            display: inline-block;
            width: 55px;
            height: 25px;
            /* border: 1px solid black; */
            text-align: center;
            background-color: balck;
            color: black;
            font-weight: 500;
            font-size: 18px;
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

        .othermday {
            font-weight: bold;
            color: gray;
            opacity: 0.3;
        }

        /* .sytle-p2 {
            background-image: url(./images/back/p1.jpg);
            background-image: url(./images/back/p2.jpg);
            background-image: url(./images/back/p3.jpg);
            background-image: url(./images/back/p4.jpg);
            background-image: url(./images/back/p5.jpg);
            background-image: url(./images/back/p6.jpg);
            background-image: url(./images/back/p7.jpg);
            background-image: url(./images/back/p8.jpg);
            background-size: cover;
        } */
    </style>
</head>

<body>
    <!-- <h1>萬年曆</h1>
  請在這裹撰寫你的萬年曆程式碼 -->

    <br>
    <div class="container">
        <div class="row">
            <div class="leftbox">
                <?php
                $m = $_GET['month'];
                $images = [
                    // "1" => "sytle-p1",
                    // "2" => "sytle-p2",
                    // "3" => "sytle-p3",
                    // "4" => "sytle-p4",
                    // "5" => "sytle-p5",
                    // "6" => "sytle-p6",
                    // "7" => "sytle-p7",
                    // "8" => "sytle-p8",
                    // "9" => "sytle-p9",
                    // "10" => "sytle-p10",
                    // "11" => "sytle-p11",
                    // "12" => "sytle-p12",
                
                    "1" => "./images/back/p1.jpg",
                    "2" => "./images/back/p2.jpg",
                    "3" => "./images/back/p3.jpg",
                    "4" => "./images/back/p4.jpg",
                    "5" => "./images/back/p5.jpg",
                    "6" => "./images/back/p6.jpg",
                    "7" => "./images/back/p7.jpg",
                    "8" => "./images/back/p8.jpg",
                    "9" => "./images/back/p9.jpg",
                    "10" => "./imagesback/p10.jpg",
                    "11" => "./imagesback/p11.jpg",
                    "12" => "./imagesback/p12.jpg"
                ];
                ?>
                <!-- class 裡的 -->
                <!-- <div class="leftbox <?php echo $images[$m]; ?>"> -->
                <!-- 在DIV裡的 -->
                <img src="<?php echo $images[$m]; ?>" alt="">

            </div>
            <div class="rightbox">
                <div class="rightbox-top">

                    <?php
                    $month = $_GET['month'] ?? date("m");
                    $year = $_GET['year'] ?? date("Y");
                    $fmonth = date("F", strtotime("$year-$month"));
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
                    <div class="calendar-top">
                        <div class="nav1">
                            <a href="test00.php?year=<?= $prev_year; ?>&month=<?= $prev; ?>">
                                <img src="./images/left_submit_icon.png" alt="Previous" />
                            </a>
                        </div>
                        <div class="nav2">
                            <?= $fmonth; ?>-<?= $year; ?>
                        </div>
                        <div class="nav3">
                            <a href="test00.php?year=<?= $next_year; ?>&month=<?= $next; ?>">
                                <img src="./images/right_submit_icon.png" alt="Previous" />
                            </a>
                        </div>
                    </div>
                    <div class="calendar-top2">
                        <form action="" method="get">
                            <div class="nav4">
                                <select name="month">
                                    <option value="1">Jan.</option>
                                    <option value="2">Feb.</option>
                                    <option value="3">Mar.</option>
                                    <option value="4">Apr.</option>
                                    <option value="5">May.</option>
                                    <option value="6">Jun.</option>
                                    <option value="7">Jul.</option>
                                    <option value="8">Aug.</option>
                                    <option value="9">Sep.</option>
                                    <option value="10">Oct.</option>
                                    <option value="11">Nov.</option>
                                    <option value="12">Dec.</option>
                                </select>
                            </div>
                            <div class="nav5">
                                <input class="enter_y" type="number" name="year" value="<?= date("Y"); ?>" min="100"
                                    max="9999" placeholder="請輸入年份" required="">
                            </div>
                            <div class="nav6">
                                <input class="btn" type="submit" value="GO">
                            </div>
                        </form>
                    </div>
                    <!-- <div class="month">
                        <form action="" method="get">
                            <input type="number" name="year" id="year" value="<?= date("Y"); ?>" style="width:70px">
                            <input type="number" name="month" id="month" value="<?= date("m"); ?>" min="1" max="12">
                            <input type="submit" value="submit">
                        </form>
                    </div> -->
                    <div class="calendar">
                        <?php
                        $holidays = [
                            "2024-01-01" => "元旦",
                            "2024-02-10" => "農曆新年除夕",
                            "2024-02-11" => "農曆新年初一",
                            "2024-02-12" => "農曆新年初二",
                            "2024-02-28" => "和平紀念日",
                            "2024-04-04" => "兒童節",
                            "2024-04-05" => "清明節",
                            "2024-05-01" => "勞動節",
                            "2024-06-10" => "端午節",
                            "2024-09-17" => "中秋節",
                            "2024-10-10" => "國慶日"
                        ];

                        echo "<div class='block-table'>";
                        echo "<div class='item-header' style='color: red;'>Sun.</div>";
                        echo "<div class='item-header'>Mon.</div>";
                        echo "<div class='item-header'>Tue.</div>";
                        echo "<div class='item-header'>Wed.</div>";
                        echo "<div class='item-header'>Thu.</div>";
                        echo "<div class='item-header'>Fri.</div>";
                        echo "<div class='item-header' style='color: red;'>Sat.</div>";
                        foreach ($days as $day) {
                            $format = explode("-", $day)[2];
                            $w = date("w", strtotime($day));
                            $m = date("m", strtotime($day));
                            // echo $day ;
                            // print_r($day[0]) ;
                            if ($month != $m) {
                                echo "<div class='item othermday'>$format</div>";
                            } else if (array_key_exists($day, $holidays)) {
                                echo "<div class='item holiday'>$format  $holidays[$day]</div>";
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
                <div class="rightbox-bottom">
                </div>
            </div>
        </div>
    </div>
</body>

</html>