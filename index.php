

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Password Generator</title>
</head>
<body>
    <div class="container">
    <h1>Password Generator</h1>

    <form class="mb-3" action="generator.php" method="GET">
      <div class="mb-3">
        <label for="password-length" class="form-label">Lunghezza password</label>
        <input type="number" class="form-control" id="password-length" name="length" value="<?php echo $_GET['length'] ?>" min="5" max="12" required>
      </div>
      <button type="submit" class="btn btn-primary">Genera</button>
    </form>  
    
</div>  
</body>
</html>