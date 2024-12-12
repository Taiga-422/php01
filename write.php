<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $ask = $_POST["ask"] ?? "未入力";
    $detail = $_POST["detail"] ?? "未入力";

    // json形式の文字列を配列にデコード
    $tags = isset($_POST["tags"]) ? json_decode($_POST["tags"], true) : [];
    $timestamp = date("Y-m-d H:i:s");

    // タグをカンマ区切りで連結
    if(is_array($tags)){
        $tagsString = implode(",", $tags);
    } else {
        $tagsString = "タグなし";
    }

    // 保存する内容を整形
    $data = "質問: {$ask}\n詳細: {$detail}\nタグ: {$tagsString}\n日時: {$timestamp}\n\n";

    // ファイルに追記
    file_put_contents("data/data.txt", $data, FILE_APPEND | LOCK_EX);

    echo "データが保存されました！";
} else {
    echo "無効なリクエストです。";
};
?>
