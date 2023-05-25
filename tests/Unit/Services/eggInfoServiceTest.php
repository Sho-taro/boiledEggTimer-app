<?php

namespace Tests\Unit;

use App\Services\EggInfoService;
use Mockery;
use PHPUnit\Framework\TestCase;

class eggInfoServiceTest extends TestCase
{
    /**
     * getNumCounterメソッドのユニットテスト
     */
    public function test_get_num_counter()
    {
        $eggInfoService = new EggInfoService();

        $mock = Mockery::mock('alias:Illuminate\Support\Facades\DB');
        $mock->shouldReceive('table->pluck')->andReturn((array)[2, 7, 9, 4]);

        $result = $eggInfoService->getNumCounter();
        $this->assertContainsOnly('integer', $result);
    }

    /**
     * getEggInfoメソッドのユニットテスト
     */
    public function test_get_egg_info()
    {
        $eggInfoService = new EggInfoService();

        $mock = Mockery::mock('alias:App\Models\EggInfo');
        $mock->shouldReceive('where->firstOrFail')->andReturn((object)[
            'eggType' => 'type0',
            'eggName' => '半熟（とろ〜り）',
            'boilMiliSec' => 390000,
            'numCounter' => 12,
        ]);

        $result = $eggInfoService->getEggInfo('type0');
        $this->assertNotNull($result);

    }
}
