<?php

// Function to extract email addresses from a text file
function extract_email_from_file($file_path) {
  // Read the file into a string
  $file_contents = file_get_contents($file_path);

  // Use regular expression to extract email addresses
  preg_match_all("/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/", $file_contents, $matches);

  // Return the extracted email addresses
  return $matches[0];
}

// Example usage
$file_path = "emails.txt";
$email_addresses = extract_email_from_file($file_path);
print_r($email_addresses);

?>
