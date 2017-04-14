<style>

</style>

<div class="container main-content">
    <div class="">
        <div class="form-area">
            <form role="form" action="{{route('saveInitial')}}" method="post">
                <br style="clear:both">
                <div class="page-header legend">
                    <h3>Take a moment to tell us about Yourself</h3>
                </div>
                <div class="form-group">
                    <label class="control-label"  for="topics_intrests">Topics you are Intrested in</label>
                    <input type="text" class="form-control" id="topics_intrests" name="topics_intrests"  required data-role="tagsinput" >
                </div>
                <div class="form-group">
                    <label class="control-label"  for="topics_participate">Topics you want to Participate in</label>
                    <input type="text" class="form-control" id="topics_participate" name="topics_participate"  required data-role="tagsinput" >
                </div>
                <div class="form-group">
                    <label class="control-label"  for="username">Your Govt. ID</label>
                    <input type="file" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required >
                </div>
                <div class="form-group">
                    <label class="control-label"  for="username">Your Profile Picture</label>
                    <input type="file" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                </div>
                <div class="btn-group btn-group-justified " role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <button type="submit" class="btn btn-primary">I agree to Terms & Condition, Take me to the dashboard</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>




