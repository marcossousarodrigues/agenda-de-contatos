<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="container">

    <section class="form-login form">
        
        <h1>Registrar-se</h1>
        <?php if(isset($_GET["message-error"])) { ?>
            <p class="message-error"><?php echo $_GET["message-error"]; ?></p>
        <?php } ?>

        <?php if(isset($_GET["message-success"])) { ?>
            <p class="message-success"><?php echo $_GET["message-success"]; ?></p>
        <?php } ?>
        
        <p class="message-error"></p>
        
        <form  id="form" action="<?php echo baseUrl ?>user/register" method="post">
            <label for="">Nome
            <input type="text" name="name" class="name">
            </label>

            <label for="">Sobrenome
            <input type="text" name="surname" class="surname">
            </label>
            
            <label for="">Email
            <input type="text" name="email" class="email">
            </label>

            <label for="">Senha
            <input type="password" name="password" class="password">
            </label>

            <label for="">Confirmar Senha
            <input type="password" name="confirmpassword" class="confirmpassword">
            </label>

            <button class="btn-register">Registrar</button>

            <p>Já possuí cadastro? <a href="<?php echo baseUrl ?>pages/login">entrar</a></p>
            
        </form>
    </section>
</section>
</body>
</html>