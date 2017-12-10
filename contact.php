<?php 

/* Template Name: Contact Us */ 

?>

<?php get_header(); ?>



<div class="container">

  
    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <div class="content">
             
               <h2>Contact Us </h2>

	<br>
	<br>
	
	<input type="text" name="yourname" id="firstname" class="question-form" rows="1" value="" placeholder="First Name" /> 

	<input type="text" name="yourname" id="lastname" class="question-form" rows="1" value="" placeholder="Last Name" /> <br /><br /> 

	<input type="text" name="yourname" id="phone" class="question-form" rows="1" value="" placeholder="Phone Number" />  

	<input type="text" name="email" id="email" class="question-form" rows="1" value="" placeholder="Email" /> <br /><br /> 

	<input type="text" name="subject" id="subject" class="question-form" rows="1" value="" placeholder="Subject"></p> 

	<textarea name="message" id="message" placeholder="Please write your enquiry here"></textarea> <br /><br /> 

	<input type="submit" name="submit" id="submit" value="Submit"/> </form> 








             </div>
        </div>

        <div class="col-xs-12 col-sm-3">
            <?php get_sidebar(); ?>
        </div>
    </div>



	


</div>

<br>
<br>
<br>
<br>

<?php get_footer(); ?>




