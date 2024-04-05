<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./css/reset.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <title>Diet & Meal App</title>
</head>

<body>
    <header class="header">
        <div class="header-left">
            <img src="./img/header_logo.png" alt="header_logo">
        </div>
        <nav class="header-nav">
            <ul>
                <li class="header-btn"><a href="#learn">学ぶ</a></li>
                <li class="header-btn"><a href="#menu">メニューを決める</a></li>
                <li class="header-btn"><a href="#gohan">ごはん記録</a></li>
                <li class="header-btn"><a href="#w_record">体重記録</a></li>
                <li class="header-btn"><a href="#chat">チャット相談</a></li>
                <li class="header-btn"><a href="#contact">お問い合わせ</a></li>
                <li id="login-show"><a href="#login">ログイン</a></li>
            </ul>
        </nav>
    </header>
    <div class="signup-modal-wrapper"></div>
    <div class="login-modal-wrapper" id="login-modal">
        <div class="modal">
            <div class="close-modal">
                <i class="fa fa-2x fa-times"></i>
            </div>
            <div id="login-form">
                <h2>Emailログイン</h2>
                <form action="#">
                    <input class="form-control" type="text" placeholder="メールアドレス">
                    <input class="form-control" type="password" placeholder="パスワード">
                    <div id="submit-btn">ログイン</div>
                </form>
            </div>
        </div>
    </div>

    <div id="gohan">
        <h1>ごはん記録</h1>

        <div id="uploadForm">
            <input type="file" id="fileInput" multiple>
            <label for="dateInput">日付:</label>
            <input type="date" id="dateInput">
            <label for="timeOfDayInput">時間帯:</label>
            <select id="timeOfDayInput">
                <option value="">選択してください</option>
                <option value="breakfast">朝</option>
                <option value="lunch">昼</option>
                <option value="dinner">夜</option>
            </select>
            <label for="commentInput">メニュー:</label>
            <input type="text" id="commentInput">
            <button id="saveButton" class="save">保存</button>
        </div>
    </div>




    <div class="gallery" id="gallery"></div>

    <!-- カレンダーはhttps://designup.jp/html-calendar.htmlを参照 -->
    <div id="w_record">
        <h1>体重記録</h1>
        <p class="month">4月</p>
        <div class="calendar-wrap">
            <table id="calendar">
                <thead>
                    <tr>
                        <th class="sun">Sun</th>
                        <th>Mon</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                        <th class="sat">Sat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="mute">29</td>
                        <td class="mute">30</td>
                        <td>1<br>
                            <input type="text"> kg
                        </td>
                        <td>2
                            <br>
                            <input type="text"> kg
                        </td>
                        <td>3<br>
                            <input type="text"> kg
                        </td>
                        <td>4<br>
                            <input type="text"> kg
                        </td>
                        <td class="off_sat">5<br>
                            <input type="text"> kg
                        </td>
                    </tr>
                    <tr>
                        <td class="off_sun">6<br>
                            <input type="text"> kg
                        </td>
                        <td>7<br>
                            <input type="text"> kg
                        </td>
                        <td>8<br>
                            <input type="text"> kg
                        </td>
                        <td>9<br>
                            <input type="text"> kg
                        </td>
                        <td>10<br>
                            <input type="text"> kg
                        </td>
                        <td>11<br>
                            <input type="text"> kg
                        </td>
                        <td class="off_sat">12<br>
                            <input type="text"> kg
                        </td>
                    </tr>
                    <tr>
                        <td class="off_sun">13<br>
                            <input type="text"> kg
                        </td>
                        <td>14<br>
                            <input type="text"> kg
                        </td>
                        <td>15<br>
                            <input type="text"> kg
                        </td>
                        <td>16<br>
                            <input type="text"> kg
                        </td>
                        <td>17<br>
                            <input type="text"> kg
                        </td>
                        <td>18<br>
                            <input type="text"> kg
                        </td>
                        <td class="off_sat">19<br>
                            <input type="text"> kg
                        </td>
                    </tr>
                    <tr>
                        <td class="off_sun">20<br>
                            <input type="text"> kg
                        </td>
                        <td>21<br>
                            <input type="text"> kg
                        </td>
                        <td>22<br>
                            <input type="text"> kg
                        </td>
                        <td>23<br>
                            <input type="text"> kg
                        </td>
                        <td>24<br>
                            <input type="text"> kg
                        </td>
                        <td>25<br>
                            <input type="text"> kg
                        </td>
                        <td class="off_sat">26<br>
                            <input type="text"> kg
                        </td>
                    </tr>
                    <tr>
                        <td class="off_sun">27<br>
                            <input type="text"> kg
                        </td>
                        <td>28<br>
                            <input type="text"> kg
                        </td>
                        <td>29<br>
                            <input type="text"> kg
                        </td>
                        <td>30<br>
                            <input type="text"> kg
                        </td>
                        <td>31<br>
                            <input type="text"> kg
                        </td>
                        <td class="mute">1</td>
                        <td class="mute">2</td>
                    </tr>
                </tbody>
            </table>
            <button class="save">保存</button>
        </div>
    </div>

    <div id="chat">
        <h1>チャット相談</h1>
        <div class="chat_info">
            <span class="star">*</span>名前：<input type="text" id="uname">
            <br>
            <textarea id="text" cols="30" rows="10"></textarea>
            <br>
            <button id="send" class="btn">送信</button>
        </div>
        <div id="output" style="overflow: auto; height: 300px; width:700px; margin:auto;"></div>
    </div>

    <div id="contact">
        <form action="insert.php" method="post">
            <h1>お問い合わせ</h1>
            <table class="contact_table" style="margin: auto;">
                <tr>
                    <td style="font-weight:bold;">カテゴリ</td>
                    <td>
                        <select name="category" id="category">
                            <option value="選択してください">選択してください</option>
                            <option value="サポート体制について">サポート体制について</option>
                            <option value="アプリ月額について">アプリ月額について</option>
                            <option value="退会について">退会について</option>
                            <option value="栄養コンサルについて">栄養コンサルについて</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">名前</td>
                    <td><input type="text" name="name" style="text-align: left;"></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">内容</td>
                    <td><textarea name="details" id="text" cols="30" rows="10" style="width: 500px;"></textarea></td>
                </tr>
            </table>
            <button type="submit" id="send" class="btn">送信</button>
        </form>
    </div>



    <footer>
        <div class="mgmt">
            <a href="select.php">管理者ページ</a>
       </div>
    </footer>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        //login modalを開く
        $('#login-show').on("click", function() {
            $('#login-modal').fadeIn();
        });
        //login modalを閉じる
        $('.close-modal').on("click", function() {
            $('#login-modal').fadeOut();
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // ページ読み込み時にローカルストレージから保存された情報を読み込んで表示
            for (let i = 0; i < localStorage.length; i++) {
                const key = localStorage.key(i);
                if (key.includes('savedData')) {
                    const savedData = JSON.parse(localStorage.getItem(key));
                    displaySavedData(savedData, key);
                }
            }

            // 画像をアップロードして保存するボタンがクリックされた時の処理
            $('#saveButton').on('click', function() {
                const fileInput = $('#fileInput')[0];
                const files = fileInput.files;

                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    const reader = new FileReader();

                    reader.onload = function(event) {
                        const imageUrl = event.target.result;
                        const date = $('#dateInput').val() || ''; // 日付がない場合は空文字
                        const timeOfDay = $('#timeOfDayInput').val() || ''; // 時間帯がない場合は空文字
                        const comment = $('#commentInput').val() || ''; // コメントがない場合は空文字

                        // 画像と関連情報を保存
                        const savedData = {
                            imageUrl: imageUrl,
                            date: date,
                            timeOfDay: timeOfDay,
                            comment: comment
                        };
                        const key = 'savedData_' + Date.now(); // 固有のキーを生成
                        localStorage.setItem(key, JSON.stringify(savedData));

                        // 保存した情報を表示
                        displaySavedData(savedData, key);
                    };

                    reader.readAsDataURL(file);

                    // // フォームをリセット
                    $('#fileInput').val('');
                    $('#dateInput').val('');
                    $('#timeOfDayInput').val('');
                    $('#commentInput').val('');
                }
            });

            // 情報の削除ボタンがクリックされた時の処理
            $(document).on('click', '.deleteButton', function() {
                const key = $(this).data('key');
                localStorage.removeItem(key);
                $(this).parent().remove();
            });
        });

        // 保存した情報を表示する関数
        function displaySavedData(savedData, key) {
            const gallery = $('#gallery');
            const galleryItem = $('<div class="gallery-item"></div>');
            const image = $('<img src="' + savedData.imageUrl + '">');
            const info = $('<div class="gallery-item-info"></div>');
            const date = $('<p>日付: ' + savedData.date + '</p>');
            const timeOfDay = $('<p>時間帯: ' + savedData.timeOfDay + '</p>');
            const comment = $('<p>メニュー: ' + savedData.comment + '</p>');
            const deleteButton = $('<button class="deleteButton" data-key="' + key + '">Delete</button>');

            galleryItem.append(image);
            info.append(date, timeOfDay, comment, deleteButton);
            galleryItem.append(info);
            gallery.append(galleryItem);
        }
    </script>


    <script type="module">
        import firebaseConfig from "./js/firebaseApikey.js";
        // Import the functions you need from the SDKs you need
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-app.js";
        import {
            getDatabase,
            ref,
            push,
            set,
            update,
            onChildAdded,
            remove,
            onChildChanged,
            onChildRemoved
        }
        from "https://www.gstatic.com/firebasejs/10.8.1/firebase-database.js";

        console.log(firebaseConfig);


        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        //Firebase APIは別ファイル

        // Initialize Firebase
        const app = initializeApp(firebaseConfig); //Firebaseにアクセスする
        const db = getDatabase(app); //リアルタイムデータベースにアクセスする
        const dbRef = ref(db, "chat"); //データベースのchatから情報を取得する

        //投稿時間取得する関数
        function post_time() {
            let month = new Date().getMonth() + 1;
            let date = new Date().getDate();
            let hour = new Date().getHours().toString().padStart(2, '0'); //時刻二桁表示（参照：https://qiita.com/Naoki_kkc/items/2a29287834c453d23ecf）
            let minute = new Date().getMinutes().toString().padStart(2, '0');
            return `${month}/${date} ${hour}:${minute}`;
        }


        //送信
        $("#send").on("click", function() {
            //名前未入力の場合エラーを返す(このサイト参照：https://qiita.com/ntm718/items/c1c105099783e09504f0)
            let error;
            let value = $("#uname").val();
            if (value == "" || !value.match(/[^\s\t]/)) {
                error = true;
            }

            if (error) {
                alert("名前は必須です");
                return false;

            } else {

                const msg = {
                    uname: $("#uname").val(),
                    time: post_time(),
                    text: $("#text").val()
                }
                const newPostRef = push(dbRef); //ユニークキーを生成
                set(newPostRef, msg); //ユニークキーとメッセージを一緒に投げる
            }
            $("#uname").val(""); //送信したら名前の入力欄のテキストが自動で消える
            $("#text").val(""); //送信したら本文の入力欄のテキストが自動で消える
        });

        //受信
        onChildAdded(dbRef, function(data) {
            const msg = data.val();
            const key = data.key; //ユニークキー、削除・更新に必須！
            let h = '<p id=" ' + key + ' ">';
            h += '<p class="name_bold">' + '　' + msg.uname + '</p>'; //表示されるときに名前だけ太字にするためにpタグで括った
            h += "　";
            h += msg.time; //名前の隣に送信時刻を表示
            h += '<br>';
            h += "　";
            h += '<span contentEditable="true" id="' + key + '_update">' + msg.text + '</span>'; //ダブルクリックで本文変更できる
            h += '<span class="remove" data-key="' + key + '">🚮</span>'
            h += '<span class="update" data-key="' + key + '">🆙</span>'
            h += '</p>';
            $("#output").prepend(h); //#outputの上に追加
            $(".name_bold").css("font-weight", "bold"); //名前を太字
        });

        //削除イベント
        $("#output").on("click", ".remove", function() {
            const key = $(this).attr("data-key");
            const remove_item = ref(db, "chat/" + key);
            remove(remove_item); //Firebaseデータ削除関数
        });

        //更新イベント
        $("#output").on("click", ".update", function() {
            const key = $(this).attr("data-key");
            update(ref(db, "chat/" + key), {
                text: $("#" + key + '_update').html()
            });
        });

        //削除処理がFirebase側で実行されたらイベント発生
        onChildRemoved(dbRef, (data) => {
            $("#" + data.key).remove(); //DOM操作関数（対象を削除）
        });

        //更新処理がFirebase側で実行されたらイベント発生
        onChildChanged(dbRef, (data) => {
            $("#" + data.key + '_update').html(data.val().text);
            $("#" + data.key + '_update').fadeOut(800).fadeIn(800);
        });
    </script>

</body>

</html>