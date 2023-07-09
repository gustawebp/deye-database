<?php

    require '../users/users.php'

    $passInputLogin = $_POST['passInputLogin'];
    $userInputLogin = $_POST['userInputLogin'];

  //  if($userInputLogin == 'admin' && $passInputLogin == 'admin'){
  //      echo "<script>location.href='../main.html';</script>";

  //  }
  //  else{
  //      echo "error";
  //  };



  foreach ($users as $user) {
    if ($user['username'] == $userInputLogin && $user['password'] == $passInputLogin) {
        $loggedIn = true;
        break;
    }
}
?>