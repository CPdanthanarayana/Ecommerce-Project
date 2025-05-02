<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <div>
                        <form action="">
                            <div>
                                <label for="">Product Title</label>
                                <input type="text" name="title" required>
                            </div>
                            <div>
                                <label for="">Product Description</label>
                                <textarea name="description" required></textarea>
                            </div>
                            <div>
                                <label for="">Product Price</label>
                                <input type="text" name="price" required>
                            </div>
                            <div>
                                <label for="">Product Quantity</label>
                                <input type="text" name="quantity" required>
                            </div>
                            <div>
                                <label for="">Product Category</label>
                                <select name="category" required>
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="">Product Image</label>
                                <input type="file" name="image" required>
                            </div>
                            
                        </form>

                    </div>
                
                </div>
            </div>     
        </div>
    </div>
    <!-- JavaScript files-->
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