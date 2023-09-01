<?php
include __DIR__ . "/connect.php";

$pageTitle = "CRUD - Update Page";
include __DIR__ . "/layout/top_html.php";

$id = $_GET['updateid'];
$name = $_GET['updatename'];
$email = $_GET['updateemail'];
$mobile = $_GET['updatemobile'];
$password = $_GET['updatepassword'];
// se vi sono dati da inviare
if(isset($_POST['submit'])){
    //setto i dati da inviare
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $query = "update `crud` set name='$name', email='$email', mobile='$mobile', password='$password' WHERE id = '$id'";

    $result = mysqli_query($connection,$query);

    if($result){
        //se va a buon fine rindirizzami alla index.php
        header("Location: index.php");

    }else{
        die(mysqli_error($connection));
    }
}
?>

<div class="container py-5">
    <form class="mb-3" method="post">
    
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" placeholder="enter your name" value="<?php echo $name; ?>">

        <label for="email" class="form-label mt-3">Email</label>
        <input type="email" class="form-control" name="email" placeholder="abc@mail.com" value="<?php echo $email; ?>">

        <label for="mobile" class="form-label mt-3">Mobile</label>
        <input type="text" class="form-control" name="mobile" placeholder="enter your number" value="<?php echo $mobile; ?>">

        <label for="password" class="form-label mt-3">Password</label>
        <input type="text" class="form-control" name="password" placeholder="password" value="<?php echo $password; ?>">

        <button type="submit" class="btn btn-primary mt-5" name="submit">UPDATE</button>
    </form>
</div>

<?php
include __DIR__ . "/layout/bottom_html.php";
?>