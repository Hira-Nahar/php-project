<?php include './includes/header.php' ; ?>

<scetion class="py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Auto Generated Password</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-form-label col-md-5">Enter your password Length</label>
                                <div class="col-md-7">
                                    <input type="text" name="given_length" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-5">Password</label>
                                <div class="col-md-7">
                                    <input type="text" name="password" value="<?php echo isset($result) ? $result :'' ;?>" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-5"></label>
                                <div class="col-md-7">
                                    <input type="submit" name="btn" class="btn btn-outline-success btn-block" value="submit"/>
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