
<section class="container">
    <?php if(isset($_SESSION['user_name'])){ ?>
        <p>Olá, <?php echo $_SESSION['user_name']; ?>, seja bem vindo(a) </p>
    <?php } ?>

    <h1>Lista de contatos</h1>

    <?php if(count($contacts) <= 0) { ?>
        <h2>Você ainda não salvou nenhum contato</h2>
        <a href="<?php echo baseUrl ?>pages/contact">Criar contato</a>
    <?php } ?>
    <?php if(count($contacts) > 0 ){ ?>

    <table>
        <tbody>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Editar/Excluir</th>
        </tbody>
        <?php foreach($contacts as $key => $value){ ?>
        <tr>
            <td class="<?php if($key % 2 == 0) echo 'td-line' ?>" ><?php echo $value["name"] ?></td>
            <td class="<?php if($key % 2 == 0) echo 'td-line' ?>"><?php echo $value["surname"] ?></td>
            <td class="<?php if($key % 2 == 0) echo 'td-line' ?>"><?php echo $value["tel"] ?></td>
            <td class="<?php if($key % 2 == 0) echo 'td-line' ?>"><?php echo $value["email"] ?></td>
            <td class="<?php if($key % 2 == 0) echo 'td-line' ?>">
                <a href="<?php echo baseUrl ?>pages/editContact/<?php echo $value['id'] ?>">Edutar</a>/<a href="<?php echo baseUrl ?>contact/delete/<?php echo $value["id"]?>">Excluir</a>
            </td>
        </tr>
        <?php } ?>
    
    </table>


<?php } ?>
   

</section>
