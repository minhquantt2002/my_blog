@extends('layouts.user-layout')
@section('title')
    <title>Tác giả blog Lập trình vì đam mê :v</title>
@endsection

@section('detail')
    <style>
        h1 {
            font-weight: normal;
        }

        p {
            font-size: 20px;
        }

        a {
            color: #00a9a1;
        }

        a:hover {
            color: #006f6a;
        }
    </style>
    <div class="container my-3 my-lg-5">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <h1 class="mb-4 pb-4 border-bottom">Về blog Lập trình vì đam mê :v</h1>
                <div class="">
                    <p>Đây là tôi :v</p>
                    <img src="{{\Illuminate\Support\Facades\URL::asset('/img/avtQuan.jpg')}}" alt class="img-thumbnail">
                </div>
            </div>
        </div>
    </div>
@endsection
