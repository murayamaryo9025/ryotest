 session_start();
 
  // フォームが送信された場合
  if (!empty($_POST)) {
    // フォーム入力値を取得
    $email = $_POST['email'];
    $password = $_POST['password'];
 
 
    // データベースから入力されたユーザーを検索
    $sql =
     "SELECT
       *
      FROM
       users
      WHERE
       email = :email
      AND
       password = :password";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', sha1($password));
    $stmt->execute();
 
    $user = $stmt->fetch();
 
    // ユーザーが見つかればログインOK
    if (user) {
      // $_SESSIONにログインしたユーザーIDを保持
      $_SESSION['id'] = $user['id'];
 
      // メールアドレスを記憶させる場合
      if ($_POST['save'] === 'ON') {
      }
 
      // ログイン後の画面に遷移
      header('Location: index.php');
    } else 
  }
?>