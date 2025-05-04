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
    max-width: 620px;
    margin: 40px auto;
    }

    form {
    display: flex;
    flex-direction: column;
    gap: 22px;
    }

    label {
    font-weight: 600;
    margin-bottom: 6px;
    color: #f1f1f1;
    display: block;
    font-size: 1rem;
    }
    
    input[type="text"],
    input[type="file"],
    select,
    textarea {
        width: 100%;
        padding: 12px 14px;
        border: 1.5px solid #444;
        border-radius: 6px;
        background: #f9f9f9;
        color: #222;
        font-size: 1rem;
        transition: border-color 0.2s, box-shadow 0.2s;
        box-sizing: border-box;
    }
    

    input[type="text"]:focus,
    select:focus,
    textarea:focus {
    border-color: #4caf50;
    box-shadow: 0 0 0 2px rgba(76,175,80,0.15);
    outline: none;
    }

    input[type="file"] {
    padding: 8px;
    background: #fff;
    }

    textarea {
    min-height: 80px;
    resize: vertical;
    }

    select {
    background: #fff;
    }

  
    button:hover, input[type="submit"]:hover {
    background:rgb(57, 118, 204);
    }

    

    .submit-btn {
   
    width: 100%;
    padding: 14px;
    background:rgb(47, 32, 255);
    color: #fff;
    border: none;
    border-radius: 6px;
    font-size: 1.1rem;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.2s, box-shadow 0.2s;
    margin-top: 18px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.07);
   
    }

    .submit-btn:hover,
    .submit-btn:focus {
    background:rgb(99, 102, 251);
    box-shadow: 0 4px 16px rgba(76,175,80,0.15);
    outline: none;
    }

    @media (max-width: 600px) {
    .div_deg {
        padding: 16px 8px;
        max-width: 100%;
    }
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
                    <h1 class="h1 mb-4 text-gray-800">Add Product</h1>
                    <div class="div_deg">
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
                                    
                                    
                                    
                                </select>
                            </div>
                            <div>
                                <label for="">Product Image</label>
                                <input type="file" name="image" required>
                            </div>
                            <div class="div-submit-btn">
                                <button type="submit" class="submit-btn">Add Product</button>
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