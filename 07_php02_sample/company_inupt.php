<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>授業申し込みフォーム</title>
  <link rel="stylesheet" href="css/company.css">
  
</head>

<body>
    <header>
        <div class="head_logo">
            <img src="img/pipette01.png" alt="School Pipetteのロゴ">
            <p class="header-text">～学校と社会の必要を補い合う～</p>
        </div>
    </header>

  
  <main class="contact">
        <div class="form-wrapper">
            <h2 class="contact_title text-center">企業用授業お申込みフォーム</h2>
  <!-- formにはaction, method, nameを設定！ -->
  <form action="company_create.php" method="POST">    
      <a href="company_read.php">一覧画面</a>
                <dl class="form-inner">
                    <p id="error_message" class="error-message"></p>
                    <dt class="form-title">会社名・団体名</dt>
                    <dd class="form-item"><input type="text" name="name" id="company_name" class="form-parts"
                            title="会社名・団体名を入力してください">
                    </dd>
                    <dt class="form-title">住所</dt>
                    <dd class="form-item"><input type="text" name="place" id="location" class="form-parts"
                            placeholder="住所を入力してください"></dd>
                    <dt class="form-title">メールアドレス</dt>
                    <dd class="form-item"><input type="text" name="email" id="email" class="form-parts"
                            title="メールアドレスを入力してください"></dd>
                    <dt class="form-title">希望学年</dt>
                    <dd class="form-item">
                        <div class="select-wrapper">
                           <select name="grade" id="grade" class="form-parts">
                                <option value="">選択してください</option>
                                <option value="低学年">低学年</option>
                                <option value="中学年">中学年</option>
                                <option value="高学年">高学年</option>
                                <option value="どの学年も可能">どの学年も可能</option>
                            </select>
                        </div>
                    </dd>
                    <dt class="form-title">時期</dt>
                    <dd class="form-item">
                        <div class="select-wrapper">
                           <select name="season" id="season" class="form-parts">
                                <option value="">選択してください</option>
                                <option value="１学期">１学期</option>
                                <option value="２学期">２学期</option>
                                <option value="３学期">３学期</option>
                                <option value="いつでも可能">いつでも可能</option>
                            </select>
                        </div>
                    </dd>
                    <dt class="form-title">提供授業</dt>
                    <dd class="form-item">
                        <div class="select-wrapper">
                            <select name="teach" id="teach" class="form-parts">
                                <option value="">選択してください</option>
                                <option value="SDGs教育（環境）">SDGs教育（環境）</ption>
                                <option value="キャリア教育">キャリア教育</option>
                                <option value="プログラミング教育">プログラミング教育</option>
                                <option value="情報教育">情報教育</option>
                                <option value="国際理解教育">国際理解教育</option>
                                <option value="食育教育">食育教育</option>
                                <option value="福祉教育">福祉教育</option>
                                <option value="伝統芸能教育">伝統芸能教育</option>
                                <option value="その他">その他</option>
                            </select>
                        </div>
                    </dd>
                    <dt class="form-title">授業内容</dt>
                    <dd class="form-item"><textarea name="detail" id="text_area" placeholder="授業内容をくわしく入力してください"></textarea></dd>
                    <dt class="form-title check-radio">授業形態</dt>
                    <dd class="form-item">
                        <label for="delivery" class="form-label"><input type="radio" name="kind" id="delivery"
                                value="出前授業">出前授業</label>
                        <label for="online" class="form-label"><input type="radio" name="kind" id="online"
                                value="オンライン授業">オンライン授業</label>
                        <label for="both" class="form-label"><input type="radio" name="kind" id="both"
                                value="どちらも可能">どちらも可能</label>
                    </dd>
                    <dt class="form-title check-radio">キャリア教育授業</dt>
                    <dd class="form-item">
                        <label for="yes" class="form-label"><input type="radio" name="kind2" id="yes"
                                value="可能">可能</label>
                        <label for="wait" class="form-label"><input type="radio" name="kind2" id="wait"
                                value="検討中">検討中</label>
                        <label for="no" class="form-label"><input type="radio" name="kind2" id="no"
                                value="不可能">不可能</label>
                    </dd>
                    <dt class="form-title">その他</dt>
                    <dd class="form-item"><textarea name="detail2" id="text_area2"
                            placeholder="お問い合わせ内容があれば入力してください"></textarea></dd>
                </dl>
                <input type="submit" value="送信" class="btn btn-submit" id="save">
  </form>
    
</main>
   <footer>
        <small>School Pipette</small>
    </footer>

</body>
</html>
