<?php
/**
 * User: Zachary Tong
 * Date: 2013-02-16
 * Time: 09:24 PM
 * Auto-generated by "generate.php"
 */
namespace sherlock\components\queries;

use sherlock\components;
use sherlock\common\exceptions;


/**
 * @method \sherlock\components\queries\CustomFiltersScore query() query(\sherlock\components\QueryInterface $value)
 * @method \sherlock\components\queries\CustomFiltersScore filters() filters(\sherlock\components\FilterInterface $value)
 * @method \sherlock\components\queries\CustomFiltersScore score_mode() score_mode(string $value) Default: "first"
 * @method \sherlock\components\queries\CustomFiltersScore max_boost() max_boost(float $value) Default: 10

 */
class CustomFiltersScore extends \sherlock\components\BaseComponent implements \sherlock\components\QueryInterface
{
	public function __construct($hashMap = null)
	{
		$this->params['score_mode'] = "first";
		$this->params['max_boost'] = 10;

		parent::__construct($hashMap);
	}
	
	public function toArray()
	{
		$ret = array (
  'custom_filters_score' => 
  array (
    'query' => $this->params["query"]->toArray(),
    'filters' => $this->params["filters"]->toArray(),
    'score_mode' => $this->params["score_mode"],
    'max_boost' => $this->params["max_boost"],
  ),
);
		return $ret;
	}

}

?>