<?php include 'header.php';?>
<?php include 'config.php';?>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-7 mt-5">
        </div>
    <!-- login form  -->
        <div class="col-md-4 mt-5">
            <div class="container p-5 border rounded bg-white">
                <form autocomplete="off" class="py-2" method="post" action="reset_password.php">
                    <h4 class="text-center pb-3">FORGOT PASSWORD</h4>
                    <div class="form-group">
                        <label for="femail">Email</label>
                        <input type="text" class="form-control" id="femail" name="femail"  autocomplete="off" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-danger btn-sm mt-4">Send Link</button>
                </form>
            </div>
        </div>
    </div>
</div>

