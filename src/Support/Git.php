<?php
 
/**
 * Part of the Deeployer package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Deeployer
 * @version    1.0.0
 * @author     Antonio Carlos Ribeiro @ PragmaRX
 * @license    BSD License (3-clause)
 * @copyright  (c) 2013, PragmaRX
 * @link       http://pragmarx.com
 */

namespace PragmaRX\Deeployer\Support;

use GitWrapper\GitWrapper;

class Git extends GitWrapper {

	private $workingCopy;

	public function setDirectory($directory)
	{
		$this->workingCopy = $this->workingCopy($directory);
	}

	public function pull($remote, $branch)
	{
		$this->workingCopy->pull($remote, $branch);
	}
}
