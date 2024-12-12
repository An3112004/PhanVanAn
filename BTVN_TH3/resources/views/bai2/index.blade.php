<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Renters và Laptops</title>
    <!-- Thêm CSS Bootstrap để có bảng đẹp -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Danh sách Renters và Laptops</h1>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Tên người thuê</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Hãng Laptop</th>
                    <th>Mẫu Laptop</th>
                    <th>Trạng thái cho thuê</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item->name ?? 'Chưa có người thuê' }}</td>
                        <td>{{ $item->phone ?? 'N/A' }}</td>
                        <td>{{ $item->email ?? 'N/A' }}</td>
                        <td>{{ $item->brand }}</td>
                        <td>{{ $item->model }}</td>
                        <td>
                            @if($item->rental_status)
                                <span class="badge bg-success">Đang thuê</span>
                            @else
                                <span class="badge bg-danger">Chưa thuê</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Thêm JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
