<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')

   <style>
    .div_deg
    {
        display:flex;
        justify-content: center;
        align-items: center;
        margin: 60px;
    }

    input[type='text']
    {
        width: 500px;
        height: 50px;
        border-radius: 5px;
    }

    .edit_btn
    {
        width: 150px;
        height: 45px;
        background-color: rgb(112, 0, 187);
        color: white;
        border-radius: 5px;
        border: none;
        font-size: 17px;
        transition: background-color 0.3s ease;
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
                <h1>Edit Category</h1>
                    <div class="div_deg">
                        <form action="{{url('update_category', $data->id)}}" method="POST">
                            @csrf
                            <input type="text" name="category" value="{{$data->category_name}}">
                            <input class="edit_btn" type="submit" value="Update Category" color="blue">
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