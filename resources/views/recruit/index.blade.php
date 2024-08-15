<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>求人サイト</title>

    <!-- CSSの読み込み -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-blue-500 mb-6">求人サイト</h1>

        <hr class="my-6">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($works as $work)
                <div class="bg-white shadow-md rounded-lg p-4 flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">求人情報</h3>
                        <p class="text-gray-700"><span class="font-bold">会社名:</span> {{$work->company->name}}</p>
                        <p class="text-gray-700">タイトル: {{$work->title}}</p>
                        <p class="text-gray-700">説明: {{$work->description}}</p>
                        <p class="text-gray-700">要件: {{$work->requirements}}</p>
                        <p class="text-gray-700">給与: {{$work->salary}}円</p>
                        <p class="text-gray-700">勤務地: {{$work->location}}</p>
                        <p class="text-gray-700">タグ: {{$work->tag}}</p>
                    </div>
                    <div class="flex space-x-4 mt-4">
                        <!-- 求人詳細を見るボタン -->
                        <a href="" class="flex items-center justify-center border bg-blue-500 text-black font-bold py-2 px-4 rounded-full hover:bg-blue-600">
                            求人詳細を見る
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>

                        <!-- 気になるボタン -->
                        <button class="flex items-center justify-center border border-gray-300 text-blue-500 font-bold py-2 px-4 rounded-full hover:bg-gray-100 ml-4">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21l-1-1c-5-5-6-6-6-10a6 6 0 0112 0c0 4-1 5-6 10z"></path>
                            </svg>
                            気になる
                        </button>
                    </div>



                </div>
            @endforeach
        </div>
    </div>

    <!-- JavaScriptの読み込み -->
    @vite('resources/js/app.js')
</body>
</html>
