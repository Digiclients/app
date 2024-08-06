@include('dashboard.inc.DashBoardNavbars')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>






<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">
 


    <h1  class="darkcolor font20 mx-2 " >Analytics v3</h1>





   {{-- START statistics Section --}}



   <section id="statistics-section" class="row pt-4">








{{-- START OF statistics item 1  --}}
           
    <div class="col-xl-3 col-md-6 my-2 my-xl-0">  
        
        <div class="BlocksBackground mx-2 dark-box-shadow rounded   bgwhite">  

{{-- START icon and text info --}}
            <div class="p-4  pb-0 mx-2">
                <div class="">  
            
                    <div class="rounded float-start text-center p-2 m-1  bgprimaryopacity">
                  <i class="iconify primarycolor font40" data-icon="uil-arrow-growth"></i>
                       
                    </div>
            
                </div><div class="mx-2"> 
                    <h2 class="darkcolor my-0 mx-4"> 100+ </h2>
                    <p class="graycolor mx-4">Total Products</p>   
                </div>
            
                
            </div>

{{-- END icon and text info --}}




{{-- START apexChart statistics_item_1 --}}
  


<div id='statistics_item_1'></div>


<script>






      var statistics_item_1_options = {
          series: [{
          name: 'Products',
          data: [31, 40, 28, 51, 42, 60, 80 , 60 , 40 , 30 , 26 , 48]
        }],
        colors: [COLORS["primaryColor"]],


          chart: {
          height: 160,
          type: 'area',
          toolbar: {
            show: false,
        },
        sparkline: {
      enabled: true
    }
        },
        title: {
    text: "",
    align: 'left',
        },

        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
        xaxis: {
          categories: ['Jan', 'Fev', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        },

        yaxis: {
            min : 0,
            },

            grid: {
    show: false,
},        
    tooltip: {
        fixed: {
          enabled: false,
          position: 'topRight',
          offsetX: -100,
          offsetY: 0,
      },

            },


        };

        var chart = new ApexCharts(document.querySelector("#statistics_item_1"), statistics_item_1_options);
        chart.render();

      
      
</script>

{{-- END apexChart statistics_item_1  --}}
      
      
          </div>  
      
      </div>
      
         
      
{{-- END OF statistics item 1  --}}
      
















         
   









{{-- START OF statistics item 2  --}}
           
<div class="col-xl-3 col-md-6 my-2 my-xl-0">  
        
    <div class="BlocksBackground mx-2 dark-box-shadow rounded   bgwhite">  

{{-- START icon and text info --}}
        <div class="p-4  pb-0 mx-2">
            <div class="">  
        
                <div class="rounded float-start text-center p-2 m-1  bgsecondaryopacity">
              <i class="iconify seccolor font40" data-icon="uil:users-alt"></i>
                   
                </div>
        
            </div><div class="mx-2"> 
                <h2 class="darkcolor my-0 mx-4">  30,825  </h2>
                <p class="graycolor mx-4">Total Orders</p>   
            </div>
        
            
        </div>

{{-- END icon and text info --}}




{{-- START apexChart statistics_item_2 --}}



<div id='statistics_item_2'></div>


<script>






  var statistics_item_2_options = {
      series: [{
      name: 'Products',
      data: [40, 60, 20, 40, 60, 20, 40 , 60 , 20 , 40 , 60 , 20]
    }],
    colors: [COLORS["secColor"]],


      chart: {
      height: 160,
      type: 'area',
      toolbar: {
        show: false,
    },
    sparkline: {
  enabled: true
}
    },
    title: {
text: "",
align: 'left',
    },

    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth'
    },
    xaxis: {
      categories: ['Jan', 'Fev', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    },

    yaxis: {
        min : 0,
        },

        grid: {
show: false,
},        
tooltip: {
    fixed: {
      enabled: false,
      position: 'topRight',
      offsetX: -100,
      offsetY: 0,
  },

        },


    };

    var chart = new ApexCharts(document.querySelector("#statistics_item_2"), statistics_item_2_options);
    chart.render();

  
  
</script>

{{-- END apexChart statistics_item_2  --}}
  
  
      </div>  
  
  </div>
  
     
  
{{-- END OF statistics item 2  --}}
  












































{{-- START OF statistics item 3  --}}
           
<div class="col-xl-3 col-md-6 my-2 my-xl-0">  
        
    <div class="BlocksBackground mx-2 dark-box-shadow rounded   bgwhite">  

{{-- START icon and text info --}}
        <div class="p-4  pb-0 mx-2">
            <div class="">  
        
                <div class="rounded float-start text-center p-2 m-1  bgthirdopacity">
                    {{-- <i class="font30 fa-solid primarycolor fa-arrow-trend-up"></i> --}}
              <i class="iconify thirdcolor font40" data-icon="uil:usd-circle"></i>
                   
                </div>
        
            </div><div class="mx-2"> 
                <h2 class="darkcolor my-0 mx-4">  $30,825  </h2>
                <p class="graycolor mx-4">Total Sales</p>   
            </div>
        
            
        </div>

{{-- END icon and text info --}}




{{-- START apexChart statistics_item_3 --}}



<div id='statistics_item_3'></div>


<script>






  var statistics_item_3_options = {
      series: [{
      name: 'Products',
      data: [80, 70, 60, 51, 42, 30, 20 , 20 , 30 , 40 , 50 , 60]
    }],
    colors: [COLORS["thirdColor"]],


      chart: {
      height: 160,
      type: 'area',
      toolbar: {
        show: false,
    },
    sparkline: {
  enabled: true
}
    },
    title: {
text: "",
align: 'left',
    },

    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth'
    },
    xaxis: {
      categories: ['Jan', 'Fev', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    },

    yaxis: {
        min : 0,
        },

        grid: {
show: false,
},        
tooltip: {
    fixed: {
      enabled: false,
      position: 'topRight',
      offsetX: -100,
      offsetY: 0,
  },

        },


    };

    var chart = new ApexCharts(document.querySelector("#statistics_item_3"), statistics_item_3_options);
    chart.render();

  
  
</script>

{{-- END apexChart statistics_item_3  --}}
  
  
      </div>  
  
  </div>
  
     
  
{{-- END OF statistics item 3  --}}
  




















































{{-- START OF statistics item 4  --}}
           
<div class="col-xl-3 col-md-6 my-2 my-xl-0">  
        
    <div class="BlocksBackground mx-2 dark-box-shadow rounded   bgwhite">  

{{-- START icon and text info --}}
        <div class="p-4  pb-0 mx-2">
            <div class="">  
        
                <div class="rounded float-start text-center p-2 m-1 bgfourthopacity">
                    {{-- <i class="font30 fa-solid primarycolor fa-arrow-trend-up"></i> --}}
              <i class="iconify fourthcolor font40" data-icon="uil:tachometer-fast"></i>
                   
                </div>
        
            </div><div class="mx-2"> 
                <h2 class="darkcolor my-0 mx-4">  30,825  </h2>
                <p class="graycolor mx-4">New Customers</p>   
            </div>
        
            
        </div>

{{-- END icon and text info --}}




{{-- START apexChart statistics_item_4 --}}



<div id='statistics_item_4'></div>


<script>






  var statistics_item_4_options = {
      series: [{
      name: 'Products',
      data: [10, 20, 30, 40, 50, 60, 70 , 80 , 70 , 40 , 26 , 48]
    }],
    colors: [COLORS["fourthColor"]],


      chart: {
      height: 160,
      type: 'area',
      toolbar: {
        show: false,
    },
    sparkline: {
  enabled: true
}
    },
    title: {
text: "",
align: 'left',
    },

    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth'
    },
    xaxis: {
      categories: ['Jan', 'Fev', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    },

    yaxis: {
        min : 0,
        },

        grid: {
show: false,
},        
tooltip: {
    fixed: {
      enabled: false,
      position: 'topRight',
      offsetX: -100,
      offsetY: 0,
  },

        },


    };

    var chart = new ApexCharts(document.querySelector("#statistics_item_4"), statistics_item_4_options);
    chart.render();

  
  
</script>

{{-- END apexChart statistics_item_4  --}}
  
  
      </div>  
  
  </div>
  
     
  
{{-- END OF statistics item 4  --}}
  



















    </section>




    {{-- END OF statistics section --}}






























{{-- END OF STATISTICS SECTION --}}






{{-- START OF SECTION 2 --}}




   <section id="statistics-section" class="row pt-4">



 <div class="col-lg-6">
    <div class="dark-box-shadow rounded  p-4 mx-2 bgprimary" >

      <div class="swiper WeeklySalesSlider">
        <div class="WeeklySalesSlider-swiper-pagination"></div>

        <div class="swiper-wrapper">



          <div class="swiper-slide">
            <div class="row">
            <div class="col-md-8">
              <h4 class="whitecolor h4"> Weekly Sales </h4>
              <p class="mb-1"> <span class="whitecolor"> Total $23.5k Earning </span> <b class="successcolor h6">+62%</b><span class="iconify successcolor h4 mt-1" data-icon="material-symbols:keyboard-arrow-up-rounded"></span></p>
              
              <h5 class="whitecolor h5">Fashion</h5>

<div class="row">
  <div class="col-md-6">
<div class="my-0">
    <div class="rounded float-start text-center px-3 py-2 me-2  bgwhiteopacity whitecolor">16</div>
    <div><p class="whitecolor py-2 px-3">T-shirts</p></div>
  </div>

  <div class="my-0">

    <div class="rounded float-start text-center px-3 py-2 me-2  bgwhiteopacity whitecolor">29</div>
    <div><p class="whitecolor py-2 px-3">Watches</p></div>
  </div>

  </div>


  <div class="col-md-6">

      <div class="rounded float-start text-center px-3 py-2 me-2  bgwhiteopacity whitecolor">40</div>
      <div><p class="whitecolor py-2 px-3">Shoes</p></div>


      <div class="rounded float-start text-center px-3 py-2 me-2  bgwhiteopacity whitecolor">30</div>
      <div><p class="whitecolor py-2 px-3">SunGlasses</p></div>


  </div>
</div>

            </div>
          
          
            <div class="col-md-4  my-auto">
              <img src="https://i.ibb.co/Bt5L67c/m502t0010-06jun22-smart-watch-02-removebg-preview-1-1.png" alt="product" class="mx-auto img-fluid">
            </div>

          </div>
         

          </div>

















          <div class="swiper-slide">
            <div class="row">
            <div class="col-md-8">
              <h4 class="whitecolor h4"> Weekly Sales </h4>
              <p class="mb-1"> <span class="whitecolor"> Total $23.5k Earning </span> <b class="successcolor h6">+62%</b><span class="iconify successcolor h4 mt-1" data-icon="material-symbols:keyboard-arrow-up-rounded"></span></p>
              
              <h5 class="whitecolor h5">Appliances & Electronics</h5>

<div class="row">
  <div class="col-md-6">
<div class="my-0">
    <div class="rounded float-start text-center px-3 py-2 me-2  bgwhiteopacity whitecolor">16</div>
    <div><p class="whitecolor py-2 px-3">TV's</p></div>
  </div>

  <div class="my-0">

    <div class="rounded float-start text-center px-3 py-2 me-2  bgwhiteopacity whitecolor">29</div>
    <div><p class="whitecolor py-2 px-3">Speakers</p></div>
  </div>

  </div>


  <div class="col-md-6">

      <div class="rounded float-start text-center px-3 py-2 me-2  bgwhiteopacity whitecolor">40</div>
      <div><p class="whitecolor py-2 px-3">Cameras</p></div>


      <div class="rounded float-start text-center px-3 py-2 me-2  bgwhiteopacity whitecolor">30</div>
      <div><p class="whitecolor py-2 px-3">Consoles</p></div>


  </div>
</div>

            </div>
          
          
            <div class="col-md-4  my-auto">
              <img src="https://demos.pixinvent.com/materialize-nextjs-admin-template/demo-3/images/cards/ps4-joystick-lg.png" alt="product" class="mx-auto img-fluid">
            </div>

          </div>
         

          </div>






















          




          <div class="swiper-slide">
            <div class="row">
            <div class="col-md-8">
              <h4 class="whitecolor h4"> Weekly Sales </h4>
              <p class="mb-1"> <span class="whitecolor"> Total $23.5k Earning </span> <b class="successcolor h6">+62%</b><span class="iconify successcolor h4 mt-1" data-icon="material-symbols:keyboard-arrow-up-rounded"></span></p>
              
              <h5 class="whitecolor h5">Mobiles & Computers</h5>

<div class="row">
  <div class="col-md-6">
<div class="my-0">
    <div class="rounded float-start text-center px-3 py-2 me-2  bgwhiteopacity whitecolor">16</div>
    <div><p class="whitecolor py-2 px-3">Mobiles</p></div>
  </div>

  <div class="my-0">

    <div class="rounded float-start text-center px-3 py-2 me-2  bgwhiteopacity whitecolor">29</div>
    <div><p class="whitecolor py-2 px-3">Tablets</p></div>
  </div>

  </div>


  <div class="col-md-6">

      <div class="rounded float-start text-center px-3 py-2 me-2  bgwhiteopacity whitecolor">40</div>
      <div><p class="whitecolor py-2 px-3">Accessories</p></div>


      <div class="rounded float-start text-center px-3 py-2 me-2  bgwhiteopacity whitecolor">30</div>
      <div><p class="whitecolor py-2 px-3">Computers</p></div>


  </div>
</div>

            </div>
          
          
            <div class="col-md-4  my-auto">
              <img src="https://demos.pixinvent.com/materialize-nextjs-admin-template/demo-3/images/cards/apple-iphone-x-lg.png" alt="product" class="mx-auto img-fluid">
            </div>

          </div>
         

          </div>



          















        </div>
    
      </div>


    </div>

    <script>
      var swiper = new Swiper(".WeeklySalesSlider", {
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
          pauseOnMouseEnter: true,
        },
        pagination: {
          el: ".WeeklySalesSlider-swiper-pagination",
          clickable: true,
          
        },
  
      });
    </script>

  </div>





















  <div class="col-lg-6 my-2 mt-lg-0">
    <div class="dark-box-shadow rounded  px-4 pt-4 pb-1 mx-2 BlocksBackground" >

      <h3 class="darkcolor font18 text-capitalize"> Source Of Revenue Generated </h3>


      <div class="row">

        {{-- =================================================================== --}}
        {{--  START Pie Chart > Simple Pie > Source Of Revenue Generated --}}
        {{-- =================================================================== --}}

        <div class="col-xxl-5  py-2 mx-auto">
