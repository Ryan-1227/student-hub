<?php require __DIR__.'/bootstrap.php';
if(($_GET['action'] ?? '')==='logout'){ log_action($pdo,'logout'); session_destroy(); header('Location: index.php'); exit; }
if($_SERVER['REQUEST_METHOD']!=='POST'){header('Location:index.php');exit;} verify_csrf();
$s=$pdo->prepare('SELECT * FROM users WHERE email=?'); $s->execute([trim(strtolower($_POST['email'] ?? ''))]); $u=$s->fetch();
if(!$u || !password_verify($_POST['password'] ?? '',$u['password_hash'])){ flash('Incorrect email or password.','error'); header('Location:index.php'); exit; }
session_regenerate_id(true); unset($u['password_hash']); $_SESSION['user']=$u; $_SESSION['last_activity']=time(); log_action($pdo,'login'); header('Location: dashboard.php');
