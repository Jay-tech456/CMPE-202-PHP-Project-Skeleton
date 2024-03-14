<?php

// This will handle the post request if needed
// see if both parameters are not null
if (isset($_POST['userName']) && isset($_POST['password'])) {

    if(strcasecmp($_POST['userName'], "admin1") == 0 && strcasecmp($_POST['password'], "admin1") == 0){ 
       adminCredentials(); 
    } else { 
    checkCredentials($_POST['userName'], $_POST['password']);
    }
} else {
    echo "Please provide both username and password.";
}


function adminCredentials(){ 
    $usernames = array(); 
    try { 
        $file = fopen("./textfiles/loginInfo.txt", "r"); 
        if(!$file){ 
            throw new Exception("Cannot open the file");
        }
        while (!feof($file)) {
            $line = trim(fgets($file)); 
            
            if (!empty($line)) {
                list($text1, $text2) = explode(' ', $line);
                $usernames[] = $text1; // Add username to the array
            }
        }
        fclose($file);
    } catch (Exception $e) {
        echo $e->getMessage(); 
    }
    $string = implode(", ", $usernames); 
    echo $string;
}

    /* 
        The flow goes, parameters username and password will be entered

        connect login database will fetch the login credentials and will compare
        the parameters

        if parameters are present, then users have successfully logged in 
        or else, invalid username/passwords
    */ 
function checkCredentials($userName, $password) {
    try {
        if (isset($userName) && isset($password)) {
            $file = fopen("./textfiles/loginInfo.txt", "r");
            // Check to see if the file has open for user credentials
            if (!$file) {
                throw new Exception("Failed to open file");
            }
            
            $loginSuccessful = false;
            
            while (!feof($file)) {
                $fileContent = fgets($file);
                list($text1, $text2) = explode(' ', $fileContent);

                // delete the space characters if present
                if (trim($text1) == $userName && trim($text2) == $password) {
                    $loginSuccessful = true;
                    break;
                }
            }
            
            fclose($file);
            
            if ($loginSuccessful) {
                echo "Hello, " . $userName . ", Welcome Back";
            } else { 
                echo "Could not find login Information";
            }
        } else {
            echo "Please provide both username and password.";
        }
    } catch (Exception $e) {
        echo "" . $e->getMessage() . "";
    }
}



?>