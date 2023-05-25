<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Services\EggInfoService;
// use App\Models\EggInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, EggInfoService $eggInfoService)
    {
        // $eggInfo = EggInfo::all();
        // $numCounters = $eggInfo->numCounter;

        // DBからnumCounterカラムの値を取得
        // $numCounters = DB::table('egginfo')->pluck('numCounter');
        $numCounters = $eggInfoService->getNumCounter();
        $pad_numCounters = [];
        foreach ($numCounters as $numCounter) {
            $pad_numCounters[] = str_pad((string)$numCounter, 5, '0', STR_PAD_LEFT);
        }

        return view('home.index')->with('numCounters', $pad_numCounters);
    }
}
