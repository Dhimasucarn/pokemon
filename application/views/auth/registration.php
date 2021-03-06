



    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="<?=base_url('assets/images/bag.png');?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Login</h2>
                        <p>Welcome to the official Anime blog.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->
    <div class="row justify-content-md-center">
        <div class="col col-lg-4">
            <br>
            <center><h4><?= $this->session->flashdata('message'); ?></h4></center>      
        </div>
    </div>
    <!-- Login Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Register</h3>
                        <form action="<?=base_url('auth/registration');?>" method="post">
                            <div class="input__item">
                                <input type="text" placeholder="Name" name="name" required>
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="input__item">
                                <input type="email" placeholder="Email address" name="email"required>
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input type="password" placeholder="Password" name="pass1"required>
                                <span class="icon_lock"></span>
                            </div>
                            <div class="input__item">
                                <input type="password" placeholder="Repeat Password" name="pass2"required>
                                <span class="icon_lock"></span>
                            </div>
                            <button type="submit" class="site-btn">Register Now</button>
                        </form>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Have An Account?</h3>
                        <a href="<?=base_url('auth');?>" class="primary-btn">Login Now</a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- Login Section End -->



