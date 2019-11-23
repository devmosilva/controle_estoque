<?php

require_once "../../classe/conexao.php";

		 $conn = new conectar();
       	 $conexao= $conn->conexao();
		
		
		$sql = "SELECT id_categoria, nome_categoria FROM categorias";
		
		$result = mysqli_query($conexao, $sql);


?>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
	<caption><label> ◘ Categorias </label></caption>
	<tr>
		<td >Categoria</td>
		<td>Editar</td>
		<td>Excluir</td>
	</tr>
<?php // armazena os dados passado pela consulta SQL em uma matriz onde será possivel utilizar na tabela abaixo ?>	

<?php while($mostrar = mysqli_fetch_row($result)): ?>
	<tr>
		<td><?php echo $mostrar[1]; ?></td>
		<td>
																					<!-- data-target = chama a modal categorias.php -->
			<span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#atualizaCategoria" onclick="adicionarDado('<?php echo $mostrar[0]; ?>','<?php echo $mostrar[1]; ?>')">
			
				<span class="glyphicon glyphicon-pencil"></span>
			</span>
		</td>
		<td>
			<span class="btn btn-danger btn-xs" onclick="excluirCategoria('<?php echo $mostrar[0]; ?>')">
				<span class="glyphicon glyphicon-remove"></span>
			</span>
		</td>
	</tr>

<?php endwhile; ?>

</table>