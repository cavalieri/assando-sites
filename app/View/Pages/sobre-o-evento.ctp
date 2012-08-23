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
	<h2>Exercício #2 - Sobre o evento</h2>
	<p>O evento acontecerá na cidade de Amparo, SP.</p>
	
	<h3>Como chegar no evento</h3>
	<iframe width="562" height="314" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=Amparo+-+S%C3%A3o+Paulo,+Brasil&amp;aq=0&amp;oq=amparo,+s&amp;sll=37.0625,-95.677068&amp;sspn=43.799322,93.076172&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Amparo+-+S%C3%A3o+Paulo,+Brasil&amp;layer=c&amp;cbll=-22.709558,-46.774693&amp;panoid=roFk-e-z3pSH8Go_pdGNIA&amp;cbp=11,125.59,,0,-5.01&amp;z=14&amp;output=svembed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=Amparo+-+S%C3%A3o+Paulo,+Brasil&amp;aq=0&amp;oq=amparo,+s&amp;sll=37.0625,-95.677068&amp;sspn=43.799322,93.076172&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Amparo+-+S%C3%A3o+Paulo,+Brasil&amp;layer=c&amp;cbll=-22.709558,-46.774693&amp;panoid=roFk-e-z3pSH8Go_pdGNIA&amp;cbp=11,125.59,,0,-5.01&amp;z=14" style="color:#0000FF;text-align:left">Exibir mapa ampliado</a></small>
</div>