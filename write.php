<?php
// デバッグ情報を表示
error_reporting(E_ALL);
ini_set('display_errors', 1);

// フォームから送信されたデータを取得
$name     = $_POST["name"] ?? '';      // 名前
$birthDay = $_POST["birthDay"] ?? '';  // 生年月日
$tel      = $_POST["tel"] ?? '';       // 電話番号
$email    = $_POST["email"] ?? '';     // メールアドレス
$jusho1   = $_POST["jusho1"] ?? '';    // 住所1（都道府県）
$jusho2   = $_POST["jusho2"] ?? '';    // 住所2（市区町村）
$jusho3   = $_POST["jusho3"] ?? '';    // 出身地1（都道府県）
$jusho4   = $_POST["jusho4"] ?? '';    // 出身地2（市区町村）
$kanshin1 = $_POST["kanshin1"] ?? '';  // お住まいの地域への興味・関心度合
$kanshin2 = $_POST["kanshin2"] ?? '';  // 出身地への興味・関心度合
$kanshin3 = $_POST["kanshin3"] ?? '';  // その他地域への興味・関心度合

// 配列データの処理
$food     = isset($_POST["food"]) ? implode(", ", $_POST["food"]) : ''; // 食べ物
$travel   = isset($_POST["travel"]) ? implode(", ", $_POST["travel"]) : ''; // 旅行・観光
$shumi    = isset($_POST["shumi"]) ? implode(", ", $_POST["shumi"]) : ''; // 趣味・娯楽

// ディレクトリが存在しない場合は作成
if (!file_exists('data')) {
    mkdir('data', 0777, true);
}

// CSVファイルに書き込み
$file = fopen('data/data.csv', 'a'); // 'a'モードでファイルを開く。存在しない場合は新規作成

// ファイルが正常に開けなかった場合のエラーハンドリング
if ($file === false) {
    die('Error opening the file data/data.csv');
}

// ヘッダー行の作成（ファイルが空の場合のみ）
if (filesize('data/data.csv') == 0) {
    // UTF-8 BOMを追加
    fwrite($file, "\xEF\xBB\xBF");

    // ヘッダー行を定義
    $header = ['Timestamp', 'Name', 'BirthDay', 'Tel', 'Email', 'Jusho1', 'Jusho2', 'Jusho3', 'Jusho4', 'Kanshin1', 'Kanshin2', 'Kanshin3', 'Food', 'Travel', 'Shumi'];
    // ヘッダー行をCSVファイルに書き込み
    fputcsv($file, $header);
}

// データ行の作成
$time = date("Y-m-d H:i:s"); // 現在のタイムスタンプを取得
// 取得したデータを配列にまとめる
$data = [$time, $name, $birthDay, $tel, $email, $jusho1, $jusho2, $jusho3, $jusho4, $kanshin1, $kanshin2, $kanshin3, $food, $travel, $shumi];
// データ行をCSVファイルに書き込み
if (fputcsv($file, $data) === false) {
    die('Error writing to the file data/data.csv');
}

// ファイルを閉じる
fclose($file);

// CSVファイルの読み込み
$csvData = array();
if (($handle = fopen('data/data.csv', 'r')) !== false) {
    while (($row = fgetcsv($handle, 1000, ",")) !== false) {
        $csvData[] = $row;
    }
    fclose($handle);
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center; /* コンテナ内の要素を中央揃えに */
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px; /* テーブルとボタンの間に余白を追加 */
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        .submit-btn {
            background-color: #0c344e;
            color: white;
            font-weight: bold;
            padding: 15px 30px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            text-decoration: none; /* テキストの装飾を消す */
            display: inline-block; /* ボタンの表示形式をブロックに */
            margin: 0 auto; /* ボタンを中央揃えに */
        }

        .submit-btn:hover {
            background-color: #0c344e9a;
        }

        .img {
            width: 400px; /* 必要に応じてサイズを調整 */
            height: auto;
            border-radius: 50%; /* 円形にする場合 */
            margin-bottom: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <div class="container">
    <img src="./img/ZOUUUbanner.jpg" alt="zouuu" class="img">
        <h1>書き込みしました。</h1>
        <h2><a href="data/data.csv" download="./data/data.csv">登録データをダウンロード</a></h2>
        <table>
            <tr>
                <?php
                // ヘッダー行の表示
                if (!empty($csvData)) {
                    foreach ($csvData[0] as $header) {
                        echo "<th>" . htmlspecialchars($header) . "</th>";
                    }
                }
                ?>
            </tr>
            <?php
            // データ行の表示
            for ($i = 1; $i < count($csvData); $i++) {
                echo "<tr>";
                foreach ($csvData[$i] as $cell) {
                    echo "<td>" . htmlspecialchars($cell) . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
        <ul style="list-style: none; padding: 0;">
            <li><a href="index.php" class="submit-btn">戻る</a></li>
        </ul>
    </div>
</body>
</html>