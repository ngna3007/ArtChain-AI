<?php 
function sanitise_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// function postcode_states_matching($postcode, $state) {

// }

// Define a flag variable to track validation status
$isValid = true;

// Check if the user actually submitted the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jobRef = sanitise_input($_POST["job-ref"]);
    $firstName = sanitise_input($_POST["First-name"]);
    $lastName = sanitise_input($_POST["Last-name"]);
    $bod = sanitise_input($_POST["bod"]);
    $gender = isset($_POST["Gender"]) ? sanitise_input($_POST["Gender"]) : "";
    $street = sanitise_input($_POST["Address"]);
    $town = sanitise_input($_POST["Town"]);
    $state = sanitise_input($_POST["State"]);
    $postcode = sanitise_input($_POST["postcode"]);
    $email = sanitise_input($_POST["email"]);
    $phone = sanitise_input($_POST["Phone-number"]);
    $other_skills = isset($_POST["Other-skills"]) ? sanitise_input($_POST["Other-skills"]) : NULL;

    $skills = isset($_POST["Skill"]) ? $_POST["Skill"] : [];
    // Serialize the array of skills
    $serialized_skills = serialize($skills);

    // Error message
    $errorMessage = "";

    if ($jobRef == ""){
        $errorMessage .= "<p>Job Reference Number is required.</p>";
        $isValid = false;
    }elseif (!preg_match("/^[A-Za-z0-9]{5}$/", $jobRef)){
        $errorMessage .= "<p>Enter in exactly 5 alphanumeric characters. </p>";
        $isValid = false;
    }

    if ($firstName == "") {
        $errorMessage .= "<p>You must enter your first name.</p>";
        $isValid = false;
    } elseif (!preg_match("/^[A-Za-z]{1,20}$/", $firstName)) {
        $errorMessage .= "<p>Only alpha letters allowed in your first name.</p>";
        $isValid = false;
    }

    if ($lastName == "") {
        $errorMessage .= "<p>You must enter your last name.</p>";
        $isValid = false;
    } elseif (!preg_match("/^[A-Za-z]{1,20}$/", $lastName)) {
        $errorMessage .= "<p>Only alpha letters and hyphen are allowed in your last name. </p>";
        $isValid = false;
    }

    // Validate if the email is in the correct format
    $pattern = "`^(?=.{1,256})(?=.{1,64}@.{1,255}$)[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$";

    if (preg_match($pattern, $email)) {
        echo "Valid email address";
    } else {
        echo "Invalid email address";
    }
    // Validate if the date is in the correct format and is a valid date
    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $bod) || !strtotime($bod)) {
        $errorMessage .= "<p>Invalid date of birth format. Please use YYYY-MM-DD.</p>";
        $isValid = false;
    } else {
        // Convert the date to DateTime object for further validation
        $dateOfBirth = new DateTime($bod);
        
        // Calculate age
        $currentDate = new DateTime();
        $age = $dateOfBirth->diff($currentDate)->y;
    
        if ($age < 15 || $age > 80) {
            $errorMessage .= "<p>Date of birth must be between 15 and 80 years ago.</p>";
            $isValid = false;
        }
    }


    if ($gender == "") {
        $errorMessage .= "<p>You must select a gender.</p>";
        $isValid = false;
    }

    if ($street == "") {
        $errorMessage .= "<p>You must enter your street address.</p>";
        $isValid = false;
    }elseif(!preg_match("/^.{1,40}$/", $street)){
        $errorMessage .= "<p> Street adress is only allowed 40 characters long. </p>";
        $isValid = false;
    }

    if ($town == "") {
        $errorMessage .= "<p>You must enter your suburb/town.</p>";
        $isValid = false;
    }elseif(!preg_match("/^.{1,40}$/", $town)){
        $errorMessage .= "<p> Town/Suburb is only allowed 40 characters long. </p>";
        $isValid = false;
    }

    if ($phone == "") {
        $errorMessage .= "<p>You must enter your phone number.</p>";
        $isValid = false;
    }elseif(!preg_match("/^[0-9\s]{8,12}$/", $phone)){
        $errorMessage .= "<p> Please enter the valid phone number. </p>";
        $isValid = false;
    }


    if ($state == ""){
        $errorMessage .= "<p> You must choose your state. </p>";
        $isValid = false; }
    // }elseif(!postcode_states_matching($postcode, $state))
     
    // If there are any errors, display error message and redirect
    if (!$isValid) {
        echo $errorMessage;
        echo '<a href="apply.php"> <br> <br>Click here to go back to the application form</a>';
    } else {
        try {
            require_once "settings.php";

            // Check if the eoi table exists, if not, create it
            $stmt = $pdo->query("SHOW TABLES LIKE 'eoi'");
            if ($stmt->rowCount() == 0) {
                $query = "CREATE TABLE eoi (
                            EOInumber INT AUTO_INCREMENT PRIMARY KEY,
                            jobRef VARCHAR(5),
                            firstName VARCHAR(20),
                            lastName VARCHAR(20),
                            bod DATE,
                            gender VARCHAR(10),
                            street VARCHAR(40),
                            town VARCHAR(40),
                            state VARCHAR(3),
                            postcode VARCHAR(4),
                            email VARCHAR(255),
                            phone VARCHAR(12),
                            skills TEXT,
                            other_skills TEXT,
                            status VARCHAR(10) DEFAULT 'New'
                        )";
                $pdo->exec($query);
            }

            $query = "INSERT INTO eoi (jobRef, firstName, lastName, bod, gender, street, town, state, postcode, email, phone, skills, other_skills) VALUES (:jobRef, :firstName, :lastName, :bod, :gender, :street, :town, :state, :postcode, :email, :phone, :skills, :other_skills)";

            // Prepared statement
            $stmt = $pdo->prepare($query);

            // Bind parameters
            $stmt->bindParam(':jobRef', $jobRef);
            $stmt->bindParam(':firstName', $firstName);
            $stmt->bindParam(':lastName', $lastName);
            $stmt->bindParam(':bod', $bod);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':street', $street);
            $stmt->bindParam(':town', $town);
            $stmt->bindParam(':state', $state);
            $stmt->bindParam(':postcode', $postcode);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':skills', $serialized_skills);
            $stmt->bindParam(':other_skills', $other_skills);

            // Execute the statement
            $stmt->execute();

            // Generate a unique EOI number
            $EOInumber = uniqid();

            // Close connections
            $pdo = null;
            $stmt = null; 

            echo "Your form is submitted. Your application EOI is: " . $EOInumber;
            echo '<a href="index.php"> <br> <br>Click here to go back to the index page</a>';
        } catch(PDOException $e){
            die("Query Failed: " . $e->getMessage());
        }
    }
}
?>


// https://emaillistvalidation.com/blog/mastering-php-email-validation-using-regular-expressions-an-experts-guide

// https://emaillistvalidation.com/blog/mastering-regex-for-email-validation-the-ultimate-guide