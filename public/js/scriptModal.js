// ゆでたまごの情報
const descType0 = `
説明説明説明説明。<br>改行からの説明説明、説明。
`;
const descType1 = `
`;
const descType2 = `
`;
const descType3 = `
`;
const descType4 = `
`;


const eggLists = [
    ['type0', '半熟（とろ〜り）', descType0],
    ['type1', '半熟（とろっ）', descType1],
    ['type2', '半熟（しっとり）', descType2],
    ['type3', 'ほぼ完熟', descType3],
    ['type4', 'しっかり完熟', descType4]
];


// モーダルウィンドウ
const imgs = document.querySelectorAll('.gallery-img img');

const mask = document.querySelector('#mask');
const modal = document.querySelector('#modal');
const modalImg = document.querySelector('.modal-desc img');
const modalEggName = document.querySelector('.modal-desc h2');
const modalEggDesc = document.querySelector('.modal-desc p');
const eggType = document.querySelector('input[name="egg_type"]');  // フォーム送信用
const eggDesc = document.querySelector('.egg-desc');
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

        // クリックされたゆでたまごの情報を表示
        modalImg.src = event.target.src;
        modalImg.alt = event.target.alt;
        switch (event.target.name) {
            case 'type0':
                modalEggName.innerHTML = eggLists[0][1];
                modalEggDesc.innerHTML = eggLists[0][2];
                break;
            case 'type1':
                modalEggName.innerHTML = eggLists[1][1];
                modalEggDesc.innerHTML = eggLists[1][2];
                break;
            case 'type2':
                modalEggName.innerHTML = eggLists[2][1];
                modalEggDesc.innerHTML = eggLists[2][2];
                break;
            case 'type3':
                modalEggName.innerHTML = eggLists[3][1];
                modalEggDesc.innerHTML = eggLists[3][2];
                break;
            case 'type4':
                modalEggName.innerHTML = eggLists[4][1];
                modalEggDesc.innerHTML = eggLists[4][2];
                break;
        }
        eggType.value = event.target.name;   // これはフォーム送信用

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