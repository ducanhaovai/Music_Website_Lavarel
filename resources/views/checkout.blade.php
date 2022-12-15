<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title></title>


  <link rel="stylesheet" href="{{asset('css/checkout.css')}}" />




</head>

<body>
  <div class="parent">
    <div class="son">
      
        <div class="container">
        
          <div class="left">
            <div class="img">
              <iframe src="https://youtube.com/embed/{{ $video->video_url}}" framborder="0" allow="accelerometer; autoplay"></iframe>
            </div>



            <div class="info">


              <ul>
                <li>{{$video->name}}</li>
                <li>{{$video->description}}</li>
                <li>{{$video->price}}</li>
              </ul>
              <ul>
                <li>category</li>
                <li>{{$video->category}}</li>
                <li>Sell over</li>
                <li>$24000</li>
              </ul>

            </div>
            <div class="circle1">
              <div class="circle">
                <span>Rate by user</span>
                <span>89,8%</span>
              </div>
            </div>
          </div>
         
      
      <div class="right">
        <div class="up">
          <ul>
            <li>
              <h3>It's almost done!</h3>
            </li>
            <li>Fill in the fields below and click "Buy Now!" to make something beautiful.</li>
          </ul>
          <ul>
            <li class="activecr">credit card</li>
            <li class="activecr">paypal</li>
          </ul>
        </div>
        <div class="down">
          <div class="payment">
            <form>

              <div class="form-group">
                <label class="cardNumber">Card Number</label>
                <input type="number" class="form-control1">
              </div>


              <div class="form-group1" id="expiration-date">
                <div class="lab">
                  <label>Expiration Date</label>
                  <select>
                    <option value="01">January</option>
                    <option value="02">February </option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                  </select>
                  <select class="year">
                    <option value="16"> 2016</option>
                    <option value="17"> 2017</option>
                    <option value="18"> 2018</option>
                    <option value="19"> 2019</option>
                    <option value="20"> 2020</option>
                    <option value="21"> 2021</option>
                    <option value="21"> 2022</option>
                  </select>
                </div>

                <div class="form-group CVV">
                  <label for="cvv">CVV</label>
                  <input type="number" class="form-control" id="cvv">
                </div>
              </div>
              <div class="form-group btn" id="pay-now">
              <a href="{{route('auth.done')}}"><button type="button" class="btn btn-default" id="confirm-purchase">Buy Now!</button></a>
              

              
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

</body>

</html>