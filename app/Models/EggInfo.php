<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EggInfo extends Model
{
    use HasFactory;

    // テーブルの紐付け
    protected $table = 'egginfo';

    // 主キーの宣言
    protected $primaryKey ='eggType';

    // 主キーが増分整数ではないことを宣言
    public $incrementing = false;

    // 主キーがint型でないことを宣言
    protected $keyType = 'string';

    // created_at, updated_atカラムが不要なことを宣言
    public $timestamps = false;
}
