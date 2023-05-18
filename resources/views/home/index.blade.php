<x-layout title="ゆでたまごタイマー | home">
    <!-- header -->
    <header>
        <div class=logo-header>
            <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 24px; height: 24px; opacity: 1;" xml:space="preserve">
                <style type="text/css">
                    .st0{fill:#4B4B4B;}
                </style>
                <g>
                    <path class="st0" d="M431.92,170.5c-16.544-50.595-43.28-92.728-74.324-122.61c-15.544-14.941-32.177-26.824-49.316-35.059
                        C291.147,4.603,273.456,0.008,256,0c-11.632,0-23.39,2.052-34.993,5.846c-20.308,6.661-40.206,18.617-58.742,34.83
                        c-27.794,24.332-52.596,58.302-70.574,99.339c-17.97,41.037-29.073,89.184-29.073,141.772c0,39.949,5.948,74.382,16.544,103.61
                        c7.941,21.92,18.5,40.89,31.044,56.956c18.802,24.11,42.029,41.618,67.14,52.985C202.463,506.714,229.426,512,256,512
                        c23.618,0,47.544-4.176,70.213-13.096c17-6.69,33.287-16.051,48.11-28.271c22.243-18.331,41.14-43.11,54.332-74.522
                        c13.198-31.412,20.728-69.382,20.728-114.324C449.382,241.72,442.934,204.228,431.92,170.5z M408.596,376.611
                        c-7.074,19.521-16.324,36.036-27.132,49.882c-16.206,20.757-35.926,35.596-57.448,45.353c-21.515,9.75-44.86,14.368-68.015,14.368
                        c-20.581,0-41.316-3.647-60.78-11.302c-14.595-5.75-28.485-13.735-41.147-24.176c-18.978-15.662-35.265-36.824-46.956-64.611
                        c-11.677-27.786-18.714-62.257-18.714-104.338c0-37.294,6-72.088,16.184-103.28c15.265-46.787,40.03-85.456,67.692-112.037
                        c13.816-13.294,28.338-23.551,42.603-30.397c14.279-6.86,28.235-10.294,41.117-10.287c8.588,0,17.647,1.515,26.97,4.566
                        c16.309,5.324,33.419,15.397,49.787,29.728c24.558,21.471,47.382,52.448,63.934,90.272c16.566,37.838,26.905,82.485,26.905,131.434
                        C423.596,319.184,418.029,350.588,408.596,376.611z" style="fill: rgb(255, 199, 18);"></path>
                        <path class="st0" d="M256,211.802c-58.993,0-106.824,47.823-106.824,106.816S197.007,425.441,256,425.441
                        s106.816-47.831,106.816-106.824S314.993,211.802,256,211.802z" style="fill: rgb(255, 199, 18);"></path>
                </g>
            </svg>
            <h1>ゆでたまごメーカー</h1>
        </div>
        <div class="btn-header">
            <button type="button">
                <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 24px; height: 24px; opacity: 1;" xml:space="preserve">
                    <style type="text/css">
                        .st0{fill:#4B4B4B;}
                    </style>
                    <g>
                        <path class="st0" d="M256,0C114.618,0,0,114.618,0,256c0,141.383,114.618,256,256,256c141.383,0,256-114.617,256-256
                            C512,114.618,397.383,0,256,0z M373.641,366.297H138.352v-36.766h235.289V366.297z M373.641,274.383H138.352v-36.758h235.289
                            V274.383z M373.641,182.469H138.352v-36.758h235.289V182.469z" style="fill: rgb(75, 75, 75);">
                        </path>
                    </g>
                </svg>
            </button>
        </div>
    </header>
    
    <!-- gallery -->
    <section class="gallery">
        <div class="gallery-desc">
                <h2>お好みの固さを選択して下さい</h2>
                <p>(画像をクリック)</p>
            </div>
            <div class="gallery-container container">
                <div class="flex-container">
                    <div class="gallery-img">
                        <img src="/images/egg0.jpeg" alt="半熟(とろ〜り)" name="type0">
                    </div>
                <div class="img-text">
                    <h3>半熟(とろ〜り)</h3>
                </div>
            </div>
            <div class="flex-container">
                <div class="gallery-img">
                    <img src="/images/egg1.jpeg" alt="半熟(とろっ)" name="type1">
                </div>
                <div class="img-text">
                    <h3>半熟(とろっ)</h3>
                </div>
            </div>
            <div class="flex-container">
                <div class="gallery-img">
                    <img src="/images/egg2.jpeg" alt="半熟(しっとり)" name="type2">
                </div>
                <div class="img-text">
                    <h3>半熟(しっとり)</h3>
                </div>
            </div>
            <div class="flex-container">
                <div class="gallery-img">
                    <img src="/images/egg3.jpeg" alt="ほぼ完熟" name="type3">
                </div>
                <div class="img-text">
                    <h3>ほぼ完熟</h3>
                </div>
            </div>
        </div>
    </section>
    
    <!-- モーダルウィンドウ -->
    <section id="modal">
        <div class="modal-desc">
            <img src="" alt="">
            <h2>ゆでたまご</h2>
            <p>説明説明説明</p>
        </div>
        <form action="{{ route('cooking.index') }}" method="POST">
            @csrf
            <input type="hidden" name="egg_type" value="type1">
            <label for="egg_num">作る個数: </label>
            <select name="egg_num" id="egg_num">
                <option value="unselected" selected>選択して下さい</option>
                <option value="1">1個</option>
                <option value="2">2個</option>
                <option value="3">3個</option>
                <option value="4">4個</option>
                <option value="5">5個</option>
                <option value="6">6個</option>
            </select>
            <div class="botton-container">
                <button type="button" id="btn-back">戻る</button>
                <button type="submit" id="btn-next" name="operation" value="send">決定</button>
            </div>
        </form>
    </section>
    <div id="mask"></div>
</x-layout>