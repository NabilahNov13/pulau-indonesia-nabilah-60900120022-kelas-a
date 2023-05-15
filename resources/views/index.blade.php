<!doctype html>
<html lang="en">
 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pulau Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  
  <body style="height:100vh;width:100%;background-image:url('../img/peta-indo.png'); background-repeat:no-repeat;background-size:cover;background-position:center;">
    <div class="container-fluid bg-success">
      <h2 class="text-center py-3 text-white">Data Pulau Indonesia</h2>
    </div>
    <div class="container-fluid">
    <div class="container">
      <a href="/tambah" class="btn btn-primary my-3">Tambah Data</a>
     <div class="table-responsive">
     <table class="table table-bordered border-success text-center">
        <thead class="bg-success text-white">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Pulau</th>
      <th scope="col">Letak Geografis</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($PulauIndonesia as $item)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <th>{{ $item->nama_pulau }}</th>
      <th>{{ $item->letak_geografis }}</th>
      <th>
         <a href="{{ '/lihat/'.$item->id }}" class="btn btn-info">Lihat</a>
         <a href="{{ '/edit/'.$item->id }}" class="btn btn-warning">Edit</a>
         <a onclick="return confirm('Anda Yakin untuk Menghapus?')" href="{{ '/hapus/'.$item->id }}" class="btn btn-danger">Hapus</a>
      </th>
    </tr>
    @endforeach
  </tbody>
</table>
     </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
  </body>

</html>