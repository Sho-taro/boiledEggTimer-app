<?php

namespace App\Http\Controllers\Timer;

use App\Http\Controllers\Controller;
use App\Models\EggInfo;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // セッション変数からデータを取得
        $eggType = $request->session()->get('eggType');
        $eggNum = $request->session()->get('eggNum');
        $eggName = $request->session()->get('eggName');
        // $imgPath = $request->session()->get('imgPath');
        $boilMiliSec = $request->session()->get('boilMiliSec');
        $numCounter = $request->session()->get('numCounter');

        // 個数カウンターに数字を追加する処理
        $eggInfo = EggInfo::where('name', $eggName)->firstOrFail();
        $newNumCounter = $numCounter + $eggNum;
        $eggInfo->numCounter = $newNumCounter;
        $eggInfo->save();

        $newNumCounter = str_pad((string)$newNumCounter, 5, '0', STR_PAD_LEFT);

        return view('timer.index')
            ->with('eggNum', $eggNum)
            ->with('eggName', $eggName)
            ->with('boilMiliSec', $boilMiliSec)
            ->with('newNumCounter', $newNumCounter);
    }
}
