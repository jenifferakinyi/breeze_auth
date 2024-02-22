<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <style>
        *{
    padding: 0;
    margin: 0;
}
.container{
    width: 100%;
    height: 100vh;
    background: linear-gradient(45deg,#002004,yellowgreen);
    position: relative;
}
.container .box{
    position: absolute;
    width: 350px;
    left:50% ;
    top: 50%;
    transform: translate(-50%,-50%);
    background-color: #fff;
    padding: 25px 25px 45px;
    border-radius: 20px;
}
         .signupB{
    width: 100%;
    background: linear-gradient(45deg, #002004, yellowgreen);
    border: none;
    padding: 10px 16px;
    margin-top: 30px;
    font-size: 30px;
    color: #fff;
    cursor: pointer;
    border-radius: 50px;
    transition: 0.3s;
}
h2{
    color: #002004;
    text-align: center;
    font-size: 44px;
    margin-bottom: 30px;
    position: relative;
}
p{
    font-family:'Roboto', sans-serif ;
   font-size: larger;
}
.signupB a{
    color: white;
    list-style-type: none;
    text-decoration: none;
    
}
.signupB :active{
    transform: scale3d(0.9,0.9,0.9);
}
    </style>
</head>
<body>
    @extends('layouts\base')

@section('content')
<div class="container">
        <div class="box">
    <h2 style="    color: #002004;
    text-align: center;
    font-size: 34px;
    margin-bottom: 30px;
    position: relative;" >Deal Details</h2>

    <p><strong>Title:</strong> {{ $deal->title }}</p>
    <p><strong>Description:</strong> {{ $deal->description }}</p>
    
    <button class="signupB" type="submit" name="submit" value="Save Changes"> <a class="signupB" href="{{ route('deals.index') }}" class="btn btn-primary">Back to Deals</a>
    </div>
    </div>
@endsection 
</body>
</html>


