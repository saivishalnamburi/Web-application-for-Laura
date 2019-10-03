<?php
  // Warning: The uniqid() function does not create random or unpredictable strings.
  // The uniqid() function should not be used for security purposes. Use a secure
  // string function instead.
  echo uniqid(); // generates unique ID
  echo '<br>';
  echo uniqid('id'); // generates unique ID with prefix of 'id'
  echo '<br>';
  echo uniqid('id',true); // generates unique ID with prefix of 'id' and increased entropy
  echo '<br>';
  echo md5(time() . mt_rand(1,1000000)); // using md5 to create random string
?>