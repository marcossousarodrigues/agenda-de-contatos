
<section class="container">
    <h1>Editar Contato</h1>

    <section class="form">

        <p class="message-error"></p>
        <form  id="form" action="<?php echo baseUrl ?>contact/update/<?php echo $contact['id'] ?>" method="post">
            <label for="">Nome
            <input type="text" name="name" value="<?php echo $contact["name"] ?>" class="name">
            </label>

            <label for="">Sobrenome
            <input type="text" name="surname" value="<?php echo $contact["surname"] ?>" class="surname">
            </label>

            <label for="">Telefone
            <input type="text" name="tel" value="<?php echo $contact["tel"] ?>" class="tel">
            </label>

            <label for="">E-mail
            <input type="text" name="email" value="<?php echo $contact["email"] ?>" class="email">
            </label>

            <div class="btn">
                <button class="btn-salvar">Atualizar</button>
            </div>
        </form>
    </section>
</section>