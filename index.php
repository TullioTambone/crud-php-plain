<?php
include __DIR__ . "/connect.php";

$pageTitle = "CRUD - data Page";
include __DIR__ . "/layout/top_html.php";


?>

<div class="container">
    <button class="btn btn-primary mt-5">
        <a href="user.php" class="text-light">Add user</a>
    </button>

    <div class="table-responsive">
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">phone</th>
                    <th scope="col">password</th>
                    <th scope="col">operations</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                //creo query per selezionare tutti i dati dalla tabella 
                    $query = "SELECT * from `crud`";
                    $result = mysqli_query($connection,$query);

                    if ($result){
                        //mysqli_fetch_assoc per recuperare una singola riga di risultati 
                        // finchè è vero stampa i dati..
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $mobile = $row['mobile'];
                            $password = $row['password'];

                            echo '
                            <tr class="">
                                <td>'. $id .'</td>
                                <td>'. $name .'</td>
                                <td>'. $email .'</td>
                                <td>'. $mobile .'</td>
                                <td>'. $password .'</td>
                                <td>
                                <button class="btn btn-primary"><a href="" class="text-white">Update</a></button>
                                <button class="btn btn-danger"><a href="" class="text-white">Delete</a></button>
                                </td>
                            </tr>
                            ';
                        }
                    }
                ?>
               
            </tbody>
        </table>
    </div>
    
</div>

<?php
include __DIR__ . "/layout/bottom_html.php";
?>