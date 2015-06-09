<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

 echo $this->Html->css('jquery.mobile-1.4.4');
 echo $this->Html->css('jquery.mobile-1.4.4.min');
 echo $this->Html->css('liste');


 echo $this->Html->script('jquery.mobile-1.4.4');
 echo $this->Html->script('jquery.mobile-1.4.4.min');
 echo $this->Html->script('jquery');
 echo $this->html->script('gestion_emploi_temps');

?>

<html>
    <header>
        <div>
            <h1>Gestion emploi du temps</h1>
        </div>
    </header>
    
    
    <body class="Acceuil">
      
    <form> 
        <div class="ui-field-contain">
            <label for="select_classe">Choix promo</label>
               
            <select name="select_classe" id="select_classe">
                <option value="1">DII 3A</option>
                <option value="2">DII4A</option>
                <option value="3">DII5A</option>    
            </select>
        </div>
    </form>
    
    <form>
        <div class="ui-field-contain">
            <label for="select_groupe">Choix groupe</label>
               
            <select name="select_groupe" id="select_groupe">
                <option value="1">Groupe 1</option>
                <option value="2">Groupe 2</option>    
            </select>
        </div>
    </form>
    
<input type="text" data-role="date" data-inline="true"> 

<ul id="listeJour">
 <li classe="jour"><a>Lundi</a></li>
 <li classe="jour"><a>Mardi</a></li>
 <li classe="jour"><a>Mercredi</a></li>
 <li classe="jour"><a>Jeudi</a></li>
 <li classe="jour"><a>Vendredi</a></li>
</ul>

<ul>
 <li><a><button type="button" id="l8" value="0">8H15 - 10H15</button></a></li>
 <li><a><button type="button" id="ma8" value="0">8H15 - 10H15</button></a></li>
 <li><a><button type="button" id="me8" value="0">8H15 - 10H15</button></a></li>
 <li><a><button type="button" id="j8" value="0">8H15 - 10H15</button></a></li>
 <li><a><button type="button" id="v8" value="0">8H15 - 10H15</button></a></li>
</ul>

<ul>
 <li><a><button type="button">10H30 - 12H30</button></a></li>
 <li><a><button type="button">10H30 - 12H30</button></a></li>
 <li><a><button type="button">10H30 - 12H30</button></a></li>
 <li><a><button type="button">10H30 - 12H30</button></a></li>
 <li><a><button type="button">10H30 - 12H30</button></a></li>
</ul>

<ul>
 <li><a><button type="button">14H00 - 16H00</button></a></li>
 <li><a><button type="button">14H00 - 16H00</button></a></li>
 <li><a><button type="button">14H00 - 16H00</button></a></li>
 <li><a><button type="button">14H00 - 16H00</button></a></li>
 <li><a><button type="button">14H00 - 16H00</button></a></li>
 
<ul>
 <li  style="margin-bottom: 10px"><a><button selected="selected" type="button">16H15 - 18H15</button></a></li>
 <li  style="margin-bottom: 10px"><a><button type="button">16H15 - 18H15</button></a></li>
 <li  style="margin-bottom: 10px"><a><button type="button">16H15 - 18H15</button></a></li>
 <li  style="margin-bottom: 10px"><a><button type="button">16H15 - 18H15</button></a></li>
 <li  style="margin-bottom: 10px"><a><button type="button">16H15 - 18H15</button></a></li>
</ul>
     <button class="ui-btn ui-corner-all">Enregistrement</button>

 
    
    </body>
</html>