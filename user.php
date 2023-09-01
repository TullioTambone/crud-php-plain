<?php
include __DIR__ . "/connect.php";

$pageTitle = "CRUD - user Page";
include __DIR__ . "/layout/top_html.php";


// se vi sono dati da inviare
if(isset($_POST['submit'])){
    //setto i dati da inviare
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $query = " insert into crud (name, email, mobile, password)
    values('$name', '$email', '$mobile', '$password')";

    $result = mysqli_query($connection,$query);

    if($result){
        echo 'data inserted successfully';
    }else{
        die(mysqli_error($connection));
    }
}
?>

<div class="container py-5">
    <form class="mb-3" method="post">
    
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" placeholder="enter your name">

        <label for="email" class="form-label mt-3">Email</label>
        <input type="email" class="form-control" name="email" placeholder="abc@mail.com">

        <label for="mobile" class="form-label mt-3">Mobile</label>
        <input type="text" class="form-control" name="mobile" placeholder="enter your number">

        <label for="password" class="form-label mt-3">Password</label>
        <input type="text" class="form-control" name="password" placeholder="password">

        <button type="submit" class="btn btn-primary mt-5" name="submit">SUBMIT</button>
    </form>
</div>

<?php
include __DIR__ . "/layout/bottom_html.php";


?>