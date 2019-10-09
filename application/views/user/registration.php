<div class="container">
    <h2>Registration</h2>

    <?php

        $usernameError       = '';
        $usernameClass       = '';
        $loginError          = '';
        $loginClass          = '';
        $passwordError       = '';
        $passwordClass       = '';
        $repeatPasswordError = '';
        $repeatPasswordClass = '';

        if(isset($errors['username'])) {
            $usernameError = $errors['username'];
            $usernameClass = 'is-invalid';
        }
        elseif(count($_POST)) {
            $usernameClass = 'is-valid';
        }

        if(isset($errors['login'])) {
            $loginError = $errors['login'];
            $loginClass = 'is-invalid';
        }
        elseif(count($_POST)) {
            $loginClass = 'is-valid';
        }

        if(isset($errors['password'])) {
            $passwordError = $errors['password'];
            $passwordClass = 'is-invalid';
        }
        elseif(count($_POST)) {
            $passwordClass = 'is-valid';
        }

        if(isset($errors['repeat-password'])) {
            $repeatPasswordError = $errors['repeat-password'];
            $repeatPasswordClass = 'is-invalid';
        }
        elseif(count($_POST)) {
            $repeatPasswordClass = 'is-valid';
        }

    ?>
    <form action="" method="POST">

        <!-- USERNAME -->
        <div class="form-group">
            <label for="uname">Username:</label>
            <input type="text" class="form-control <?= $usernameClass ?>" id="username" placeholder="Enter username" name="username">

            <?php if($usernameError): ?>
                <div class="invalid-feedback">
                    <?= $usernameError ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- LOGIN -->
        <div class="form-group">
            <label for="uname">Login:</label>
            <input type="text" class="form-control <?= $loginClass ?>" id="login" placeholder="Enter login" name="login">

            <?php if($loginError): ?>
                <div class="invalid-feedback">
                    <?= $loginError ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- PASSWORD -->
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control <?= $passwordClass ?>" id="password" placeholder="Enter password" name="password">

            <?php if($passwordError): ?>
                <div class="invalid-feedback">
                    <?= $passwordError ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- REPEAT PASSWORD -->
        <div class="form-group">
            <label for="pwd">Repeat password:</label>
            <input type="password" class="form-control <?= $repeatPasswordClass ?>" id="repeat-password" placeholder="Repeat password" name="repeat-password">

            <?php if($repeatPasswordError): ?>
                <div class="invalid-feedback">
                    <?= $repeatPasswordError ?>
                </div>
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div class="row registration-link">
        <div class="col col-md-12">
            <a href="/user/login">Login</a>
        </div>
    </div>
</div>
