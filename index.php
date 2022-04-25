<!DOCTYPE html>
    <html lang="en">
        <?php include("include/head.php");session_start(); ?>
    <body>
        <!-- debut header -->
        <header class="fixed-top d-flex justify-content-between p-3 ">
            <div class="logo text-success">
                <h1>HCE</h1>
            </div>
            <nav class="nav ">
                <ul class="nav ">
                    <li class="nav-item">
                        <a class="">Home</a>
                    </li>
                    <li class="nav-item">
                       <?php if(isset($_SESSION['auth'])){
                           echo "<a class='' href='blog/html/index_forum.php'>Blog</a>";
                       }else{
                        echo "<a class='' href='blog/login.php'>Blog</a>";
                       }?> 
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
        <!-- fin header -->

        <!-- debut landing page -->
        <section class="section1 cover-container d-flex w-100 h-100 p-5  align-items-center ">
            <div class="landing-description text-white  p-5 rounded" style="max-width: 500px;">
                <h1>WELCOME</h1>
                <p>
                    Lorem ipsum dolor sit amet
                     consectetur adipisicing elit. 
                     Voluptate ipsam pariatur, facere 
                     praesentium, molestiae atque esse error
                      repellendus ea impedit nihil iure quia
                     nesciunt doloremque quis ipsum, animi expedita labore.
                </p>
                <a href="#" class="btn btn-success ">Naviguer</a>
            </div>
        </section>
        <!-- fin landing page -->
        <!-- debut album tsy haiko -->
        <div class="row-profil text-white row album pt-5 text-center justify-content-between p-5 align-items-center" style="background-color:#074132;min-height:90vh">
            <div class=" profil col-md-3 p-5 shadow p-3 m-3 rounded "style="max-height:300px">
                <h2  class="text-white">Heading</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
              </div>
              <div class="profil col-md-3 p-5 shadow p-3  m-3 rounded"style="max-height:300px">
                <h2  class="text-white">Heading</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
              </div>
              <div class="profil col-md-3 p-5 shadow p-3  m-3 rounded"style="max-height:300px">
                <h2  class="text-white">Heading</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
              </div>
        </div>
        <!-- fin album tsy haiko -->
        <!--debut un autre section  -->
        <section class="section2 row  p-5  text-white justify-content-between">
            <p class="col-md-6">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus quaerat enim vel dolorum recusandae maxime quidem. Totam alias eveniet iure aliquid quos impedit delectus nemo itaque, facere ducimus sit. Accusantium?
                Impedit iure eius dolor cumque neque consectetur velit recusandae in eveniet doloribus minus, architecto dignissimos aspernatur cupiditate repellat quisquam animi! Quam vitae eveniet eius inventore iure sapiente deserunt est dolore!
                Recusandae delectus aliquam corrupti perferendis veritatis dicta architecto fugiat, magni aliquid. Quasi a sequi suscipit excepturi tempora facilis maxime ex ea assumenda ducimus sint veritatis fuga dolorem, fugiat accusantium dolore!
                Optio recusandae velit dicta laborum incidunt, cum fugiat reiciendis porro quas doloremque quisquam architecto ea quasi? Necessitatibus officiis excepturi non porro, pariatur voluptatibus eveniet hic odio earum corporis laboriosam modi.
                Ea omnis, in provident, mollitia corporis rem illum eveniet nisi facere nesciunt, perferendis reprehenderit! Harum excepturi, quidem similique accusamus libero quisquam quae non iste necessitatibus. At pariatur esse doloribus distinctio.
            </p>
            <img class="col-md-5 rounded" src="image/hacker-hooded-man-gajbeubqawa2lxea (1).jpg" alt="">
        </section>
        <!-- fin un autre section -->
        <!-- section form -->
        <section class="section3 row  p-5 justify-content-between" style=" background-image:linear-gradient(125deg,#212221,#000);">
            <span class=" col-md-5 d-flex justify-content-center align-items-center">
                <span class="text-center">
                    <img src="" alt="" class="anonymous-mask">
                    <h1  style="font-size: 150px;">HCE</h1>
                    <p >Hacker Cggg   Eggg</p>
                </span>
            </span>
            <div class="col-md-5 p-5 rounded  text-white">    
                <form  method="post" class="form">
                    <h5 class="text-success">Envoyer nous de message sur ce formulaire</h5>
                    <div class="mb-3">
                        <label for="" class="form-label">votre email</label>
                        <input type="email" class="form-control bg-dark text-success" name="" id="" placeholder="email">
                        <small id="emailHelpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">votre mot de passe</label>
                        <input type="password" class="form-control  bg-dark text-success" name="" id="" placeholder="password">
                        <small id="passwordHelpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">votre message</label>
                        <textarea class="form-control  bg-dark text-success" name="" id="" rows="3" placeholder="type here!"></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark ">Submit</button>
                </form>
            </div>
        </section>
        <!-- fin section form -->
        <!-- debut footer -->
        <?php include("include/footer.php") ?>
        <!-- fin footer -->
        <script src="/style/bootstrap.min.js"></script>
    </body>
</html>