
<!DOCTYPE html>
<html lang="en">
  <head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta name="description" content="Suha - Multipurpose Ecommerce Mobile HTML Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#100DD1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above tags *must* come first in the head, any other head content must come *after* these tags-->
    <!-- Title-->
    <title>Quickcell B2C Module</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap">
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('img/core-img/ssslogo.png') }}">
    <!-- Apple Touch Icon-->
    <link rel="apple-touch-icon" href="{{ asset('img/core-img/ssslogo.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/core-img/ssslogo.png') }}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{ asset('img/core-img/ssslogo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/core-img/ssslogo.png') }}">
    <!-- CSS Libraries-->
    <link rel="stylesheet" href="{{ asset('css/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/css/ecommerce.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/accordion.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/modal.scss') }}">
    <link rel="stylesheet" href="{{ asset('css/css/default/lineicons.min.css') }}">
    <!--range slider CSS -->
    <!-- Stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Web App Manifest-->
    <link rel="manifest" href="{{ asset('manifest.json') }}">
  </head>
  <body>
    <!-- Preloader-->
 <!--    <div class="preloader" id="preloader">
      <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only">Loading...</div>
      </div>
    </div> -->
    <!-- Header Area-->
    <div class="header-area" id="headerArea">

      <div class="container h-100 d-flex align-items-center justify-content-between">
        <div class="back-button"><a href="javascript:history.back()">
            <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
            </svg></a></div>
        <!-- Logo Wrapper-->
        <div class="page-heading">
          <h4 class="mb-0">Orders</h4>
        </div>
        <!-- Search Form-->
        <div class="top-search-form">
          <form action="" method="">
           <input class="form-control" id="searchBar" type="search" placeholder="Search your keyword">
             <!--  <button id="search"><i class="fa fa-search"></i></button> -->
          </form>
           </div>
        <div class="back-button">
        <!--  <i class="fa fa-bell"></i> -->
         </div>
        
      </div>
    </div>
    <!-- Sidenav Black Overlay-->
    <div class="sidenav-black-overlay"></div>
    <!-- Side Nav Wrapper-->
    <div class="suha-sidenav-wrapper filter-nav" id="sidenavWrapper">
          <div class="filter-title">
          <h5>Filter</h5>
        </div>
      <div class="catagory-sidebar-area">
        <div class="go-home-btn" id="goHomeBtn"><i class="lni lni-arrow-left"></i></div>
  
        <div class="apply-filter-btn"><a class="btn btn-success" href="">Apply</a></div>
        <!-- barnds-->
         <div class="widget color">
           
          <a class="widget-title accordion">Order Status <!-- (<small class="counter"></small>) --></a>

          <div class="widget-desc panel">
          <ul>
  <li onmouseup="selectAll()">
    <input type="checkbox" name="all" id="all">
    <label for="all">All Orders</label>

    <ul id="filterOptions">
      <li>
        <input type="checkbox" name="Order Placed" id="OrderPlaced">
        <label for="OrderPlaced">Order Placed</label>
      </li>
      <li>
        <input type="checkbox" name="Order Accepted" id="OrderAccepted">
        <label for="OrderAccepted">Order Accepted</label>
      </li>
      <li>
        <input type="checkbox" name="Delivered" id="Delivered">
        <label for="Delivered">Delivered – in return/exchange period</label>
      </li>
      <li>
        <input type="checkbox" name="Delivered" id="Delivered-no-return">
        <label for="Delivered-no-return">Delivered – out of return period</label>
      </li>
      <li>
        <input type="checkbox" name="cancelledBySeller" id="cancelledBySeller">
        <label for="cancelledBySeller">Cancelled by seller</label>
      </li>
      <li>
        <input type="checkbox" name="CancelledBySelf" id="CancelledBySelf">
        <label for="CancelledBySelf">Cancelled by self</label>
      </li>
      <li>
        <input type="checkbox" name="ReadyToShip" id="ReadyToShip">
        <label for="ReadyToShip">Ready to Ship</label>
      </li>
      <li>
        <input type="checkbox" name="Shipped" id="Shipped">
        <label for="Shipped">Shipped</label>
      </li>
      <li>
        <input type="checkbox" name="ExchangeRequested" id="ExchangeRequested">
        <label for="ExchangeRequested">Exchange Requested</label>
      </li>
      <li>
        <input type="checkbox" name="ReturnRequested" id="ReturnRequested">
        <label for="ReturnRequested">Return Requested</label>
      </li>
      <li>
        <input type="checkbox" name="ExchangeAccepted" id="ExchangeAccepted">
        <label for="ExchangeAccepted">Exchange Accepted</label>
      </li>
      <li>
        <input type="checkbox" name="ReturnAccepted" id="ReturnAccepted">
        <label for="ReturnAccepted">Return Accepted</label>
      </li>
      <li>
        <input type="checkbox" name="ExchangeRejected" id="ExchangeRejected">
        <label for="ExchangeRejected">Exchange Rejected</label>
      </li>
      <li>
        <input type="checkbox" name="ReturnRejected" id="ReturnRejected">
        <label for="ReturnRejected">Return Rejected</label>
      </li>
      <li>
        <input type="checkbox" name="Exchanged" id="Exchanged">
        <label for="Exchanged">Exchanged</label>
      </li>
      <li>
        <input type="checkbox" name="Returned" id="Returned">
        <label for="Returned">Returned</label>
      </li>
      <li>
        <input type="checkbox" name="RefundRejected" id="RefundRejected">
        <label for="RefundRejected">Refund Rejected</label>
      </li>
      <li>
        <input type="checkbox" name="RefundAccepted" id="RefundAccepted">
        <label for="RefundAccepted">Refund Accepted</label>
      </li>
      <li>
        <input type="checkbox" name="RefundInitiated" id="RefundInitiated">
        <label for="RefundInitiated">Refund Initiated</label>
      </li>
      <li>
        <input type="checkbox" name="RefundCompleted" id="RefundCompleted">
        <label for="RefundCompleted">Refund Completed</label>
      </li>
      <li>
        <input type="checkbox" name="Undelivered" id="Undelivered">
        <label for="Undelivered">Undelivered – Refused to accept/not available</label>
      </li>
    </ul>
  </li>
