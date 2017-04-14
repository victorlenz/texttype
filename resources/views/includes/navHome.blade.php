<nav class="navbar navbar-default hidden-xs">
    <div class="container">
        <div class="navbar-header">

            <img class="drop-sh"alt="Brand" src="img/logo.svg" style="margin: 5px 0px;">
            <h3 class="navbar-right">Show Off</h3>


            <!--sign in form-->


        </div>
        <form class="navbar-form navbar-right" role="search" method="post" action="{{route('signin')}}">
            <div class="forgm-group">
                <input type="text" class="form-control" placeholder="Username/email" name="email">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <button type="submit" class="btn btn-success navbar-btn" >Sign in</button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </div>

        </form>

    </div>
</nav>