<?php 

// Iniciando a leitura dos dados de 2008
$link2 = "http://api.dataprev.gov.br/previdencia/anuario/2008/acidentes-do-trabalho.xml"; 
$xml08 = simplexml_load_file($link2);

$municipio08 = array();
$semcat08 = array();
$tipicos08 = array();
$trajeto08 = array();
$doenca08 = array();
$totalCity08;
$totalAno08=0;
?>
<?php include("../includes/top_listas.php"); ?>
			<section class="main">
				<!-- Div que mostra a soma de acidentes no período apurados -->
				<div id="relatorio">
					<center><p><h3>Relatório de Acidêntes de Trabalho no Ano de 2008</h3></p></center>
							<table id="example" class="display" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Cidade</th>
											<th>Quantidade S/ Categoria</th>
											<th>Categoria Típicos</th>
											<th>Categoria Trajeto</th>
											<th>Categoria Doença</th>
											<th>Total de Acidentes</th>
										</tr>
									</thead>
							 
									<tfoot>
										<tr>
											<th>Cidade</th>
											<th>Quantidade S/ Categoria</th>
											<th>Categoria Típicos</th>
											<th>Categoria Trajeto</th>
											<th>Categoria Doença</th>
											<th>Total de Acidentes</th>
										</tr>
									</tfoot>
									<tbody>																					
											<?php
													foreach($xml08 -> registro as $reg){
														echo "<tr>";
														echo "<td>". $municipio08 = utf8_decode($reg -> municipio)."</td>"; 
														// Quantidade sem Categoria
											     	    echo "<td>".$semcat08 = utf8_decode($reg ->quantidade-> sem_cat)."</td>";
														//Quantidades com categoria
														echo "<td>".$tipicos08 = utf8_decode($reg ->quantidade->com_cat-> tipicos)."</td>";   
														echo "<td>".$trajeto08 = utf8_decode($reg ->quantidade->com_cat-> trajeto)."</td>"; 
														echo "<td>".$doenca08 = utf8_decode($reg ->quantidade->com_cat->  doenca)."</td>";
														$totalCity08 = (($semcat08)+($tipicos08)+($trajeto08)+($doenca08));										 
   													    echo "<td>".$totalCity08."</td>"; 
														echo "</tr>";														   
													}
												?>							
											
								    </tbody>
							</table>
					
				</div>			
				
			</section>
<?php include("../includes/footer.php"); ?>
