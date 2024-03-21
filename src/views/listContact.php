

<section class="container">
    <h1>Lista de contatos</h1>
    
    <table>
        <tbody>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Telefone</th>
            <th>E-mail</th>
        </tbody>
        <?php foreach($contacts as $key => $value){ ?>
        <tr>
            <td class="<?php if($key % 2 == 0) echo 'td-line' ?>" ><?php echo $value["name"] ?></td>
            <td class="<?php if($key % 2 == 0) echo 'td-line' ?>"><?php echo $value["surname"] ?></td>
            <td class="<?php if($key % 2 == 0) echo 'td-line' ?>"><?php echo $value["tel"] ?></td>
            <td class="<?php if($key % 2 == 0) echo 'td-line' ?>"><?php echo $value["email"] ?></td>
        </tr>
        <?php } ?>
    
    </table>

   

</section>
