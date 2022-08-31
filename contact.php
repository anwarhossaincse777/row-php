
<?php

require 'includes/header.php';
require 'includes/db_connection.php';
?>

        <div class="container">
            <div class="row">
                <div class="col-md-12">


                    <div class="card">
                        <div class="card-header bg-success">

                            <h1 class="text-center">Contact Page</h1>
                        </div>
                        <div class="card-body">
                            <form method="post" action="contact_post.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="name"  name="name" placeholder="Enter Your name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Message</label>
                                    <textarea class="form-control" rows="4" name="message" class="form-control" placeholder="Enter Your Message"></textarea>

                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>






                </div>

            </div>

        </div>


<?php
require 'includes/footer.php'

?>


