<x-layout title="ゆでたまごタイマー | home">
    <x-slot name="script">
        <script src="/js/home.js" defer></script>
    </x-slot>
    
    <x-container>
        <x-header>
        </x-header>
        <div class="text-center mb-10 text-xl">
            <h2>お好みの固さを選択して下さい</h2>
            <p>(画像をクリック)</p>
        </div>
        <div>
            <div class="mx-auto w-3/5 mb-8">
                <img class="gallery-img rounded-lg object-cover drop-shadow-md" src="/images/egg0.jpeg" alt="半熟(とろ〜り)" name="type0">
                <div class="text-center sm:flex sm:justify-between sm:items-center">
                    <h3 class="text-xl">半熟(とろ〜り)</h3>
                    <p class="text-sm text-gray-400"><span class="num-counter">[個数カウンター: {{ $numCounters[0] }} 個]</span></p>
                </div>
            </div>

            <div class="mx-auto w-3/5 mb-8">
                <img class="gallery-img rounded-lg object-cover drop-shadow-md" src="/images/egg1.jpeg" alt="半熟(とろっ)" name="type1">
                <div class="text-center sm:flex sm:justify-between sm:items-center">
                    <h3 class="text-xl">半熟(とろっ)</h3>
                    <p class="text-sm text-gray-400"><span class="num-counter">[個数カウンター: {{ $numCounters[1] }} 個]</span></p>
                </div>
            </div>

            <div class="mx-auto w-3/5 mb-8">
                <img class="gallery-img rounded-lg object-cover drop-shadow-md" src="/images/egg2.jpeg" alt="半熟(しっとり)" name="type2">
                <div class="text-center sm:flex sm:justify-between sm:items-center">
                    <h3 class="text-xl">半熟(しっとり)</h3>
                    <p class="text-sm text-gray-400"><span class="num-counter">[個数カウンター: {{ $numCounters[2] }} 個]</span></p>
                </div>
            </div>

            <div class="mx-auto w-3/5 mb-8">
                <img class="gallery-img rounded-lg object-cover drop-shadow-md" src="/images/egg3.jpeg" alt="ほぼ完熟" name="type3">
                <div class="text-center sm:flex sm:justify-between sm:items-center">
                    <h3 class="text-xl">ほぼ完熟</h3>
                    <p class="text-sm text-gray-400"><span class="num-counter">[個数カウンター: {{ $numCounters[3] }} 個]</span></p>
                </div>
            </div>
        </div>
    </x-container>
        
    <!-- モーダルウィンドウ -->
    <section id="modal" class="bg-white fixed inset-0 z-50 w-11/12 max-w-sm max-h-2/3 mt-32 mx-auto pt-12 rounded-lg text-center opacity-0 invisible">
        <div class="modal-desc w-4/5 mx-auto mb-6">
            <img class="rounded-lg object-cover drop-shadow-md" src="/images/egg3.jpeg" alt="ほぼ完熟">
            <h3 class="text-xl"></h2>
        </div>
        <form action="{{ route('cooking.index') }}" method="POST">
            @csrf
            <input type="hidden" name="egg_type" value="type3">
            <span>作る個数: </span>
            <select class="mb-8" name="egg_num" id="egg_num">
                <option value="unselected" selected>選択して下さい</option>
                <option value="1">1個</option>
                <option value="2">2個</option>
                <option value="3">3個</option>
                <option value="4">4個</option>
                <option value="5">5個</option>
                <option value="6">6個</option>
            </select>
            <div class="botton-container">
                <button class="text-white bg-gray-300 hover:bg-gray-400 focus:ring-gray-300 rounded-md py-1 drop-shadow-md w-1/6" type="button" id="btn-back">戻る</button>
                <button class="text-white bg-yellow-300 hover:bg-yellow-400 focus:ring-yellow-300 rounded-md py-1 drop-shadow-md w-1/3 inline-block ml-4" type="submit" id="btn-next">決定</button>
            </div>
            </form>
    </section>

    <div id="mask" class="bg-black bg-opacity-80 fixed inset-0 z-40 opacity-0 invisible"></div>
    
</x-layout>