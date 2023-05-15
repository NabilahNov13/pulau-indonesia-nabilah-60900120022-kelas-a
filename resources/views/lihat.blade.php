<!doctype html>
<html lang="en">
 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pulau Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  
  <body>
    <h2 class="text-center mt-2">Pulau Indonesia</h2>
    <div class="container mt-3">
    <form>
  <div class="mb-3">
    <label for="nama_pulau" class="form-label">Nama Pulau</label>
    <input type="text" class="form-control" id="nama_pulau" name="nama_pulau" value="{{ $PulauIndonesia->nama_pulau }}" disabled>
  </div>
  <div class="mb-3">
    <label for="letak_geografis" class="form-label">Letak Geografis</label>
    <input type="text" class="form-control" id="letak_geografis" name="letak_geografis" value="{{ $PulauIndonesia->letak_geografis }}" disabled>
  </div>
  <a href="/" class="btn btn-primary">Kembali</a>
</form>  
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script> 
  </body>

</html>