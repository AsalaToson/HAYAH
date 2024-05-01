<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;


use App\AccountHelper;

class AccountTest extends TestCase {

    /** @test */
    function it_can_find_profit(){
        $profit = (new \App\AccountHelper)->findProfit(100);

        $this->assertEquals(10, $profit);

        $this->assertLessThan(100, $profit);
    }

}
