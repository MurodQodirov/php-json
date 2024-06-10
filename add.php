<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRM</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="page-header text-center">Yangi o'quvchi qo'shish</h1> <br>
    <div class="row">
        <div class="col-1"></div>
        <form method="POST">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id" name="id" required placeholder="id kiriting">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Ism</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstname" name="firstname" required  placeholder="ism kiriting">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Familiya</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lastname" name="lastname" required placeholder="familiya kiriting">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Manzil</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="address" name="address" required placeholder="manzil kiriting">
                </div>
            </div>    
 
            <input type="submit" name="save" value="Saqlash" class="btn btn-primary">
            <a  href="index.php" class="btn btn-dark">Orqaga</a>
        </form>
        </div>
        <div class="col-5"></div>
    </div>
</div>    
<?php
    if(isset($_POST['save'])){
        // Open the json file
        $data = file_get_contents('members.json');
        // Decode the json data into an associative array
        $data = json_decode($data, true);
 
        // Data from our POST
        $talaba = array(
            'id' => $_POST['id'],
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'address' => $_POST['address']
        );
 
        // Append the input to our array
        $data[] = $talaba;
        // Encode back to json
        $data = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents('members.json', $data);
 
        header('location: index.php');
    } else {
        echo "<div class='text-center text-danger'> Don't forget to fill the form ! </div>";
    }
?>
</body>
</html>
