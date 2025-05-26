<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challenge-one</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Greeting Page</h1>
    <form action="" method="post">
        <label for="name">Your name:
            <input type="text" name="name" id="name" placeholder=" Enter you name..">
        </label>
        <button type="submit">Send</button>
    </form>

    

    <?php
    $users = ['Osama', 'Anas', 'Yasser', 'Ahmed'];
    $greeting_massage = ' Welcome to our website  Mr.';
    isset($_POST['name']) ? $input_user_name = $_POST['name'] : $input_user_name = null;

    function greeting($input_name, $my_users, $greeting_massage)
    {
        if ($input_name) {
            $is_provided = false;
            for ($i = 0; $i < count($my_users); $i++) {
                if ($my_users[$i] === $input_name) {
                    echo '<h3 class="greaten-massage">' . $greeting_massage . $input_name . '</h3>' ;
                    $is_provided = true;
                    break;
                }
            }
            if (!$is_provided) {
                echo '<h3 class="greaten-massage"> This name  is not provided .. check if the first letter is capitalized. </h3>' ;
            }
        } else {
            echo  '<h3 class="greaten-massage"> please enter your name. The first letter must be capitalized!</h3>';
        }
    }

    greeting($input_user_name, $users, $greeting_massage);


    ?>



</body>

</html>