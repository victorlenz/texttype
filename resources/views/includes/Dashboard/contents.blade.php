<div class="col-lg-6 main-area col-lg-offset-3">
    <div class="write-post box-shadow" >
        <div class="panel panel-default">
            <div class="panel-heading">
                <p class="">Say Something to your Audience</p>
            </div>
            <form method="post" action="{{route('createPost')}}" >
            <div class="panel-body">
                <div class="form-group">
                    <input type="text" aria-multiline="true" class="form-control" placeholder="share something" name="post">

                </div>
                <div class="form-inline" role="group" aria-label="...">

                    <label for="post-type"> Share With :</label>
                    <select id="post-type" class="form-control" onchange="showHintPost(this)" name="share_with">
                        <option value="contest">Contest</option>
                        <option value="followers" selected>Followers</option>
                        <option value="fans">Fans</option>
                        <option value="audience">Audience</option>
                    </select>
                    <div class="btn-group btn-group-xs" role="group" aria-label="..." style="float: right">
                        <button type="submit" class="btn btn-default">Share</button>
                    </div>

                    <input type="number" class="form-control hidden" id="contest-id" placeholder="contest id" name="contest_id">

                </div>
                <p id="post-hint-text" class="text-info">Share with your followers</p>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
            </form>
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