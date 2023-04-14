<?php include './includes/header.php' ; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-10   py-5 ">
                <div class="card">
                    <div class="card-header bg-secondary">
                        <h3 class="text-center text-white">Add Product</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Product name</label>
                                <div class="col-md-9">
                                    <input class="form-control" type ="text" name="product-name"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Product Price</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="number" name="product-price"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Stock Amount</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="number" name="product-name"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Category Name</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="product-name"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Brand Name</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="product-name"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input for="formFile" class="form-control" type ="file" name="product-name"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input class="btn btn-outline-success btn-block" value="Save Information" type="submit" name="ProductBtn"/>
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