<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sách Cinemas và Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Danh sách Cinemas và Movies</h1>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th>Tên Rạp</th>
            <th>Địa Chỉ</th>
            <th>Tổng Số Ghế</th>
            <th>Tên Phim</th>
            <th>Đạo Diễn</th>
            <th>Ngày Phát Hành</th>
            <th>Thời Lượng (phút)</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->location }}</td>
                <td>{{ $item->total_seats }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->director }}</td>
                <td>{{ $item->release_date }}</td>
                <td>{{ $item->duration }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>