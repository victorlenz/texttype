@extends('layouts.master')


@section('header')
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/custom.css')}}">
@endsection

@section('navigation')
    @include('includes.navHome');
@endsection



@section('body')
    @include('includes.homePageBody');


@endsection

@section('footer')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script src="./js/homepage.js" ></script>
    <script src="js/bootstrap.min.js">
    </script>
@endsection