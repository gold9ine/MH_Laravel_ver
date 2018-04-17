<?php
$config      = config('database.connections.mysql');
$db_host     = $config['host'];
$db_user     = $config['username'];
$db_password = $config['password'];
$db_dbname   = $config['database'];

try {
    // MySQL PDO 객체 생성

    // mysql을 다른 DB로 변경하면 다른 DB도 사용 가능

	// $pdo = new PDO('mysql:host=127.0.0.1;dbname=u497517379_mh;charset=utf8', 'u497517379_root', 'qwe7634');

	$pdo = new PDO('mysql:host=' . $db_host . ';dbname=' . $db_dbname . ';charset=utf8', $db_user, $db_password);

    // 에러 출력

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (Exception $e) {

    echo $e->getMessage();
}
?>