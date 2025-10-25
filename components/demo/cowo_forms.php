<? 
/*
 * cowo-Boilerplate
 * Built by cowowo.cat
 * Project: 
 * Component: Cookies (section)
 * Filename: cookies.php
 */
?>

<?php /*?>FOMRS:
learn all other html tags, formfieldset etc ...


fieldset


<?php */?>







<?php /*?>

GET INSPIRATON FORM HERE:
https://purecss.io/forms/

<?php */?>














<!--
BUILKDL 2 COL SUSTEM FOR HERE, TO SHOWCASE THE DIFFERET TYPES OF FORMS, NICER WAY .. 
-->









  <div class="l_gridBase_50_50">  
		 
			
		<div class="col"> 	
			<div class="m_htmleditor">
				<h5>List of forms</h5>
			</div>
			
    
      <p>
        JUST AD A CAD HERE , IAND CHECK IF THIS GRID IS GRID OR FLOAT OR WHATVE RIT ISE .
      <br>
      <br>
      1 - LOGIN<br>
      2 - CONTACT<br>
      ETC<br>
        SEACRH<br>
      SIGN UP ...<br>

      <br>
			<br>
			<br>
			<br>    
			2 fotrmats for both search & signup to newsletter<br>
			<br>
					with wrapper classes in the fomr s partial ...
			<br>
					
					
					<br>
			<br>

        
        
        build serahc form, in 1 line, with flex trickytitrick
        <br>
