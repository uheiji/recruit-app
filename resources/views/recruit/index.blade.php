<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>求人サイト</title>
</head>
<body>
    <h1>求人サイト</h1>
    @foreach($companies as $company)
        <h2>会社情報↓</h2>
        <dl>
            <dt>会社名</dt>
            <dd>{{$company->name}}</dd>
        </dl>
        <dl>
            <dt>会社ID</dt>
            <dd>{{$company->id}}</dd>
        </dl>
        <dl>
            <dt>email</dt>
            <dd>{{$company->email}}</dd>
        </dl>
        <dl>
            <dt>住所</dt>
            <dd>{{$company->address}}</dd>
        </dl>
        <dl>
            <dt>電話番号</dt>
            <dd>{{$company->phone}}</dd>
        </dl>
    @endforeach
    -----------------------------
    @foreach($works as $work)
        <h3>求人情報↓</h3>
        <p>会社名:{{$work->company->name}}</p>
        <p>{{$work->company_id}}</p>
        <p>{{$work->title}}</p>
        <p>{{$work->description}}</p>
        <p>{{$work->requirements}}</p>
        <p>{{$work->salary}}</p>
        <p>{{$work->location}}</p>
        <p>{{$work->tag}}</p>
    @endforeach
</body>
</html>
