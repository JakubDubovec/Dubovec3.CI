<?php
$validated = true;
$password_match = true;


if( !empty($_POST["username"]))
{
    echo "zadal si username <br>";
}
else{
    echo "nezadal si username <br>";
    $validated = false;
}


if( !empty($_POST["email"]))
{
    echo "zadal si email";
}
else{
    echo "nezadal si email";
    $validated = false;
}

if( !empty($_POST["password"])){
    echo "zadal si heslo";
}else{
    echo "nezadal si heslo";
    $validated = false;
}

if( !empty($_POST["password_check"])){
    echo "zadal si kontrolne heslo";
}else{
    echo "nezadal si kontrolne heslo";
    $validated = false;
}

if($_POST["password"] == $_POST["password_check"])
{
    echo "hesla sa nezhoduju <br>";
}
else{
    echo "hesla sa nezhoduju <br>";
    $validated = false;
}

$hashed_password = password_hash($_POST["password"], PASSWORD_BCRYPT);
echo "unhashed password = " . $_POST["password"];
echo $hashed_password;

if($password_match && $validated){
    $sql = 'INSERT INTO users(password,email,username) VALUES("'. $_POST["password"] .'","'.$_POST["email"] .'","'.$_POST["username"].'");';

    if ($conn->query($sql) == TRUE) {
        echo "New record created successfully";
    }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


}