@extends('base')
@section('content')

<div class="container mt-3 mb-3">
    <div class="row">
        @for($i = 0; $i < 6; $i++)
        <div class="col-lg-4 col-sm-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column">
                        <img src="https://media.istockphoto.com/photos/taking-notes-on-a-ring-binded-notepad-inf-picture-id1315904960?b=1&k=20&m=1315904960&s=170667a&w=0&h=DAzctGlI9mREbPS7eWByiz42KN1p795OaomGlBW7X9s=" class="rounded img-fluid card-img-top" alt="">
                        <div class="">
                            <p>Lorem Ipsum</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius eos animi doloribus magnam iste adipisci voluptatum incidunt officiis modi, omnis culpa debitis temporibus vero minus vitae, quas, atque id maiores.</p>
                            <a href="#" class="btn btn-info">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>

@endsection()