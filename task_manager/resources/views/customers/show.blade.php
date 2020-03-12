@include('partials.head')
<body>
    <div class="container">

        <div class="text-center">
        <h2>Thông tin người dùng</h2>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-3">
                    <label>Họ Và Tên:</label>
                </div>
                <div class="col-6">
                    <span> {{ $customer->name }} </span>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label>Ngày sinh</label>
                </div>
                <div class="col-6">
                    <span> {{ $customer->dob }} </span>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label>Email:</label>
                </div>
                <div class="col-6">
                    <span> {{ $customer->email }} </span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
