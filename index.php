<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <br>
        <h1 class="page-header text-center">IT GURUH CRM</h1>
        <div class="row">
            <div class="col-12">
                <a href="add.php" class="btn btn-primary">Yangi mijoz qo'shish</a>
                <table class="table table-bordered table-striped" style="margin-top:20px;">
                    <thead>
                        <th>ID</th>
                        <th>Ism</th>
                        <th>Familiya</th>
                        <th>Manzil</th>
                        <th>Amallar</th>
                    </thead>
                    <tbody>
                        <?php
                        $talabalar = file_get_contents('members.json');
                        $talabalar = json_decode($talabalar);

                        $index = 0;
                        foreach ($talabalar as $talaba) {
                            echo "
                                <tr>
                                    <td>" . $talaba->id . "</td>
                                    <td>" . $talaba->firstname . "</td>
                                    <td>" . $talaba->lastname . "</td>
                                    <td>" . $talaba->address . "</td>
                                    <td>
                                        <a href='edit.php?index=" . $index . "' class='btn btn-success btn-sm'>Tahrirlash</a>
                                        <a href='delete.php?index=" . $index . "' class='btn btn-danger btn-sm'>O'chirish</a>
                                    </td>
                                </tr>
                            ";

                            $index++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>