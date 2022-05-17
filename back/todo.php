<?php 
include('db.php');
$user_no = $_SESSION['no'];
if($user_no) {
    echo $_SESSION['email'] . '환영합니다';
} else {
    echo "
        <script>
            location.href='login.php';
        </script>
        ";
}
include('../view/todo.html');
?>