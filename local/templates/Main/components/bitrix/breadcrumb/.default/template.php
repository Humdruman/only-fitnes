<?php


/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;


if(empty($arResult)) {
    return "";
}

$strReturn = '';

$strReturn .=  "<div class='section'>";
$strReturn .= '<div class="breadcrumb">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0? '<i class="fa fa-angle-right"></i>' : '');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<div class="bx-breadcrumb-item" id="bx_breadcrumb_'.$index.'" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				'.$arrow.'
				<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="item">
					<span itemprop="name">'.$title.'</span>
				</a>
				<meta itemprop="position" content="'.($index + 1).'" />
			</div>';
	}
	else
	{
		$strReturn .= '
			<div class="bx-breadcrumb-item">
				>
				<span>'.$title.'</span>
			</div>';
	}
}

$strReturn .= '<div style="clear:both"></div></div>';
$strReturn .= '</div>';

return $strReturn;
