<?php
/*
 * @copyright   Copyright (C) 2021 TeemIp
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

class AttributeAliasList extends AttributeText
{
	public function GetValidationPattern()
	{
		// By default, pattern matches a domain name per line
		//   Right regex with atomic grouping: ^(? >(\w[\w-]*(\.\w[\w-]*)*\.?)+(((\R|\n)\w[\w-]*(\.\w[\w-]*)*\.?))*))$ (no space between ? and >)
		//   \R works for PHP preg_match while \n works for javascript
		//   Working regex:
		return('^(?=((\w[\w-]*(\.\w[\w-]*)*\.?)+(((\R|\n)(\w[\w-]*(\.\w[\w-]*)*\.?))*)))\1$');
	}
}
