// 定義國定假日陣列，每個元素包含日期和名稱
$holidays = [
    ["date" => "2024-01-01", "name" => "元旦"],
    ["date" => "2024-02-10", "name" => "農曆新年除夕"],
    ["date" => "2024-02-11", "name" => "農曆新年初一"],
    ["date" => "2024-02-12", "name" => "農曆新年初二"],
    ["date" => "2024-02-28", "name" => "和平紀念日"],
    ["date" => "2024-04-04", "name" => "兒童節"],
    ["date" => "2024-04-05", "name" => "清明節"],
    ["date" => "2024-05-01", "name" => "勞動節"],
    ["date" => "2024-06-10", "name" => "端午節"],
    ["date" => "2024-09-17", "name" => "中秋節"],
    ["date" => "2024-10-10", "name" => "國慶日"]
];

// 顯示國定假日資訊
foreach ($holidays as $holiday) {
    echo "日期: " . $holiday["date"] . ", 名稱: " . $holiday["name"] . "<br>";
}
?>