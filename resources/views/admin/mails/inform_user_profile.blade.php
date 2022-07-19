
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="/css/app.css" type="text/css">
</head>

<body>
    <div class="container">
        @foreach($user as $value)
        <p>Hi,{{$value['name']}}</p>
        <h4>This email send from system </h4><br>
        <h4>Please check your infomation. Is it correctly</h4><br>
        <ul class="list-group">
            <li class="list-group-item" >name
                <span class="float-end">{{$value['name']}}</span>
             </li>
             <li class="list-group-item" >email
                <span class="float-end">{{$value['email']}}</span>
             </li>
             <li class="list-group-item" >address
                <span class="float-end">{{$value['address']}}</span>
             </li>
             <li class="list-group-item" >phone
                <span class="float-end">0342130554</span>
             </li>
        </ul>
        @endforeach
        <div style="text-align: center; padding-top:20px">
            <button class="btn btn-primary" type="submit">Button</button>
        </div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</html>