<div id="Source_Of_Revenue_Generated"></div>
        </div>


        <script>
       var Source_Of_Revenue_Generated_options = {
          series: [44, 26, 30],
          chart: {
          width: 235,
          type: 'pie',
          sparkline: {
      enabled: true
    }
        },
        tooltip: {
  custom: function({series, seriesIndex, dataPointIndex, w , labels}) {
    return '<div class="arrow_box">' +
      ' <span class="py-4 px-3" style=" color:white !important ;background-color:' + w.globals.colors[seriesIndex] + '"> ' +  w.globals.labels[seriesIndex] + ' : ' + series[seriesIndex]  + ' </span> ' +
      '</div>'
  }
},
        
        colors: [COLORS["primaryColor"] , COLORS["secColor"] , COLORS["thirdColor"]],
        labels: ['google', 'twitter', 'Facebook'],
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              position: 'bottom'
            },
          },


        }]
        };
        var Source_Of_Revenue_Generated = new ApexCharts(document.querySelector("#Source_Of_Revenue_Generated"), Source_Of_Revenue_Generated_options);
        Source_Of_Revenue_Generated.render();
        </script>
        
        {{-- =================================================================== --}}
        {{--  END Pie Chart > Simple Pie > Source Of Revenue Generated --}}
        {{-- =================================================================== --}}

        <div class="col-xxl-7 py-2 row">

