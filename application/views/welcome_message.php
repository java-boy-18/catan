<?php
defined('BASEPATH') OR exit('No direct script access allowed');
echo link_tag('assets/css/board.css');
?>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>" ></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/dice.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/construir.js'); ?>"></script>
<button type="button" id="roll" name="roll">ROLL DICE !!!</button>
<input type="text" name="resultado" readonly id="resultado" value="">
<body onselectstart="return false">
	<div class="cartas">
		<input type="text" name="madeira" id="inputmadeira" readonly value="0">
		<div id="cartamadeira"></div>
		<input type="text" name="ovelha" id="inputovelha" readonly value="0">
		<div id="cartaovelha"></div>
		<input type="text" name="pedra" id="inputpedra" readonly value="0">
		<div id="cartapedra"></div>
		<input type="text" name="tijolo" id="inputtijolo" readonly value="0">
		<div id="cartatijolo"></div>
		<input type="text" name="trigo" id="inputtrigo" readonly value="0">
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
			<div>
				<a href="#">
					<div class="settlement" id="s1" onclick="construirsettle('s4','s1','s5')" style="top:90px;left: 588px;">1</div>
				</a>
				<a href="#">
					<div class="settlement" id="s2" onclick="construirsettle('s5','s2','s6')" style="top:90px;left: 701px;">2</div>
				</a>
				<a href="#">
					<div class="settlement" id="s3" onclick="construirsettle('s6','s3','s7')" style="top:90px;left: 813px;">3</div>
				</a>
			</div>
			<div>
				<a href="#">
					<div class="settlement" id="s4" onclick="construirsettle('s8','s4','s1')" style="top:120px;left: 535px;">4</div>
				</a>
				<a href="#">
					<div class="settlement" id="s5" onclick="construirsettle('s1','s5','s2','s9')" style="top:120px;left: 646px;">5</div>
				</a>
				<a href="#">
					<div class="settlement" id="s6" onclick="construirsettle('s2','s6','s3','s10')" style="top:120px;left: 760px;">6</div>
				</a>
				<a href="#">
					<div class="settlement" id="s7" onclick="construirsettle('s3','s7','s11')" style="top:120px;left: 870px;">7</div>
				</a>
			</div>
			<div>
				<a href="#">
					<div class="settlement" id="s8" onclick="construirsettle('s12','s8','s13')" style="top:190px;left: 535px;">8</div>
				</a>
				<a href="#">
					<div class="settlement" id="s9" onclick="construirsettle('s13','s9','s14','s5')" style="top:190px;left: 646px;">9</div>
				</a>
				<a href="#">
					<div class="settlement" id="s10" onclick="construirsettle('s14','s10','s15')" style="top:190px;left: 760px;">10</div>
				</a>
				<a href="#">
					<div class="settlement" id="s11" onclick="construirsettle('s15','s11','s16')" style="top:190px;left: 870px;">11</div>
				</a>
			</div>
			<div>
				<a href="#">
					<div class="settlement" id="s12" onclick="construirsettle('s17','s12','s8')" style="top:222px;left: 475px;">12</div>
				</a>
				<a href="#">
					<div class="settlement" id="s13" onclick="construirsettle('s8','s13','s9','s18')" style="top:222px;left: 588px;">13</div>
				</a>
				<a href="#">
					<div class="settlement" id="s14" onclick="construirsettle('s9','s14','s10','s19')" style="top:222px;left: 701px;">14</div>
				</a>
				<a href="#">
					<div class="settlement" id="s15" onclick="construirsettle('s10','s15','s11','s20')" style="top:222px;left: 813px;">15</div>
				</a>
				<a href="#">
					<div class="settlement" id="s16" onclick="construirsettle('s11','s16','s21')" style="top:222px;left: 925px;">16</div>
				</a>
			</div>
			<div>
				<a href="#">
					<div class="settlement" id="s17" onclick="construirsettle('s22','s17','s23','s12')" style="top:291px;left: 475px;">17</div>
				</a>
				<a href="#">
					<div class="settlement" id="s18" onclick="construirsettle('s23','s18','s24','s13')"  style="top:291px;left: 588px;">18</div>
				</a>
				<a href="#">
					<div class="settlement" id="s19" onclick="construirsettle('s24','s19','s25','s14')" style="top:291px;left: 701px;">19</div>
				</a>
				<a href="#">
					<div class="settlement" id="s20" onclick="construirsettle('s25','s20','s26','s15')"  style="top:291px;left: 813px;">20</div>
				</a>
				<a href="#">
					<div class="settlement" id="s21" onclick="construirsettle('s26','s21','s27','s16')" style="top:291px;left: 925px;">21</div>
				</a>
			</div>
			<div>
				<a href="#">
					<div class="settlement" id="s22" onclick="construirsettle('s28','s22','s17','s16')" style="top:325px;left: 420px;">22</div>
				</a>
				<a href="#">
					<div class="settlement" id="s23" onclick="construirsettle('s17','s23','s18','s29')" style="top:325px;left: 535px;">23</div>
				</a>
				<a href="#">
					<div class="settlement" id="s24" onclick="construirsettle('s18','s24','s19','s30')" style="top:325px;left: 646px;">24</div>
				</a>
				<a href="#">
					<div class="settlement" id="s25" onclick="construirsettle('s19','s25','s20','s31')" style="top:325px;left: 760px;">25</div>
				</a>
				<a href="#">
					<div class="settlement" id="s26" onclick="construirsettle('s20','s26','s21','s32')" style="top:325px;left: 870px;">26</div>
				</a>
				<a href="#">
					<div class="settlement" id="s27" onclick="construirsettle('s21','s27','s33')" style="top:325px;left: 985px;">27</div>
				</a>
			</div>
			<div>
				<a href="#">
					<div class="settlement" id="s28" onclick="construirsettle('s22','s28','s34')" style="top:390px;left: 420px;">28</div>
				</a>
				<a href="#">
					<div class="settlement" id="s29" onclick="construirsettle('s34','s29','s35','s23')" style="top:390px;left: 535px;">29</div>
				</a>
				<a href="#">
					<div class="settlement"  id="s30" onclick="construirsettle('s35','s30','s36','s24')" style="top:390px;left: 646px;">30</div>
				</a>
				<a href="#">
					<div class="settlement" id="s31" onclick="construirsettle('s36','s31','s37','s25')" style="top:390px;left: 760px;">31</div>
				</a>
				<a href="#">
					<div class="settlement" id="s32" onclick="construirsettle('s37','s32','s38','s26')" style="top:390px;left: 870px;">32</div>
				</a>
				<a href="#">
					<div class="settlement" id="s33" onclick="construirsettle('s38','s33','s27')" style="top:390px;left: 985px;">33</div>
				</a>
			</div>
			<div>
				<a href="#">
					<div class="settlement" id="s34" onclick="construirsettle('s28','s34','s29','s39')" style="top:420px;left: 475px;">34</div>
				</a>
				<a href="#">
					<div class="settlement" id="s35" onclick="construirsettle('s29','s35','s30','s40')" style="top:420px;left: 588px;">35</div>
				</a>
				<a href="#">
					<div class="settlement" id="s36" onclick="construirsettle('s30','s36','s31','s41')" style="top:420px;left: 701px;">36</div>
				</a>
				<a href="#">
					<div class="settlement" id="s37" onclick="construirsettle('s31','s37','s32','s42')" style="top:420px;left: 813px;">37</div>
				</a>
				<a href="#">
					<div class="settlement" id="s38" onclick="construirsettle('s32','s38','s33','s43')" style="top:420px;left: 925px;">38</div>
				</a>
			</div>

			<div>
				<a href="#">
					<div class="settlement" id="s39" onclick="construirsettle('s34','s39','s44')" style="top:490px;left: 475px;">39</div>
				</a>
				<a href="#">
					<div class="settlement" id="s40" onclick="construirsettle('s44','s40','s45','s35')" style="top:490px;left: 588px;">40</div>
				</a>
				<a href="#">
					<div class="settlement" id="s41" onclick="construirsettle('s45','s41','s46','s36')" style="top:490px;left: 701px;">41</div>
				</a>
				<a href="#">
					<div class="settlement" id="s42" onclick="construirsettle('s46','s42','s47','s37')" style="top:490px;left: 813px;">42</div>
				</a>
				<a href="#">
					<div class="settlement" id="s43" onclick="construirsettle('s47','s43','s38')" style="top:490px;left: 925px;">43</div>
				</a>
			</div>
			<div>
				<a href="#">
					<div class="settlement" id="s44" onclick="construirsettle('s39','s44','s40','s48')" style="top:520px;left: 535px;">44</div>
				</a>
				<a href="#">
					<div class="settlement" id="s45" onclick="construirsettle('s40','s45','s41','s49')" style="top:520px;left: 646px;">45</div>
				</a>
				<a href="#">
					<div class="settlement" id="s46" onclick="construirsettle('s41','s46','s42','s50')" style="top:520px;left: 760px;">46</div>
				</a>
				<a href="#">
					<div class="settlement" id="s47" onclick="construirsettle('s42','s47','s43','s51')" style="top:520px;left: 870px;">47</div>
				</a>
			</div>
			<div>
				<a href="#">
					<div class="settlement" id="s48" onclick="construirsettle('s44','s48','s52')" style="top:588px;left: 535px;">48</div>
				</a>
				<a href="#">
					<div class="settlement" id="s49" onclick="construirsettle('s52','s49','s53','s45')" style="top:588px;left: 646px;">49</div>
				</a>
				<a href="#">
					<div class="settlement" id="s50" onclick="construirsettle('s53','s50','s54','s46')" style="top:588px;left: 760px;">50</div>
				</a>
				<a href="#">
					<div class="settlement" id="s51" onclick="construirsettle('s54','s51','s47')" style="top:588px;left: 870px;">51</div>
				</a>
			</div>
			<div>
				<a href="#">
					<div class="settlement" id="s52" onclick="construirsettle('s48','s52','s49')" style="top:620px;left: 588px;">52</div>
				</a>
				<a href="#">
					<div class="settlement" id="s53" onclick="construirsettle('s49','s53','s50')" style="top:620px;left: 701px;">53</div>
				</a>
				<a href="#">
					<div class="settlement" id="s54" onclick="construirsettle('s50','s54','s51')" style="top:620px;left: 813px;">54</div>
				</a>
			</div>
		</center>
	</div>
</body>
