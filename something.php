<html>
    <body>
    <?php
    $n_err="";
    $name=$mail=$url=$phone=$gender='';
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=get_data($_POST['name']);
        $mail=get_data($_POST['email']);
        $url=get_data($_POST['url']);
        $phone=get_data($_POST['phone']);
        $gender=get_data($_POST['gender']);
        if(empty($_POST['name'])){
            $n_err="name is required";
    
        }
    }

    function get_data($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
        
    print_data($name);
    print_data($mail);
    print_data($url);   
    print_data($phone);
    print_data($gender);
    function print_data($read){
        echo $read;
        echo "<br>";
    }
        
    if(preg_match("/^[a-zA-z' ]/",$name)){
        echo "name is valid";
    }else{
        echo "invalid";
    }
        
    echo "<br>";
    if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
        echo "invalid mail";
    }else{
        echo "valid mail";
    } 
    ?>
    </body>
</html>
