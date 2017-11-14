<?php
$action=$_REQUEST['action'];
if ($action=="contact-form")    /* display the contact form */
    {
    ?>
    <form id="contact-form" class="form cf">
            <h3 class="heading col-100"><i class="fa fa-paper-plane" aria-hidden="true"></i> Pošaljite Prijavu !</h3>

            <div class="col cf">

                <div class="form-row cf">
                    <label for="input-name">Ime i Prezime: *</label>
                    <input type="text" name="input-name" id="input-name">
                </div>

                <div class="form-row cf">
                    <label for="input-company">Grad i Država: *</label>
                    <input type="text" name="input-company" id="input-company">
                </div>


                <div class="form-row cf">
                    <label for="input-email">E-mail: *</label>
                    <input type="text" name="input-email" id="input-email">
                </div>
            </div>

            <div class="col cf">

                <div class="form-row cf">
                    <label for="input-phone">Telefon: *</label>
                    <input type="text" name="input-phone" id="input-phone">
                </div>

                <div class="form-row cf">
                    <label for="select-region">Sa ili bez smejštaja: *</label>
                    <select id="select-region" name="select-region">
                        <option value=""></option>
                        <option value="Sa Smeštajem">Sa Smeštajem</option>
                        <option value="Bez Smeštaja">Bez Smeštaja</option>
                    </select>
                    <input type="submit" name="submit" value="Pošalji !" class="btn send-btn">
                </div>
            </div>
            
            <!-- <div class="form-row col-100 cf">
                <label for="textarea-message">Poruka: *</label>
                <textarea id="textarea-message" name="textarea-message"></textarea>
            </div>  -->
            
            <!-- <div class="form-row col-100 cf"> 
                <input type="submit" name="submit" value="Pošalji !" class="btn send-btn">
            </div> -->
        </form>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['input-name'];
    $name=$_REQUEST['input-company']
    $name=$_REQUEST['input-email']
    $name=$_REQUEST['input-phone']
    $value=$_REQUEST['value'];
    if (($name=="")||(($name=="")||((($name=="")||((($name=="")
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		// mail("youremail@yoursite.com", $subject, $message, $from);
		echo "Email sent!";
	    }
    }  
?>