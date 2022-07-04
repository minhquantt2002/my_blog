@extends('layouts.user-layout')
@section('title')
    <title>Video tôi thích</title>
@endsection
@section('detail')

    <style>
        h1 {
            font-weight: normal;
        }

        p, .title-vid {
            font-size: 20px;
        }

        a {
            color: #00a9a1;
        }

        a:hover {
            color: #006f6a;
        }

        span {
            font-weight: bold;
        }
    </style>
    <div class="container my-3 my-lg-5">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <h1 class="mb-4 pb-4 border-bottom">Video tôi thích</h1>
                <div class="row">
                    <div class="col-6 col-md-4 mb-3">
                        <a href="https://www.youtube.com/watch?v=GYxggtZberM" target="_blank"><img class="img-thumbnail" src="https://i.ytimg.com/vi/nM2yzzBAnbs/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAYJLEiZrFprV1FsA-THPTpflRDgA" alt></a>
                        <a href="https://www.youtube.com/watch?v=GYxggtZberM" class="title-vid">Cha già rồi đúng không</a>
                    </div>
                    <div class="col-6 col-md-4 mb-3">
                        <a href="https://www.youtube.com/watch?v=GYxggtZberM" target="_blank"><img class="img-thumbnail" src="https://i.ytimg.com/vi/nM2yzzBAnbs/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAYJLEiZrFprV1FsA-THPTpflRDgA" alt></a>
                        <a href="https://www.youtube.com/watch?v=GYxggtZberM" class="title-vid">Cha già rồi đúng không</a>
                    </div>
                    <div class="col-6 col-md-4 mb-3">
                        <a href="https://www.youtube.com/watch?v=GYxggtZberM" target="_blank"><img class="img-thumbnail" src="https://i.ytimg.com/vi/nM2yzzBAnbs/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAYJLEiZrFprV1FsA-THPTpflRDgA" alt></a>
                        <a href="https://www.youtube.com/watch?v=GYxggtZberM" class="title-vid">Cha già rồi đúng không</a>
                    </div>

                    <div class="col-6 col-md-4 mb-3">
                        <a href="https://www.youtube.com/watch?v=0WBOI-U_aRQ" target="_blank"><img class="img-thumbnail" src="https://i.ytimg.com/vi/0WBOI-U_aRQ/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDuErM4qmHoDE7x8sNeexB9by_bnw" alt></a>
                        <a href="https://www.youtube.com/watch?v=0WBOI-U_aRQ" class="title-vid">Ước mơ của mẹ</a>
                    </div>
                    <div class="col-6 col-md-4 mb-3">
                        <a href="https://www.youtube.com/watch?v=0WBOI-U_aRQ" target="_blank"><img class="img-thumbnail" src="https://i.ytimg.com/vi/0WBOI-U_aRQ/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDuErM4qmHoDE7x8sNeexB9by_bnw" alt></a>
                        <a href="https://www.youtube.com/watch?v=0WBOI-U_aRQ" class="title-vid">Ước mơ của mẹ</a>
                    </div>
                    <div class="col-6 col-md-4 mb-3">
                        <a href="https://www.youtube.com/watch?v=0WBOI-U_aRQ" target="_blank"><img class="img-thumbnail" src="https://i.ytimg.com/vi/0WBOI-U_aRQ/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDuErM4qmHoDE7x8sNeexB9by_bnw" alt></a>
                        <a href="https://www.youtube.com/watch?v=0WBOI-U_aRQ" class="title-vid">Ước mơ của mẹ</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