<div class="col-lg-4 my-2 my-md-auto mx-auto">
  <div class="rounded  mx-auto text-center  w-75 p-4 m-1  bgprimaryopacity">
    <i class="iconify primarycolor font40" data-icon="ri:facebook-fill"></i>
      </div>
      <p class="graycolor h6 text-center">Facebook</p>
      <small class="text-center  d-block"> $4621 </small>
</div>

<div class="col-lg-4 my-2 my-md-auto mx-auto">
  <div class="rounded  mx-auto w-75 text-center p-4 m-1  bgsecondaryopacity">
    <i class="iconify seccolor  font40" data-icon="bi:twitter"></i>
      </div>
      <p class="graycolor h6 text-center">Twitter</p>
      <small class="text-center  d-block"> $5277 </small>
</div>

<div class="col-lg-4 my-2 my-md-auto mx-auto">
  <div class="rounded  mx-auto text-center  w-75 p-4 m-1  bgthirdopacity">
    <i class="iconify thirdcolor  font40" data-icon="fa6-solid:g"></i>
      </div>
      <p class="graycolor text-center h6">Google</p>
      <small class="text-center d-block"> $96654 </small>
</div>


        </div>

      </div>



    </div>
  </div>





























   </section>

{{-- END OF STATISTICS SECTION  2 --}}










































































    {{-- ===================================================================== --}}
    {{--  START OF table data section  Top Selling Products / Browser States   --}}
    {{-- ===================================================================== --}}
    
    <section id="table-data-section" class="row pt-2" >









      
      {{-- ===================================================================== --}}
      {{--  START OF Top Selling Products table   --}}
      {{-- ===================================================================== --}}
  
  
              <div class="col-xl-6">
                <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">  
        
        
                  
                  
                  <div class="row">
                    
                    <div class="col-md-4">
                      
                      <h3 class="darkcolor font18 text-capitalize"> Top Selling Products </h3>
                      
                    </div>
                    
                    <div class="col-md-8">
        
        
        <ul class="nav  customTabs float-end" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link py-0 active text-capitalize" data-bs-toggle="pill" data-bs-target="#filter-today-Top-Selling-Products" type="button" role="tab" aria-controls="pills-today" aria-selected="true"> Today </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link  py-0 text-capitalize" data-bs-toggle="pill" data-bs-target="#filter-week-Top-Selling-Products" type="button" role="tab" aria-controls="pills-week" aria-selected="false" tabindex="-1"> Week </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link  py-0 text-capitalize" data-bs-toggle="pill" data-bs-target="#filter-mounth-Top-Selling-Products" type="button" role="tab" aria-controls="pills-mounth" aria-selected="false" tabindex="-1"> Mounth </a>
          </li>
        </ul>
        
        
                    </div>
        
                  </div>
        
        
                  
        
        
        
        
        
        
        
                  <div class="tab-content" id="pills-tabContent-Top-Selling-Products">
        
        
        
        
        
                    <div class="tab-pane fade show active" id="filter-today-Top-Selling-Products" role="tabpanel">  
                      
        
        
        
        
        
                      <div class="table-responsive pt-2">
                        <table class="table CustomTable m-0">
                          
        
        
                          <thead>
                            <tr>
                              <th class="text-capitalize">Products Name</th>
                              <th class="text-end text-capitalize">Price</th>
                              <th class="text-end text-capitalize">Sold</th>
                              <th class="text-end text-capitalize">Revenue</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>   
                                <img class="image-fluid  mx-auto rounded" src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png" alt="">
                               <b class="graycolor mx-2">Boys T-Shirt</b> 
                              </td>
                              <td class="text-end">$220</td>
                              <td class="text-end">800</td>
                              <td class="text-end">$20,573</td>
                            </tr>
                            <tr>
                              <td>   
                                <img class="image-fluid  mx-auto rounded" src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png" alt="">
                               <b class="graycolor mx-2">Boys T-Shirt</b> 
                              </td>
                              <td class="text-end">$180</td>
                              <td class="text-end">562</td>
                              <td class="text-end">$14,503</td>
                            </tr>
                            <tr>
                              <td>   
                                <img class="image-fluid  mx-auto rounded" src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png" alt="">
                               <b class="graycolor mx-2">Boys T-Shirt</b> 
                              </td>
                              <td class="text-end">$80</td>
                              <td class="text-end">214</td>
                              <td class="text-end">$12,45</td>
                            </tr>
        
                            <tr>
                              <td>   
                                <img class="image-fluid  mx-auto rounded" src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png" alt="">
                               <b class="graycolor mx-2">Boys T-Shirt</b> 
                              </td>
                              <td class="text-end">$60</td>
                              <td class="text-end">100</td>
                              <td class="text-end">$4,503</td>
                            </tr>
                            <tr>
                              <td>   
                                <img class="image-fluid  mx-auto rounded" src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png" alt="">
                               <b class="graycolor mx-2">Boys T-Shirt</b> 
                              </td>
                              <td class="text-end">$40</td>
                              <td class="text-end">50</td>
                              <td class="text-end">$2,45</td>
                            </tr>
                          </tbody>
                          
        
        
                        </table>
                      </div>
                      
        
        
        
        
        
                    
                    
                    </div>
        
        
        
        
        
        
        
                    <div class="tab-pane fade" id="filter-week-Top-Selling-Products" role="tabpanel"> 
                      
        
        
        
                      <div class="table-responsive pt-2">
                        <table class="table CustomTable m-0">
                          
        
        
                          <thead>
                            <tr>
                              <th class="text-capitalize">Products Name</th>
                              <th class="text-end text-capitalize">Price</th>
                              <th class="text-end text-capitalize">Sold</th>
                              <th class="text-end text-capitalize">Revenue</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>   
                                <img class="image-fluid  mx-auto rounded" src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png" alt="">
                               <b class="graycolor mx-2">Boys T-Shirt</b> 
                              </td>
                              <td class="text-end">$2620</td>
                              <td class="text-end">8880</td>
                              <td class="text-end">$910,573</td>
                            </tr>
                            <tr>
                              <td>   
                                <img class="image-fluid  mx-auto rounded" src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png" alt="">
                               <b class="graycolor mx-2">Boys T-Shirt</b> 
                              </td>
                              <td class="text-end">$1080</td>
                              <td class="text-end">5620</td>
                              <td class="text-end">$104,503</td>
                            </tr>
                            <tr>
                              <td>   
                                <img class="image-fluid  mx-auto rounded" src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png" alt="">
                               <b class="graycolor mx-2">Boys T-Shirt</b> 
                              </td>
                              <td class="text-end">$800</td>
                              <td class="text-end">2104</td>
                              <td class="text-end">$102,45</td>
                            </tr>
        
                            <tr>
                              <td>   
                                <img class="image-fluid  mx-auto rounded" src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png" alt="">
                               <b class="graycolor mx-2">Boys T-Shirt</b> 
                              </td>
                              <td class="text-end">$600</td>
                              <td class="text-end">1000</td>
                              <td class="text-end">$40,503</td>
                            </tr>
                            <tr>
                              <td>   
                                <img class="image-fluid  mx-auto rounded" src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png" alt="">
                               <b class="graycolor mx-2">Boys T-Shirt</b> 
                              </td>
                              <td class="text-end">$400</td>
                              <td class="text-end">500</td>
                              <td class="text-end">$20,45</td>
                            </tr>
                          </tbody>
                          
        
        
                        </table>
                      </div>
        
        
        
        
                    </div>
        
        
        
        
        
        
                    <div class="tab-pane fade" id="filter-mounth-Top-Selling-Products" role="tabpanel"> 
                      
        
        
                      <div class="table-responsive pt-2">
                        <table class="table CustomTable m-0">
                          
        
        
                          <thead>
                            <tr>
                              <th class="text-capitalize">Products Name</th>
                              <th class="text-end text-capitalize">Price</th>
                              <th class="text-end text-capitalize">Sold</th>
                              <th class="text-end text-capitalize">Revenue</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>   
                                <img class="image-fluid  mx-auto rounded" src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png" alt="">
                               <b class="graycolor mx-2">Boys T-Shirt</b> 
                              </td>
                              <td class="text-end">$900</td>
                              <td class="text-end">1500</td>
                              <td class="text-end">$956,573</td>
                            </tr>
                            <tr>
                              <td>   
                                <img class="image-fluid  mx-auto rounded" src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png" alt="">
                               <b class="graycolor mx-2">Boys T-Shirt</b> 
                              </td>
                              <td class="text-end">$1080</td>
                              <td class="text-end">5062</td>
                              <td class="text-end">$1044,503</td>
                            </tr>
                            <tr>
                              <td>   
                                <img class="image-fluid  mx-auto rounded" src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png" alt="">
                               <b class="graycolor mx-2">Boys T-Shirt</b> 
                              </td>
                              <td class="text-end">$8050</td>
                              <td class="text-end">21404</td>
                              <td class="text-end">$1120,45</td>
                            </tr>
        
                            <tr>
                              <td>   
                                <img class="image-fluid  mx-auto rounded" src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png" alt="">
                               <b class="graycolor mx-2">Boys T-Shirt</b> 
                              </td>
                              <td class="text-end">$6800</td>
                              <td class="text-end">10600</td>
                              <td class="text-end">$400,503</td>
                            </tr>
                            <tr>
                              <td>   
                                <img class="image-fluid  mx-auto rounded" src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png" alt="">
                               <b class="graycolor mx-2">Boys T-Shirt</b> 
                              </td>
                              <td class="text-end">$400</td>
                              <td class="text-end">500</td>
                              <td class="text-end">$200,405</td>
                            </tr>
                          </tbody>
                          
        
        
                        </table>
                      </div>
        
        
        
        
                    </div>
        
        
                  </div>
        
                  
        
        
        
        
              
        
        </div>
        
        
        
                
              </div>
        
        
        
        
        
                  
      {{-- ===================================================================== --}}
      {{--  END OF  Top  Selling Products table   --}}
      {{-- ===================================================================== --}}
      
  
  
        
        
        
        
              
        
                        
      {{-- ===================================================================== --}}
      {{--  START OF  Browser States table    --}}
      {{-- ===================================================================== --}}
      
  
  
        
              <div class="col-xl-6">
                <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">  
        
        
                  
                  
                  <div class="row">
                    
                    <div class="col-md-4">
                      
                      <h3 class="darkcolor font18 text-capitalize"> Browser States </h3>
                      
                    </div>
        
                    <div class="col-md-8">
        
        
        <ul class="nav  customTabs float-end" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link py-0 active text-capitalize" data-bs-toggle="pill" data-bs-target="#filter-today-Browser-States" type="button" role="tab" aria-controls="pills-today" aria-selected="true"> Today </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link  py-0 text-capitalize" data-bs-toggle="pill" data-bs-target="#filter-week-Browser-States" type="button" role="tab" aria-controls="pills-week" aria-selected="false" tabindex="-1"> Week </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link  py-0 text-capitalize" data-bs-toggle="pill" data-bs-target="#filter-mounth-Browser-States" type="button" role="tab" aria-controls="pills-mounth" aria-selected="false" tabindex="-1"> Mounth </a>
          </li>
        </ul>
        
        
                    </div>
        
                  </div>
        
        
                  
        
        
        
        
        
        
        
                  <div class="tab-content" id="pills-tabContent-Browser-States">
        
                    <div class="tab-pane fade show active" id="filter-today-Browser-States" role="tabpanel">  
                      
                    
        
        
        
        
                      
                      <div class="table-responsive pt-2">
                        <table class="table CustomTable m-0">
                          
        
        
                          <thead>
                            <tr>
                              <th class="text-capitalize">Browsers</th>
                              <th class="text-end text-capitalize">Session</th>
                              <th class="text-end text-capitalize">Bounce Rate</th>
                              <th class="text-end text-capitalize">CTE</th>
                              <th class="text-end text-capitalize">Goal Conv. Rate</th>
                            </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>   
  <img class="image-fluid  mx-auto rounded" src="https://cdn-icons-png.flaticon.com/512/732/732205.png" alt="">
  
                                   <b class="graycolor mx-2"> Google Chrome </b> 
                                  </td>
                                  <td class="text-end">92,345</td>
                                  <td class="text-end">3.5%</td>
                                  <td class="text-end">12025</td>
                                  <td class="text-end">90%</td>
                                </tr>
                   
                                <tr>
                                  <td>  
  <img class="image-fluid  mx-auto rounded" src="https://cdn-icons-png.flaticon.com/512/5968/5968827.png" alt="">
  
                                   <b class="graycolor mx-2"> Mozila Firefox </b> 
                                  </td>
                                  <td class="text-end">92,345</td>
                                  <td class="text-end">3.5%</td>
                                  <td class="text-end">12025</td>
                                  <td class="text-end">90%</td>
                                </tr>
        
        
                                <tr>
                                  <td>   
  <img class="image-fluid  mx-auto rounded" src="https://cdn-icons-png.flaticon.com/512/564/564442.png" alt="">
  
                                   <b class="graycolor mx-2">  Apple Safari  </b> 
                                  </td>
                                  <td class="text-end">92,345</td>
                                  <td class="text-end">3.5%</td>
                                  <td class="text-end">12025</td>
                                  <td class="text-end">90%</td>
                                </tr>
        
        
        
                                <tr>
                                  <td>   
  <img class="image-fluid  mx-auto rounded" src="https://cdn-icons-png.flaticon.com/512/220/220213.png" alt="">
  
                                   <b class="graycolor mx-2">  Internet Explorer  </b> 
                                  </td>
                                  <td class="text-end">92,345</td>
                                  <td class="text-end">3.5%</td>
                                  <td class="text-end">12025</td>
                                  <td class="text-end">90%</td>
                                </tr>
        
        
        
                                <tr>
                                  <td> 
                                      <img class="image-fluid  mx-auto rounded" src="https://cdn-icons-png.flaticon.com/512/6124/6124994.png" alt="">
  
                                   <b class="graycolor mx-2">  Opera Mini  </b> 
                                  </td>
                                  <td class="text-end">92,345</td>
                                  <td class="text-end">3.5%</td>
                                  <td class="text-end">12025</td>
                                  <td class="text-end">90%</td>
                                </tr>
        
        
        
                          </tbody>
                          
        
        
                        </table>
                      </div>
        
        
        
        
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    </div>
        
        
                    <div class="tab-pane fade" id="filter-week-Browser-States" role="tabpanel"> 
                      
        
                        
                      <div class="table-responsive pt-2">
                        <table class="table CustomTable m-0">
                          
        
        
                          <thead>
                              <tr>
                                <th class="text-capitalize">Browsers</th>
                                <th class="text-end text-capitalize">Session</th>
                                <th class="text-end text-capitalize">Bounce Rate</th>
                                <th class="text-end text-capitalize">CTE</th>
                                <th class="text-end text-capitalize">Goal Conv. Rate</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>
                                      <img class="image-fluid  mx-auto rounded" src="https://cdn-icons-png.flaticon.com/512/732/732205.png" alt="">
                                   <b class="graycolor mx-2"> Google Chrome </b> 
                                  </td>
                                  <td class="text-end">3392,345</td>
                                  <td class="text-end">333.5%</td>
                                  <td class="text-end">3312025</td>
                                  <td class="text-end">390%</td>
                                </tr>
                   
                                <tr>
                                  <td>   
                                      <img class="image-fluid  mx-auto rounded" src="https://cdn-icons-png.flaticon.com/512/5968/5968827.png" alt="">
  
                                   <b class="graycolor mx-2"> Mozila Firefox </b> 
                                  </td>
                                  <td class="text-end">2292,345</td>
                                  <td class="text-end">223.5%</td>
                                  <td class="text-end">2212025</td>
                                  <td class="text-end">290%</td>
                                </tr>
        
        
                                <tr>
                                  <td>   
                                      
                                      <img class="image-fluid  mx-auto rounded" src="https://cdn-icons-png.flaticon.com/512/564/564442.png" alt="">
  
                                   <b class="graycolor mx-2">  Apple Safari  </b> 
                                  </td>
                                  <td class="text-end">1192,345</td>
                                  <td class="text-end">113.5%</td>
                                  <td class="text-end">1112025</td>
                                  <td class="text-end">190%</td>
                                </tr>
        
        
        
                                <tr>
                                  <td>   
                                      <img class="image-fluid  mx-auto rounded" src="https://cdn-icons-png.flaticon.com/512/220/220213.png" alt="">
                                   <b class="graycolor mx-2">  Internet Explorer  </b> 
  
                                  </td>
                                  <td class="text-end">112,345</td>
                                  <td class="text-end">3.5%</td>
                                  <td class="text-end">1207725</td>
                                  <td class="text-end">150%</td>
                                </tr>
        
        
        
                                <tr>
                                  <td>   
                                      <img class="image-fluid  mx-auto rounded" src="https://cdn-icons-png.flaticon.com/512/6124/6124994.png" alt="">
  
                                   <b class="graycolor mx-2">  Opera Mini  </b> 
                                  </td>
                                  <td class="text-end">92,345</td>
                                  <td class="text-end">3.5%</td>
                                  <td class="text-end">12025</td>
                                  <td class="text-end">110%</td>
                                </tr>
        
        
        
                          </tbody>
                          
        
        
                        </table>
                      </div>
        
        
        
        
        
        
        
                    </div>
        
        
                    <div class="tab-pane fade" id="filter-mounth-Browser-States" role="tabpanel"> 
                      
        
                        
                      <div class="table-responsive pt-2">
                        <table class="table CustomTable m-0">
                          
        
        
                          <thead>
                              <tr>
                                <th class="text-capitalize">Browsers</th>
                                <th class="text-end text-capitalize">Session</th>
                                <th class="text-end text-capitalize">Bounce Rate</th>
                                <th class="text-end text-capitalize">CTE</th>
                                <th class="text-end text-capitalize">Goal Conv. Rate</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>   
  <img class="image-fluid  mx-auto rounded" src="https://cdn-icons-png.flaticon.com/512/732/732205.png" alt="">
  
                                   <b class="graycolor mx-2"> Google Chrome </b> 
                                  </td>
                                  <td class="text-end">9742,345</td>
                                  <td class="text-end">3555.5%</td>
                                  <td class="text-end">132025</td>
                                  <td class="text-end">95880%</td>
                                </tr>
                   
                                <tr>
                                  <td>  
  <img class="image-fluid  mx-auto rounded" src="https://cdn-icons-png.flaticon.com/512/5968/5968827.png" alt="">
  
                                   <b class="graycolor mx-2"> Mozila Firefox </b> 
                                  </td>
                                  <td class="text-end">922,345</td>
                                  <td class="text-end">300.5%</td>
                                  <td class="text-end">102025</td>
                                  <td class="text-end">9000%</td>
                                </tr>
        
        
                                <tr>
                                  <td>   
  <img class="image-fluid  mx-auto rounded" src="https://cdn-icons-png.flaticon.com/512/564/564442.png" alt="">
  
                                   <b class="graycolor mx-2">  Apple Safari  </b> 
                                  </td>
                                  <td class="text-end">9235,345</td>
                                  <td class="text-end">364.5%</td>
                                  <td class="text-end">185025</td>
                                  <td class="text-end">684%</td>
                                </tr>
        
        
        
                                <tr>
                                  <td>  
                                      <img class="image-fluid  mx-auto rounded" src="https://cdn-icons-png.flaticon.com/512/220/220213.png" alt="">
  
                                   <b class="graycolor mx-2">  Internet Explorer  </b> 
                                  </td>
                                  <td class="text-end">92,345</td>
                                  <td class="text-end">3661.5%</td>
                                  <td class="text-end">152025</td>
                                  <td class="text-end">520%</td>
                                </tr>
        
        
        
                                <tr>
                                  <td>  
                                      <img class="image-fluid  mx-auto rounded" src="https://cdn-icons-png.flaticon.com/512/6124/6124994.png" alt="">
  
                                  
                                   <b class="graycolor mx-2">  Opera Mini  </b> 
                                  </td>
                                  <td class="text-end">962,345</td>
                                  <td class="text-end">34.5%</td>
                                  <td class="text-end">121025</td>
                                  <td class="text-end">900%</td>
                                </tr>
        
        
        
                          </tbody>
        
        
                        </table>
                      </div>
        
        
        
        
                    </div>
        
        
                  </div>
        
                  
        
        
        
        
              
        
        </div>
        
        
        
                
              </div>
        
        
        
    
                        
      {{-- ===================================================================== --}}
      {{--  END OF  Browser States table    --}}
      {{-- ===================================================================== --}}
      
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
      </section>
  
  
  
  
  
      {{-- ===================================================================== --}}
      {{--  END OF table data section  Top Selling Products / Browser States   --}}
      {{-- ===================================================================== --}}
  
  
  
  
      
  
  
  

      


























































    {{-- ===================================================================== --}}
    {{--  START OF table data section  Top Selling Products    --}}
    {{-- ===================================================================== --}}
    
    <section  class="row pt-2" >



      <div class="col-xl-12">
        <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">  


          
          
          <div class="row">
            
            <div class="col-md-4">
              
              <h3 class="darkcolor font18 text-capitalize"> Best Seller </h3>
              
            </div>

            <div class="col-md-8">


