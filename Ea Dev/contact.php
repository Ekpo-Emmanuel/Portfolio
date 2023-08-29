<?php include "./includes/header.php" ?>   
<?php 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require './sendEmails/email/src/Exception.php';
    require './sendEmails/email/src/PHPMailer.php';
    require './sendEmails/email/src/SMTP.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

?>
<?php  

    $name_name = "name";
    $email_name = "email";
    $subject_name = "subject";
    $message_name = "message";


    $name_error = "";
    $email_error = "";
    $subject_error = "";
    $message_error = "";
    $email_sent_error = "";

    if(isset($_POST["submit"])) {
        $naming = $_POST[$name_name];
        $email = $_POST[$email_name];
        $subject = $_POST[$subject_name];
        $messag = $_POST[$message_name];

        // email validation
        if(empty($email)) {
            $email_error = "Email is required!";
        } else{
            $email = trim($email);
            if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
                $email_error = "Enter a valid email";
            }
        }

        //Name validation
        if(empty($naming)) {
            $name_error = "Name is required!";
        } else {
            $naming = trim($naming);
            // $naming = htmlspecialchars($naming);
        }


        //subject validation
        if(empty($subject)) {
            $subject_error = "Subject is required!";
        } else {
            $subject = trim($subject);
            $subject = htmlspecialchars($subject);
        }

        //message validation
        if(empty($messag)) {
            $message_error = "Message is required!";
        } else {
            $messag = trim($messag);
            $messag = htmlspecialchars($messag);
        }

        //check is theres not error
        if(empty($email_error) AND empty($subject_error) AND empty($name_error) AND empty($message_error)) {

            try {       
        
                $mail->isSMTP();                                            
                $mail->Host       = 'smtp.gmail.com';                     
                $mail->SMTPAuth   = true;                                 
                $mail->Username   = 'ekpoemmanuelsg@gmail.com';           
                $mail->Password   = 'alvdlsfyvuzjxbpb';                   
                $mail->Port       = 587;                                  
        
                //Recipients
                $mail->setFrom($email, $naming);
                $mail->addAddress('ekpoemmanuelsg@gmail.com', 'Emmanuel Ekpo');     
        
                //Content
                $mail->isHTML(true);          
                $mail->Subject = $subject;
                $mail->Body    = 'Name: '. $naming .'<p>Email: '.$email.'</p><p>'.$messag.'</p>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
                $mail->send();
                $email_sent_error = "Message Successfully Sent. I will get back to you as soon as possible";


                // Wait for 5 seconds
                // sleep(5);

                // Redirect to "index.php"
                // header("Location: index.php");
            } catch (Exception $e) {
                $email_sent_error = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";                
            }
        }

    }

?>

<style>
    .val_error {
        color: red;
        font-size: 12px;
    }
    @media (max-width: 770px) {
        .resmedia {
            display: none;
        }
    }
</style>	
            <div class="page-caption">
                <canvas class="scene scene--full" id="scene"></canvas>
                <div class="spacer-300 spacer-md-200"></div>
                <div class="container">
                    <h2 class="title">Get In Touch</h2>

                    <div class="spacer-90 spacer-sm-60"></div>
                    <div class="row">
                        <div class="col-md-5 left-area">
                            <h6 class="text-anime">Got A Project Or<br>
                                A Partnership In Mind?</h6>
                        </div>
        
                        <div class="col-md-5 offset-md-2">
                            <div class="resmedia" style="transform: translate(30%,-120%)"><?php include "./components/resume.php" ?> </div>  
                            <div class="spacer-90 spacer-md-60"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="spacer-90"></div>
            <div class="container">
                <div class="contact-informations">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <h6>Send email</h6>
                                <a class="info-text" href="mailto:ekpoemmanuelsg@gmail.com">ekpoemmanuelsg@gmail.com</a>
                                <!-- <a class="info-text" href="mailto:ekpoemmanuel07@gmail.com">ekpoemmanuel07@gmail.com</a> -->

                                <div class="spacer-60"></div>
                                <h6>Call me</h6>
                                <a class="info-text" href="#">+1 236 335 5823</a>
                                <a class="info-text" href="#">+234 708 251 9332</a>
                                <div class="spacer-60"></div>
                               <h6>Socials</h6>
                               <?php foreach($socialLinks as $i) : ?>
                                <a class="info-text" href="<?php echo $i['url'] ?>" target="_blank"><?php echo $i['title'] ?></a>
                                 <?php endforeach; ?>
                        </div>
                        <div class="col-md-7 offset-md-1 col-11">
                        <!-- <div class="spacer-45"></div> -->
                            <h6>Or fill the form below</h6>
                            <p style="opacity: .5; display: block; font-size: 14px; color: green;"><?php echo $email_sent_error; ?></p>
                            <div class="spacer-45"></div>
                            <form name="contactform"  id="contactform" class="row" autocomplete="off" method="post" action="contact.php">
                                <!-- name -->
                                <div class="col-xl-12 mb-3">
                                  <span class="val_error"><?php echo $name_error; ?></span>
                                  <input type="text" style="display:none" />
                                  <input class="contact-bar" name="<?php echo $name_name; ?>" type="text" style="color: black" placeholder="Name" id="name" value="<?php 
                                        if (isset($_POST[$name_name])) {
                                            echo $_POST[$name_name];
                                        }; 
                                    ?>">
                                </div>
                                <!-- email -->
                                <div class="col-xl-12 mb-3">
                                    <span class="val_error"><?php echo $email_error; ?></span>
                                    <input class=" contact-bar" name="<?php echo $email_name; ?>" type="text" style="color: black"  placeholder="Email" id="email" value="<?php 
                                if (isset($_POST[$email_name])) {
                                    echo $_POST[$email_name];
                                }; 
                        ?>" >
                                </div>
                                <!-- subject -->
                                <div class="col-xl-12 mb-3">
                                    <span class="val_error"><?php echo $subject_error; ?></span>
                                    <input class=" contact-bar" name="<?php echo $subject_name; ?>" type="text" style="color: black"  placeholder="subject" id="subject"  value="<?php 
                                if (isset($_POST[$subject_name])) {
                                    echo $_POST[$subject_name];
                                }; 
                        ?>" >
                                </div>
                                <!-- about project -->
                                <div class="col-xl-12 mb-4">
                                    <span class="val_error"> <?php echo $message_error; ?></span>
                                    <textarea class=" contact-bar" name="<?php echo $message_name; ?>" style="color: black" id="comments" rows="3" placeholder="Send your message"></textarea>
                                </div>
                                <!-- button -->
                                <div class="col-xl-12">
                                  <input class="form-btn" type="submit" name="submit" value="SEND IT">
                                </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>

        


<?php include "./includes/footer.php" ?>   
