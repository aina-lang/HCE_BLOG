<?php  require "../action/signupAction.php";?>
<!DOCTYPE html>
    <html lang="en">
    <?php include ("../../include/head-blog-html.php"); ?>
    <body>
        <header class="fixed-top d-flex justify-content-between p-3 ">
            <div class="logo text-success">
                <h1>HCE</h1>
            </div>
            <nav class="nav ">
                <ul class="nav ">
                    <li class="nav-item">
                        <a class="" href="../../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="">About</a>
                    </li>
                    <li class="nav-item">
                        <a class=" ">Members</a>
                    </li>
                </ul>
            </nav>
        </header>
        <section class="section1 row align-items-center p-5 justify-content-center pt-5">
            <form action="" method="post" class="col-md-5 p-5 rounded" style="background-color:rgba(48, 50, 51, 0.4);" >
            <?php if(isset($message)){echo "<p class='text-danger'>".$message."</p>";   }?>
                <div class="mb-3">
                  <input type="text" name="fullName" id="" class="form-control bg-dark text-success" placeholder="Your full name" aria-describedby="helpId">
                </div>
                <div class="mb-3 mt-5">
                  <input type="email" name="email" id="" class="form-control bg-dark text-success" placeholder="your email" aria-describedby="helpId">
                </div>
                <div class="mb-3 mt-5">
                  <input type="password" name="password" id="" class="form-control bg-dark text-success" placeholder="create password" aria-describedby="helpId">
                  <!-- <small id="helpId" class="text-muted">Help text</small> -->
                </div>
                <div class="mb-3 mt-5">
                  <input type="password" name="passwordConfirm" id="" class="form-control bg-dark text-success" placeholder="confirm password" aria-describedby="helpId">
                  <?php if(isset($messagePass)){ echo "<small id='helpId' class='text-muted'>".$messagePass."</small>"; }?>
                </div>
               <button type="submit" class="btn btn-success" name="signup">S'inscrire</button>
               <p class="text-success">Already have an account <a href="../login.php" class="text-white">here</a></p>
            </form>
            <h1 class="col-md-5 text-center text-success"style="font-size: 150px;">HCE</h1>
        </section>
        <?php  include ("../../include/footer.php"); ?>
        <script src="../../style/bootstrap.min.js"></script>
    </body>
</html>