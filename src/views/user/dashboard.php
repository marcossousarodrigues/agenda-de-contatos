
<section class="container">
  
    <section class="form-login form">
        
        <h1>Manutenção de Usuário</h1>

        <p>Pagina para manutenções de dados do seu usuário ou troca de senha</p>
        <section class="options-actions">
            <a href="<?php echo baseUrl ?>pages/user?action=password">Alterar senha</a>
            <a href="<?php echo baseUrl ?>pages/user">Alterar dados</a>
        </section>

        <?php if(isset($_GET["message-error"])) { ?>
            <p class="message-error"><?php echo $_GET["message-error"]; ?></p>
        <?php } ?>

        <?php if(isset($_GET["message-success"])) { ?>
            <p class="message-success"><?php echo $_GET["message-success"]; ?></p>
        <?php } ?>
        
        <p class="message-error"></p>

        <?php if(!isset($_GET["action"])){?>
            <h2>Alterar dados</h2>
        
        <form  id="form" action="<?php echo baseUrl ?>user/alter" method="post">
            <label for="">Nome
            <input type="text" value="<?php echo $_SESSION['user_name'] ?>" name="name" class="name">
            </label>

            <label for="">Sobrenome
            <input type="text" name="surname" class="surname">
            </label>
            
            <label for="">Email
            <input type="text" name="email" class="email">
            </label>

            <button class="btn-register">Atualizar</button>
            
        </form>

        <?php } else { ?>

        <h2>Redefinir Senha</h2>
        <form  id="form" action="<?php echo baseUrl ?>user/password" method="post">
            <label for="">Senha Antiga
                <input type="password" name="password" class="password">
            </label>

            <label for="">Nova Senha
                <input type="password" name="password" class="password">
            </label>

            <label for="">Confirmação Nova Senha
                <input type="password" name="password" class="password">
            </label>

            <button class="btn-register">Atualizar</button>
            
        </form>

        <?php } ?>


    </section>
</section>