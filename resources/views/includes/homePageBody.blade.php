<div class="container">
    <div class="row">
        <div class="col-lg-7">

            <img src="{{URL::to('img/sitemain.png')}}" class="img-responsive">
            <p><span class="part1">A platform to</span><span class="part2"> promote yourself</span></p>
        </div>

        @foreach($errors->all() as $error)

            <ul>{{$error}}</ul>

            @endforeach
        <div class="col-lg-3">

            <h3 class="white-text"> New Here! Sign Up </h3>


            <form class="has-validation-callback" id="registration" method="post" action="{{route('signUp')}}">

                <div class="form-group">

                    <label for="username" class="white-text">Your Name</label>

                    <input type="text" class="form-control" id="username" placeholder="Your Name" name="username" data-validation="length"
                           data-validation-length="min3" value="{{Request::old('username')}}">

                </div>

                <div class="form-group">

                    <label for="useremail" class="white-text">Email</label>
                    <input type="text" class="form-control" id="useremail" placeholder="Enter Your Email" name="useremail" data-validation="email"
                           value="{{Request::old('useremail')}}"     data-validation-error-msg="You did not enter a valid e-mail">

                </div>

                <div class="form-group">

                    <label for="password">Password</label>

                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" data-validation="length" data-validation-length="min8"
                           data-validation-error-msg="password must be more than of 7 char"
                           value="{{Request::old('password')}}">

                </div>

                <div class="form-group">
                    <label for="selectGender">Gender</label>
                    <select class="form-control" name="gender" id="selectGender">
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                        <option value="o">Other</option>
                    </select>
                </div>
                <div class="form-group">

                    <label for="gps">Location</label>
                    <button type="button" class="btn btn-sm" aria-label="Left Align" style="background-color: rgba(0,0,0,0)">
                        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                    </button>
                    <input type="text" class="form-control" id="gps" placeholder="Location" name="location">

                </div>
                <div class="form-group">

                    <label for="selectcountry">Country</label>
                    <select class="form-control" name="country" id="selectcountry">
                        <option value="IN" selected>India</option>
                    </select>


                </div>
                <button type="submit" class="btn btn-primary" name="signup">Sign Up</button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
                <br>

            </form><br>


        </div>
    </div>
</div>