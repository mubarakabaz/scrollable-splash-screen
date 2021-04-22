<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('assets/design.php')?>
</head>

<body>
    <!-- Splash Screen -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- END Splash  -->

    <div class="container" id="content">
        <main class="form-signin">
            <form>
                <div class="text-center">
                <img class="mx-auto mb-4" src="assets/img//bird.svg" alt="" width="85">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>    
            </div>
                

                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-warning" type="submit">Sign in</button>
                <p class="mt-5 mb-3 text-muted text-center">Makassar &copy; 2021</p>
            </form>
        </main>
    </div>

</body>

</html>