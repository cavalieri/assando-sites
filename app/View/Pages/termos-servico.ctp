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
	<h2>Exercício #2 - Termos de serviço</h2>
	<h3>Vos forsit erit non legunt sic tam cito</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sapien lectus, vel rutrum magna. Nulla nec mi risus, vitae pulvinar purus. Suspendisse potenti. Maecenas cursus volutpat dui at ornare. Nam in justo ante, vitae consectetur risus. Etiam velit augue, ultrices iaculis condimentum sed, suscipit at lorem. Cras et eros lectus, at mattis felis. Vivamus eget tristique erat. Phasellus quis lorem nec ante sagittis faucibus non eu neque. Pellentesque a nunc arcu, venenatis iaculis eros. Nam eleifend, nisl pulvinar ultricies tincidunt, massa dui condimentum metus, non porta erat mauris et leo. Aliquam erat volutpat.</p>
	<p>Sed ultricies, ligula a lobortis varius, magna nibh hendrerit magna, eu imperdiet libero arcu vitae eros. Morbi sem ante, ultrices quis imperdiet ac, mattis eget turpis. Ut sodales aliquet massa ut fermentum. Cras ultrices, elit nec aliquet pulvinar, felis arcu rhoncus justo, vel tincidunt sapien justo eu turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque odio tellus, lobortis vitae tristique eu, venenatis sit amet quam. Donec est justo, convallis et ultrices ac, egestas sed massa. Fusce nec magna lorem, in venenatis diam. Cras pretium dui vitae velit pulvinar iaculis. Duis ut diam nibh. Nunc consectetur interdum sapien eget accumsan. In elementum purus nec dolor elementum mattis. Quisque porttitor, quam id malesuada blandit, ante nisl elementum odio, dapibus ultrices leo erat in nulla. Quisque consectetur, ipsum quis placerat feugiat, enim leo dignissim elit, ullamcorper vulputate sem est a elit. Suspendisse viverra, odio sit amet blandit pulvinar, est justo adipiscing orci, at venenatis velit massa vitae risus. Curabitur nunc elit, sollicitudin sed blandit quis, laoreet nec leo.</p>
	<p>Sed ut pulvinar ipsum. Donec rutrum ultrices magna, quis rhoncus tellus eleifend ac. Donec facilisis blandit lacus eu eleifend. Sed diam mauris, mollis nec dictum et, tincidunt id libero. Mauris turpis lectus, faucibus vel aliquam vitae, euismod id tortor. Nam aliquam bibendum orci in congue. Aliquam euismod blandit dui nec porta.</p>
	<p>In metus orci, eleifend sed ultrices et, lobortis eget libero. Sed urna enim, lobortis sit amet semper a, porttitor eu felis. Phasellus dictum purus ac velit venenatis ultrices. Donec euismod lorem diam, suscipit placerat tellus. Donec est nibh, laoreet sollicitudin blandit non, hendrerit a leo. Aenean et mauris eros, quis malesuada leo. Fusce cursus hendrerit elit. Aenean rutrum egestas nulla, eu volutpat dui congue ut. Donec condimentum lorem leo. Praesent quis aliquam lectus. Proin risus leo, vulputate eget lacinia laoreet, aliquet et leo.</p>
	<p>Sed pharetra molestie sem et elementum. Vestibulum consectetur, nulla molestie iaculis elementum, nisl leo accumsan ante, vel lacinia turpis tortor et nisi. Curabitur ac rutrum nunc. Sed dolor odio, elementum sed convallis non, varius non leo. Sed sed dolor a enim lacinia bibendum. Suspendisse potenti. Praesent arcu libero, tincidunt quis ultricies a, mattis quis ipsum. Ut ac mi quam, a commodo mi. Mauris nec mauris velit.</p>
</div>