<?php

  include("includes/controllerUserData.php");

?>
<html>
  <head>
    <title>MasterSaudi</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css1/styles.css">
    <link rel="stylesheet" href="assets/css/custom-A.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script>



    </script>

    <style>
    .link-post-search:hover {
        color: green;
    }

    .link-post-search {
        color: black;
    }

    .search-res {
        background-color: #AEC69F;
        border-radius: 20%
    }

    .btn {
        background-color: #AEC69F;
    }

    .btn:hover {
        background-color: darkgreen;
    }

    body {
        background-color: #eff5f5;
    }

    .logo {
        width: 300px;
        height: 300px;
    }

    .hero {
        border-radius: 20%;
        background-color: #e1e5e6;
        margin: 0 260px;
        width: 50%;
        height: 50vh;

        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;

    }

    h1 {
        font-size: 50px;
    }

    .feild-img {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        width: 150px;
    }

    a {
        margin: 5px 10px;
    }

    .feild-img:hover {
        background-color: #AEC69F;
        border-radius: 20%
    }

    .form-label {
        border-radius: 4px;
    }
    </style>
</head>

<body>
    <?php include("includes/header.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br /><br />
                <div class="row justify-content-center">
                    <img src="assets/images/logo.png" class="logo" />

                </div>


            </div>
            <div class="col-md-12">
                <form name="form" method="post">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 mx-auto mt-5">


                                <div class="mb-3">
                                    <label id='ww' class="form-label fw-bold" style="color: black;">Search For
                                        Video</label>
                                    <input type="text" class="form-control" style=" background-color: #AEC69F; border-radius: 4px;
  " oninput="load_data(this.value)" placeholder="Title/description">
                                </div>
                                <!-- Search Input Field Code End -->

                                <table class="table table-light table-striped">
                                    <thead style=" background-color: #AEC69F;
  ">

                                    </thead>
                                    <tbody id="table_data" style=" background-color: #AEC69F;
  ">
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <script>
                    function load_data(search = '') {
                        let xhr = new XMLHttpRequest();

                        xhr.open("GET", "server.php?search=" + search, true);

                        xhr.onprogress = function() {
                            document.getElementById('table_data').innerHTML = `<div class="spinner-border" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>`;
                        }

                        xhr.onload = function() {
                            document.getElementById('table_data').innerHTML = xhr.responseText;
                        }

                        xhr.send();
                    }

                    load_data();
                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
                        crossorigin="anonymous"></script>


            </div>
            <div class="hero">
                <h1>Field List</h1>
                <div class="field-icon">
                    <a href="all_posts.php?rid=1"><img src="assets/images/engineer.png" class="feild-img"></a>
                    <a href="all_posts.php?rid=2"><img src="assets/images/chef.png" class="feild-img"></a>

                    <a href="all_posts.php?rid=3"><img src="assets/images/coding.png" class="feild-img"></a>
                    <a href="all_posts.php?rid=4"><img src="assets/images/science.png" class="feild-img"></a>

                    <a href="all_posts.php?rid=5"><img src="assets/images/class.png" class="feild-img"></a>
                    <a href="all_posts.php?rid=6"><img src="assets/images/technology.png" class="feild-img"></a>

                </div>

            </div>
            <div class="row justify-content-center">
            </div>
            </form>
            <form name="ratingform" method="post">
            </form>
            <br /><br />
        </div>
        <div class="col-md-12">
            <div class="row">


</body>

</html>
