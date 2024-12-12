<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách bán hàng</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

    <h1>Danh sách bán hàng</h1>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Tên thuốc</th>
                <th>Thương hiệu</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Ngày bán</th>
                <th>Số điện thoại khách hàng</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td> <!-- Số thứ tự -->
                    <td>{{ $item->name }}</td> <!-- Tên thuốc -->
                    <td>{{ $item->brand }}</td> <!-- Thương hiệu -->
                    <td>{{ number_format($item->price, 2) }} VND</td> <!-- Giá (định dạng tiền tệ) -->
                    <td>{{ $item->quantity }}</td> <!-- Số lượng -->
                    <td>{{ date('d/m/Y H:i', strtotime($item->sale_date)) }}</td> <!-- Ngày bán (định dạng ngày) -->
                    <td>{{ $item->customer_phone ?? 'N/A' }}</td> <!-- Số điện thoại khách hàng -->
                </tr>
            @empty
                <tr>
                    <td colspan="7" style="text-align: center;">Không có dữ liệu</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>
