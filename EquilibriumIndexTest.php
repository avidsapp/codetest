<?php

require_once("./EquilibriumIndex.php");

# Refactored "PHPUnit_Framework_TestCase" for phpunit v6 namespaced change
use PHPUnit\Framework\TestCase;

class EquilibriumIndex extends TestCase
{
	public function testCase()
	{
		$arr = array(-7, 1, 5, 2, -4, 3, 0);
		$this->assertEquals(array(3,6), getEquilibriums($arr));

    # extra output for thoroughness
    echo "\nEquilibrium Indexes include:";
    foreach (getEquilibriums($arr) as $r) echo "\narr[$r]";
	}
}
