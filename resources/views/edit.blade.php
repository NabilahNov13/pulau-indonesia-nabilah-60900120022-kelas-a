<!doctype html>
<html lang="en">
 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Pulau Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  
  <body>
    <h2 class="text-center mt-2">Edit Pulau Indonesia</h2>
    <div class="container">
    <form action="{{ '/edit/'.$PulauIndonesia->id }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_pulau" class="form-label">Nama Pulau</label>
                <input type="text" class="form-control @error('nama_pulau') is-invalid @enderror" id="nama_pulau" name="nama_pulau" value="{{ $PulauIndonesia->nama_pulau }}">
                @error('nama_pulau')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="letak_geografis" class="form-label">Letak G eografis</label>
                <input type="text" class="form-control @error('letak_geografis') is-invalid @enderror" id="letak_geografis" name="letak_geografis" value="{{ $PulauIndonesia->letak_geografis }}">
                @error('letak_geografis')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>  
            <a href="/" class="btn btn-primary">Kembali</a>
            <button type="submit" class="btn btn-success">Submit</button>
        </form> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script> 
  </body>

</html>