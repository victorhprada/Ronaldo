<?php ?>

<table>
    <tr>
        <th>Lista de pessoas</th>
    </tr>
    <?php foreach($cadastrosList as $nome): ?>
        <td><? echo $nome." ". $email ." ". $idade.PHP_EOL ?></td>
    <?php endforeach ?>    
</table>