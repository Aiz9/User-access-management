<?php 
include_once 'navbar.php';
require 'includes/login.check.user.php';
require 'includes/login.user.php';
?>
<title>Tesla | Contact</title>
<main>
<h1>Contact US</h1>
<div class="contact">
<div class="sales">
        <h4>Sales</h4>
        <p>Visit our <a href="https://www.tesla.com/findus/store">Find us</a> to locate your nearest Tesla store</p><br/>
        <br/>
        <h4>Customer Support & Roadside Assistance</h4>
        <p>Visit our <a href="https://www.tesla.com/support">Support</a> page to find answers and learn about our products.</p><br/>
        Emergency RoadsideAssistant:<br/>
        <a href="https://www.tesla.com/roadside-assistance">International Phone Numbers</a><br/>
        <a href="https://www.tesla.com/vin-recall-search">Safety Recall Information</a><br/>
    </div>

    <div class="careers">
        <h4>Careers</h4>
        <p>Visit our <a href="https://www.tesla.com/careers">Careers</a> page for a list of current <br/>employment opportunities.</p><br/>
        <br/>
        <h4>Customer Support & Roadside Assistance</h4>
        <p>Visit our <a href="https://www.tesla.com/firstresponders">first responders</a> page to download <br/>Tesla reference guides for emergency<br/> personnel.</p><br/>
    </div>

    <div class="press">
         <h4>Press</h4>
         North America<br/>
         <a href="mailto: press@tesla.com">Press@tesla.com</a><br/><br/>
         Europe & Middle East<br/>
         <a href="mailto: eupress@tesla.com">EUpress@tesla.com</a><br/><br/>
         Austrlia & Asia<br/>
         <a href="mailto: apacpress@tesla.com">APACPress@tesla.com</a><br/><br/>
         China<br/>
         <a href="mailto: china-press@tesla.com">China-Press@tesla.com</a><br/><br/>

    </div>
</div>
<div class="location-question-form">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.819818483832!2d-122.15238048466428!3d37.39409317983051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb075776f1c3b%3A0xccc17e4da6b38370!2sTesla%20HQ!5e0!3m2!1sen!2snp!4v1633279658547!5m2!1sen!2snp" width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <div class="question-form">
    <b>Submit a question or comment</b><br/>
    Many common questions are answered on our <a href="https://www.tesla.com/blog">Blog</a>  and <a href="https://www.tesla.com/support">Support</a>  pages.<br/><br/>
    <form class="questions" action="includes/questions.inc.php" method="POST">
        <label for="firstname" class="questions-form-label">First name</label><br/>
        <input  class="question-input" type="text" name="firstname" placeholder="First name"><br/>

        <label for="Lastname" class="questions-form-label">Last name</label><br/> 
        <input class="question-input" type="text" name="lastname" placeholder="Last name"><br/>

        <label for="email" class="questions-form-label">E-mail</label><br/> 
        <input class="question-input" type="email" name="mail" placeholder="Your e-mail"> <br/>

        <label for="subject" class="questions-form-label">Subject</label><br/>
        <input class="question-input" type="text" name="subject" placeholder="Subject"><br/>

        <label for="firstname" class="questions-form-label">Question/Comment</label><br/> 
        <textarea name="message"  cols="80" rows="0" placeholder="Message"></textarea> <br/>
        <button type="submit" name="submit">Submit</button>
</form>
    </div>
</div>
</main>
<?php
include_once('footer.php');
?>