<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <link rel="stylesheet" href="<?php echo baseUrl ?>/assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Share+Tech&display=swap" rel="stylesheet">

    <script src="<?php echo baseUrl ?>assets/js/script.js" defer></script>
</head>
<body>
    
    <header>
        <?php  if( !isset($_SESSION['auth_user'])){  ?>
            <a href="<?php echo baseUrl ?>">Agenda de Contatos</a>
        <?php } ?>

        <?php  if( isset($_SESSION['user_name'])){  ?>
            <a href="<?php echo baseUrl ?>"><?php echo $_SESSION['user_name'] ?></a>
        <?php } ?>

        <?php  if( isset($_SESSION['auth_user'])){  ?>
        <ul>
            <li>
                <a href="<?php echo baseUrl ?>pages/contactlist">Lista de Contato</a>
            </li>
            <li>
                <a href="<?php echo baseUrl ?>pages/contact">Criar Contato</a>
            </li>
            <li>
                <a href="<?php echo baseUrl ?>pages/user">Usuário</a>
            </li>
            <li>
                <a href="<?php echo baseUrl ?>user/destroy">Sair</a>
            </li>
        </ul>
        <?php  } ?>
    </header>

  