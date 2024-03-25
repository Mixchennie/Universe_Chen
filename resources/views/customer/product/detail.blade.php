<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product Detail</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/customer/products/detail.css">
</head>

<body>
    <div class="container">
        <div class="row pt-2 shadow-lg">
            <h2 id ="title" class="title">Detail</h2>
            <div class="col-md-6 pt-4">
                <div class="card" style="width: 60%; object-fit: cover; float: right; margin-left: 300px;">
                    <img src="{{ $product->thumbnail }}" class="card-img-top" alt="{{ $product->name }}"
                        style="height: 400px;">
                </div>
            </div>
            <div class="col-md-6 pt-4">
                <div class="card border-0" style="width: 80%;">
                    <div class="card-body">
                        <h4 class="card-title">{{ $product->name }}</h4>
                        <p class="card-text"><span class="fw-bold">Price: </span> {{ $product->price }}</p>
                        {{-- <form action="#" method="POST">
                            @csrf --}}
                        <div class="mb-3">
                            <p class="fw-bold">Size: </p>
                            <div id="sizeButtons">
                                <button class="btn active size">S</button>
                                <button class="btn size">M</button>
                                <button class="btn size">L</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="quantity" class="form-label"><span class="fw-bold">Quantity:</span></label>
                                <div class="input-group">
                                    <button class="btn btn-outline-secondary" type="button" id="minus-btn">-</button>
                                    <input type="number" class="form-control" id="quantity" name="quantity"
                                        value="1" min="1" style="width: 50px;">
                                    <button class="btn btn-outline-secondary" type="button" id="plus-btn">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <p class="card-text"><span class="fw-bold">Description: </span> {{ $product->description }}
                            </p>
                        </div>
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
            <h5 class="pt-4">OTHER PRODUCTS OF THE SHOP</h5>
            <div class="row pt-4">
                @foreach ($products as $product)
                    <div class="col-md-4 mb-3"> <!-- Sử dụng lớp col-md-4 để mỗi card chiếm 1/3 của hàng -->
                        <a href="{{ route('product-detail', ['id' => $product->id]) }}" class="nav-link">
                            <div class="card" style="width: 100%;">
                                <img src="{{ $product->thumbnail }}" class="card-img-top" alt="{{ $product->name }}"
                                    style="height: 350px; object-fit: cover;">
                                <div class="card-body" style="background-color: #ff6699;">
                                    <h4 class="card-title">{{ $product->name }}</h4>
                                    <p class="card-text">{{ $product->price }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Bootstrap JS v5.2.1 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <!-- Custom JavaScript -->
    <script>
        // Lấy tất cả các nút kích thước
        const sizeButtons = document.querySelectorAll('.size');

        // Lặp qua từng nút và thêm sự kiện click
        sizeButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Loại bỏ lớp "active" từ tất cả các nút
                sizeButtons.forEach(btn => {
                    btn.classList.remove('active');
                });

                // Thêm lớp "active" vào nút được nhấp
                button.classList.add('active');
            });
        });

        // Lấy các phần tử cần thiết
        const quantityInput = document.getElementById('quantity');
        const minusBtn = document.getElementById('minus-btn');
        const plusBtn = document.getElementById('plus-btn');

        // Thêm sự kiện click cho nút tăng và giảm
        minusBtn.addEventListener('click', () => {
            if (parseInt(quantityInput.value) > 1) {
                quantityInput.value = parseInt(quantityInput.value) - 1;
            }
        });

        plusBtn.addEventListener('click', () => {
            quantityInput.value = parseInt(quantityInput.value) + 1;
        });
    </script>

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
</body>

</html>
