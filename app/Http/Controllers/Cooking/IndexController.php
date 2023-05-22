<?php
namespace App\Http\Controllers\Cooking;

// require_once '/php/eggInfo.php';

use App\Http\Controllers\Controller;
use App\Http\Requests\Cooking\CookingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(CookingRequest $request)
    {
        $eggType = $request->eggType();
        $eggNum = $request->eggNum();

        // 選択されたタイプのゆでたまごの情報をDBから取得
        $eggInfo = DB::table('egginfo')->where('eggType', $eggType)->first();

        // 各カラムの値を取得
        $eggType = $eggInfo->eggType;
        $eggName = $eggInfo->name;
        $imgPath = $eggInfo->imgPath;
        $boilMiliSec = $eggInfo->boilMiliSec;
        $numCounter = (int)$eggInfo->numCounter;

        // セッションにデータを保存
        $request->session()->put('eggType', $eggType);
        $request->session()->put('eggNum', $eggNum);
        $request->session()->put('eggName', $eggName);
        $request->session()->put('imgPath', $imgPath);
        $request->session()->put('boilMiliSec', $boilMiliSec);
        $request->session()->put('numCounter', $numCounter);

        // セッション変数の全データを表示
        // dd($request->session()->all());
        
        // $eggName = $eggInfo["{$eggType}"]['name'];
        // $imgPath = $eggInfo["{$eggtype}"]['img_path'];
        // $boilMiliSec = $eggInfo["{$eggType}"]['boil_mili_sec'];

        return view('cooking.index')->with('eggName', $eggName)->with('imgPath', $imgPath)->with('boilMiliSec', $boilMiliSec);
    }
}
