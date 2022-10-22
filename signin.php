<?php include_once "header.php"; ?>

<div class="form-container">
    <form class="signin-form" enctype="multipart/form-data">
        <h2>SIGN IN HERE</h2>
        <div class="form-inputs">
            <label>
                <input id="signin-username" type="text" name="username" autocomplete="off" required />
                <span class="border-bottom"></span>
                <span class="input-title">Username</span>
            </label>
            <label>
                <input id="signin-email" type="text" name="email" autocomplete="off" required />
                <span class="border-bottom"></span>
                <span class="input-title">Email</span>
            </label>

            <label>
                <input id="signin-password" class="passwd" type="password" name="password" autocomplete="off"
                    required />
                <span class="show-passwd"><i class="fa-solid fa-eye-slash"></i><i class="fa-solid fa-eye"></i></span>
                <span class="border-bottom"></span>
                <span class="input-title">Password</span>
            </label>
        </div>
        <button class="btn signin-btn" type="submit" name="signup-btn">SIGN IN</button>
        <a class="link" href="login.php">Already have an account?</a>
    </form>
</div>
<?php include_once "footer.php"; ?>