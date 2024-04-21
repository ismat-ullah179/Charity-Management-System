 <?php
 include"db.php";

if (isset($_POST['btnContactUs'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $query=mysqli_query($db_connect,"INSERT INTO contact_us set
        c_name='$name',
        c_email='$email',
        c_subject='$subject',
        c_msg='$message'
        ");
    $success="message is sent!";
}


?>
		


<div class="jumbotron jumbotron-sm bg-info" style="
color: #FFF;
border-radius: 0px; padding-top: 24px;
padding-bottom: 24px;"id="contactus">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h2">
                    Contact us </h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row ">
        <div class="col-md-8 jumbotron shadow-sm p-3">
            <div class="well well-sm">

                <form action="" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name"><i class="fas fa-envelope mr-1"></i>
                                Name</label>
                            <input type="text" class="form-control shadow-sm" name="name" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="fas fa-envelope mr-1"></i>
                                Email Address</label>
                            <div class="input-group">
                              
                                <input type="email" class="form-control shadow-sm" name="email" id="name" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject"><i class="fas fa-envelope mr-1"></i>
                                Subject</label>
                            <select id="subject" name="subject" class="form-control shadow-sm" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="complain">Complain</option>
                                <option value="suggestions">Suggestions</option>
                            
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name"><i class="fas fa-envelope mr-1"></i>
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <?php


                    if (isset($success)) {
        echo "<div class='alert alert-success'>".$success."</div>";
        
    }

                    ?>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" name="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>Twitter, Inc.</strong><br>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                <abbr title="Phone">
                    P:</abbr>
                (123) 456-7890
            </address>
            <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#">Israh.creations@example.com</a>
            </address>
            </form>
        </div>
    </div>
</div>

