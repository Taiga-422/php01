<!--
// ファイルを開く

$data = file_get_contents('data/data.txt');

// ファイル内容を1行ずつ読み込んで出力

echo nl2br($data);

// ファイルを閉じる

-->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>保存データの表示</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div id="header-logo">
            <h1>質問投稿フォーム</h1>
        </div>
    </header>
    <h1>保存された質問一覧</h1>
    <pre>
<?php
    $file = "data/data.txt";
    if (file_exists($file)) {
        echo htmlspecialchars(file_get_contents($file));
    } else {
        echo "保存されたデータはありません。";
    }
?>
    </pre>
</body>
</html>
