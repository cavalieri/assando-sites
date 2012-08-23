<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
if (Configure::read('debug') == 0):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>
<div id="menu-principal">
	<?php echo $this->element('menu_principal'); ?>
</div>
<div id="conteudo">
	<h2>Exercício #2 - Quem somos?</h2>
	<h3>Canção do Exército</h3>
	<p><em>Letra: Ten Cel Alberto Augusto Martins<br />
	Música: T. de Magalhães </em></p>
	<p>Nós somos da Pátria a guarda,<br />
	  Fiéis soldados,<br />
	  Por ela amados.<br />
	  Nas cores de nossa farda<br />
	  Rebrilha a glória,<br />
	Fulge a vitória.</p>
	<p>  Em nosso valor se encerra<br />
	  Toda a esperança<br />
	  Que um povo alcança.<br />
	  Quando altiva for a Terra<br />
	  Rebrilha a glória,<br />
	Fulge a vitória.</p>
	<p>  A paz queremos com fervor,<br />
	  A guerra só nos causa dor.<br />
	  Porém, se a Pátria amada<br />
	  For um dia ultrajada<br />
	Lutaremos sem temor.</p>
	<p>  Como é sublime<br />
	  Saber amar,<br />
	  Com a alma adorar<br />
	  A terra onde se nasce!<br />
	  Amor febril<br />
	  Pelo Brasil<br />
	  No coração<br />
	Nosso que passe. </p>
	<p>  E quando a nação querida,<br />
	  Frente ao inimigo,<br />
	  Correr perigo,<br />
	  Se dermos por ela a vida<br />
	  Rebrilha a glória,<br />
	Fulge a vitória.</p>
	<p>  Assim ao Brasil faremos<br />
	  Oferta igual<br />
	  De amor filial.<br />
	  E a ti, Pátria, salvaremos!<br />
	  Rebrilha a glória,<br />
	Fulge a vitória.</p>
	<p>  A paz queremos com fervor,<br />
	  A guerra só nos causa dor.<br />
	  Porém, se a Pátria amada<br />
	  For um dia ultrajada<br />
	  Lutaremos sem temor.</p>
</div>