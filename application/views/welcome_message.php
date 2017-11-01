<?php
defined('BASEPATH') OR exit('No direct script access allowed');
echo link_tag('assets/css/board.css');
?>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>" ></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/dice.js'); ?>"></script>
<button type="button" id="roll" name="roll">ROLL DICE !!!</button>
<input type="text" name="resultado" readonly id="resultado" value="">
<body onselectstart="return false">
	<div class="cartas">
		<input type="text" name="madeira" id="madeira" readonly value="">
		<div id="cartamadeira"></div>
		<input type="text" name="ovelha" readonly value="">
		<div id="cartaovelha"></div>
		<input type="text" name="pedra" readonly value="">
		<div id="cartapedra"></div>
		<input type="text" name="tijolo" readonly value="">
		<div id="cartatijolo"></div>
		<input type="text" name="trigo" readonly value="">
		<div id="cartatrigo"></div>
	</div>
	<div class="board">
		<center>
			<div class="moldura">
				<div class="materiais">
					<div id="um">
						<div class="<?php echo $materiaPrima[0];?>" style="left:4px;top:2.5px;">
							<div id="<?php echo $numero[0]?>" class="numeros <?php echo $numero[0]?>">
								<input type="hidden" value="<?php echo $numero[0].'/'.$materiaPrima[0] ?>">
								<?php echo $numero[0] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[1];?>" style="right:2px;top:2.5px;">
							<div id="<?php echo $numero[1]?>" class="numeros <?php echo $numero[1]?>">
								<input type="hidden" value="<?php echo $numero[1].'/'.$materiaPrima[1] ?>">
								<?php echo $numero[1] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[2];?>" style="right:7px;top:4px;">
							<div id="<?php echo $numero[2]?>" class="numeros <?php echo $numero[2]?>">
								<input type="hidden" value="<?php echo $numero[2].'/'.$materiaPrima[2] ?>">
								<?php echo $numero[2] ?>
							</div>
						</div><br>
					</div>

					<div id="dois">
						<div class="<?php echo $materiaPrima[3];?>" style="bottom:36px;left:6px;">
							<div id="<?php echo $numero[3]?>" class="numeros <?php echo $numero[3]?>">
								<input type="hidden" value="<?php echo $numero[3].'/'.$materiaPrima[3] ?>">
								<?php echo $numero[3] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[4];?>" style="bottom:36px;">
							<div id="<?php echo $numero[4]?>" class="numeros <?php echo $numero[4]?>">
								<input type="hidden" value="<?php echo $numero[4].'/'.$materiaPrima[4] ?>">
								<?php echo $numero[4] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[5];?>" style="bottom:36px;right:5px;">
							<div id="<?php echo $numero[5]?>" class="numeros <?php echo $numero[5]?>">
								<input type="hidden" value="<?php echo $numero[5].'/'.$materiaPrima[5] ?>">
								<?php echo $numero[5] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[6];?>" style="bottom:36px;right:11px;">
							<div id="<?php echo $numero[6]?>" class="numeros <?php echo $numero[6]?>">
								<input type="hidden" value="<?php echo $numero[6].'/'.$materiaPrima[6] ?>">
								<?php echo $numero[6] ?>
							</div>
						</div><br>
					</div>

					<div id="tres">
						<div class="<?php echo $materiaPrima[7];?>" style="bottom:75px;left:11px;">
							<div id="<?php echo $numero[7]?>" class="numeros <?php echo $numero[7]?>">
								<input type="hidden" value="<?php echo $numero[7].'/'.$materiaPrima[7] ?>">
								<?php echo $numero[7] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[8];?>" style="bottom:75px;left:5px;">
							<div id="<?php echo $numero[8]?>" class="numeros <?php echo $numero[8]?>">
								<input type="hidden" value="<?php echo $numero[8].'/'.$materiaPrima[8] ?>">
								<?php echo $numero[8] ?>
							</div>
						</div>
						<div class="deserto" style="bottom:75px;right:1px;">
							<div class="numeros 7">
								<input type="hidden" value="<?php echo $numero[18].'/'.'deserto' ?>">
								7
							</div>
						</div>
						<div class="<?php echo $materiaPrima[9]?>" style="bottom:75px;right:7px;">
							<div id="<?php echo $numero[9]?>" class="numeros <?php echo $numero[9]?>">
								<input type="hidden" value="<?php echo $numero[9].'/'.$materiaPrima[9] ?>">
								<?php echo $numero[9] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[10]?>" style="bottom:75px;right:13px;">
							<div id="<?php echo $numero[10]?>" class="numeros <?php echo $numero[10]?>">
								<input type="hidden" value="<?php echo $numero[10].'/'.$materiaPrima[10] ?>">
								<?php echo $numero[10] ?>
							</div>
						</div><br>
					</div>

					<div id="quatro">
						<div class="<?php echo $materiaPrima[11]?>" style="bottom:115px;left:9px;">
							<div id="<?php echo $numero[11]?>" class="numeros <?php echo $numero[11]?>">
								<input type="hidden" value="<?php echo $numero[11].'/'.$materiaPrima[11] ?>">
								<?php echo $numero[11] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[12]?>" style="bottom:115px;left:2px;">
							<div id="<?php echo $numero[12]?>" class="numeros <?php echo $numero[12]?>">
								<input type="hidden" value="<?php echo $numero[12].'/'.$materiaPrima[12] ?>">
								<?php echo $numero[12] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[13]?>" style="bottom:115px;right:4px;">
							<div id="<?php echo $numero[13]?>" class="numeros <?php echo $numero[13]?>">
								<input type="hidden" value="<?php echo $numero[13].'/'.$materiaPrima[13] ?>">
								<?php echo $numero[13] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[14]?>" style="bottom:115px;right:10px;">
							<div id="<?php echo $numero[14]?>" class="numeros <?php echo $numero[14]?>">
								<input type="hidden" value="<?php echo $numero[14].'/'.$materiaPrima[14] ?>">
								<?php echo $numero[14] ?>
							</div>
						</div><br>
					</div>

					<div id="cinco">
						<div class="<?php echo $materiaPrima[15]?>" style="bottom:155px;left:5.4">
							<div id="<?php echo $numero[15]?>" class="numeros <?php echo $numero[15]?>">
								<input type="hidden" value="<?php echo $numero[15].'/'.$materiaPrima[15] ?>">
								<?php echo $numero[15] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[16]?>" style="bottom:155px;">
							<div id="<?php echo $numero[16]?>" class="numeros <?php echo $numero[16]?>">
								<input type="hidden" value="<?php echo $numero[16].'/'.$materiaPrima[16] ?>">
								<?php echo $numero[16] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[17]?>" style="bottom:155px;right:5.4">
							<div id="<?php echo $numero[17]?>" class="numeros <?php echo $numero[17]?>">
								<input type="hidden" value="<?php echo $numero[17].'/'.$materiaPrima[17] ?>">
								<?php echo $numero[17] ?>
							</div>
						</div><br>
					</div>

				</div>
			</div>
		</center>
	</div>
</body>
