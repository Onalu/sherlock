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
 * @method \sherlock\components\queries\TopChildren type() type(string $value)
 * @method \sherlock\components\queries\TopChildren query() query(\sherlock\components\QueryInterface $value)
 * @method \sherlock\components\queries\TopChildren score() score(string $value) Default: "max"
 * @method \sherlock\components\queries\TopChildren factor() factor(int $value) Default: 5
 * @method \sherlock\components\queries\TopChildren incremental_factor() incremental_factor(int $value) Default: 5

 */
class TopChildren extends \sherlock\components\BaseComponent implements \sherlock\components\QueryInterface
{
	public function __construct($hashMap = null)
	{
		$this->params['score'] = "max";
		$this->params['factor'] = 5;
		$this->params['incremental_factor'] = 5;

		parent::__construct($hashMap);
	}
	
	public function toArray()
	{
		$ret = array (
  'top_children' => 
  array (
    'type' => $this->params["type"],
    'query' => $this->params["query"]->toArray(),
    'score' => $this->params["score"],
    'factor' => $this->params["factor"],
    'incremental_factor' => $this->params["incremental_factor"],
  ),
);
		return $ret;
	}

}

?>