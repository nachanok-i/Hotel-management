<?php
require_once "config.php";
?>
<?php session_start();
if (isset($_SESSION['email']) != NULL) {
    $userEmail = $_SESSION['email'];
}
?>

<?php
if (isset($_POST["add_to_cart"])) {
    if (isset($_SESSION["shopping_cart"])) {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if (!in_array($_GET["id"], $item_array_id)) {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id'               =>     $_GET["id"],
                'item_name'               =>     $_POST["foodName"],
                'item_price'          =>     $_POST["price"],
                'item_quantity'          =>     $_POST["qty"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        } else {
            echo '<script>alert("Item Already Added")</script>';
            echo '<script>window.location="foodName.php"</script>';
        }
    } else {
        $item_array = array(
            'item_id'               =>     $_GET["id"],
            'item_name'               =>     $_POST["foodName"],
            'item_price'          =>     $_POST["price"],
            'item_quantity'          =>     $_POST["qty"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}
if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            if ($values["item_id"] == $_GET["id"]) {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="food.php"</script>';
            }
        }
    }
}
?>






<?php
function loadFood()
{
    $conn = mysqli_connect("34.87.187.203", "root", "Segmentation3", "hotel");
    $output = "";
    $sql = "SELECT * FROM Menu";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $output .= '<option value="' . $row["foodID"] . '">' . $row["foodName"] . '</option>';
    }
    return $output;
}
?>



<!Doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--This is my kit font awesome pls remind me-------------------------------------------->
    <script src="https://kit.fontawesome.com/92d742c429.js" crossorigin="anonymous"></script>
    <!--------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <?php
    $query = "SELECT * FROM Menu";
    $result = mysqli_query($conn, $query);
    ?>
    <script>
        var keepMenuPhp = '';
        var keepCode = '<tr><td><input type="button" class="bn btn-danger" value="Delete"/></td>' +
            '<td><select class="form-control" name="food[]" id="exampleFormControlSelect1">' +
            '<option value="">Food Menu</option>' +
            '<?php loadFood() ?>' +
            '</select></td>' +
            '<td><input type="number" name="qty[]" value="1" min="0" class="form-control" placeholder="Enter Quantity"></td>' +
            '<td><input type="number" name="price[]" value="0" min="0" class="form-control" placeholder="Enter Price"></td></tr>';

        $(document).ready(function() {

        })


        $(document).ready(function() {
            $('#myTable').on('click', 'input[type="button"]', function() {
                $(this).closest('tr').remove();
            })
            $('p input[type="button"]').click(function() {
                $('#myTable').
                append(keepCode)
            });

        });
    </script>
    <script>
        $(document).ready(function() {

        });
    </script>
    <script>
        var food_ID;
        $(document).ready(function() {
            $('#food').change(function() {
                var food_ID = $(this).val();
                console.log(food_ID);
            });
            $('#food').change(function() {
                $.ajax({
                    url: "data.php",
                    method: "POST",
                    data: {
                        foodID: $(this).val()
                    },
                    dataType: "text",
                    success: function(price) {
                        $('#price').html(price);
                        $('#price').val(data)

                    }

                });
            });

        });
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a href="index.php" class="navbar-brand"><img src="Logo/Calina_Logo-tiny.png" alt="logo"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="index.php" class="nav-item nav-link active"><i class="fa fa-home"></i> Home</a>
                <a href="roomSelectPage.php" class="nav-item nav-link"><i class="fa fa-bed"></i> Room Reservation</a>
                <a href="#" class="nav-item nav-link"><i class="fa fa-cutlery"></i> Food Service</a>
                <a href="#" class="nav-item nav-link" tabindex="-1"><i class="fa fa-car"></i> Other Service</a>
            </div>
            <div class="navbar-nav ml-auto">
                <?php if (isset($_SESSION['email']) != NULL) : ?>
                    <a class="nav-item nav-link"> <i class="fas fa-user-alt"> </i> <?php echo $_SESSION['email']; ?> </a>
                    <form class="form-inline" action="logout.php" method="POST">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="logout">Logout</button>
                    </form>
                <?php else : ?>
                    <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fas fa-user-alt"></i>Login</a>
                    <div class="dropdown-menu dropdown-menu-right p-3">
                        <form class="form-horizontal" method="POST" accept-charset="UTF-8" action="login_action.php">
                            <input class="form-control login" type="text" name="email" placeholder="Email" id="email">
                            <input class="form-control login" type="password" name="password" placeholder="Password" id="pass">
                            <input class="btn btn-primary" type="submit" name="submit" value="Login">
                        </form>
                    </div>
                    <a href="register.php" class="nav-item nav-link"> <i class="fas fa-user-plus"> </i> Sign up</a>
                <?php endif ?>
            </div>
        </div>
    </nav>
    <div class="container">
        <p><br /></p>
        <table id="myTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Food</th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                    <th></th>
                </tr>
            </thead>
            <?php if (mysqli_num_rows($result) > 0) : ?>
                <?php while ($row = mysqli_fetch_array($result)) : ?>
                    <form method="post" action="food.php?action=add&id=<?php echo $row["foodID"]; ?>">


                        <tr>
                            <td>
                                <div class="form-group">
                                    <?php echo '<input type=text id="food" class="form-control" readonly value="' . $row['foodName'] . '">' ?>
                                    <?php echo '<input type=hidden id="food" name="foodName" class="form-control" readonly value="' . $row['foodID'] . '">' ?>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <?php echo '<input type=number id="unitPrice" name="price" class="form-control" readonly value="' . $row['price'] . '">' ?>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" name="qty" min="0" value="1" id="qty" class="form-control" />
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                                </div>
                            </td>
                        </tr>

                    </form>
                <?php endwhile; ?>
            <?php endif; ?>
        </table>
    </div>
    <p><br /></p>
    <div class="container">
        <table class="table table-bordered table-striped">
            <thread>
                <th>Food Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th>Action</th>
            </thread>
            <?php
            if (!empty($_SESSION["shopping_cart"])) {
                $total = 0;
                foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            ?>
                    <tr>
                        <td><?php echo $values["item_name"]; ?></td>
                        <td><?php echo $values["item_quantity"]; ?></td>
                        <td>$ <?php echo $values["item_price"]; ?></td>
                        <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                        <td><a href="food.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="btn btn-danger">Remove</span></a></td>
                    </tr>
                <?php
                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
                }
                ?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <td align="right">$ <?php echo number_format($total, 2); ?></td>
                    <td></td>
                </tr>
            <?php
            }
            ?>
        </table>
        <div >
            <form method="POST" action=#>
                <input type="submit" name="sumbit" style="margin-top:5px; " align="center" class="btn btn-lg btn-primary mx-auto d-block" value="submit" />
            </form>
        </div>

    </div>

</body>

</html>