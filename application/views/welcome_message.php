<?php
defined('BASEPATH') OR exit('No direct script access allowed');
echo link_tag('assets/css/board.css');
?>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>" ></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/dice.js'); ?>"></script>
<button type="button" id="roll" name="roll">ROLL DICE !!!</button>
<input type="text" name="resultado" readonly id="resultado" value="">
<div class="board">
	<center>
		<div class="moldura">
			<div class="materiais">
				<div id="um">
					<div class="<?php echo $materiaPrima[0];?>" style="left:4px;top:2.5px;"><div class="numeros"><input type="hidden" value="<?php echo $numero[0].'/'.$materiaPrima[0] ?>"><?php echo $numero[0] ?></div></div>
					<div class="<?php echo $materiaPrima[1];?>" style="right:2px;top:2.5px;"><div class="numeros"><input type="hidden" value="<?php echo $numero[0].'/'.$materiaPrima[0] ?>"><?php echo $numero[1] ?></div></div>
					<div class="<?php echo $materiaPrima[2];?>" style="right:7px;top:4px;"><div class="numeros"><input type="hidden" value="<?php echo $numero[0].'/'.$materiaPrima[0] ?>"><?php echo $numero[2] ?></div></div><br>
				</div>
				<div id="dois">
					<div class="<?php echo $materiaPrima[3];?>" style="bottom:36px;left:6px;"><div class="numeros"><input type="hidden" value="<?php echo $numero[0].'/'.$materiaPrima[0] ?>"><?php echo $numero[3] ?></div></div>
					<div class="<?php echo $materiaPrima[4];?>" style="bottom:36px;"><div class="numeros"><input type="hidden" value="<?php echo $numero[0].'/'.$materiaPrima[0] ?>"><?php echo $numero[4] ?></div></div>
					<div class="<?php echo $materiaPrima[5];?>" style="bottom:36px;right:5px;"><div class="numeros"><input type="hidden" value="<?php echo $numero[0].'/'.$materiaPrima[0] ?>"><?php echo $numero[5] ?></div></div>
					<div class="<?php echo $materiaPrima[6];?>" style="bottom:36px;right:11px;"><div class="numeros"><input type="hidden" value="<?php echo $numero[0].'/'.$materiaPrima[0] ?>"><?php echo $numero[6] ?></div></div><br>
				</div>
				<div id="tres">
					<div class="<?php echo $materiaPrima[7];?>" style="bottom:75px;left:11px;"><div class="numeros"><input type="hidden" value="<?php echo $numero[0].'/'.$materiaPrima[0] ?>"><?php echo $numero[7] ?></div></div>
					<div class="<?php echo $materiaPrima[8];?>" style="bottom:75px;left:5px;"><div class="numeros"><input type="hidden" value="<?php echo $numero[0].'/'.$materiaPrima[0] ?>"><?php echo $numero[8] ?></div></div>
					<div class="deserto" style="bottom:75px;right:1px;"><input type="hidden" value="<?php echo $numero[0].'/'.$materiaPrima[0] ?>"></div>
					<div class="<?php echo $materiaPrima[9]?>" style="bottom:75px;right:7px;"><div class="numeros"><input type="hidden" value="<?php echo $numero[0].'/'.$materiaPrima[0] ?>"><?php echo $numero[9] ?></div></div>
					<div class="<?php echo $materiaPrima[10]?>" style="bottom:75px;right:13px;"><div class="numeros"><input type="hidden" value="<?php echo $numero[0].'/'.$materiaPrima[0] ?>"><?php echo $numero[10] ?></div></div><br>
				</div>
				<div id="quatro">
					<div class="<?php echo $materiaPrima[11]?>" style="bottom:115px;left:9px;"><div class="numeros"><input type="hidden" value="<?php echo $numero[0].'/'.$materiaPrima[0] ?>"><?php echo $numero[11] ?></div></div>
					<div class="<?php echo $materiaPrima[12]?>" style="bottom:115px;left:2px;"><div class="numeros"><input type="hidden" value="<?php echo $numero[0].'/'.$materiaPrima[0] ?>"><?php echo $numero[12] ?></div></div>
					<div class="<?php echo $materiaPrima[13]?>" style="bottom:115px;right:4px;"><div class="numeros"><input type="hidden" value="<?php echo $numero[0].'/'.$materiaPrima[0] ?>"><?php echo $numero[13] ?></div></div>
					<div class="<?php echo $materiaPrima[14]?>" style="bottom:115px;right:10px;"><div class="numeros"><input type="hidden" value="<?php echo $numero[0].'/'.$materiaPrima[0] ?>"><?php echo $numero[14] ?></div></div><br>
				</div>
				<div id="cinco">
					<div class="<?php echo $materiaPrima[15]?>" style="bottom:155px;left:5.4"><div class="numeros"><input type="hidden" value="<?php echo $numero[0].'/'.$materiaPrima[0] ?>"><?php echo $numero[15] ?></div></div>
					<div class="<?php echo $materiaPrima[16]?>" style="bottom:155px;"><div class="numeros"><input type="hidden" value="<?php echo $numero[0].'/'.$materiaPrima[0] ?>"><?php echo $numero[16] ?></div></div>
					<div class="<?php echo $materiaPrima[17]?>" style="bottom:155px;right:5.4"><div class="numeros"><input type="hidden" value="<?php echo $numero[0].'/'.$materiaPrima[0] ?>"><?php echo $numero[17] ?></div></div><br>
				</div>
			</div>
		</div>
	</center>
</div>
