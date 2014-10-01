<header>
    <div class="topheader">
        <div class="container">
            <div class="row">
                <div class="col-md-2 logo">
                    <a href="/" title="Sports Unleash" itemprop="url">
                        <img itemprop="logo" src="../static/images/logo.png" alt="Sport Unleash Logo" id="logo">
                    </a>
                </div>
                <div class="col-md-7 mega-title">Have your child SportUnleash tested today!</div>
                <div class="col-md-2 right-pane sign-in">
                    <!-- <a href="" data-toggle="modal" data-target=".bs-example-modal-sm">Sign In Here</a> -->
                </div>
                
                <!-- <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">Login Login
                    <div class="main-body-inner">
                        <div class="container login-box">
                            <div class="login-main-box">
                                <h3>Log In.</h3> 
                                <form method="post" class="form-horizontal">
                                    <input type="hidden" value="5dlgbgMnKPk4WnBisfaw4HppggGKeQsY" name="csrfmiddlewaretoken">
                                    <fieldset>
                                        <div class="form-group" id="div_id_username">
                                            <label class="control-label  requiredField" for="id_username">Username<span class="asteriskField">*</span></label>
                                            <div class="controls ">
                                                <input type="text" name="username" maxlength="254" id="id_username" class="textinput textInput form-control">
                                            </div>
                                        </div>
                                        <div class="form-group" id="div_id_password">
                                            <label class="control-label  requiredField" for="id_password">Password<span class="asteriskField">*</span></label>
                                            <div class="controls ">
                                                <input type="password" name="password" id="id_password" class="textinput textInput form-control">
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="form-actions">
                                        <input type="submit" id="submit-id-submit" class="btn btn-primary" value="Sign In" name="submit">
                                        <a class="btn btn-primary" href="/">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                  </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="centerheader">
        <div class="bottomheader">
            <div class="container">
                <div class="row">
                    <div class="container">
                                <div class="row">
                                    <div class="col-md-5 left-pane">The Sports Talent Identifying System</div>
                                    <div class="col-md-5 right-pane">"Unlocking your child's sport gifting today"</div>
                                </div>
                                <div class="col-md-12 text-center center-pane">for 9 - 11 year olds
                                    <!-- <div class="select_country">
                                        <select name="formal" id="dynamic_select">
                                            <option selected="True" value="/">English</option>
                                            <option value="/si/">සිංහල</option>
                                            <option value="/hi/">हिन्दी</option>
                                            <option value="/ta/">தமிழ்</option>
                                            <option value="/zh/">中國</option>
                                            <option value="/fr/">français</option>
                                            <option value="/es/">espagnol</option>
                                        </select>
                                    </div> -->
                                </div>
                            </div>
                </div>
            </div>
            <div class="container">
                <div class="col-xs-12 col-md-12 col-sm-12 main-navigation">
                    <div class="nav-bar">
                    <div id="right">
                        <?php 
                        $dpack=new DB();
                        $dpack->connect();
                        $sql="SELECT * from menu";
                        $data=$dpack->query($sql);

                        ?>
                        
                        <ul>
                        <?php $i=0; while($i<count($data)) {?>
                            <li>
                                <?php if($data[$i]['id'] == 2 ) {?>
                                <a href="index.php"> <?php echo $data[$i]['title'];?></a>
                                <?php } elseif($data[$i]['id'] == 17 ) {?>
                                <a href="subpage.php?id=68"> <?php echo $data[$i]['title'];?></a>
                                <?php } else{?>
                                <a href="page.php?id=<?php echo $data[$i]['id'];?>&ec=<?php echo $data[$i]['ct'];?>"> <?php echo $data[$i]['title'];?></a>
                                <?php }?>
                            </li>
                        <?php $i++; }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>