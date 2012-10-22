<?php
/* writing into a text file */

// create variables for file path and file name
$myFilePath = "files/";
$myFileName = "form_data_file.txt";

//set up temp data variables for testing
 $first_name = "Charles";
 $last_name = "Wyke-Smith";
 $email = "charles@bbd.com";
 $msg = "PHP is sooooo very easy!";
 // assemble all the form data and delimiters for a record (a line in the file) in a variable
 //put tabs between each of the elements of the record and a new line on the end
 $form_data = $first_name . "\t" . $last_name . "\t" . $email . "\t" . $msg . "\n";
 //open the file (a+ sets file position indicator to end of file)
 $myPointer = fopen($myFilePath.$myFileName, "a+");
 //append the data to file 
 fputs ($myPointer, $form_data);
 //close the file
 fclose($myPointer);
 //TEST: view the data on screen - temporary
 print ($form_data);
?>
