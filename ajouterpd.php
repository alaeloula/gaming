<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <form action="trtajoutpd.php" class="row g-3" method="post">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="libelle" class="form-label">libelle</label>
                <input type="text" placeholder="libelle" class="form-control" name="libelle" id="" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="" class="form-label">quantite</label>
                <input type="text" placeholder="qte" class="form-control" name="qte" id="" />
            </div>
            <div class="col-12">
                <label for="" class="form-label">prix</label>
                <input type="text" class="form-control" placeholder="prix" name="prix" id="" />
            </div>
            <div class="col-12">
                <label for="" class="form-label">categorie</label>
                <input type="text" class="form-control" placeholder="categorie" name="cat" id="" />
            </div>

            <!-- <select class="form-select form-select-lg" size="4" >
                <option selected>select any one</option>
                <option value="1">Html</option>
                <option value="2">css</option>
                <option value="3">java script</option>
                <option value="1">Html</option>
                <option value="2">css</option>
                <option value="3">java script</option>
            </select> -->
            <div class="col-12">
                <button type="submit">submit</button>
            </div>
        </form>
    </div>