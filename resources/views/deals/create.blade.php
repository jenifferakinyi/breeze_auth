<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Title</title>
    
    <!-- Link your CSS file using the asset helper -->
    <link rel="stylesheet" href="{{ asset('css/styleCreateDeal.css') }}">
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
h2{
    color: #002004;
    text-align: center;
    font-size: 44px;
    margin-bottom: 30px;
    position: relative;
}
optgroup{
    color: #002004;
    background-color:yellowgreen;
}
option{
    color:#002004;
    padding-left: 2;
    background-color:yellowgreen;
}
h2 ::before{
    position: absolute;
    content: '';
    width: 55px;
    height: 5px;
    border-radius: 50px;
    background: linear-gradient(45deg,  #002004, yellowgreen);
    bottom: -8px;
}
.box .inputbox{
    width: 100%;
    position: relative;
}
.box .inputbox input/*[type="text"]*/{
    width: 100%;
    font-size: 26px;
    margin: 16px 0px;
    outline: none;
    border-width: 0px 0px 2px 0px;
    border-color: #002004;
}
.box .inputbox input/*[type="email"]*/{
    width: 100%;
    font-size: 26px;
    margin: 16px 0px;
    outline: none;
    border-width: 0px 0px 2px 0px;
    border-color: #002004;
}

.box .inputbox select{
    width: 100%;
    font-size: 15px;
    margin: 16px 0px;
    outline: none;
    border-width: 0px 0px 2px 0px;
    border-color: rgb(6, 82, 6);;
}
.box .inputbox label{
    position: absolute;
    left: 0;
    top: 12px;
    font-size: 26px;
    color: rgb(6, 82, 6);
    pointer-events: none;
    transition: 0.3s;
}
.box .inputbox input:focus + label,
.box .inputbox input:valid + label{
    top: -7px;
    font-size: 18px;
    color: #002004;
}
.box .inputbox select:focus + label,
.box .inputbox select:valid + label{
    top: -7px;
    font-size: 18px;
    color: #002004;
}
.box .signupB{
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
.box .signupB :active{
    transform: scale3d(0.9,0.9,0.9);
}
    </style>
</head>
<body>
 

@extends('layouts\base')


@section('content')
<div class="container">
    <div class="box">
    <h2>Create Deal</h2>

    <!-- Your form for creating a deal goes here -->
    <form action="{{ route('deals.store') }}" method="post">
        @csrf
        <div class="inputbox ">
            <input type="text"  name= "title"  required>
            <label>Title</label>
        </div>
        <div class="inputbox ">
            <input type="text"  name= "description"required>
            <label>Description</label>
        </div>
        <button class="signupB" type="submit" name="submit">Save Deal</button>
    </form>
    </div>
</div>
@endsection

    @yield('content')

    <!-- Any other scripts or content -->

</body>
</html>

