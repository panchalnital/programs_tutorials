<?php

/*When a file is uploaded to a server, it is stored in a temporary location on the server until it is processed. The information about the uploaded file is stored in the $_FILES superglobal array. The $_FILES array contains several key-value pairs, including:

    $_FILES['userfile']['name'] - The original name of the uploaded file.
    $_FILES['userfile']['type'] - The MIME type of the uploaded file.
    $_FILES['userfile']['size'] - The size of the uploaded file in bytes.
    $_FILES['userfile']['tmp_name'] - The temporary location of the uploaded file on the server.
    $_FILES['userfile']['error'] - An error code indicating if there was an issue during the file upload.*/


    if (move_uploaded_file($_FILES['userfile']['tmp_name'], "uploads/{$_FILES['userfile']['name']}")) {
        echo "The file has been uploaded.";
      } else {
        echo "There was an error uploading the file.";
      }

      