<!DOCTYPE html>
<html class="app-html" lang="en">
<?php include('header.inc')?>
<body class="app-body">

    <section class="header-main index-section">
    <?php include('menu.inc')?>
    </section>

    <section class="containerf">
        <h2 class="form-title">Job Application Form</h2>
        <p class="form-sub-title">Please fill out the form below to submit your Job Application!</p>
        <br>
        <hr>
        <form class="form" action="processEOI.php" method="post" novalidate="novalidate">
            <div class="input-box">
                <label class="apply-label" for="job-ref" style="min-height: 12px;">Job Reference Number</label>
                <input type="text" class="textbox" id="job-ref" pattern="[A-Za-z0-9]{5}" title="Please enter exactly 5 alphanumeric characters." placeholder="Enter the job reference number" name="job-ref"required>
            </div>
            
            <div class="column">
                <div class="input-box">
                    <label class="apply-label" for="first-name" style="min-height: 12px;">First Name</label>
                    <input class="textbox" type="text" name="First-name" id="first-name"  placeholder="First name" pattern="([a-z][A-Z]){,20}" required>
                </div>
    
                <div class="input-box">
                    <label class="apply-label" for="last-name" style="min-height: 12px;">Last Name</label>
                    <input class="textbox" type="text" name="Last-name" id="last-name" placeholder="Last name" pattern="([a-z][A-Z]){,20}" required>
                </div>
            </div>
            <div class="input-box">
                <label class="apply-label" for="job-ref" style="min-height: 12px;">Email Adress</label>
                <input type="text" class="textbox" id="job-ref" pattern="[A-Za-z0-9]{5}" title="Please enter exactly 5 alphanumeric characters." placeholder="Enter your email" name="email"required>
            </div>

            <div class="column">
                <div class="input-box">
                    <label class="apply-label" for="birth-date">Date of Birth</label>
                    <input class="date textbox" type="date" id="birth-date" name="bod">
                </div>
    
                <div class="input-box">
                    <label class="apply-label" for="phone-number">Phone Number</label>
                    <input class="textbox" type="text" name="Phone-number" id="phone-number" placeholder="(000) 000-0000" pattern="[0-9 ]{0,12}" title="Please enter up to 12 digits or spaces" required>
                </div>
            </div>

            <div class="input-box"></div>
            <fieldset>
                <legend class="gender-label"><span class="gender-span">Gender</span></legend>
                <div class="gender-border-fix">
                <div class="gen-pos">
                    <div class="male gender">
                        <input type="radio" id="male" name="Gender" value="Male" required="required">
                        <label for="male" class="gender-label">Male</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="female" name="Gender" value="Female" required="required">
                        <label for="female" class="gender-label">Female</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="other-gender" name="Gender" value="Other" required="required">
                        <label for="other-gender" class="gender-label">Other</label>
                    </div>
                </div>
                </div>
            </fieldset>

            <div class="input-box" id="address">
                <label class="apply-label" for="address">Address</label>
                <input class="textbox" type="text" id="street-address" name="Address" placeholder="Enter street address" pattern="^[a-zA-Z0-9\s,'-]{1,100}$" required>
                <input class="textbox" type="text" id="town/suburb" name="Town" placeholder="Enter suburb/town" pattern="^[a-zA-Z0-9\s,'-]{1,100}$" required>
                <div class="column">
                    <div class="select-box">
                        <label id="label" for="state"></label>
                        <select class="state-input" id="state" name="State">
                            <option value="None">Please Select</option>		
                            <option value="VIC">VIC</option>
                            <option value="NSW">NSW</option>
                            <option value="QLD">QLD</option>	
                            <option value="NT">NT</option>		
                            <option value="WA">WA</option>
                            <option value="SA">SA</option>
                            <option value="NSW">TAS</option>
                            <option value="NSW">ACT</option>
                        </select>
                    </div>
        
                    <input class="textbox" type="text" id="postcode_3" placeholder="Enter postcode" pattern="[0-9]{4,10}" title="postcode must be exactly 4 digits" name="postcode" required>
                    </div>
                </div>


            <fieldset>
                <legend class="skill-label"><span class="skill-span">Skill Lists</span></legend>
                <div class="skill-border-fix">
                    <div class="skill-pos">
                        <div class="skill" >
                            <input type="checkbox" id="HTML" name="Skill[]" value="HTML">
                            <label for="HTML" class="skill-label">HTML</label>
                        </div>
                        <div class="skill">
                            <input type="checkbox" id="CSS" name="Skill[]" value="CSS">
                            <label for="CSS" class="skill-label">CSS</label>
                        </div>
                        <div class="skill">
                            <input type="checkbox" id="js" name="Skill[]" value="JavaScript">
                            <label for="js" class="skill-label">JavaScript</label>
                        </div>
                        <div class="skill">
                            <input type="checkbox" id="PHP" name="Skill[]" value="PHP">
                            <label for="PHP" class="skill-label">PHP</label>
                        </div>
                        <div class="skill">
                            <input type="checkbox" id="MySQL" name="Skill[]" value="MySQL">
                            <label for="MySQL" class="skill-label">MySQL</label>
                        </div>
                        <div class="skill">
                            <input type="checkbox" id="Other" name="Skill[]" value="Other">
                            <label for="Other" id="other-skill" class="skill-label">Other Skills</label>
                        </div>
                    </div>    
                </div> 
            </fieldset>

            <div class="cover-letter_0">
                <span class="cover-letter_1 apply-label">Other Skills</span>
                <div class="pos">
                    <div class="cover-letter_2">
                        <textarea class="textbox" name="Other-skills" id="cover-letter_3" placeholder="List your skills here."></textarea>
                    </div>
                </div>
            </div>
            
            <div class="up-res_0">
                <span class="up-res_1 apply-label">Upload Resume</span>
                <span class="required" id="required-fix"></span>
                <div class="pos">
                    <div class="up-res_2">
                        <i class="fa fa-cloud-upload" id="fa0" ></i>
                        <input class="textbox" name="Resume" type="file" id="up-res_3">
                        <label id="up-res-label_0" for="up-res_3">lllllllllllllllllll</label>
                        <label id="up-res-label_1" for="up-res_3">Upload a File</label>
                        <label id="up-res-label_2" for="up-res_3">Click here to upload files!</label>

                    </div>
                </div>
            </div>
            
            <div class="up-doc_0">
                <span class="up-doc_1 apply-label">Any Other Documents to Upload</span>
                <div class="pos">
                    <div class="up-doc_2">
                        <i class="fa fa-cloud-upload" id="fa1"></i>
                        <input class="textbox" name="Documents" type="file" id="up-doc_3">
                        <label id="up-doc-label_0" for="up-doc_3">lllllllllllllllllll</label>
                        <label id="up-doc-label_1" for="up-doc_3">Upload a File</label>
                        <label id="up-doc-label_2" for="up-doc_3">Click here to upload files!</label>

                    </div>
                </div>
            </div>

            <button>Submit</button>
        </form>
    </section>

    <?php include('footer.inc') ?>
</body>

</html>

