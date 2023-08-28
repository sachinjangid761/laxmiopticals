<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-color">
        <div class="container-fluid">
            <a class="navbar-brand"><img src="../images/logo/png-transparent-eye-brown-human-round-eyeball-pupil.png"
                    style="position: absolute; width: 60px;top:0;float: left;" alt=""></a><span
                style="color: brown;margin-left: 50px;font-size: 30px;">Laxmi Opticals</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servises</a>
                    </li>
                    <li class="nav-item shop-menu">
                        <a href='shop.php' class="nav-link">Shop</a>
                    </li>
                    <li class="nav-item shop-menu">
                        <a class="nav-link started" href="cart.php">Cart</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn-button-contect" type="button">contect us</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1>Checkout</h1>
        <div class="form-control">
        <form>
            <div class="form-group">
                <label for="name">Full Name</label><br>
                <input type="text" class="form-control" id="name" placeholder="John Doe" required>
            </div>
            <br>
            <div class="form-group">
                <label for="email">Email</label><br>
                <input type="email" class="form-control" id="email" placeholder="johndoe@example.com" required>
            </div><br>
            <div class="form-group">
                <label for="address">Shipping Address</label><br>
                <textarea class="form-control" id="address" rows="3" required></textarea>
            </div><br><br>
            <button type="submit" class="btn btn-primary">Place Order</button>
        </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
        });
</body >
</html >
