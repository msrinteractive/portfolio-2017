<div id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="animated fadeInDownBig">Hello! It's nice to meet you. </h2>
                <div class="fh5co-spacer fh5co-spacer-sm"></div>
                <form class="form-horizontal" role="form" method="post" action="form-submit.php">
                    <div class="form-group">

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name"
                                   placeholder="What is your name?"
                                   value="<?php echo htmlspecialchars($_POST['name']); ?>">
                            <?php echo "<p class='text-danger'>$errName</p>"; ?>
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="example@domain.com"
                                   value="<?php echo htmlspecialchars($_POST['email']); ?>">
                            <?php echo "<p class='text-danger'>$errEmail</p>"; ?>
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-sm-10">
                            <textarea class="form-control" rows="4" name="message"
                                      placeholder="Write your message here."><?php echo htmlspecialchars($_POST['message']); ?></textarea>
                            <?php echo "<p class='text-danger'>$errMessage</p>"; ?>
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-md-10">
                            <input type="text" class="form-control" id="human" name="human"
                                   placeholder="What does 2 + 3 = ?">
                            <?php echo "<p class='text-danger'>$errHuman</p>"; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button id="submit" name="submit" type="submit" class="btn cta animated infinite pulse">Send Message</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <?php echo $result; ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <img src="./images/html-5.png" class="img-responsive icon-badges">
                    <img src="./images/css-3.png" class="img-responsive icon-badges">
                    <img src="./images/es6.png" class="img-responsive icon-badges">
                    <img src="./images/php7.png" class="img-responsive icon-badges">
                    <img src="./images/mysql-icon.png" class="img-responsive icon-badges">
                    <img src="./images/git.png" class="img-responsive icon-badges">
                    <img src="./images/bootstrap.png" class="img-responsive icon-badges">
                    <img src="./images/wordpress.png" class="img-responsive icon-badges">
                    <img src="./images/jquery-icon.png" class="img-responsive icon-badges">
                    <img src="./images/sass.png" class="img-responsive icon-badges">
                    <img src="./images/codeigniter.png" class="img-responsive icon-badges">
                    <img src="./images/androidstudio.png" class="img-responsive icon-badges">
                </div>
            </div>
        </div>
    </div>
</div><!-- contact -->