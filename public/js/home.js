// モーダルウィンドウ
const imgs = document.querySelectorAll('.gallery-img');

const mask = document.querySelector('#mask');
const modal = document.querySelector('#modal');
const modalImg = document.querySelector('.modal-desc img');
const modalEggName = document.querySelector('.modal-desc h3');
const eggType = document.querySelector('input[name="egg_type"]');
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

        // クリックされたゆでたまごの画像を表示
        modalImg.src = event.target.src;
        modalImg.alt = event.target.alt;

        // クリックされたゆでたまごの種類を表示
        switch (event.target.name) {
            case 'type0':
                modalEggName.innerHTML = '半熟(とろ〜り)';
                break;
            case 'type1':
                modalEggName.innerHTML = '半熟(とろっ)';
                break;
            case 'type2':
                modalEggName.innerHTML = '半熟（しっとり）';
                break;
            case 'type3':
                modalEggName.innerHTML = 'ほぼ完熟';
                break;
            case 'type4':
                modalEggName.innerHTML = 'しっかり完熟';
                break;
        }

        //hiddenフォームのegg_typeの値を変更
        eggType.value = event.target.name;

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