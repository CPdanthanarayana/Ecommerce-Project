<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')
   <style>
    .div_deg {
    padding: 30px 40px;
    background:rgb(43, 1, 59);
    border-radius: 10px;
    box-shadow: 0 4px 24px rgba(93, 6, 151, 0.31);
    width: 80%;
    margin: 40px auto;
    }

    .table_deg {
        width: 100%;
        border: 1px solid #444;
        margin: auto;
        text-align: left;
        font-size: 1rem;
        color: #f1f1f1;
    }

    td {
        padding: 12px;
        border: 1px solid #444;
    }

    th {
        padding: 12px;
        background-color: #333;
        font-weight: bold;
        border-bottom: 1px solid #444;
    }

    tr:hover {
        background-color: #555;
    }

    .pagination {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 2rem; /* Adjust spacing as needed */
    margin-bottom: 2rem;
    }

    .pagination nav {
    margin: 0;
    }

    .paginationinfo {
    color: #ccc;
    font-size: 1rem;
    }

   </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <h1 class="h1 mb-4 text-gray-800">View Product</h1>
                    <div class="div_deg">
                        <table class="table_deg">
                            <tr>
                                <th>Product Title</th>
                                <th>Product Description</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Product Category</th>
                                <th>Product Image</th>
                                <th>Delete</th>
                            </tr>

                            @foreach($product as $products)
                            <tr>
                                <td>{{$products->title}}</td>
                                <td>{{$products->description}}</td>
                                <td>{{$products->price}}</td>
                                <td>{{$products->quantity}}</td>
                                <td>{{$products->category}}</td>
                                <td><img src="/product/{{$products->image}}" alt="" height="100" width="100"></td>
                                <td><a onclick="confirmation(event)" href="{{url('delete_product', $products->id)}}" class="btn btn-danger">Delete</a></td>
                            </tr>
                            @endforeach
                        </table>

                        
                    </div>
                    <div class="pagination">
                        {{ $product->links() }} <!-- Add pagination links here -->
                    </div>
                </div>
            </div>     
        </div>
    </div>
    <!-- JavaScript files-->

    <script>
        function confirmation(event) {
            event.preventDefault();
            var link = event.currentTarget.getAttribute('href');
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = link;
                } else {
                    swal("Your file is safe!");
                }
            });
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>