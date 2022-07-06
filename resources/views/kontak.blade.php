@extends('base')
@section('content')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-4 col-sm-12 text-center">
            <h1><i class="bi bi-house-door"></i></h1>
            <h2>Alamat</h2>
            <h4 class="text-md font-weight-normal">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci, accusantium?</h4>
        </div>
        <div class="col-lg-4 col-sm-12 text-center">
            <h1><i class="bi bi-telephone"></i></h1>
            <h2>Kontak</h2>
            <h4 class="font-weight-normal">(+62 251) 8245 291</h4>
            <h4 class="font-weight-normal">(+62 251) 8245 407</h4>
            <h4 class="font-weight-normal">(+62 251) 8240 601</h4>
        </div>
        <div class="col-lg-4 col-sm-12 text-center">
            <h1><i class="bi bi-alarm"></i></h1>
            <h4 class="font-weight-normal">Senin - Sabtu</h4>
            <h4 class="font-weight-normal">08:00 - 17:00</h4>
        </div>
    </div>


    @if (session('status'))
        <script>
            Swal.fire(
            'Sukses!',
            'Pesan berhasil terkirim, Silahkan tunggu balasan kami di email anda.',
            'success'
        )
        </script>
    @endif

    @error('nama')
        <script>
            Swal.fire(
            'Gagal!',
            'Nama harus diisi.',
            'error'
        )
        </script>
    @enderror

    @error('email')
        <script>
            Swal.fire(
            'Gagal!',
            'Email harus diisi.',
            'error'
        )
        </script>
    @enderror

    @error('pesan')
        <script>
            Swal.fire(
            'Gagal!',
            'Pesan harus diisi.',
            'error'
        )
        </script>
    @enderror

    <div class="row mt-5">
        <div class="col-lg-6">
            <div class="card shadow">
                <div class="card-header">
                    <h3>Kirim Pesan</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('kirim-pesan') }}" method="POST" class="form-group">
                        @csrf
                        <label class="form-label" for="">Nama</label>
                        <input name="nama" type="text" placeholder="Nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror">
                        <label class="form-label mt-2" for="">Email</label>
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
                        <label class="form-label mt-2" for="">Pesan</label>
                        <textarea name="pesan" id="" cols="30" rows="10" placeholder="Pesan" value="{{ old('pesan') }}" class="form-control @error('pesan') is-invalid @enderror"></textarea>
                        <button class="btn btn-primary mt-3">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-3">
            <img class="img-fluid shadow rounded-3" src="https://lh3.googleusercontent.com/lr/AFBm1_buTlZI3Xk2iENFH70_yzBvGp733F9EHpzHp-QYTpnT8bASahr3BYAr2jPfjo8s9cuDerE8nv-dm2D1sU1j5BRifoCOeRSBlr67ym9T_VwXdzgFniPOnItIZ6OWxJeOJVYxx89j2aA03d_oTFvPuQoZokcTLmd8p_hlxkZFUrZNRiowADeeth_BuPJYaS9kcEWUjB4oYWNiObsCbxjed76S5rt7d2EGjGsG2uugC0qmLxE_BvnsEVtjXKMuUfy9yepeCbHTRFYDGZmB5Lv2mEFHD2fbwXN2GhPgb7TsP2_ri93ANxS-8Jo1p0VJ0i8mQHBnYIN96aJg5w59AvwWsBA4ouPej5mVxnWFhF4G12_r3b9FnFlX1phJ3aEfmEwMBobnzJ2Efb56EeBRRviONCvN2lmffuXvuxkAvrnBvOiQZm_MjBU6dLYWpuamJNaQJDJP2aTCm5BV2zXoDtqLgyOdEbhv0XrqiL33ZVI7rcfxWH0VOYJDXHC4MWQdKpA0Ba0Pnytc-Jm4Z5AJ1zvjlEqS23gCTLCv_wkD7HnoMcwmBlkxsDUS9Fl3hqoQdy0t9r--WNhcIBq4hA7h_2elaAjAK-mBRWdztpjgbjo1oy_ex8r2EmPTIAKrDjA771PHcnGQWvLwd6-CZeGfCd0xSTF3VOmL-BjHsirN5hYZ9KjmNa6Vu5t51IUYw8Zp9294WFaqaGdyVDTVTgFUyua4iyixCRM8bZ6-mZE4U6CdQ7Vh32A83m52A9dI5BDG1FjApfAAFs_Qp8joJ3hWw-4xB956U95kgblK2yJMhxvJ9KNp7cjstSKrkCsRM0h7eRyDI8Qjew4=w1600-h1600" alt="">
        </div>
    </div>
</div>


@endsection()