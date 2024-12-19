<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách học sinh</title>
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

    <h1>Danh sách học sinh</h1>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Họ</th>
                <th>Tên</th>
                <th>Ngày sinh</th>
                <th>Phòng học</th>
                <th>Số điện thoại phụ huynh</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td> <!-- Số thứ tự -->
                    <td>{{ $item->last_name }}</td> <!-- Họ học sinh -->
                    <td>{{ $item->first_name }}</td> <!-- Tên học sinh -->
                    <td>{{ date('d/m/Y', strtotime($item->date_of_birth)) }}</td> <!-- Ngày sinh (định dạng dd/mm/yyyy) -->
                    <td>{{ $item->room_number }}</td> <!-- Số phòng học -->
                    <td>{{ $item->parent_phone ?? 'N/A' }}</td> <!-- Số điện thoại phụ huynh -->
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align: center;">Không có dữ liệu</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>

