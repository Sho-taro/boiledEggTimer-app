<x-layout title="ゆでたまごタイマー | timer">  
    <div class="timer-container">
        <input type="text" value="{{ $boilMiliSec }}">
        <p><span id="timer-min"></span>:<span id="timer-sec"></span></p>
        <button id="btn-timer"><img src="images/icon_stopbtn.png" alt="ストップボタン"></button>
    </div>
    <p>{{ $eggName }} の個数カウンターが +{{ $eggNum }} され、{{ $newNumCounter }} 個になりました！</p>
</x-layout>