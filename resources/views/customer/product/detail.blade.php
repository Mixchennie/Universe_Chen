@extends('customer.layout._layout')
{{-- <x-guest-layout> --}}
@section('content')
    <link rel="stylesheet" href="/css/customer/products/detail.css">

    <body>
        <div class="container">
            <div class="row pt-2 shadow-lg justify-content-center align-items-center">
                <h2 id="title" class="title-detail">Detail</h2>
                <div class="col-md-12 pt-4 d-flex">
                    <div class="card-image">
                        <img src="{{ $product->thumbnail }}" class="card-img-top" alt="{{ $product->name }}">
                    </div>
                    <div class="card-infomation">
                        <h4 class="card-title">{{ $product->name }}</h4>
                        <p class="card-text"><span class="fw-bold">Price: </span> {{ $product->price }}</p>
                        <div class="mb-3">
                            <p class="fw-bold">Size: </p>
                            <div id="sizeButtons">
                                <button class="btn active size">S</button>
                                <button class="btn size">M</button>
                                <button class="btn size">L</button>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label"><span class="fw-bold">Quantity:</span></label>
                            <div class="d-flex align-items-center">
                                <button class="btn btn-outline-secondary" type="button" id="minus-btn">-</button>
                                <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1" style="width: 50px;">
                                <button class="btn btn-outline-secondary" type="button" id="plus-btn">+</button>
                            </div>
                        </div>
                        <div class="mb-3">
                            <p class="card-text"><span class="fw-bold">Description: </span> {{ $product->description }}
                            </p>
                        </div>
                        <a href="#"><button type="submit" class="btn btn-primary">Add to Cart</button></a>
                    </div>
                </div>
                <h5 class="recomment">OTHER PRODUCTS OF THE SHOP</h5>
                <div class="row pt-4">
                    @foreach ($products as $product)
                        <div class="col-md-4 mb-3">
                            <a href="{{ route('product-detail', ['id' => $product->id]) }}" class="nav-link">
                                <div class="card" style="width: 100%;">
                                    <img src="{{ $product->thumbnail }}" class="card-img-top" alt="{{ $product->name }}"
                                        style="height: 350px; object-fit: cover;">
                                    <div class="card-body" style="background-color: #ff6699;">
                                        <h4 class="text-reconment">{{ $product->name }}</h4>
                                        <p class="text-reconment">{{ $product->price }}</p>
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
@endsection
