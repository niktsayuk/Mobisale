<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="main.css">
        <title>Hello, world!</title>
    </head>

    <body>
    <?php 
            session_start();
            require('connection.php');

            if (isset($_POST['username']) and isset($_POST['password']))
            {
            $username = $_POST['username'];
            $password = $_POST['password']; 

            $query = "SELECT * FROM user WHERE name='$username' and password='$password'";
            $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
            $count = mysqli_num_rows($result);

            if ($count == 1)
                $_SESSION['name'] = $username;
            else
                $fmsg = "Ошибка";
            }

            if (isset($_SESSION['name']))
            {
            $username = $_SESSION['name'];
            echo "Вы вошли";
            echo "<a href='logout.php' class='btn btn-outline-success mt-3'> Выйти </a>";
            }
?>
        <form class="form-signin" method="POST">
              <div class="row mb-3">
                <label for="inputLogin" class="col-sm-2 col-from-label">Логин</label>
                <div class="col-sm-10">
                  <input type="text" name="username" class="form-control" id="inputLogin" required>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-from-label">Пароль</label>
                <div class="col-sm-10">
                  <input type="password" name="password" class="form-control" id="inputPassword" required>
                </div>
              </div>
            <fieldset>
              <div class="form-check">
                <input type="checkbox" id="gridCheck" class="form-check-input" required>
                <label for="" class="form-check-label">Соглашаюсь с условиями политики сайта</label>
              </div>
            </fieldset>
            <div class="d-flex ">
              <button class="btn btn-outline-success mt-3" type="submit">Войти</button>
            </div>

    </body>
</html>