<?php


class ContactFormHandler {

	//This function displays the Contact form.
    public function displayContactForm() {
    	?>
    	<div id ="contactFormSection">
	    	<form action="" id="contactForm" method="POST" enctype="multipart/form-data">
	 
			    <fieldset>
			        <label for="name">Your Name</label>
			 
			        <input type="text" name="name" id="name" />
			    </fieldset>

			    <fieldset>
			        <label for="email">Your Email</label>
			 
			        <input type="text" name="email" id="email" />
			    </fieldset>
			 
			    <fieldset>
			        <label for="content">Contents</label>
			 
			        <textarea name="content" id="content" rows="10" cols="35" ></textarea>
			    </fieldset>
			 
			    <fieldset>
			        <button type="submit" name="submitContactForm" >Send Query</button>
			    </fieldset>

			    <?php wp_nonce_field( 'submit_contact_form' , 'nonce_field_for_submit_contact_form'); ?>
	 
			</form>
		</div>
		<?php
    }
}

?>