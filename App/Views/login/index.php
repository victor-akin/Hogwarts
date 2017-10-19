<div class="login-home col-md-12 container">
<div class="login-form col-md-6 col-md-offset-2" >


        <form  method="post" class="form-horizontal">
            <div class="form-group">
                <label for="nameField" class="col-xs-2">Name</label>
                <div class="col-xs-10">
                    <input type="text" name="name" class="form-control" id="nameField" placeholder="Your Name" />
                </div>
            </div>
            <div class="form-group">
                <label for="emailField" class="col-xs-2">Password</label>
                <div class="col-xs-10">
                    <input type="password" name="password" class="form-control" id="password"  placeholder="Your Password" />
                </div>
            </div>
            <div class="col-xs-10 col-xs-offset-2">
                <input type="submit" name="login" value="login" class="btn btn-primary" />
                <a href="<?php echo HOME.'login/register'; ?>" ><input type="button" name="register" value="register" class="btn btn-primary"> </input> </a>
            </div>
        </form>


</div>
</div>

