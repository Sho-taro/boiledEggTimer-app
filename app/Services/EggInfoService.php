<?php
namespace App\Services;

use App\Models\EggInfo;
use Illuminate\Support\Facades\DB;


class EggInfoService
{

    /**
     * データベースからnumCounterカラムの値を取得する
     * 
     * @return array
     */
    public function getNumCounter()
    {
        return DB::table('egginfo')->pluck('numCounter');
    }

    /**
     * 特定のタイプのゆでたまごの情報をDBから取得する
     * @param string $eggtype ゆでたまごのタイプ
     * @return object 
     */
    public function getEggInfo($eggType)
    {
        return EggInfo::where('eggType', $eggType)->firstOrFail();
    }
}