</ul>
</div>
      
       
        <div class="widget color">
          <a class="widget-title accordion">Timeline</a>
          <div class="widget-desc panel">
          
            <div class="">
             <input type="radio" id="Last 30 days" name="timeline" value="">
            <label for="Last 30 days">Last 30 days</label><br>
            </div>
           
            <div class="">
            <input type="radio" id="Last 3 months" name="timeline" value="">
            <label for="Last 3 months">Last 3 months</label><br>
            </div>
           
            <div class="">
            <input type="radio" id="Last 6 months" name="timeline" value="">
            <label for="Last 6 months">Last 6 months</label><br>
            </div>
           
            <div class="">
            <input type="radio" id="Last Year" name="timeline" value="">
            <label for="Last Year">Last Year</label><br>
            </div>
           
            <div class="">
            <input type="radio" id="2020" name="timeline" value="">
            <label for="2020">2020</label><br>
            </div>
          </div>
        </div>
        </div>
        
      </div>

    </div>
    <script type="text/javascript">

      function profile(){
        // console.log('hello');
          // var id=document.getElementById('hide').value;
            $.ajax({
               type:'POST',
               url:'/quickWebsite/b2c/public/profile1',
               data: {},
              //  beforeSend: function (request) {
              //     return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
              // },
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              // data:'_token = <?php echo csrf_token() ?>',
               success:function(result) {
                  $("#sidenavWrapper").html(result);

                  // console.log(val1);
                  console.log(result);
               }
            });
      }

      var acc = document.getElementsByClassName("accordion");
      var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "150px";
    } 
  });
}

function selectAll() {
  $('input[type="checkbox"]').change(function(e) {

var checked = $(this).prop("checked"),
    container = $(this).parent(),
    siblings = container.siblings();
   
container.find('input[type="checkbox"]').prop({
  indeterminate: false,
  checked: checked
});

function checkSiblings(el) {

  var parent = el.parent().parent(),
      all = true;

  el.siblings().each(function() {
    let returnValue = all = ($(this).children('input[type="checkbox"]').prop("checked") === checked);
    return returnValue;
  });
  
  if (all && checked) {

    parent.children('input[type="checkbox"]').prop({
      indeterminate: false,
      checked: checked
    });

    checkSiblings(parent);

  } else if (all && !checked) {

    parent.children('input[type="checkbox"]').prop("checked", checked);
    parent.children('input[type="checkbox"]').prop("indeterminate", (parent.find('input[type="checkbox"]:checked').length > 0));
    checkSiblings(parent);

  } else {

    el.parents("li").children('input[type="checkbox"]').prop({
      indeterminate: true,
      checked: false
    });

  }

}

checkSiblings(container);
});

}

    </script>