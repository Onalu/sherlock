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
 * @method \sherlock\components\queries\Nested path() path(string $value)
 * @method \sherlock\components\queries\Nested score_mode() score_mode(string $value) Default: "avg"
 * @method \sherlock\components\queries\Nested query() query(\sherlock\components\QueryInterface $value)

 */
class Nested extends \sherlock\components\BaseComponent implements \sherlock\components\QueryInterface
{
	public function __construct($hashMap = null)
	{
		$this->params['score_mode'] = "avg";

		parent::__construct($hashMap);
	}
	
	public function toArray()
	{
		$ret = array (
  'nested' => 
  array (
    'path' => $this->params["path"],
    'score_mode' => $this->params["score_mode"],
    'query' => $this->params["query"]->toArray(),
  ),
);
		return $ret;
	}

}

?>