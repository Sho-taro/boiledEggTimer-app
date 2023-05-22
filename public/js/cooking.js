// 画面表示
const boilMiliSec = Number(document.querySelector('.boilMiliSec input[type="hidden"]').value) + 300;
const dispMin = document.querySelector('span.disp-min');  // 画面上部の時間表示
const dispSec = document.querySelector('span.disp-sec');

// ゆで時間を画面上部に表示
dispMin.innerHTML = String(Math.floor(boilMiliSec/1000/60)%60);
dispSec.innerHTML = String(Math.floor(boilMiliSec/1000)%60).padStart(2, '0');



// モーダルウィンドウ

const modal = document.querySelector('#modal-cooking');
const mask = document.querySelector('#mask-cooking');
const startBtn = document.querySelector('#btn-start');
const btnBack = document.querySelector('button.btn-back');

// アニメーション内容の定義
const showKeyframes = {
    opacity: [0, 1],
    visibility: 'visible',
}
const hideKeyframes = {
    opacity: [1, 0],
    visibility: 'hidden',
}
const options = {
    duration: 400,
    easing: 'ease',
    fill: 'forwards',
}


// タイマースタートのボタンが押されたら、確認用モーダル画面を表示
startBtn.addEventListener('click', () => {
    mask.animate(showKeyframes, options);
    modal.animate(showKeyframes, options);
})

// 戻るボタンが押されたら、モーダル画面を閉じる
btnBack.addEventListener('click', () => {
    mask.animate(hideKeyframes, options);
    modal.animate(hideKeyframes, options);
})

// マスク部分がクリックされたら、モーダル画面を閉じる
mask.addEventListener('click', () => {
    btnBack.click();
})