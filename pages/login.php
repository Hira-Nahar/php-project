<?php include './includes/header.php' ; ?>

<?php
    if(isset($_SESSION['id']))
    {
        header('location:add-product.php');
    }
?>

<scetion class="py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Login</h3>
                    </div>
                    <div class="card-body">

                    <h4><?php echo isset($message) ? $message : '' ; ?></h4>

                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-form-label col-md-5">Enter your Email Id</label>
                                <div class="col-md-7">
                                    <input type="text" name="email" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-5">Enter Your Password</label>
                                <div class="col-md-7">
                                    <input type="text" name="password" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-5"></label>
                                <div class="col-md-7">
                                    <input type="submit" name="loginBtn" class="btn btn-outline-success btn-block" value="submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include './includes/footer.php' ; ?>