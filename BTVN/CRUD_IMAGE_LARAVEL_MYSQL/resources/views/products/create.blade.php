<!-- <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">Tên sản phẩm:</label>
    <input type="text" name="name">
    
    <label for="price">Giá sản phẩm:</label>
    <input type="text" name="price">
    
    <label for="image">Chọn ảnh:</label>
    <input type="file" name="image">

    <button type="submit">Thêm sản phẩm</button>
</form> -->

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Tin Tức</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 50px;
            padding: 30px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2rem;
            color: #212529;
        }

        .form-group label {
            font-weight: bold;
            color: #495057;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 12px 20px;
            border-radius: 10px;
            width: 100%;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="form-title">ADD</h2>
        <form action={{ route('products.store') }} method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 form-group">
                <label for="name" class="form-label">Name</label>
                <input class="form-control" type="text" name="name" id="name" >
            </div>
            <div class="mb-3 form-group">
                <label for="price" class="form-label">Price</label>
                <input class="form-control" type="text" name="price" id="price" >
            </div>
            <div class="mb-3 form-group">
                <label for="image" class="form-label">Image</label>
                <input class="form-control" type="file" name="image" id="image">
            </div>

            <button type="submit" class="btn btn-primary">ADD</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


