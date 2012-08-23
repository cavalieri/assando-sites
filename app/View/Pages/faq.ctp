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
	<h2>Exercício #2 - Perguntas Frequentes</h2>
	<p>O que é que quando um homem pede pra mulher coloca, a mulher fica com vergonha, quando coloca ela gosta e, quando tira ela até chora?<br />
	<strong>A Aliança</strong></p>
	<p>  Por que os portugueses não usam queijo ralado no macarrão parafuso?
	  <br />
	<strong> Por que farinha de rosca combina mais</strong></p>
	<p>  Sabe como fazer uma idiota esperar 24 horas?
	  <br />
	<strong> Amanha eu te conto</strong></p>
	<p>    O que se deve atirar a um Argentino que esta se afogando?
	  <br />
	<strong> O resto da familia </strong></p>
	<p>  Qual o animal mais antigo do mundo?
	  <br />
	<strong> A zebra. Por que ela e preta e branca</strong></p>
	<p>Um menino pergunta a mãe :
	  <br />
	<strong> Mamãe porque você é branca o papai é negro e eu sou japones?</strong></p>
	<p>Aí ela responde:<br />
	<strong> Ah meu filho se você soubesse a festa que teve naquele dia você iria estar feliz por não latir!!!</strong></p>
	<p>O que um cupim disse para outro?
	  <br />
	<strong> Me dá um cupim d'agua?</strong></p>
	<p>Qual o cúmulo do ciúme?<br />
	<strong> É brigar com a esposa porque ela abriu as pernas na hora do parto.</strong></p>
	<p>O que faz o assassino quando se aposenta?<br />
	<strong> Mata o tempo.</strong></p>
</div>