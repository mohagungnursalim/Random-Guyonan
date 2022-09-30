

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Random Guyonan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <style>
            .underline-06 {
            background-image: linear-gradient(90deg, #32ff3c, #ff7433);
            background-position: bottom;
            background-size: 30% 40%;
            background-repeat: no-repeat;
            }
        </style>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <?php include 'joke.php'; ?>
    <br><br><br>

    <?php 

$https = 'https://candaan-api.vercel.app/api/text/random';
$candaan = file_get_contents($https);

$data = json_decode($candaan,true);

?>
    <div class="container mt-5">
        <h1 class="text-center mb-3 underline-06">Random Guyonan </h1>
        <form method="post" id="post">
            <div class="row justify-content-center">
                <div class="col-md-4">               
                    <div class="mb-2">
                        <label for="exampleFormControlTextarea1" class="form-label">Guyon hari ini:</label>
                        <textarea disabled class="form-control" id="" rows="4"><?php echo $data['data']; ?>
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="text-center">
            <input type="submit" class="btn btn-dark mt-3" value="Render" name="submit">

            <div  id="PleaseWait" style="display: none;">
            <button class="btn btn-light" type="button" disabled>
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            <span class="sr-only">Loading...</span>
            </button>
            </div>
            
            </div>
                
        </form>   


        <div class="text-center text-secondary">
            <br><br>
            <p> <small>Dibuat dengan <img src="php.png" width="30px" />,☕ & ❤️ di Asrama Putih,UPGRIS.</small> </p>
            <p><small> <a href="https://github.com/mohagungnursalim" class="text-decoration-none text-dark"> <u>My Github <img src="github.png" width="24px" alt=""></u> </a> </small></p>
        </div>
    </div>



<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" crossorigin="anonymous"></script>

<!-- Loading before submit -->
<script>
    $('#post').submit(function() {
        var pass = true;
       
        if(pass == false){
            return false;
        }
        $("#PleaseWait").show();
    
        return true;
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>