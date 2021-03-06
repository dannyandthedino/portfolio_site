<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
<?php
	// Include the page with the send mail functions
	require_once("includes/mailer.php");
?>

<div id="tihidContainer">
	<div class="formHeader"><h1>CONTACT ME</h1></div>
    <!-- If the form has not been submitted or has errors, display it. -->
    <?php if($formCompleted === false){ ?>
   	<form id="tihidForm" method="post">
    	<div class="inpuWrap">
           	<label for="fullName">NAME</label>
            <!-- The value attribute contains php that checks if fullname has been posted. If yes, it echos it -->
            <input type="text" name="fullName" value="<?php echo isset($_POST['fullName'])? $_POST['fullName'] : ''; ?>" tabindex="1" autofocus required>
            <!-- If fullname has not passed validation, echo fullname error message-->
            <?php if(in_array('fullName', $Validation)){ ?>
            	<span class="error"><?php echo $errorMessages['fullName']; ?></span>
			<?php } ?>
        </div>
    
        <div class="inpuWrap">
            <label for="email">EMAIL</label>
            <!-- The value attribute contains php that checks if email has been posted. If yes, it echos it -->
            <input type="email" name="email" value="<?php echo isset($_POST['email'])? $_POST['email'] : ''; ?>" tabindex="2" required>
            <!-- If Email has not passed validation, echo Email error message -->
            <?php if(in_array('email', $Validation)){ ?>
            	<span class="error"><?php echo $errorMessages['email']; ?></span>
			<?php } ?>
        </div>
        
        <div class="inpuWrap">
            <label for="Subject">SUBJECT</label>
            <!-- The value attribute contains php that checks if subject has been posted. If yes, it echos it -->
            <input type="subject" name="subject" value="<?php echo isset($_POST['subject'])? $_POST['subject'] : ''; ?>" tabindex="3" required>
            <!-- If Subject has not passed validation, echo Subject error message -->
            <?php if(in_array('subject', $Validation)){ ?>
            	<span class="error"><?php echo $errorMessages['subject']; ?></span>
			<?php } ?>
        </div>
    
        <div class="inpuWrap">
            <label for="message">MESSAGE</label>
            <!-- The value attribute contains php that checks if the message has been posted. If yes, it echos it -->
            <textarea name="message" tabindex="4" required><?php echo isset($_POST['message'])? $_POST['message'] : ''; ?></textarea>
            <?php if(in_array('message', $Validation)){ ?>
            	<!-- If Message has not passed validation, echo Message error message -->
            	<span class="error"><?php echo $errorMessages['message']; ?></span>
			<?php } ?>
        </div>
        <div class="inpuWrap">
            <button type="submit" class="submitBtn">Send <i class="fa fa-angle-right"></i> </button>
        </div>
    </form>
    <!-- If the form has been submitted and has no errors, display the Success Message. -->
    <?php 
	}else{ 
	?>
    <!-- After sending the message, show success message -->
    <p>Message sent successfully! It's a pleasure hearing from you!</p>
    <script type="text/javascript">
   		setTimeout("afterSendingLocation()", 5000);
       	function afterSendingLocation() {
			// Replace this with the page you want to redirect to after sending the message
			location.href="index.php";
		}
     </script>
    <?php 
	} 
	?>
</div><!-- #tihidWrapper -->


<?php get_footer(); ?>