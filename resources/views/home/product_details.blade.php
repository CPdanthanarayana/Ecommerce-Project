<!DOCTYPE html>
<html>

<head>
 @include('home.css')
 <style>
    .box{
        display: flex;
        align-items: flex-start;
        gap: 30px;
    }

    .img-box{
        width: 300px;
        flex-shrink: 0;
    }

    .detail-box{
        padding: 30px;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .detail-box h6{
        font-size: 18px;
        margin-bottom: 10px;
    }

    
 </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->

    
  </div>
    <!-- product details start -->

    <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">
        
        <div class=" col-md-20">
          <div class="box">
            
              <div class="img-box">
                <img src="{{ asset('product/' . $product->image) }}" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  {{ $product->title }} ({{ $product->category }})
                </h6>
                <h6>
                  Price
                  <span>
                    {{ $product->price }}
                  </span>
                </h6>
                <p>{{$product->description}}</p>
                <h6>
                  Quantity
                  <span>
                    {{$product->quantity}}
                  </span>
                </h6>
              </div>
            </div>
        </div> 
        
      </div>
    </div>
  </section>


    <!-- product details end -->
  


  
   

  <!-- info section -->
   @include('home.footer')

</body>

</html>