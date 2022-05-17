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



?>



<?php 
include('../back/header.php');
include('../view/todo.html');
?>
