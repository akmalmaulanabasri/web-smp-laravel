<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Dashboard Admin</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container">
          <a class="navbar-brand" href="{{ route('dashboard') }}">Admin Dashboard</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link" href="{{ route('home') }}">Landing Page</a>
              <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            </div>
          </div>
        </div>
      </nav>

      <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-light">
                <h2>Daftar Pesan</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table border">
                        <tr>
                            <th>No</th>
                            <th>Nama Pengirim</th>
                            <th>Email Pengirim</th>
                            <th>Lihat Pesan</th>
                            <th>Tanggal</th>
                        </tr>
                        @foreach ($pesan as $p)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->email }}</td>
                            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalPesan{{ $p->id }}">
                                Lihat Pesan
                              </button></td>
                            <td>{{ $p->created_at }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
      </div>


      
      @foreach($pesan as $p)
      <div class="modal fade" id="ModalPesan{{ $p->id }}" tabindex="-1" aria-labelledby="ModalPesan{{ $p->id }}Label" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ModalPesan{{ $p->id }}Label">Pesan Dari {{ $p->nama }}</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              {{ $p->pesan }}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>