const btnTimer = document.querySelector('#btn-timer');
const timerMin = document.querySelector('#timer-min');
const timerSec = document.querySelector('#timer-sec');
const boilMiliSec = Number(document.querySelector('.feature-cookinginfo input[type="hidden"]').value) + 300;

const dispMin = document.querySelector('span.disp-min');  // 画面上部の時間表示
const dispSec = document.querySelector('span.disp-sec');

// ゆで時間（初期値）をタイマーに表示
// timerMin.innerHTML = String(Math.floor(boilMiliSec/1000/60)%60).padStart(2, '0');
// timerSec.innerHTML = String(Math.floor(boilMiliSec/1000)%60).padStart(2, '0');

// ゆで時間を画面上部に表示
dispMin.innerHTML = String(Math.floor(boilMiliSec/1000/60)%60);
dispSec.innerHTML = String(Math.floor(boilMiliSec/1000)%60).padStart(2, '0');

let now = new Date();
let finTime = null;     // タイマーが終了する時刻（unixタイムスタンプ）
let diffTime = null;    // タイマー終了までの残り時間（ミリ秒）
let elapsedTime = 0;    // 経過時間
let sumElapsedTime = 0;   // 総経過時間
let id = null;
const music = new Audio('musics/alarm1.mp3');  // アラーム音
let timerState = 'stopped';   //タイマーのステート
const btnTimerImg = document.querySelector('#btn-timer img');  // タイマーボタンの画像


// countDown関数の定義
const countDown = () => {
    let renow = new Date();
    diffTime = finTime - renow.getTime();
    elapsedTime = renow.getTime() - now.getTime();

     // 残り時間をタイマーに表示
    timerMin.innerHTML = String(Math.floor(diffTime/1000/60)%60).padStart(2, '0');
    timerSec.innerHTML = String(Math.floor(diffTime/1000)%60).padStart(2, '0');

    // 残り時間が1000ミリ秒以上なら、setTimeoutを継続。そうでなければ、タイマーの表示を0秒にしてアラームを再生して終了。
    if (diffTime >= 1000) {
        id = setTimeout(countDown, 1000);
    } else {
        clearTimeout(id);
        timerMin.innerHTML = '00';
        timerSec.innerHTML = '00';

        // アラームの再生
        music.play();
        music.volume = 0.6;
        music.loop = true;
    }
};

// btnTimerがクリックされたら、タイマーをスタート
btnTimer.addEventListener('click', ()=> {
    // 1回目にスタートボタンを押したとき
    if (id === null) {
        // タイマーをスタートする処理
        now = new Date();
        finTime = now.getTime() + boilMiliSec;
        timerState = 'started'
        btnTimerImg.src = 'images/icon_stopbtn.png';
        countDown();
    }
    // スタートボタンを押すのが2回目以降で、かつ、タイマーが終了していないとき
     else if (timerMin.innerHTML !== '00' && timerSec.innerHTML !== '00'){
        // タイマーが動いているなら
        if (timerState === 'started') {
            // タイマーを一時停止する処理
            clearTimeout(id);
            timerState = 'stopped';
            btnTimerImg.src = 'images/icon_startbtn.png';
        // タイマーが一時停止しているなら
        } else if (timerState === 'stopped') {
            // タイマーを再開する処理
            now = new Date();
            sumElapsedTime += elapsedTime;
            finTime = now.getTime() + boilMiliSec - sumElapsedTime;
            timerState = 'started';
            btnTimerImg.src = 'images/icon_stopbtn.png';
            countDown();
        }
    }
    // スタートボタンを押すのが2回目以降で、かつ、タイマーが終了しているとき
     else if (timerMin.innerHTML === '00' && timerSec.innerHTML === '00') {
        // アラームを止める処理
        music.pause();
        btnTimerImg.src = 'images/icon_startbtn.png';
    }
});