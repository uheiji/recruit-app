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

        @foreach($companies as $company)
            <div class="bg-white shadow-md rounded-lg p-4 mb-6">
                <h2 class="text-xl font-semibold text-gray-800">会社情報</h2>
                <dl class="mt-2">
                    <dt class="font-bold text-gray-600">会社名</dt>
                    <dd class="mb-2 text-gray-700">{{$company->name}}</dd>

                    <dt class="font-bold text-gray-600">会社ID</dt>
                    <dd class="mb-2 text-gray-700">{{$company->id}}</dd>

                    <dt class="font-bold text-gray-600">Email</dt>
                    <dd class="mb-2 text-gray-700">{{$company->email}}</dd>

                    <dt class="font-bold text-gray-600">住所</dt>
                    <dd class="mb-2 text-gray-700">{{$company->address}}</dd>

                    <dt class="font-bold text-gray-600">電話番号</dt>
                    <dd class="mb-2 text-gray-700">{{$company->phone}}</dd>
                </dl>
            </div>
        @endforeach

        <hr class="my-6">

        @foreach($works as $work)
            <div class="bg-white shadow-md rounded-lg p-4 mb-6">
                <h3 class="text-lg font-semibold text-gray-800">求人情報</h3>
                <p class="text-gray-700"><span class="font-bold">会社名:</span> {{$work->company->name}}</p>
                <p class="text-gray-700">タイトル: {{$work->title}}</p>
                <p class="text-gray-700">説明: {{$work->description}}</p>
                <p class="text-gray-700">要件: {{$work->requirements}}</p>
                <p class="text-gray-700">給与: {{$work->salary}}</p>
                <p class="text-gray-700">勤務地: {{$work->location}}</p>
                <p class="text-gray-700">タグ: {{$work->tag}}</p>
            </div>
        @endforeach
    </div>

    <!-- JavaScriptの読み込み -->
    @vite('resources/js/app.js')
</body>
</html>
