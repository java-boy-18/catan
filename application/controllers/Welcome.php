<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$materiaPrima = array();
		for ($i=0; $i < 4 ; $i++) {
			$materiaPrima[$i] = 'madeira';
		}
		for ($i=4; $i < 8 ; $i++) {
			$materiaPrima[$i] = 'trigo';
		}
		for ($i=8; $i < 12 ; $i++) {
			$materiaPrima[$i] = 'ovelha';
		}
		for ($i=12; $i < 15 ; $i++) {
			$materiaPrima[$i] = 'pedra';
		}
		for ($i=15; $i < 18 ; $i++) {
			$materiaPrima[$i] = 'tijolo';
		}
		shuffle($materiaPrima);
		$numero[0] = '2';
		$numero[1] = '3';
		$numero[2] = '3';
		$numero[3] = '4';
		$numero[4] = '4';
		$numero[5] = '5';
		$numero[6] = '5';
		$numero[7] = '<font color="red">6</font>';
		$numero[8] = '<font color="red">6</font>';
		$numero[9] = '<font color="red">8</font>';
		$numero[10] = '<font color="red">8</font>';
		$numero[11] = '9';
		$numero[12] = '9';
		$numero[13] = '10';
		$numero[14] = '10';
		$numero[15] = '11';
		$numero[16] = '11';
		$numero[17] = '12';
		shuffle($numero);
		$rs['numero'] = $numero;
		$rs['materiaPrima'] = $materiaPrima;
		$this->load->view('welcome_message',$rs);
	}
	public function dice(){
		echo rand(2,12);
	}
}
