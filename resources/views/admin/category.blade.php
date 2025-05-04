<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')

   <style type="text/css">
    input[type='text']
    {
        width: 500px;
        height: 50px;
    }
    .ent_category
    {
        width: 400px;
        height: 50px;
        border-radius: 5px;
        border: none;
        padding-left: 10px;
        font-size: 20px;
        background-color: #898c92;
    }
    input::placeholder {
        color: white; 
        font-style: italic; 
    }
   
    .btn_category
    {
        width: 150px;
        height: 50px;
        background-color: rgb(112, 0, 187);
        color: white;
        border-radius: 5px;
        border: none;
        font-size: 20px;
        transition: background-color 0.3s ease;
    }
    .btn_category:hover
    {
        background-color: rgb(146, 0, 243);
        
    }
    .btn_category:active
    {
        background-color: rgb(198, 113, 255);
    }
    

    .div_deg 
    {
        display:flex;
        justify-content: center;
        align-items: center;
        margin: 30px;
    }

    .table_deg
    {
        margin: auto;
        width: 50%;
        margin: auto;
        
    }

    
    .table_deg th
    {
        background:rgb(112, 0, 187);
        color: white;
        padding: 10px;
        border-top: 3px solid rgb(112, 0, 187);
        border-left: 3px solid rgb(112, 0, 187);
        border-right: 3px solid rgb(112, 0, 187);
        border-bottom: 3px solid rgb(118, 118, 118);
        text-align: center;

    }
    .table_deg td
    {
        
        color: white;
        padding: 10px;
        border: 3px solid;
        border-color: rgb(118, 118, 118);
        text-align: left;
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
                <h1>Add Category</h1>
                   <div class="div_deg">
                    
                   <form action="{{url('add_category')}}" method="post">
                    @csrf
                        <div>
                            <input class="ent_category" type="text" name="category" placeholder="Enter category name">
                            <input class="btn_category" type="submit" value="Add Category" color="blue">
                        </div>
                    </form>
                   </div>
                
                </div>
                <div>
                    <table class="table_deg" style="width: 80%;">
                        <tr>
                            <th>Category Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($data as $data)
                        <tr>
                            <td>{{ $data->category_name }}</td>
                            <td style="text-align: center;"><a class="btn btn-success" href="{{url('edit_category', $data->id)}}">Edit</a></td>
                            <td style="text-align: center;">
                                <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_category', $data->id)}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>     
        </div>
    </div>
    <!-- JavaScript files-->
    <script>
        function confirmation(ev)
        {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = urlToRedirect;
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