  <!-- function for check logIn -->

  <?php
    if (isset($_POST['login'])) {
        $user = trim(mysqli_real_escape_string($connect, $_POST['email']));
        // $pass = sha1(trim(mysqli_real_escape_string($connect, $_POST['password'])));
        $pass = sha1(trim(mysqli_real_escape_string($connect, $_POST['password'])));
        # check pass is sha1
        $sql_login = mysqli_query($connect, "SELECT
                                            *
                                        FROM
                                            tb_register
                                        WHERE
                                            email = '$user' AND
                                            password = '$pass'");
        # check login
        // echo mysqli_num_rows($sql_login);
        if (mysqli_num_rows($sql_login)) {
            $_SESSION['user'] = $user;
            echo "<script> window.location='../admin/index.php'; </script>";
        } else {
            ?>
          <div class="row">
              <div class="col-lg-6 col-lg-offset-3">
                  <div class="alert alert-danger alert-dismissable" role="alert">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">
                          &times;
                      </a>
                      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                      <strong> Fail Login</strong> Username / Password Salah
                  </div>
              </div>
          </div>
      <?php
        }
    }
    ?>

  <!-- end of function login -->