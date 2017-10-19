<div class="login-home col-md-12 container">
    <div class="login-form col-md-6 col-md-offset-2" >

        <div class="feedback">
            <p> <?php if(isset($this->msg)) echo $this->msg; ?> </p>
        </div>

        <form  method="post" class="form-horizontal">
            <div class="form-group">
                <label for="nameField" class="col-xs-2">Name</label>
                <div class="col-xs-10">
                    <input type="text" name="name" class="form-control" id="nameField" placeholder="Your Name" />
                </div>
            </div>
            <div class="form-group">
                <label for="emailField" class="col-xs-2">Email</label>
                <div class="col-xs-10">
                    <input type="email" name="email" class="form-control" id="emailField"  placeholder="Your Email" />
                </div>
            </div>
            <div class="form-group">
                <label for="emailField" class="col-xs-2">Password</label>
                <div class="col-xs-10">
                    <input type="password" name="password" class="form-control" id="passwordField"  placeholder="Your Password" />
                </div>
            </div>
            <div class="col-xs-10 col-xs-offset-2">
                <input type="submit" name="register" value="register" class="btn btn-primary" />
            </div>
        </form>


    </div>
</div>

