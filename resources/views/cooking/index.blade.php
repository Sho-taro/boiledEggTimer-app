<x-layout title="ゆでたまごタイマー | cooking">
    <x-slot name="script">
        <script src="/js/cooking.js" defer></script>
    </x-slot>

    <x-container>
        <x-header>
        </x-header>
        
        <!-- 選択されたゆでたまごの情報を表示 -->
        <div class="flex justify-center mb-8">
            <div class="w-4/12">
                <img src="{{ $imgPath }}" alt="{{ $eggName }}" class="rounded-lg object-cover drop-shadow-md">
                <h2 class="text-xl">{{ $eggName }}</h2>
            </div>
            <div class="boilMiliSec py-8 sm:py-12 pl-4">
                <input type="hidden" value="{{ $boilMiliSec }}">
                <p class="text-xl">ゆで時間</p>
                <p class="text-2xl"><span class="disp-min"></span>分<span class="disp-sec"></span>秒</p>
            </div>
        </div>


        <!-- 調理方法を表示 -->
        <section>
            <h2 class="text-xl text-center bg-yellow-100 w-11/12 mx-auto rounded-lg mb-12">以下の手順に従って調理し、<br>タイマーをスタートして下さい<br>↓↓↓</h2>
            <h3 class="inline-block sm:ml-8 text-xl underline mb-8">調理手順（全５手順）</h2>
            <div class="w-9/10 sm:w-4/5 mx-auto">
                <div class="flex justify-center pb-4 mb-4 border-b">
                    <ol class="list-decimal w-6/12">
                        <li value="1">鍋に水をたっぷり入れる（卵全体がしっかりと浸かるくらい）</li>
                    </ol>
                    <img src="https://placehold.jp/180x160.png" alt="調理画像" class="w-5/12 ml-4 rounded-lg object-cover drop-shadow-md">
                </div>
                <div class="flex justify-center mt-6 pb-4 mb-4 border-b">
                    <ol class="list-decimal w-6/12">
                        <!-- value="数字" とすることで、リストマーカーの数字の番号を指定できる -->
                        <li value="2">塩とお酢をそれぞれ小さじ１杯ずつ加える</li>
                    </ol>
                    <img src="https://placehold.jp/180x160.png" alt="調理画像" class="w-5/12 ml-4 rounded-lg object-cover drop-shadow-md">
                </div>
                <div class="flex justify-center mt-6 pb-4 mb-4 border-b">
                    <ol class="list-decimal w-6/12">
                        <li value="3">火にかけて沸騰させる</li>
                    </ol>
                    <img src="https://placehold.jp/180x160.png" alt="調理画像" class="w-5/12 ml-4 rounded-lg object-cover drop-shadow-md">
                </div>
                <div class="flex justify-center mt-6 pb-4 mb-4 border-b">
                    <ol class="list-decimal w-6/12">
                        <li value="4">沸騰したら、おたまなどを使って卵をそっと鍋に入れる</li>
                    </ol>
                    <img src="https://placehold.jp/180x160.png" alt="調理画像" class="w-5/12 ml-4 rounded-lg object-cover drop-shadow-md">
                </div>
                <div class="flex justify-center mt-6 pb-6 mb-4 border-b-4">
                    <ol class="list-decimal w-6/12">
                        <li value="5">下の「タイマースタート」ボタンを押す</li>
                    </ol>
                    <img src="https://placehold.jp/180x160.png" alt="調理画像" class="w-5/12 ml-4 rounded-lg object-cover drop-shadow-md">
                </div>
                <button type="button" id="btn-start" class="block mx-auto text-2xl text-center bg-yellow-200 hover:bg-yellow-300 rounded-full w-44 h-44 drop-shadow-lg mb-8">タイマー<br>スタート</button>
            </div>
        </section>

    </x-container>

    <!-- モーダル画面 -->
    <section id="modal-cooking" class="bg-white fixed inset-0 z-50 w-10/12 max-w-sm max-h-1/4 mt-64 mx-auto pt-12 rounded-lg text-center opacity-0 invisible">
        <div class="relative h-full">
            <div class="w-4/5 mx-auto">
                <p>別ページに移動し、タイマーが自動でスタートします。</p>
            </div>
            <div class="absolute bottom-0 w-full border-t flex justify-around">
                <button class="btn-back block px-20 py-4 border-r" type="button" style="color: skyblue">戻る</button>
                <button class="btn-next block px-20 py-4" type="button" style="color: skyblue"><a href="{{ route('timer.index') }}">OK!</a></button>
            </div>
        </div>
    </section>

    <!-- マスク画面 -->
    <div id="mask-cooking" class="bg-black bg-opacity-80 fixed inset-0 z-40 opacity-0 invisible"></div>

</x-layout>
