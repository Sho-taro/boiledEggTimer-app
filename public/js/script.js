// モーダルウィンドウ
const imgs = document.querySelectorAll('.gallery-img img');

const mask = document.querySelector('#mask');
const modal = document.querySelector('#modal');
const modalImg = document.querySelector('.modal-desc img')
const btnBack = document.querySelector('#btn-back');
const btnNext = document.querySelector('#btn-next');

// アニメーションの設定
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

// 画像がクリックされたときのアニメーション
imgs.forEach((img) => {
    img.addEventListener('click', (event)=> {
        // モーダルウィンドウを表示
        mask.animate(showKeyframes, options);
        modal.animate(showKeyframes, options);

        // クリックされた画像を表示
        modalImg.src = event.target.src;
        modalImg.alt = event.target.alt;
    })
})

// 戻るボタンがクリックされたら、モーダルウィンドウを閉じる
btnBack.addEventListener('click', () => {
    modal.animate(hideKeyframes, options);
    mask.animate(hideKeyframes, options);
})

// マスク部分がクリックされたら、モーダルウィンドウを閉じる
mask.addEventListener('click', () => {
    btnBack.click();
})


