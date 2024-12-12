$(function () {
    // タグ入力
    $("#tag-input").on("keypress", function (e) {
        if (e.key === "Enter") {   //Enterキーを押した問だけにする。
            e.preventDefault();  //入力が送信されたりする動作を防ぐ。
            const tagText = $(this).val().trim();  //(this)は、#tag-inputを指す。
            if (tagText) {
                const tag = $(`<div class="tag">${tagText}</div>`);
                $("#tag").append(tag);
                $(this).val("");
            }
        }
    });

    // タグ削除  ".tag"は、JSによって追加される要素だから、$(document).onを使わないと操作できない。
    $(document).on("click", ".tag", function () { $(this).remove(); });

    // 質問の保存
    $("#save").on("click", function () {
        const tags = [];
        $("#tag").children().each(function () {
            tags.push($(this).text());
        });

        const ask = $("#ask").val().trim();
        const detail = $("#detail").val().trim();

        if (!ask || !detail) {
            alert("質問と詳細を入力してください！");
            return;
        }

        // データをPHPに送信
        $.ajax({
            url: "write.php", // 保存用PHPファイルのURL
            method: "POST",
            data: {
                ask: ask,
                detail: detail,
                tags: JSON.stringify(tags), // 配列をJSON文字列に変換
            },
            success: function (response) {
                if (response === "success") {
                    alert("データが保存されました！");
                    $("#ask, #detail, #tag-input").val("");
                    $("#tag").empty();
                } else {
                    alert("サーバーエラーが発生しました: " + response);
                }
            },
            error: function () {
                alert("データ保存に失敗しました。");
            },
        });
    });
});