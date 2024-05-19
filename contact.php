<?php include 'header.php' ?>
<h1>
_POST
<?php echo var_dump($_POST) ?>
<br>
_GET
<?php echo var_dump($_GET) ?>
</h1>
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Contact</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <form method="POST" action=""> 
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <h1>
je mapple <?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>

</h1>
            <div class="row">
                <div class="col-md-12">
                <p class="form-row ">
                                    <label for="username">First Name<span class="required">*</span>
                                    </label>
                                    <input type="text" id="username" name="username" class="input-text">
                                </p>
                </div>
                <div class="col-md-12">
                <p class="form-row ">
                                    <label for="email"> email <span class="required">*</span>
                                    </label>
                                    <input type="email" id="email" name="emailsddsfsdf" class="input-text">
                                </p>
                </div>
                
                <div class="col-md-12">
                <p class="form-row ">
                                    <label for="msg">Message
                                    </label>
                                    <textarea type="text" id="msg" name="msg" class="input-text">

</textarea>
                                </p>
                </div>

                <div class="col-md-6">
                <p class="form-row ">
                                    
                                    <input type="submit"   value="send">
                                </p>
                </div>
            </div>
        </div>
    </div>
    </form>
    <?php include 'footer.php' ?>