<?php

session_start();


// ! Change this

// First Delete the Current information from of the current logged in user from the json file

        // Read the JSON file
        $data = file_get_contents('../../Data/data.json');

        // Decode the JSON data into an array
        $data_array = json_decode($data, true);

        $index = -1;
        // Loop through the array and find the row to delete
        foreach ($data_array as $key => $value) {
            if ($value['e-mail'] == $_SESSION["P_mail"]) {
                // Remove the row from the array
                // unset($data_array[$key]);
                $index = $key;
                break;
            }
        }
        if ($index >-1 && is_array($data_array)) {
            unset($data_array[$index]);
        }

        // Encode the updated data back into JSON format
        $new_data = json_encode($data_array);

        // Write the updated data back to the file
        file_put_contents('../../Data/data.json', $new_data);
        header('Location:../Views/Adopter/Login.php')






?>