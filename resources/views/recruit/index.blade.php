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
        <p>{{$company->id}}</p>
        <p>{{$company->name}}</p>
        <p>{{$company->email}}</p>
        <p>{{$company->address}}</p>
        <p>{{$company->phone}}</p>
    @endforeach
</body>
</html>
