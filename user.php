<?php
$pageTitle = "CRUD - user Page";
include __DIR__ . "/layout/top_html.php";
?>

<div class="container py-5">
    <form class="mb-3" method="POST">
    
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" placeholder="enter your name">

        <label for="email" class="form-label mt-3">Email</label>
        <input type="email" class="form-control" name="email" placeholder="abc@mail.com">

        <label for="mobile" class="form-label mt-3">Mobile</label>
        <input type="text" class="form-control" name="name" placeholder="enter your number">

        <label for="password" class="form-label mt-3">Password</label>
        <input type="text" class="form-control" name="password" placeholder="password">

        <button type="submit" class="btn btn-primary mt-5"><a href="" class="text-light">SUBMIT</a></button>
    </form>
</div>

<?php
include __DIR__ . "/layout/bottom_html.php";


?>