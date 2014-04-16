[{*
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
*}]
[{if $oView->morePics()}]
<div class="otherPictures" id="morePicsContainer">
    <div class="shadowLine"></div>
    <ul class="clear">
    [{foreach from=$oView->getIcons() key=iPicNr item=oArtIcon name=sMorePics}]
    [{if $iPicNr !=1 }]
        <li>
            <a data-lightbox="lightbox" class="cloud-zoom-gallery" href="[{$oPictureProduct->getMasterZoomPictureUrl($iPicNr)}]" title="[{$oPictureProduct->oxarticles__oxtitle->value|strip_tags}] [{$oPictureProduct->oxarticles__oxvarselect->value|strip_tags}]">
                <span class="marker"><img src="[{$oViewConf->getImageUrl('marker.png')}]" alt=""></span>
                <span class="artIcon"><img src="[{$oPictureProduct->getIconUrl($iPicNr)}]" alt=""></span>
            </a>
        </li>
    [{/if}]
    [{/foreach}]
    </ul>
    </div>
[{/if}]