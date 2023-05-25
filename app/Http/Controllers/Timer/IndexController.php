<?php

namespace App\Http\Controllers\Timer;

use App\Http\Controllers\Controller;
use App\Services\EggInfoService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, EggInfoService $eggInfoService)
    {
        // セッション変数からデータを取得
        $eggType = $request->session()->get('eggType');  // ユーザーに選択されたtype
        $eggNum = $request->session()->get('eggNum');   // ユーザーに選択された個数
        $eggName = $request->session()->get('eggName');
        // $imgPath = $request->session()->get('imgPath');
        $boilMiliSec = $request->session()->get('boilMiliSec');
        $numCounter = $request->session()->get('numCounter');

        // 個数カウンターの数字を更新する処理
        $newNumCounter = $numCounter + $eggNum;
        $eggInfo = $eggInfoService->getEggInfo($eggType);
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
