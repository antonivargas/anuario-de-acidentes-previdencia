<?php 

//Ao final do programa aqui teremos o total de acidentes no período de 5 anos
$somaTodosAcidentes;

// Iniciando a leitura dos dados de 2009
$link1 = "http://api.dataprev.gov.br/previdencia/anuario/2009/acidentes-do-trabalho.xml"; 
$xml09 = simplexml_load_file($link1);

$municipio09 = array();
$semcat09 = array();
$tipicos09 = array();
$trajeto09 = array();
$doenca09 = array();
$totalCity09;
$totalAno09=0;
?>
<?php include("../includes/top_listas.php"); ?>
			<section class="main">
				<!-- Div que mostra a soma de acidentes no período apurados -->
				<div id="relatorio">
					<center><p><h3>Relatório de Acidêntes de Trabalho no Ano de 2009</h3></p></center>
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
													foreach($xml09 -> registro as $reg){
														echo "<tr>";
														echo "<td>". $municipio09 = utf8_decode($reg -> municipio)."</td>"; 
														// Quantidade sem Categoria
											     	    echo "<td>".$semcat09 = utf8_decode($reg ->quantidade-> sem_cat)."</td>";
														//Quantidades com categoria
														echo "<td>".$tipicos09 = utf8_decode($reg ->quantidade->com_cat-> tipicos)."</td>";   
														echo "<td>".$trajeto09 = utf8_decode($reg ->quantidade->com_cat-> trajeto)."</td>"; 
														echo "<td>".$doenca09 = utf8_decode($reg ->quantidade->com_cat->  doenca)."</td>";
														$totalCity09 = (($semcat09)+($tipicos09)+($trajeto09)+($doenca09));										 
   													    echo "<td>".$totalCity09."</td>"; 
														echo "</tr>";														   
													}
												?>							
											
								    </tbody>
							</table>
					
				</div>			
				
			</section>
<?php include("../includes/footer.php"); ?>
