
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Hash Sum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='src/index.js'></script>
</head>
<body>
    <form action="upload.php" method="post">
        <div>
            <label for="formFileLg" class="form-label">Input your file</label>
            <input name="file" class="form-control form-control-lg" id="formFileLg" type="file" >
        </div>
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Algo</label>
            <select class="form-select" id="validationCustom04" name="algo" required>
            <option selected disabled value="">Choix...</option>
            <option>SHA256</option>
            </select>
            <div class="invalid-feedback">
            Choissisez un aglo
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

