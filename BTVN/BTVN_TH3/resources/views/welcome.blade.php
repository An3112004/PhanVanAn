<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f9;
        }
        
        a {
            text-decoration: none;
        }
        
        button {
            background-color: #4CAF50; /* Màu xanh lá */
            color: white; 
            border: none; 
            padding: 15px 30px; 
            font-size: 16px; 
            border-radius: 8px; 
            cursor: pointer; 
            transition: all 0.3s ease;
            margin: 10px; 
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        button:hover {
            background-color: #45a049; /* Màu xanh lá đậm hơn khi hover */
            transform: translateY(-5px); 
            box-shadow: 0 8px 12px rgba(0,0,0,0.2);
        }
        
        button:active {
            transform: translateY(2px);
        }
    </style>
</head>
<body>
    <a href="{{ route('bai1.index') }}"><button>Bài 1</button></a>
    <a href="{{ route('bai2.index') }}"><button>Bài 2</button></a>
    <a href="{{ route('bai3.index') }}"><button>Bài 3</button></a>
    <a href="{{ route('bai4.index') }}"><button>Bài 4</button></a>
</body>
</html>