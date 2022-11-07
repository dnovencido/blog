<?php
    include("db.php");
    include("function.php");

    $error = []; 

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(!$_POST['name']) {
            $error[] = "Name is required";
        }
        if(!$_POST['email']) {
            $error[] = "Email is required";
        }
        if(!$_POST['password']) {
            $error[] = "Please enter your password.";
        }

        if(empty($error)) {
            if(check_existing_email($_POST['email']) != true) {
               
            } else {
                $error[] = "The email address is already taken";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Blog</title>

      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <main>
         <header>
            <?php include("layouts/_navigation.php"); ?>
         </header>
         <section>
            <div class="container">
                <div id="register">
                    <div id="register-form">
                        <h1>Register an account.</h1>
                        <?php if (!empty($error)) { ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php foreach ($error as $row) { ?>
                                        <li><?= $row ?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        <?php } ?>
                        <form method="post">
                            <div class="input-control">
                                <label for="name">Name: </label>
                                <input type="text" name="name" class="input-field" value="<?= $_POST['name'] ?>" />
                            </div>
                            <div class="input-control">
                                <label for="name">Email: </label>
                                <input type="text" name="email" class="input-field" value="<?= $_POST['email'] ?>" />
                            </div>
                            <div class="input-control">
                                <label for="name">Password: </label>
                                <input type="password" name="password" class="input-field" value="<?= $_POST['password'] ?>" />
                            </div>
                            <div class="input-control">
                                <input type="submit" class="btn btn-md btn-rounded" value="Register" />
                            </div>
                        </form>
                    </div>                
                </div>
            </div>
         </section>
      </main>
   </body>
</html>