<?php
 
 include("header.php");
 include("config.php");
 $id=$_GET["id"];
 $userid = $_SESSION["userId"];
$category_id=$_POST["category_id"];
$service_name=$_POST["service_name"];
$description=$_POST["description"];
$fees=$_POST["fees"];

  if(isset($_POST["submit_btn"]))

$query="INSERT INTO `services`(`user_id`, `service_id`, `fees`) VALUES ($userid','$service_id','$fees')";
$result = mysqli_query($db,$query);
if($result)
{
    if ($result) {
        echo "<script>window.location.assign('booking.php')</script>";
    } else {
        echo ("not added");
    }


}

 ?>


 
            <div class="bradcam_inner bradcam_bg_2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h3> services</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bradcam_area_end  -->

    <!-- ================ contact section start ================= -->
    
 
 <section class="contact-section">
            <div class="container">
            
    
                <div class="row d-flex justify-content-center">
                    <div class="col-6">
                       <h3> Get Services  By Filling Following Detailes </h3>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" enctype="multipart/form-data" action="" method="post" id="contactForm" novalidate="novalidate">
                           
                               <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="label">Id</div>
                                        <input class="form-control valid" name="id" id="id" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'e'" placeholder="enter id">
                                    </div>
                                   <div class="form-group">
                                        <div class="label">Category Id</div>
                                        <input class="form-control valid" name="category_id" id="id" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'e'" placeholder="enter category id">
                                    </div>  
                    
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="label">Select service required</div>
                                       <select name="service_name" class="form-control" required>
    <option value=""  selected disabled>Select Service</option>

    <optgroup label="Consultation">
        <option value="1">Legal Consultation</option>
        <option value="2">Online Consultation</option>
        <option value="3">Legal Opinion</option>
    </optgroup>

    <optgroup label="Family Law">
        <option value="4">Divorce Petition</option>
        <option value="5">Child Custody</option>
        <option value="6">Maintenance Case</option>
        <option value="7">Domestic Violence Case</option>
    </optgroup>

    <optgroup label="Criminal Law">
        <option value="8">Criminal Defense</option>
        <option value="9">Bail Application</option>
        <option value="10">FIR Assistance</option>
        <option value="11">Cyber Crime Complaint</option>
    </optgroup>

    <optgroup label="Property Law">
        <option value="12">Property Dispute</option>
        <option value="13">Property Verification</option>
        <option value="14">Sale Deed Drafting</option>
        <option value="15">Land Registration</option>
    </optgroup>

    <optgroup label="Corporate Law">
        <option value="16">Company Registration</option>
        <option value="17">Partnership Registration</option>
        <option value="18">Contract Drafting</option>
        <option value="19">Legal Compliance</option>
    </optgroup>

    <optgroup label="Intellectual Property">
        <option value="20">Trademark Registration</option>
        <option value="21">Copyright Registration</option>
        <option value="22">Patent Filing</option>
    </optgroup>

    <optgroup label="Consumer & Civil Matters">
        <option value="23">Consumer Complaint</option>
        <option value="24">Recovery Suit</option>
        <option value="25">Civil Litigation</option>
        <option value="26">Legal Notice Drafting</option>
    </optgroup>

    <optgroup label="Documentation">
        <option value="27">Affidavit Drafting</option>
        <option value="28">Agreement Drafting</option>
        <option value="29">Will Drafting</option>
        <option value="30">Power of Attorney</option>
    </optgroup>

    <optgroup label="Employment & Tax">
        <option value="31">Labour Dispute</option>
        <option value="32">Employment Agreement</option>
        <option value="33">GST Matters</option>
        <option value="34">Income Tax Notice Reply</option>
    </optgroup>
</select>

                                </div>
<div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="label">Fees</div>
                                        <input class="form-control valid" name="fees" id="fees" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'e'" placeholder="">
                                    </div>
                               
                                    <div class="form-group">
                                        <div class="label">Description</div>
                
                                        <textarea class="form-control" name="description" id="description" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'details about cases'" placeholder="details about  your case"></textarea>
                                    </div>
                                                                          
                                      
                                        

                                         <div class="form-group mt-3 d-flex justify-content-center">
                                <button name="submit_btn" type="submit" class="button button-contactForm boxed-btn">Get service</button>
                            </div>
                                </div>
                            </div>

                            
                        </form>
                    </div>
                   
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
       
       
       
       <?php
        include("footer.php");
       
       ?>