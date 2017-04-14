@extends('layouts.master')

@section('title')Initialization@endsection

@section('header')

    <style>

        body{
            background: url({{URL::to('/img/bg.png')}});
            color: beige;
        }
        .main-content{

            width: 50%;
            margin: 50px auto;
            padding: 57px 10px;
            background-color: #fff;
            color: black;
            margin-top: 6%;
        }
        .bootstrap-tagsinput {
            width: 100%;
        }
        .bootstrap-tagsinput {
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            display: inline-block;
            padding: 4px 6px;
            color: #555;
            vertical-align: middle;
            border-radius: 4px;
            max-width: 100%;
            line-height: 22px;
            cursor: text;
        }
        .bootstrap-tagsinput > input {
            border: 0;
        }


    </style>
    @endsection

@section('navigation')
    @include('includes.navMain');
 @endsection

@section('body')
    @include('includes.intializationBody');
@endsection
@section('footer')
    <script  src="{{URL::to('js/bootstrap-tagsinput.js')}}"></script>
    <script  src="{{URL::to('js/bootstrap-tagsinput-angular.js')}}"></script>
@endsection