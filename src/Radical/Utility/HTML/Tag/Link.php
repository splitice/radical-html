<?php
namespace Radical\Utility\HTML\Tag;

use Radical\Utility\HTML\Element;

class Link extends Element {
	function __construct($href,$rel='stylesheet',$media=null){
		parent::__construct('link',array('rel'=>$rel,'href'=>$href,'media'=>$media));
	}
}