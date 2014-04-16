<?php
/*    Please retain this copyright header in all versions of the software
 * 
 *    Copyright (C) 2014  Josef A. Puckl | eComStyle.de
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program.  If not, see {http://www.gnu.org/licenses/}. 
 */
$aModule = array(
    'id'           => 'ecs_light2ox',
    'title'        => '<strong style="color:#04B431;">e</strong><strong>ComStyle.de</strong>:  <i>Lightbox2OXID</i>',
    'description'  => 'Die moderne Lightbox2 ersetzt den OXID - Bilderzoom.
                       <br><iframe frameborder="no" width="600px" height="400px" src="https://ssl-account.com/incl.oxidtheme.de/gratis.html"></iframe>',
    'version'      => '1.0',
    'thumbnail'    => 'ecomstyle.png',
    'author'       => '<strong style="font-size: 17px;color:#04B431;">e</strong><strong style="font-size: 16px;">ComStyle.de</strong>',
    'email'          => 'info@ecomstyle.de',
    'url'          => 'http://ecomstyle.de',
	 'extend' => array(
	 ),
	 'blocks' => array(
	      array('template' => 'layout/base.tpl', 'block'=>'base_js', 'file'=>'base_js.tpl'),
          array('template' => 'layout/base.tpl', 'block'=>'base_style', 'file'=>'base_style.tpl'),	 
		  array('template' => 'page/details/inc/productmain.tpl', 'block' => 'details_productmain_zoom', 'file' => 'details_productmain_zoom.tpl'),
		  array('template' => 'page/details/inc/productmain.tpl', 'block' => 'details_productmain_morepics', 'file' => 'details_productmain_morepics.tpl'),
	 ), 
);