<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>課題テンプレート</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <img src="./img/ZOUUUbanner.jpg" alt="zouuu" class="img">
        <h1>プロフィール</h1>
        <form action="write.php" method="post" class="form">
            <div class="form-group">
                <label for="name">お名前:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="birthDay">生年月日:</label>
                <input type="date" id="birthDay" name="birthDay" required>
            </div>
            <div class="form-group">
                <label for="tel">電話番号:</label>
                <input type="tel" id="tel" name="tel" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="jusho1">お住まいの都道府県:</label>
                <select id="jusho1" name="jusho1" required>
                    <option value="">選択してください</option>
                    <option value="選択してください">選択してください</option>
                    <option value="北海道">北海道</option>
                    <option value="青森県">青森県</option>
                    <option value="岩手県">岩手県</option>
                    <option value="宮城県">宮城県</option>
                    <option value="秋田県">秋田県</option>
                    <option value="山形県">山形県</option>
                    <option value="福島県">福島県</option>
                    <option value="茨城県">茨城県</option>
                    <option value="栃木県">栃木県</option>
                    <option value="群馬県">群馬県</option>
                    <option value="埼玉県">埼玉県</option>
                    <option value="千葉県">千葉県</option>
                    <option value="東京都">東京都</option>
                    <option value="神奈川県">神奈川県</option>
                    <option value="新潟県">新潟県</option>
                    <option value="富山県">富山県</option>
                    <option value="石川県">石川県</option>
                    <option value="福井県">福井県</option>
                    <option value="岐阜県">岐阜県</option>
                    <option value="静岡県">静岡県</option>
                    <option value="長野県">長野県</option>
                    <option value="愛知県">愛知県</option>
                    <option value="山梨県">山梨県</option>
                    <option value="三重県">三重県</option>
                    <option value="滋賀県">滋賀県</option>
                    <option value="京都府">京都府</option>
                    <option value="兵庫県">兵庫県</option>
                    <option value="奈良県">奈良県</option>
                    <option value="和歌山県">和歌山県</option>
                    <option value="鳥取県">鳥取県</option>
                    <option value="島根県">島根県</option>
                    <option value="岡山県">岡山県</option>
                    <option value="広島県">広島県</option>
                    <option value="山口県">山口県</option>
                    <option value="愛媛県">愛媛県</option>
                    <option value="香川県">香川県</option>
                    <option value="高知県">高知県</option>
                    <option value="徳島県">徳島県</option>
                    <option value="福岡県">福岡県</option>
                    <option value="佐賀県">佐賀県</option>
                    <option value="長崎県">長崎県</option>
                    <option value="熊本県">熊本県</option>
                    <option value="大分県">大分県</option>
                    <option value="宮崎県">宮崎県</option>
                    <option value="鹿児島県">鹿児島県</option>
                    <option value="沖縄県">沖縄県</option>
                </select>
            </div>
        
            <div class="form-group">
                <label for="jusho2">市区町村:</label>
                <input type="text" id="jusho2" name="jusho2" required>
            </div>
            <div class="form-group">
                <label for="jusho3">ご出身の都道府県:</label>
                <select id="jusho3" name="jusho3" required>
                    <option value="">選択してください</option>
                    <option value="北海道">北海道</option>
                    <option value="青森県">青森県</option>
                    <option value="岩手県">岩手県</option>
                    <option value="宮城県">宮城県</option>
                    <option value="秋田県">秋田県</option>
                    <option value="山形県">山形県</option>
                    <option value="福島県">福島県</option>
                    <option value="茨城県">茨城県</option>
                    <option value="栃木県">栃木県</option>
                    <option value="群馬県">群馬県</option>
                    <option value="埼玉県">埼玉県</option>
                    <option value="千葉県">千葉県</option>
                    <option value="東京都">東京都</option>
                    <option value="神奈川県">神奈川県</option>
                    <option value="新潟県">新潟県</option>
                    <option value="富山県">富山県</option>
                    <option value="石川県">石川県</option>
                    <option value="福井県">福井県</option>
                    <option value="岐阜県">岐阜県</option>
                    <option value="静岡県">静岡県</option>
                    <option value="長野県">長野県</option>
                    <option value="愛知県">愛知県</option>
                    <option value="山梨県">山梨県</option>
                    <option value="三重県">三重県</option>
                    <option value="滋賀県">滋賀県</option>
                    <option value="京都府">京都府</option>
                    <option value="兵庫県">兵庫県</option>
                    <option value="奈良県">奈良県</option>
                    <option value="和歌山県">和歌山県</option>
                    <option value="鳥取県">鳥取県</option>
                    <option value="島根県">島根県</option>
                    <option value="岡山県">岡山県</option>
                    <option value="広島県">広島県</option>
                    <option value="山口県">山口県</option>
                    <option value="愛媛県">愛媛県</option>
                    <option value="香川県">香川県</option>
                    <option value="高知県">高知県</option>
                    <option value="徳島県">徳島県</option>
                    <option value="福岡県">福岡県</option>
                    <option value="佐賀県">佐賀県</option>
                    <option value="長崎県">長崎県</option>
                    <option value="熊本県">熊本県</option>
                    <option value="大分県">大分県</option>
                    <option value="宮崎県">宮崎県</option>
                    <option value="鹿児島県">鹿児島県</option>
                    <option value="沖縄県">沖縄県</option>
                </select>
            </div>
        
            <div class="form-group">
                <label for="jusho4">市区町村:</label>
                <input type="text" id="jusho4" name="jusho4" required>
            </div>

            <div class="form-group">
                <label for="kanshin1">お住まいの地域への興味・関心度合:</label>
                <select id="kanshin1" name="kanshin1" required>
                    <option value="">選択してください</option>    <option value="とても興味・関心がある">とても興味・関心がある</option>
                    <option value="やや興味・関心がある">やや興味・関心がある</option>
                    <option value="あまり興味・関心はない">あまり興味・関心はない</option>
                    <option value="まったく興味・関心はない">まったく興味・関心はない</option>
                </select><br>
            </div>
        
            <div class="form-group">
                <label for="kanshin2">出身地への興味・関心度合:</label>
                <select id="kanshin2" name="kanshin2" required>
                    <option value="">選択してください</option>
                    <option value="とても興味・関心がある">とても興味・関心がある</option>
                    <option value="やや興味・関心がある">やや興味・関心がある</option>
                    <option value="あまり興味・関心はない">あまり興味・関心はない</option>
                    <option value="まったく興味・関心はない">まったく興味・関心はない</option>
                </select><br>
            </div>
        
            <div class="form-group">
                <label for="kanshin3">その他地域への興味・関心度合:</label>
                <select id="kanshin3" name="kanshin3" required>
                    <option value="">選択してください</option>
                    <option value="とても興味・関心がある">とても興味・関心がある</option>
                    <option value="やや興味・関心がある">やや興味・関心がある</option>
                    <option value="あまり興味・関心はない">あまり興味・関心はない</option>
                    <option value="まったく興味・関心はない">まったく興味・関心はない</option>
                </select>
            </div>

            <h1>あなたの興味・関心について教えてください。</h1>
            <h2>< 食べ物編 ></h2>
            <div class="form-group">
                <label>地域の食べ物について興味のあるものにチェックしてください。（複数選択可）</label>
                <div class="checkbox-group">
                    <input type="checkbox" id="food1" name="food[]" value="肉">
                    <label for="food1">肉</label>
                    <input type="checkbox" id="food2" name="food[]" value="魚介">
                    <label for="food2">魚介</label>
                    <input type="checkbox" id="food3" name="food[]" value="野菜">
                    <label for="food3">野菜</label>
                    <input type="checkbox" id="food4" name="food[]" value="果物">
                    <label for="food4">果物</label>
                    <input type="checkbox" id="food5" name="food[]" value="米">
                    <label for="food5">米</label>
                    <input type="checkbox" id="food6" name="food[]" value="飲料">
                    <label for="food6">飲料</label>
                    <input type="checkbox" id="food7" name="food[]" value="卵">
                    <label for="food7">卵</label>
                    <input type="checkbox" id="food8" name="food[]" value="麺類">
                    <label for="food8">麺類</label>
                    <input type="checkbox" id="food9" name="food[]" value="調味料">
                    <label for="food9">調味料</label>
                    <input type="checkbox" id="food10" name="food[]" value="その他">
                    <label for="food10">その他</label>
                    <input type="checkbox" id="food11" name="food[]" value="興味なし">
                    <label for="food11">興味なし</label>
                </div>
            </div>

            <h2>< 旅行・観光編 ></h2>
            <div class="form-group">
                <label>旅行・観光について興味のあるものにチェックしてください。（複数選択可）</label>
                <div class="checkbox-group">
                    <input type="checkbox" id="travel1" name="travel[]" value="山・高原">
                    <label for="travel1">山・高原</label>
                    <input type="checkbox" id="travel2" name="travel[]" value="海">
                    <label for="travel2">海</label>
                    <input type="checkbox" id="travel3" name="travel[]" value="川">
                    <label for="travel3">川</label>
                    <input type="checkbox" id="travel4" name="travel[]" value="島">
                    <label for="travel4">島</label>
                    <input type="checkbox" id="travel5" name="travel[]" value="歴史">
                    <label for="travel5">神社・仏閣</label>
                    <input type="checkbox" id="travel6" name="travel[]" value="街並み">
                    <label for="travel6">歴史的街並み</label>
                    <input type="checkbox" id="travel7" name="travel[]" value="博物館">
                    <label for="travel7">博物館・美術館</label>
                    <input type="checkbox" id="travel8" name="travel[]" value="動物園">
                    <label for="travel8">動物園・植物園・水族館</label>
                    <input type="checkbox" id="travel9" name="travel[]" value="産業観光">
                    <label for="travel9">産業観光</label>
                    <input type="checkbox" id="travel10" name="travel[]" value="温泉">
                    <label for="travel10">温泉・サウナ</label>
                    <input type="checkbox" id="travel11" name="travel[]" value="スキー場">
                    <label for="travel11">スキー場</label>
                    <input type="checkbox" id="travel12" name="travel[]" value="キャンプ場">
                    <label for="travel12">キャンプ場</label>
                    <input type="checkbox" id="travel13" name="travel[]" value="公園">
                    <label for="travel13">公園</label>
                    <input type="checkbox" id="travel14" name="travel[]" value="テーマパーク">
                    <label for="travel14">伝統工芸</label>
                    <input type="checkbox" id="travel15" name="travel[]" value="商業施設">
                    <label for="travel15">商業施設・テーマパーク</label>
                    <input type="checkbox" id="travel16" name="travel[]" value="食・グルメ">
                    <label for="travel16">食・グルメ</label>
                    <input type="checkbox" id="travel17" name="travel[]" value="その他">
                    <label for="travel17">その他</label>
                    <input type="checkbox" id="travel18" name="travel[]" value="興味なし">
                    <label for="travel18">興味なし</label>
                </div>
            </div>


            <h2>< 趣味・娯楽編 ></h2>
            <div class="form-group">
                <label>趣味・娯楽について興味のあるものにチェックしてください。（複数選択可）</label>
                <div class="checkbox-group">
                    <input type="checkbox" id="shumi1" name="shumi[]" value="散歩">
                    <label for="shumi1">散歩・ウォーキング</label>
                    <input type="checkbox" id="shumi2" name="shumi[]" value="読書">
                    <label for="shumi2">読書</label>
                    <input type="checkbox" id="shumi3" name="shumi[]" value="映画">
                    <label for="shumi3">映画鑑賞</label>
                    <input type="checkbox" id="shumi4" name="shumi[]" value="料理">
                    <label for="shumi4">料理</label>
                    <input type="checkbox" id="shumi5" name="shumi[]" value="温泉">
                    <label for="shumi5">温泉・サウナ</label>
                    <input type="checkbox" id="shumi6" name="shumi[]" value="ガーデニング">
                    <label for="shumi6">ガーデニング</label>
                    <input type="checkbox" id="shumi7" name="shumi[]" value="旅">
                    <label for="shumi7">旅</label>
                    <input type="checkbox" id="shumi8" name="shumi[]" value="飲食">
                    <label for="shumi8">飲食</label>
                    <input type="checkbox" id="shumi9" name="shumi[]" value="カメラ">
                    <label for="shumi9">カメラ</label>
                    <input type="checkbox" id="shumi10" name="shumi[]" value="筋トレ">
                    <label for="shumi10">筋トレ・ストレッチ</label>
                    <input type="checkbox" id="shumi11" name="shumi[]" value="釣り">
                    <label for="shumi11">釣り</label>
                    <input type="checkbox" id="shumi12" name="shumi[]" value="ロードバイク">
                    <label for="shumi12">ロードバイク・サイクリング</label>
                    <input type="checkbox" id="shumi13" name="shumi[]" value="ドライブ">
                    <label for="shumi13">ドライブ・ツーリング</label>
                    <input type="checkbox" id="shumi14" name="shumi[]" value="スポーツ">
                    <label for="shumi14">スポーツ（野球・ゴルフなど）</label>
                    <input type="checkbox" id="shumi15" name="shumi[]" value="ヨガ">
                    <label for="shumi15">ヨガ・ピラティス</label>
                    <input type="checkbox" id="shumi16" name="shumi[]" value="カフェ巡り">
                    <label for="shumi16">カフェ巡り</label>
                    <input type="checkbox" id="shumi17" name="shumi[]" value="キャンプ">
                    <label for="shumi17">キャンプ・グランピング</label>
                    <input type="checkbox" id="shumi18" name="shumi[]" value="サーフィン">
                    <label for="shumi18">サーフィン</label>
                    <input type="checkbox" id="shumi19" name="shumi[]" value="スキューバダイビング">
                    <label for="shumi19">スキューバダイビング</label>
                    <input type="checkbox" id="shumi20" name="shumi[]" value="登山">
                    <label for="shumi20">登山・トレッキング</label>
                    <input type="checkbox" id="shumi21" name="shumi[]" value="スノボ">
                    <label for="shumi21">スノーボード・スキー</label>
                    <input type="checkbox" id="shumi22" name="shumi[]" value="美術鑑賞">
                    <label for="shumi22">美術鑑賞</label>
                    <input type="checkbox" id="shumi23" name="shumi[]" value="史跡巡り">
                    <label for="shumi23">史跡巡り</label>
                    <input type="checkbox" id="shumi24" name="shumi[]" value="御朱印">
                    <label for="shumi24">御朱印集め</label>
                    <input type="checkbox" id="shumi25" name="shumi[]" value="ドローン">
                    <label for="shumi25">ドローン</label>
                    <input type="checkbox" id="shumi26" name="shumi[]" value="その他">
                    <label for="shumi26">その他</label>
                    <input type="checkbox" id="shumi27" name="shumi[]" value="興味なし">
                    <label for="shumi27">興味なし</label>
                </div>
            </div>

            <div class="form-group center">
                <button type="submit" class="submit-btn">送信</button>
            </div>
    </form>
</body>

</html>

<!--参考 : https://ponhiro.com/rating-graph/#step-2 -->