<br>
      and build whatever other foms you want, with oir without icon n the input wtf has to be  abutton in taht case !!!

      </p>

		</div> <!-- /col -->
    

			
    
    
		<div class="col"> 	
			<div class="m_htmleditor">
				<h5>Log-in form</h5>
			</div>
			
			<form>
				<div class="formLine">  
					<label for="email">Email</label>
					<input type="email" placeholder="Email" id="email"> <!-- IT AUTOVALIDATES !!! -->
				</div> 
				<div class="formLine">                      
					<label for="password">Password</label>
					<input type="password" placeholder="Password"         value="password"     id="password">
				</div> 
				<div class="formLine"> 
					<input type="submit" value="Log in">
					
					<!--
					MUST FIX TAB FOCUS STATE OF THIS BUTTON !!! GET SOME OUTLIINE !! OR STH !!! REVERT TO DEFAULT IF NOT BETER
					-->
					
				</div>
			</form>

		</div> <!-- /col -->
    
    
    
    
		<div class="col">  
			
			<div class="m_htmleditor">
				<h5>Contact form</h5>
			</div>
			
			<div class="s_form_contact___NOT">	
				<?php include('components/forms/form_contact.php'); ?>
			</div> <!-- /s_form_contact -->  

		</div> <!-- /col -->  
    
    
    
    
		<div class="col">  
			


			<div class="m_htmleditor">
				<h5>Search form (and sign up to newsltter (simple) </h5>
			</div>
			
			<form>
				<div class="formLine">  
					<label for="search">Search</label>
					<input type="text" placeholder="Search" id="search">
				</div> 	
				<div class="formLine"> 
					<input type="submit" value="Search">
					
					<!--
					MUST FIX TAB FOCUS STATE OF THIS BUTTON !!! GET SOME OUTLIINE !! OR STH !!! REVERT TO DEFAULT IF NOT BETER
					-->
					
				</div>
			</form>



			
			<form class="onerow">
				<div class="formLine">  
					<label for="search">Search</label>
					<input type="text" placeholder="Search" id="search">
				</div> 	
				<div class="formLine"> 
					<input type="submit" value="Search">
					
					<!--
					MUST FIX TAB FOCUS STATE OF THIS BUTTON !!! GET SOME OUTLIINE !! OR STH !!! REVERT TO DEFAULT IF NOT BETER
					-->
					
				</div>
			</form>
			
			
			<form class="onerow">
				<div class="formLine">  
					<label for="signup">Sign Up</label>
					<input type="text" placeholder="Your Email" id="signup">
				</div> 	
				<div class="formLine"> 
					<input type="submit" value="Search">
					
					<!--
					MUST FIX TAB FOCUS STATE OF THIS BUTTON !!! GET SOME OUTLIINE !! OR STH !!! REVERT TO DEFAULT IF NOT BETER
					-->
					
				</div>
			</form>



		</div> <!-- /col -->
			
			

    







    
    
    
    
    
    
		<div class="col"> 	
			<div class="m_htmleditor">
				<h5>Repo</h5>
			</div>
			
			<form>
        <div class="formLine">  
          <label for="name">Name</label>
          <input type="text" placeholder="Name" id="name">
        </div>         
				<div class="formLine">  
					<label for="email">Email</label>
					<input type="email" placeholder="Email" id="email"> <!-- IT AUTOVALIDATES !!! -->
				</div> 
				<div class="formLine">                      
					<label for="password">Password</label>
					<input type="password" placeholder="Password"         value="password"     id="password">
				</div> 
        
        
        <div class="formLine">                      
          <label for="message">Message</label>
          <textarea name="message" placeholder="Message" id="message"></textarea>
        </div>  

        
  
        <div class="formLine"> 
          <label for="lable_whatever___NOT"/>Text</label>
          <input type="text"/>
        </div> 
        <div class="formLine">   
          <label for="lable_whatever___NOT"/>Select</label>
          <select name="mes">
              <option value="gener">gener</option>
              <option value="febrer">febrer</option>
              <option value="març">març</option>
              <option value="abril">abril</option>
          </select>
        </div>
        
        
		

        <div class="formLine">   
          <label for="lable_whatever___NOT"/><?php /*?>Field 3 <?php */?>Checkbox / Switch</label><br>
          <input type="checkbox" switch id="lable_whatever"/> <label for="lable_whatever" class="linkable_OR_WHATEVER_BUT_sOMETHING"/>OK, I Understand!</label>

		  <input type="checkbox" switch />
		ony availabe in safar for now <!DOCTYPE html>

		
        </div> 
		
		

        <div class="formLine">   
          <label for="lable_whatever___NOT"/><?php /*?>Field 3 <?php */?>Checkbox</label><br>
          <input type="checkbox" id="lable_whatever"/> <label for="lable_whatever" class="linkable_OR_WHATEVER_BUT_sOMETHING"/>OK, I Understand!</label>
        </div> 
        <div class="formLine"> 
          <label for="lable_whatever___NOT"/><?php /*?>Field 4 <?php */?>Radio Buttons</label><br>
          <input type="radio" name="whatever" id="radio_1"/> <label for="radio_1" />radio_1</label>  
          <input type="radio" name="whatever" id="radio_2"/> <label for="radio_2" />radio_2</label>
        </div> 




				<div class="formLine"> 
					<input type="submit" value="Log --- in">
					
					<!--
					MUST FIX TAB FOCUS STATE OF THIS BUTTON !!! GET SOME OUTLIINE !! OR STH !!! REVERT TO DEFAULT IF NOT BETER
					-->
					
				</div>



        <div class="formLine">          
          <input type="submit" value="Submit"/>    
          <input type="reset" value="Reset"/>
        </div> 



			</form>

		</div> <!-- /col -->
    
    
    
      
      
    <?php /*?>TODO - INCLUDE FOMR_CONTACT  POR EJEMPLO, VS FOMR:LOGIN_FORM_NEWLSTTER, ETC <?php */?>

    
    
    
    

		
		

		
		
		<div class="col">  

			
			
			<div class="m_htmleditor">
				<h3>Form type 1</h3>
			</div>
	
			<form>
				<?php /*?><fieldset disabled><?php */?>
				<fieldset>
					<legend>Form Fieldset Legend</legend>

					<div class="formLine">  
							<label>Text</label>
							<input type="text" placeholder="Text">
					</div> 

					<div class="formLine">  
							<label>Email</label>
							<input type="email" placeholder="Email">
					</div> 

					<div class="formLine">                      
							<label>Password</label>
							<input type="password" value="password">
					</div> 


				</fieldset>



				<div class="formLine">
					<label>Select an option</label>                      
						<select name="cars">
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="fiat">Fiat</option>
								<option value="audi">Audi</option>
						</select>
				</div>                

				<div class="formLine">
					<label>Select with option groups</label>                      
						<select>
							<optgroup label="Swedish Cars">
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
							</optgroup>
							<optgroup label="German Cars">
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
							</optgroup>
						</select>
				</div> 

				<div class="formLine">                    
						<label>Textarea</label>
						<textarea name="description" placeholder="Textarea"></textarea>
				</div>

				<div class="formLine">  
						<label>Checkbox</label><br>
						<input type="checkbox" id="lable_whatever"/> <label for="lable_whatever" />Checkbox</label>
				</div>

				<div class="formLine">  
						<label>Radio Boxes</label><br>
						<input type="radio" name="whatever" id="radio_1"/> <label for="radio_1" />radio_1</label>  
						<input type="radio" name="whatever" id="radio_2" checked="checked"/> <label for="radio_2" />radio_2</label>                    
				</div>

				<div class="formLine">
						<label>File</label>
						<input type="file">
				</div>                        

				<div class="formLine"> 
						<input type="submit" value="Submit">
				</div>

				<div class="formLine"> 
						<input type="reset" value="Reset">
				</div>

			</form>


		</div> <!-- /col -->	










		<div class="col">  

			<div class="m_htmleditor">
				<h3>Form type x</h3>
			</div>
			
			
		</div> <!-- /col -->




		<div class="col">  
			col
		</div> <!-- /col -->	



  </div> <!-- /l_gridBase_50_50 -->





























<form>

<div class="formLine"> 
  <label>Button</label>
    <br>
    <button type="button" onclick="alert('Hello World!')">Click Me!</button>
</div>


<div class="formLine">
  <label>Datalist</label>
    <br>
    <input list="browsers" name="browser">
    <datalist id="browsers">
      <option value="Internet Explorer">
      <option value="Firefox">
      <option value="Chrome">
      <option value="Opera">
      <option value="Safari">
    </datalist>

</div>





<div class="formLine"> 
  <label>Keygen</label>
</div>




<div class="formLine"> 
  <label>Number (requires validation...)</label>
    <br>
    <input type="number" name="quantity" min="1" max="5">
</div>


                


<div class="formLine"> 
  <label>Date</label>
    <br>
    <input type="date">
    
    
    <br>
<br>

    
Enter a date before 1980-01-01:<br>
<input type="date" name="bday" max="1979-12-31"><br><br>
Enter a date after 2000-01-01:<br>
<input type="date" name="bday" min="2000-01-02"><br><br>  
  
</div>



<div class="formLine"> 
  <label>Color</label>
    <br>
    <input type="color" name="favcolor" value="#ff0000">
</div>


<div class="formLine"> 
  <label>Range (slider)</label>
    <br>
    <input type="range" name="points" min="0" max="10">
</div>
        

<br>
<br>
<br>  
  for css - tip - define stuff generically for all inputs with input of course, no cal types a no ser que luego si.<br>
<br>
<br>
              
                
<br>
<br>



								<div class="frontWrapper_sectionTitle">TIME & DATE STUFF !!!!</div>

                <div class="formLine"> 
                	<label>Time</label>
                    <br>
                    <input type="time" name="usr_time">
                </div>
                <div class="formLine"> 
                	<label>Month ((month and year))</label>
                    <br>
                    <input type="month" name="bdaymonth">
                </div>
                <div class="formLine"> 
                	<label>Color</label>
                    <br>
                    <input type="color" name="favcolor" value="#ff0000">
                </div>
            </form>
            
            
    
    

HTML5 INPUT TYPES
<!-- HTML5 INPUT TYPES ------------------------------------ -->


<pre><code>
HTML5 New Input Types
HTML5 has several new input types for forms. These new features allow better input control and validation.

This chapter covers the new input types:

color
date
datetime
datetime-local
email
month
number
range
search
tel
time
url
week
</code></pre>


<!-- HTML5 Input type color ------------------------------------ -->

color - para la web de quim !!!!!!!
<form action="demo_form.asp">
  Select your favorite color: <input type="color" name="favcolor"><br>
  <input type="submit">
</form>

<br>
<br>
<br>


date
<form action="demo_form.asp">
  Birthday: <input type="date" name="bday">
  <input type="submit">
</form>



datetime ?????
<form action="demo_form.asp">
  Birthday (date and time): <input type="datetime" name="bdaytime">
  <input type="submit">
</form>




datetime-local
<form action="demo_form.asp">
  Birthday (date and time): <input type="datetime-local" name="bdaytime">
  <input type="submit">
</form>




email (VALIDATION !!!)
<form action="demo_form.asp">
  E-mail: <input type="email" name="usremail"><br>
  <input type="submit">
</form>


month
<form action="demo_form.asp">
  Birthday (month and year): <input type="month" name="bdaymonth">
  <input type="submit">
</form>



number
<form action="demo_form.asp">
  Quantity (between 1 and 5): <input type="number" name="quantity" min="1" max="5">
  <input type="submit">
</form>

range


search


tel
time

url


week

    