<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title> Welcome </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">

    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <title>Show Off</title>
    <script>
        function fill() {
            var height = window.outerHeight;
            console.log (height-100 + "px");
             document.getElementById("notification-pane").style.height =  height-100 + "px";
            console.log(height);
        }
    </script>
</head>
<body>
<?php include_once "views/navbar_home.php"?>
<div class="container-fluid content">
    <div class="row">
        <div class="col-lg-3" id="notification-pane">
            <script>fill()</script>
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Warning!</strong> Better check yourself, you're not looking too good.
            </div>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Warning!</strong> Better check yourself, you're not looking too good.
            </div>
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Warning!</strong> Better check yourself, you're not looking too good.
            </div>
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Warning!</strong> Better check yourself, you're not looking too good.
            </div>
            <div class="alert alert-danger alert-dismissible" role="alert">

                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Warning!</strong> Better check yourself, you're not looking too good.
            </div>
        </div>
        <div class="col-lg-6 main-area col-lg-offset-3">
            <div class="write-post box-shadow" >
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="">Say Something to your Audience</p>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <input type="text" aria-multiline="true" class="form-control" placeholder="share something">

                        </div>
                        <div class="form-inline" role="group" aria-label="...">

                            <label for="post-type"> Share With :</label>
                            <select id="post-type" class="form-control" onchange="showHintPost(this)">
                                <option value="0">Contest</option>
                                <option value="1" selected>Followers</option>
                                <option value="2">Fans</option>
                                <option value="3">Audience</option>
                            </select>
                            <div class="btn-group btn-group-xs" role="group" aria-label="..." style="float: right">
                                <button type="button" class="btn btn-default">Share</button>
                            </div>

                            <input type="number" class="form-control hidden" id="contest-id" placeholder="contest id">

                        </div>
                        <p id="post-hint-text" class="text-info">Share with your followers</p>
                    </div>

                </div>
            </div>
            <div class="feeds">
                <!--feed1-->
                <div class="panel panel-default box-shadow">
                    <div class="panel-heading">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object post-dp" src="img/vivek_thumbnail.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <p> <span class="post-text-user">Vivek Kumar</span><span class="post-text-in">in</span> <span class="post-text-type"> Poetry</span></p>
                                <hr>
                                <p>On Tuesday 20:21, 2016   contest #7489792
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body post-text-content">
                        Twinkle twinkle little star,<br>
                        Twinkle twinkle little star,<br>
                        Twinkle twinkle little star,<br>
                        Twinkle twinkle little star,<br>

                    </div>
                    <div class="panel panel-default post-interaction">
                        <div class="panel-body">
                            <div class="btn-group btn-group-xs" role="group" aria-label="...">
                                <button type="button" class="btn btn-default">1</button>
                                <button type="button" class="btn btn-default">2</button>
                                <button type="button" class="btn btn-default">3</button>
                                <button type="button" class="btn btn-default">4</button>
                                <button type="button" class="btn btn-default">5</button>
                                <button type="button" class="btn btn-default">6</button>
                                <button type="button" class="btn btn-default">7</button>
                                <button type="button" class="btn btn-default">8</button>
                                <button type="button" class="btn btn-default">9</button>
                            </div>
                            <div class="btn-group btn-group-xs" role="group" aria-label="...">
                                <button type="button" class="btn btn-default">Vote Up </button>

                            </div>
                            <div class="btn-group btn-group-sm" role="group" aria-label="..." style="float: right">
                                <div class="btn btn-group-sm"><span class="label label-info">298 / 300</span></div>
                                <button type="button" class="btn btn-default">Report</button>
                                <button type="button" class="btn btn-default">Become Fan</button>
                                <button type="button" class="btn btn-default">Participate</button>

                            </div>
                        </div>
                    </div>
                </div>
                <!--feed2-->
                <div class="panel panel-default box-shadow">
                    <div class="panel-heading">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object post-dp" src="img/vivek_thumbnail.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <p> <span class="post-text-user">Vivek Kumar</span><span class="post-text-in">in</span> <span class="post-text-type"> Poetry</span></p>
                                <hr>
                                <p>On Tuesday 20:21, 2016   contest #7489792
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body post-text-content">
                        Twinkle twinkle little star,<br>
                        Twinkle twinkle little star,<br>
                        Twinkle twinkle little star,<br>
                        Twinkle twinkle little star,<br>

                    </div>
                    <div class="panel panel-default post-interaction">
                        <div class="panel-body">
                            <div class="btn-group btn-group-xs" role="group" aria-label="...">
                                <button type="button" class="btn btn-default">1</button>
                                <button type="button" class="btn btn-default">2</button>
                                <button type="button" class="btn btn-default">3</button>
                                <button type="button" class="btn btn-default">4</button>
                                <button type="button" class="btn btn-default">5</button>
                                <button type="button" class="btn btn-default">6</button>
                                <button type="button" class="btn btn-default">7</button>
                                <button type="button" class="btn btn-default">8</button>
                                <button type="button" class="btn btn-default">9</button>
                            </div>
                            <div class="btn-group btn-group-xs" role="group" aria-label="...">
                                <button type="button" class="btn btn-default">Vote Up </button>

                            </div>
                            <div class="btn-group btn-group-sm" role="group" aria-label="..." style="float: right">
                                <div class="btn btn-group-sm"><span class="label label-info">298 / 300</span></div>
                                <button type="button" class="btn btn-default">Report</button>
                                <button type="button" class="btn btn-default">Become Fan</button>
                                <button type="button" class="btn btn-default">Participate</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default box-shadow">
                    <div class="panel-heading">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object post-dp" src="img/vivek_thumbnail.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <p> <span class="post-text-user">Vivek Kumar</span><span class="post-text-in">in</span> <span class="post-text-type"> Poetry</span></p>
                                <hr>
                                <p>On Tuesday 20:21, 2016   contest #7489792
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body post-text-content">
                        Twinkle twinkle little star,<br>
                        Twinkle twinkle little star,<br>
                        Twinkle twinkle little star,<br>
                        Twinkle twinkle little star,<br>

                    </div>
                    <div class="panel panel-default post-interaction">
                        <div class="panel-body">
                            <div class="btn-group btn-group-xs" role="group" aria-label="...">
                                <button type="button" class="btn btn-default">1</button>
                                <button type="button" class="btn btn-default">2</button>
                                <button type="button" class="btn btn-default">3</button>
                                <button type="button" class="btn btn-default">4</button>
                                <button type="button" class="btn btn-default">5</button>
                                <button type="button" class="btn btn-default">6</button>
                                <button type="button" class="btn btn-default">7</button>
                                <button type="button" class="btn btn-default">8</button>
                                <button type="button" class="btn btn-default">9</button>
                            </div>
                            <div class="btn-group btn-group-xs" role="group" aria-label="...">
                                <button type="button" class="btn btn-default">Vote Up </button>

                            </div>
                            <div class="btn-group btn-group-sm" role="group" aria-label="..." style="float: right">
                                <div class="btn btn-group-sm"><span class="label label-info">298 / 300</span></div>
                                <button type="button" class="btn btn-default">Report</button>
                                <button type="button" class="btn btn-default">Become Fan</button>
                                <button type="button" class="btn btn-default">Participate</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default box-shadow">
                    <div class="panel-heading">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object post-dp" src="img/vivek_thumbnail.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <p> <span class="post-text-user">Vivek Kumar</span><span class="post-text-in">in</span> <span class="post-text-type"> Poetry</span></p>
                                <hr>
                                <p>On Tuesday 20:21, 2016   contest #7489792
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body post-text-content">
                        Twinkle twinkle little star,<br>
                        Twinkle twinkle little star,<br>
                        Twinkle twinkle little star,<br>
                        Twinkle twinkle little star,<br>

                    </div> 
                    <div class="panel panel-default post-interaction">
                        <div class="panel-body">
                            <div class="btn-group btn-group-xs" role="group" aria-label="...">
                                <button type="button" class="btn btn-default">1</button>
                                <button type="button" class="btn btn-default">2</button>
                                <button type="button" class="btn btn-default">3</button>
                                <button type="button" class="btn btn-default">4</button>
                                <button type="button" class="btn btn-default">5</button>
                                <button type="button" class="btn btn-default">6</button>
                                <button type="button" class="btn btn-default">7</button>
                                <button type="button" class="btn btn-default">8</button>
                                <button type="button" class="btn btn-default">9</button>
                            </div>
                            <div class="btn-group btn-group-xs" role="group" aria-label="...">
                                <button type="button" class="btn btn-default">Vote Up </button>

                            </div>
                            <div class="btn-group btn-group-sm" role="group" aria-label="..." style="float: right">
                                <div class="btn btn-group-sm"><span class="label label-info">298 / 300</span></div>
                                <button type="button" class="btn btn-default">Report</button>
                                <button type="button" class="btn btn-default">Become Fan</button>
                                <button type="button" class="btn btn-default">Participate</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-lg-offset-9" id="winners-pane"  style="position: fixed">
            <script>fill()</script>

            <div class="list-group">
                <a  class="list-unstyled" style="font-weight: 700" >Events</a>
                <div class="list-group-item">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object event-dp" src="img/vivek_thumbnail.jpg" alt="...">
                            </a>
                        </div>
                        <div class="media-body">
                            <p>On Tuesday 20:21, 2016   contest #7489792
                            </p>
                        </div>
                    </div>
                </div>
                <div href="services.html" class="list-group-item">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object event-dp" src="img/cockatiel.jpg" alt="...">
                            </a>
                        </div>
                        <div class="media-body">
                            <p>On Tuesday 20:21, 2016   contest #7489792
                            </p>
                        </div>
                    </div>
                </div>
                <div href="contact.html" class="list-group-item">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object event-dp" src="img/sick-puppy.jpg" alt="...">
                            </a>
                        </div>
                        <div class="media-body">
                            <p>On Tuesday 20:21, 2016   contest #7489792
                            </p>
                        </div>
                    </div>
                </div>
                <a href="portfolio-1-col.html" class="list-group-item">1 Column Portfolio</a>
                <a href="portfolio-2-col.html" class="list-group-item">2 Column Portfolio</a>
                <a href="portfolio-3-col.html" class="list-group-item">3 Column Portfolio</a>
            </div>

            <div class="list-group">
                <a href="index.html" class="list-group-item">Home</a>
                <a href="about.html" class="list-group-item">About</a>
                <a href="services.html" class="list-group-item">Services</a>
                <a href="contact.html" class="list-group-item">Contact</a>
                <a href="portfolio-1-col.html" class="list-group-item">1 Column Portfolio</a>
                <a href="portfolio-2-col.html" class="list-group-item">2 Column Portfolio</a>
                <a href="portfolio-3-col.html" class="list-group-item">3 Column Portfolio</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>