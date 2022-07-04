@extends('layouts.user-layout')
@section('title')
    <title>Bán khóa học đêy</title>
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
        span {
            font-weight: bold;
        }
    </style>
    <div class="container my-3 my-lg-5">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <h1 class="mb-4 pb-4 border-bottom">Khóa học web developer</h1>
                <div class="">
                    <p>Khóa học cung cấp các kiến thức căn bản để học viên có thể đi làm được ở vị trí fullstack web
                        developer. Học viên học được cách làm việc nhóm, giải quyết vấn đề, hiểu được quy trình, công cụ làm
                        việc như trong thực tế.
                    </p>
                    <p><span>Lưu ý:</span> Hiện nay có một số kẻ xấu đang bán khóa học này dưới dạng video, đó là hành vi ăn cắp, mình
                        đã làm việc với bên công an để có biện pháp xử lý. Các video họ bán đã quá cũ, không cập nhật các
                        kiến thức mới như khóa học này. Một số trường hợp bị lừa đảo, gửi file không mở được. Không được cấp
                        tài khoản và API để thực hành.
                    </p>
                    <p>Để đăng ký khóa học hoặc bạn cần tư vấn, vui lòng kéo xuống dưới cùng.</p>
                    <p>Nếu học viên đã học sơ qua về lập trình web, khóa học này là cơ hội để hệ thống hóa kiến thức, học
                        lại một cách bài bản, bù các kiến thức bị thiếu. Bởi vì chỉ cần “một cuốn sách, một người thầy” là
                        đủ.
                    </p>
                    <p>Khóa học dành cho các học viên có kiến thức lập trình căn bản, có thời gian, sẵn sàng đeo bám khóa
                        học đến cùng :) Học cho đến lúc nào đi làm được thì thôi.
                    </p>
                    <p>Học viên có một người mentor bên cạnh, như một người bạn, sẵn sàng chia sẻ định hướng để phát triển
                        bản thân trong ngành lập trình.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
