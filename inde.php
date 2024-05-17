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
            width: 1100px;
            margin: auto;
            margin-top: 15px;
            border: 1px solid transparent;
            border-radius: 60px;
            padding: 60px;
            background-color: #FEFEFE;
            box-shadow: 9px 11px 11px 3px black;
            background-image: url('./images/bg.jpg');
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
            border-radius: 60px;
            box-shadow: 3px 4px 12px 0px #7A7567;
            background: url(https://picsum.photos/600/500?random=1)no-repeat center center;
            background-size: cover;
            width: 47%;
            height: 600px;
            /* background-color: aqua; */

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

        .rightbox-bottom {
            height: 15%;
            /* background-color: pink */
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
            border: 1px solid gray;
            /* position: relative; */
            transition: all 0.3s;
            background: white;
        }

        .item-header {
            margin-left: -1px;
            margin-top: -1px;
            display: inline-block;
            width: 50px;
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
                            <a href="inde.php?year=<?= $prev_year; ?>&month=<?= $prev; ?>">
                                <img src="./images/left_submit_icon.png" alt="Previous" />
                            </a>
                        </div>
                        <div class="nav2">
                            <?= $fmonth; ?>-<?= $year; ?>
                        </div>
                        <div class="nav3">
                            <a href="inde.php?year=<?= $next_year; ?>&month=<?= $next; ?>">
                                <img src="./images/right_submit_icon.png" alt="Previous" />
                            </a>


                        </div>
                    </div>
                    <div class="calendar">
                        <?php
                        $Festival = [
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

                            if ($month != $m) {
                                echo "<div class='item othermday'>$format</div>";
                            } else if (array_key_exists($day, $Festival)) {
                                echo "<div class='item holiday'>$format <br>"."<span style='font-size:12px;color:white'>$Festival[$day]</span></div>";
                                
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