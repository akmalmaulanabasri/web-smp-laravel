@extends('base')
@section('content')

<div class="container mt-3 mb-5">
    <div class="row">
        @for($i = 0; $i < 12; $i++)
        <div class="col-lg-3 col-sm-6 c mt-3">
            <img src="https://lh3.googleusercontent.com/lr/AFBm1_buTlZI3Xk2iENFH70_yzBvGp733F9EHpzHp-QYTpnT8bASahr3BYAr2jPfjo8s9cuDerE8nv-dm2D1sU1j5BRifoCOeRSBlr67ym9T_VwXdzgFniPOnItIZ6OWxJeOJVYxx89j2aA03d_oTFvPuQoZokcTLmd8p_hlxkZFUrZNRiowADeeth_BuPJYaS9kcEWUjB4oYWNiObsCbxjed76S5rt7d2EGjGsG2uugC0qmLxE_BvnsEVtjXKMuUfy9yepeCbHTRFYDGZmB5Lv2mEFHD2fbwXN2GhPgb7TsP2_ri93ANxS-8Jo1p0VJ0i8mQHBnYIN96aJg5w59AvwWsBA4ouPej5mVxnWFhF4G12_r3b9FnFlX1phJ3aEfmEwMBobnzJ2Efb56EeBRRviONCvN2lmffuXvuxkAvrnBvOiQZm_MjBU6dLYWpuamJNaQJDJP2aTCm5BV2zXoDtqLgyOdEbhv0XrqiL33ZVI7rcfxWH0VOYJDXHC4MWQdKpA0Ba0Pnytc-Jm4Z5AJ1zvjlEqS23gCTLCv_wkD7HnoMcwmBlkxsDUS9Fl3hqoQdy0t9r--WNhcIBq4hA7h_2elaAjAK-mBRWdztpjgbjo1oy_ex8r2EmPTIAKrDjA771PHcnGQWvLwd6-CZeGfCd0xSTF3VOmL-BjHsirN5hYZ9KjmNa6Vu5t51IUYw8Zp9294WFaqaGdyVDTVTgFUyua4iyixCRM8bZ6-mZE4U6CdQ7Vh32A83m52A9dI5BDG1FjApfAAFs_Qp8joJ3hWw-4xB956U95kgblK2yJMhxvJ9KNp7cjstSKrkCsRM0h7eRyDI8Qjew4=w1600-h1600" class="img-fluid rounded-3" alt="">
        </div>
        @endfor
    </div>
</div>


@endsection()