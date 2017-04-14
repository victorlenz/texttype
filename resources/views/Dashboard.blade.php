@extends('layouts.master');


@section('title')Welcome@endsection
@section('header')
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <script>
        function fill() {
            var height = window.outerHeight;
            console.log (height-100 + "px");
            document.getElementById("notification-pane").style.height =  height-100 + "px";
            console.log(height);
        }
    </script>
@endsection


@section('body')
    @include('includes.navMain');

    @include('includes.Dashboard.DashboardBody');
 @endsection

