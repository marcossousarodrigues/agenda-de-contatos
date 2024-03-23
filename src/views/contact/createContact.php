
<section class="container">
    <h1>Cadastrar Contato</h1>

    <section class="form">

        <p class="message-error"></p>
        <form  id="form" action="<?php echo baseUrl ?>contact/create" method="post">
            <label for="">Nome
            <input type="text" name="name" class="name">
            </label>

            <label for="">Sobrenome
            <input type="text" name="surname" class="surname">
            </label>

            <label for="">Telefone
            <input type="text" name="tel" class="tel">
            </label>

            <label for="">E-mail
            <input type="text" name="email" class="email">
            </label>

            <div class="btn">
                <button class="btn-salvar">Salvar</button>
            </div>
        </form>
    </section>
</section>