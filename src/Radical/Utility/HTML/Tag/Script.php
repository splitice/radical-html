<?php
namespace Radical\Utility\HTML\Tag;

use Radical\Utility\HTML\Element;

class Script extends Element {
	function __construct($src = null,$type='text/javascript'){
		parent::__construct('script',array('src'=>$src,'type'=>$type));
		$this->singleClose = false;
	}
}