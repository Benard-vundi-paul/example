<?php
//this program will only make sure data is iven through the post
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["name"])){
        $nameErr ="name is arequired field";
        echo$nameErr;
    }
    else{
        $name=test_input($_POST)("name");
        echo $name."<br/>;
    }
    if($_SERVER["REQUEST-METHOD"]=="POST"){
        if(empty($_POST["email"])){
            $emailErr ="email is arequired field";
            echo$emailErr;
        }
        else{
            $email=test_input($_POST)("email");
            echo $email."<br/>;
        }
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["website"])){
                $websiteErr ="website is arequired field";
                echo$websiteErr;
            }
            else{
                $website=test_input($_POST)("website");
                echo $website."<br/>;
            }
            if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["comment"])){
        $commentErr ="comment is arequired field";
        echo$commentErr;
    }
    else{
        $comment=test_input($_POST)("name");
        echo $comment."<br/>;
    }
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["gender"])){
        $genderErr ="gender is arequired field";
        echo$genderErr;
    }
    else{
        $gender=test_input($_POST)("name");
        echo $gender."<br/>;
    }
    }

function test_input($data){
    $data= trim($data);
    $data= stripslashes($data);
    $data= htmlspecialchars($data);
    return $data;
}
?>