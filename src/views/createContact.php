
<section class="container">
    <h1>Cadastrar Contato</h1>

    <section class="form">
        <form action="<?php echo baseUrl ?>contact/create" method="post">
            <label for="">Nome
            <input type="text" name="name">
            </label>

            <label for="">Sobrenome
            <input type="text" name="surname">
            </label>

            <label for="">Telefone
            <input type="text" name="tel">
            </label>

            <label for="">E-mail
            <input type="text" name="email">
            </label>

            <div class="btn">
                <button>Salvar</button>
            </div>
        </form>
    </section>
</section>