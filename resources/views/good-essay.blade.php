@extends('layouts.user-layout')
@section('title')
    <title>Bài viết hay</title>
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
                <h1 class="mb-4 pb-4 border-bottom">Bài được quan tâm nhiều nhất trên blog Lập trình vì đam mê :v</h1>
                <div class="">
                    <p>Để các bạn tiện theo dõi, tại trang này sẽ cập nhật các bài viết được bạn đọc quan tâm nhất, cũng
                        như mình cảm thấy có ích cho người đọc nhất.
                    </p>
                    <p><a href="#">Lập trình viên cần học những gì</a></p>
                    <p><a href="#">Giữ năng lượng khi học và làm lập trình</a></p>
                    <p><a href="#">Thiền đã cứu rỗi linh hồn tôi như thế nào?</a></p>
                    <p><a href="#">Tại sao dân lập trình thường FA</a></p>
                    <p><a href="#">Viết cho sinh viên IT</a></p>
                    <p><a href="#">Lương lập trình viên mới ra trường - sự thật và ảo tưởng</a></p>
                    <p><a href="#">Bạn học CNTT và định bỏ đại học? Hãy đọc câu chuyện của mình</a></p>
                    <p><a href="#">Giải thích và hướng dẫn cài đặt Gitlab Continuous Deployment một cách dễ hiểu
                            nhất</a></p>
                    <p><a href="#">Lập trình viên PHP đứng đầy đường</a></p>
                    <p><a href="#">Kiếm tiền bằng lập trình web như thế nào?</a></p>
                    <p><a href="#">Lập trình viên 10 tiếng</a></p>
                    <p><a href="#">Tổng hợp 9 kênh youtube mà dân công nghệ nên theo dõi</a></p>
                    <p><a href="#">Tổng hợp 9 kênh youtube mà dân công nghệ nên theo dõi - Phần 2</a></p>
                    <p><a href="#">Học làm hacker</a></p>
                    <p><a href="#">Cùng nhau tạo restful API đơn giản với php</a></p>
                    <p><a href="#">Tổng hợp tất tần tật những công cụ cần thiết cho web developer</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
