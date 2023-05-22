<x-layout title="ゆでたまごタイマー | timer"> 
    <x-slot name="script">
        <script src="/js/timer.js" defer></script>
    </x-slot> 

    <x-container>
        <x-header>
        </x-header>
        <div class="text-center">
            <input type="hidden" value="{{ $boilMiliSec }}">
            <!-- テスト用 -->
            <!-- <input type="hidden" value="4000"> -->
            <p class="text-8xl mb-4"><span id="timer-min"></span>:<span id="timer-sec"></span></p>
            <button id="btn-timer" class="w-20 mb-12"><img src="images/icon_stopbtn.png" alt="ストップボタン"></button>
            <p class="text-gray-400 mb-2">「{{ $eggName }}」 の個数カウンターが +{{ $eggNum }} され、<span class="num-counter">{{ $newNumCounter }}</span> 個になりました！</p>
            <button type="button" class="border-2 rounded-lg px-4 py-2 bg-gray-400 hover:bg-gray-500">ミュートを解除する</button>
        </div>
    </x-container>
</x-layout>