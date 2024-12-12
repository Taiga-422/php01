<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div id="header-logo">
            <h1>質問投稿フォーム</h1>
        </div>
    </header>
    <main>
        <div id="input">
            <div id="input-form">
                <div id="ask-area">
                    <label for="ask">件名</label>
                    <input name="ask" id="ask" type="text" placeholder="質問を入力">
                </div>
                <div id="detail-area">
                    <label for="detail">内容</label>
                    <textarea name="detail" id="detail" placeholder="質問の詳細を入力"></textarea>
                </div>
                <div id="tag-area">
                    <label for="tag-input">タグ</label>
                    <input name="tags" id="tag-input" type="text" placeholder="タグを入力">
                </div>
                <div id="tag"></div>
                <div id="btn">
                    <button type="submit" id="save">ポスト</button>
                    <button type="reset" id="reset">閉じる</button>
                </div>
            </div>
        </div>
    </main>
</body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/main.js"></script>
</html>