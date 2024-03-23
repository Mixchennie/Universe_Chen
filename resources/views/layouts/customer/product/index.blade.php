<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/customer/products/index.css">

    {{-- icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-h0b//0F7kk4jnz+B1tbvVX4J8Rh2bphQQzVIi5FqozpR2U03w6VzPSISZ4un4zNP" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1 id="title" class="title">Fashion</h1>
        <div class="category">
            <ul>
                @foreach ($categories as $category)
                    <li><a href="{{ route('showProducts', ['id_categories' => $category->id]) }}"
                            class="category-button color">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-3"> <!-- Sử dụng lớp col-md-4 để mỗi card chiếm 1/3 của hàng -->
                    <a href="{{ route('product-detail', ['id' => $product->id]) }}" class="nav-link">
                        <div class="card" style="width: 100%;">
                            <img src="{{ $product->thumbnail }}" class="card-img-top" alt="{{ $product->name }}"
                                style="height: 350px; object-fit: cover;">
                            <div class="card-body" style="background-color: #ff6699;">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->price }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        // Lấy thẻ tiêu đề
        const title = document.getElementById('title');

        // Mảng chứa danh sách màu
        const colors = ['#ff0000', '#ff7f00', '#ffff00', '#7fff00', '#00ff00', '#00ff7f', '#00ffff', '#007fff', '#0000ff',
            '#7f00ff', '#ff00ff', '#ff007f'
        ];

        let currentIndex = 0; // Chỉ mục hiện tại của mảng màu

        // Hàm thay đổi màu
        function changeColor() {
            // Lấy màu từ mảng và gán cho tiêu đề
            title.style.color = colors[currentIndex];

            // Tăng chỉ mục
            currentIndex++;

            // Nếu đã đến cuối mảng, quay lại chỉ mục đầu tiên
            if (currentIndex >= colors.length) {
                currentIndex = 0;
            }
        }

        // Thực hiện hàm changeColor mỗi 2 giây
        setInterval(changeColor, 2000);
    </script>
    <!-- Bootstrap JS v5.2.1 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
