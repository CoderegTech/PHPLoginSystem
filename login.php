<?php include_once "header.php"; ?>

<div class="form-container">
    <form class="login-form">
        <h2>LOGIN HERE</h2>
        <div class="form-inputs">
            <label>
                <input id="login-email" type="text" name="email" autocomplete="off" required />
                <span class="border-bottom"></span>
                <span class="input-title">Email</span>
            </label>

            <label>
                <input id="login-password" class="passwd" type="password" name="password" autocomplete="off" required />
                <span class="show-passwd"><i class="fa-solid fa-eye-slash"></i><i class="fa-solid fa-eye"></i></span>
                <span class="border-bottom"></span>
                <span class="input-title">Password</span>
            </label>
        </div>
        <button class="btn login-btn" type="submit" name="login-btn">LOGIN</button>
        <a class="link" href="signin.php">Doesn't have an account?</a>
    </form>
</div>
<?php include_once "footer.php"; ?>