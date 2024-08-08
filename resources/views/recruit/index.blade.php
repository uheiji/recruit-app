<!DOCTYPE html>
<html lang="en">
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
        <p>{{$company->id}}</p>
        <a href="">{{$company->name}}</a>
        <p>{{$company->email}}</p>
        <p>{{$company->address}}</p>
        <p>{{$company->phone}}</p>
    @endforeach
    -----------------------------
    @foreach($works as $work)
        <h3>求人情報↓</h3>
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
