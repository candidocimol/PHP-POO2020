<main>
<a href="<?php echo HOME_URI;?>usuario/criar" class="btn">ADD</a>
<table class="table">
<thead>
    <tr><td>#</td><td>Nome</td><td>Email</td><td></td></tr>
</thead>
<?php
    if(isset($usuarios)){
        foreach($usuarios AS $usuario){
            echo "<tr>
                    <td>".$usuario->id."</td>
                    <td>".$usuario->nome."</td>
                    <td>".$usuario->email."</td>
                    <td>
                        <a href='".HOME_URI."/usuario/editar/".$usuario->id."'><i class='glyphicon glyphicon-edit' title='Editar usuário' ></i></a>
                        <a href='".HOME_URI."/usuario/excluir/".$usuario->id."'><i class='glyphicon glyphicon-trash' title='Excluir usuário'></i></a>
                        <a href='".HOME_URI."/usuario/enviaremail/".$usuario->id."'><i class='glyphicon glyphicon-envelope' title='Enviar email'></i></a>
                    
                    </td>
                </tr>";
        }
    }

?>
</table>
</main>