<ul class="nav  customTabs float-end" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link py-0 text-capitalize active" data-bs-toggle="pill" data-bs-target="#filter-today-Best-Seller" type="button" role="tab" aria-controls="pills-today" aria-selected="false" tabindex="-1"> Today </a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link py-0 text-capitalize" data-bs-toggle="pill" data-bs-target="#filter-week-Best-Seller" type="button" role="tab" aria-controls="pills-week" aria-selected="true"> Week </a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link py-0 text-capitalize" data-bs-toggle="pill" data-bs-target="#filter-mounth-Best-Seller" type="button" role="tab" aria-controls="pills-mounth" aria-selected="false" tabindex="-1"> Mounth </a>
  </li>
</ul>


            </div>

          </div>


          







          <div class="tab-content" id="pills-tabContent-Best-Seller">

            <div class="tab-pane fade" id="filter-today-Best-Seller" role="tabpanel">  
              
            




              
              <div class="table-responsive pt-2">
                <table class="table CustomTable m-0">
                  


                  <thead>
                    <tr>
                      <th class="text-capitalize">Seller name</th>
                      <th class="text-start text-capitalize">Company</th>
                      <th class="text-start text-capitalize">Product</th>
                      <th class="text-start text-capitalize">Revenue</th>
                      <th class="text-start text-capitalize">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>   
                        <img class="image-fluid  mx-auto rounded" src="http://127.0.0.1:8000/usersavatar/avatar.jpg" alt="">
                       <b class="graycolor mx-2">Robert Clinton</b> 
                      </td>
                      <td class="text-start">Samsung</td>
                      <td class="text-start">Smart Phone</td>
                      <td class="text-start"> $38,536 </td>
                      <td class="text-start">Done</td>
                    </tr>
                    <tr>
                      <td>   
                        <img class="image-fluid  mx-auto rounded" src="http://127.0.0.1:8000/usersavatar/avatar.jpg" alt="">
                       <b class="graycolor mx-2">Robert Clinton</b> 
                      </td>
                      <td class="text-start">Asus</td>
                      <td class="text-start">Smart Phone</td>
                      <td class="text-start"> $38,536 </td>
                      <td class="text-start">Done</td>
                    </tr>


                    <tr>
                      <td>   
                        <img class="image-fluid  mx-auto rounded" src="http://127.0.0.1:8000/usersavatar/avatar.jpg" alt="">
                       <b class="graycolor mx-2">john doe</b> 
                      </td>
                      <td class="text-start">Google</td>
                      <td class="text-start">Smart Phone</td>
                      <td class="text-start"> $38,536 </td>
                      <td class="text-start">Done</td>
                    </tr>



                    <tr>
                      <td>   
                        <img class="image-fluid  mx-auto rounded" src="http://127.0.0.1:8000/usersavatar/avatar.jpg" alt="">
                       <b class="graycolor mx-2">Robert Clinton</b> 
                      </td>
                      <td class="text-start">Apple</td>
                      <td class="text-start">laptop</td>
                      <td class="text-start"> $38,536 </td>
                      <td class="text-start">Pending</td>
                    </tr>



                    <tr>
                      <td>   
                        <img class="image-fluid  mx-auto rounded" src="http://127.0.0.1:8000/usersavatar/avatar.jpg" alt="">
                       <b class="graycolor mx-2">Robert Clinton</b> 
                      </td>
                      <td class="text-start">Panasonic</td>
                      <td class="text-start">Watch</td>
                      <td class="text-start"> $38,536 </td>
                      <td class="text-start">Done</td>
                    </tr>



                  </tbody>
                  


                </table>
              </div>




            
            
            
            
            
            
            
            
            
            </div>


            <div class="tab-pane fade active show" id="filter-week-Best-Seller" role="tabpanel"> 
              

                
              <div class="table-responsive pt-2">
                <table class="table CustomTable m-0">
                  


                  <thead>
                    <tr>
                      <th class="text-capitalize">Seller name</th>
                      <th class="text-start text-capitalize">Company</th>
                      <th class="text-start text-capitalize">Product</th>
                      <th class="text-start text-capitalize">Revenue</th>
                      <th class="text-start text-capitalize">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>   
                        <img class="image-fluid  mx-auto rounded" src="http://127.0.0.1:8000/usersavatar/avatar.jpg" alt="">
                       <b class="graycolor mx-2">Robert Clinton</b> 
                      </td>
                      <td class="text-start">Samsung</td>
                      <td class="text-start">Smart Phone</td>
                      <td class="text-start"> $538,536 </td>
                      <td class="text-start">Done</td>
                    </tr>
                    <tr>
                      <td>   
                        <img class="image-fluid  mx-auto rounded" src="http://127.0.0.1:8000/usersavatar/avatar.jpg" alt="">
                       <b class="graycolor mx-2">Robert Clinton</b> 
                      </td>
                      <td class="text-start">Asus</td>
                      <td class="text-start">Smart Phone</td>
                      <td class="text-start"> $384,536 </td>
                      <td class="text-start">Done</td>
                    </tr>


                    <tr>
                      <td>   
                        <img class="image-fluid  mx-auto rounded" src="http://127.0.0.1:8000/usersavatar/avatar.jpg" alt="">
                       <b class="graycolor mx-2">john doe</b> 
                      </td>
                      <td class="text-start">Google</td>
                      <td class="text-start">Smart Phone</td>
                      <td class="text-start"> $383,536 </td>
                      <td class="text-start">Done</td>
                    </tr>



                    <tr>
                      <td>   
                        <img class="image-fluid  mx-auto rounded" src="http://127.0.0.1:8000/usersavatar/avatar.jpg" alt="">
                       <b class="graycolor mx-2">Robert Clinton</b> 
                      </td>
                      <td class="text-start">Apple</td>
                      <td class="text-start">laptop</td>
                      <td class="text-start"> $384,536 </td>
                      <td class="text-start">Pending</td>
                    </tr>



                    <tr>
                      <td>   
                        <img class="image-fluid  mx-auto rounded" src="http://127.0.0.1:8000/usersavatar/avatar.jpg" alt="">
                       <b class="graycolor mx-2">Robert Clinton</b> 
                      </td>
                      <td class="text-start">Panasonic</td>
                      <td class="text-start">Watch</td>
                      <td class="text-start"> $328,536 </td>
                      <td class="text-start">Done</td>
                    </tr>



                  </tbody>
                  


                </table>
              </div>







            </div>


            <div class="tab-pane fade" id="filter-mounth-Best-Seller" role="tabpanel"> 
              

                
              <div class="table-responsive pt-2">
                <table class="table CustomTable m-0">
                  


                  <thead>
                    <tr>
                      <th class="text-capitalize">Seller name</th>
                      <th class="text-start text-capitalize">Company</th>
                      <th class="text-start text-capitalize">Product</th>
                      <th class="text-start text-capitalize">Revenue</th>
                      <th class="text-start text-capitalize">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>   
                        <img class="image-fluid  mx-auto rounded" src="http://127.0.0.1:8000/usersavatar/avatar.jpg" alt="">
                       <b class="graycolor mx-2">Robert Clinton</b> 
                      </td>
                      <td class="text-start">Samsung</td>
                      <td class="text-start">Smart Phone</td>
                      <td class="text-start"> $4438,536 </td>
                      <td class="text-start">Done</td>
                    </tr>
                    <tr>
                      <td>   
                        <img class="image-fluid  mx-auto rounded" src="http://127.0.0.1:8000/usersavatar/avatar.jpg" alt="">
                       <b class="graycolor mx-2">Robert Clinton</b> 
                      </td>
                      <td class="text-start">Asus</td>
                      <td class="text-start">Smart Phone</td>
                      <td class="text-start"> $4438,536 </td>
                      <td class="text-start">Done</td>
                    </tr>


                    <tr>
                      <td>   
                        <img class="image-fluid  mx-auto rounded" src="http://127.0.0.1:8000/usersavatar/avatar.jpg" alt="">
                       <b class="graycolor mx-2">john doe</b> 
                      </td>
                      <td class="text-start">Google</td>
                      <td class="text-start">Smart Phone</td>
                      <td class="text-start"> $3668,536 </td>
                      <td class="text-start">Done</td>
                    </tr>



                    <tr>
                      <td>   
                        <img class="image-fluid  mx-auto rounded" src="http://127.0.0.1:8000/usersavatar/avatar.jpg" alt="">
                       <b class="graycolor mx-2">Robert Clinton</b> 
                      </td>
                      <td class="text-start">Apple</td>
                      <td class="text-start">laptop</td>
                      <td class="text-start"> $3800,536 </td>
                      <td class="text-start">Pending</td>
                    </tr>



                    <tr>
                      <td>   
                        <img class="image-fluid  mx-auto rounded" src="http://127.0.0.1:8000/usersavatar/avatar.jpg" alt="">
                       <b class="graycolor mx-2">Robert Clinton</b> 
                      </td>
                      <td class="text-start">Panasonic</td>
                      <td class="text-start">Watch</td>
                      <td class="text-start"> $3800,536 </td>
                      <td class="text-start">Done</td>
                    </tr>



                  </tbody>
                  


                </table>
              </div>




            </div>


          </div>

          




      

</div>



        
      </div>



    </section>




    {{-- ===================================================================== --}}
    {{--  END OF table data section  Top Selling Products    --}}
    {{-- ===================================================================== --}}
    



















































































</section>





@include('dashboard.inc.DashBoardFooter')




