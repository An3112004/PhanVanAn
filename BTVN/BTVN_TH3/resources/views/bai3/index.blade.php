<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sách IT Centers và Hardware Devices</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Danh sách IT Centers và Hardware Devices</h1>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th>Tên Trung Tâm</th>
            <th>Địa Điểm</th>
            <th>Email Liên Hệ</th>
            <th>Tên Thiết Bị</th>
            <th>Loại</th>
            <th>Trạng Thái</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->location }}</td>
                <td>{{ $item->contact_email }}</td>
                <td>{{ $item->device_name }}</td>
                <td>{{ $item->type }}</td>
                <td>
                    @if($item->status)
                        <span class="badge bg-success">Hoạt động</span>
                    @else
                        <span class="badge bg-danger">Hỏng</span>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
