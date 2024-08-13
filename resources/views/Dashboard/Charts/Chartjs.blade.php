@include('Dashboard.inc.DashBoardNavbars')






{{-- ######################################################## --}}
{{-- ############ START  CHART JS CDN ############# --}}
{{-- ######################################################## --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
{{-- ######################################################## --}}
{{-- ############ END  CHART JS CDN ############# --}}
{{-- ######################################################## --}}




<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">


    <h1  class="darkcolor font20 mx-2 " >  Chart.js </h1>



    <section class="row pt-4">















{{-- ============================================================ --}}
{{-- Start of column --}}
{{-- ============================================================ --}}
<div class="my-2  col-md-6 mx-auto">

    <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2">
<div class="d-flex justify-content-between align-items-center">

        <h3 class="darkcolor m-0 font18 text-capitalize"> Example  </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">




            <div class="row mx-auto col-md-9">


                {{-- start here  Orders chart legend  number 1 --}}
                <div class="col-md-6 text-center">
                    <i class="fa-solid fa-circle primarycolor font12"></i>
                    <span class="">Orders</span>
                    <span class="darkcolor font24 fontw600 mx-2">$8,550</span>
                    <span class="successcolor fontw600"><i class="successcolor fa-solid fa-arrow-up"></i>
                        <strong>25%</strong></span>

                </div>

                {{-- END OF  Orders chart legend number 1 --}}




                {{-- START OF   Sales chart legend number 2  --}}
                <div class="col-md-6 text-center">
                    <i class="fa-solid fa-circle seccolor font12"></i>
                    <span class="">Sales</span>
                    <span class="darkcolor font24 fontw600 mx-2">$5,550</span>
                    <span class="dangercolor fontw600"><i class="dangercolor fa-solid fa-arrow-down"></i>
                        <strong>15%</strong></span>

                </div>

                {{-- END OF Sales chart legend number 2  --}}


            </div>

            {{-- END OF  chart legends  --}}


            {{-- START OF  line Sales Reports chart  using chartjs  --}}


            <canvas id="SalesReportsChart" height="252" width="722"></canvas>

            {{-- START OF  line Sales Reports chart  using chartjs  --}}





            {{-- START OF  script Reports chart  using chartjs  --}}

            <script>
                const SalesReportsChart = document.getElementById('SalesReportsChart');







                SalesReportsChart_labels = ['Jan', 'Fev', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                SalesReportsChart_data = {
                    labels: SalesReportsChart_labels,
                    datasets: [{
                            label: 'Orders',
                            data: [10, 60, 66, 30, 55, 44, 55, 55, 32, 30, 50, 60],

                            borderColor: COLORS["primaryColor"],
                            backgroundColor: COLORS["primaryColor"],

                            pointHoverBorderColor: COLORS["white"],
                            pointRadius: 0,
                            pointHoverRadius: 6,
                            pointHitRadius: 30,
                            pointStyle: "circle",
                            pointHoverBorderWidth: 2,

                            //   borderColor: Utils.CHART_COLORS.red,
                            //   backgroundColor: Utils.transparentize(Utils.CHART_COLORS.red, 0.5),
                            tension: 0.4,
                        },
                        {
                            label: 'Sales',
                            data: [30, 60, 60, 50, 66, 45, 33, 55, 40, 50, 70, 62],

                            borderColor: COLORS["secColor"],
                            backgroundColor: COLORS["secColor"],

                            tension: 0.4,
                            pointHoverBorderColor: COLORS["white"],
                            pointRadius: 0,
                            pointHoverRadius: 6,
                            pointHitRadius: 30,
                            pointStyle: "circle",
                            pointHoverBorderWidth: 2,
                        }
                    ]
                };




                SalesReportsChart_config = {
                    type: 'line',
                    data: SalesReportsChart_data,




                    options: {
                        responsive: true,
                        // maintainAspectRatio: false,
                        scales: {
                            y: {
                                stacked: !1,

                                min: 0,
                                max: 80,
                                //display : false,
                                ticks: {
                                    // forces step size to be 50 units
                                    callback: (e, a, t) => e + "K",
                                    padding: 15,

                                    stepSize: 20,



                                    color: COLORS['chart_scales_tics_color'],

                                    font: {
                                        // familly: "'Roboto', 'Helvetica', 'Arial', sans-serif",
                                        // size:80,

                                    },
                                },

                                grid: {
                                    // lineWidth : 0 ,
                                    zeroLineWidth: 3,
                                    color: COLORS['chart_grid_color'],

                                },




                            },



                            x: {

                                grid: {
                                    lineWidth: 0,

                                },



                                ticks: {
                                    color: COLORS['chart_scales_tics_color'],

                                    font: {
                                        // familly: "'Roboto', 'Helvetica', 'Arial', sans-serif",
                                        // size:80,

                                    },





                                },





                            },

                        },




                        plugins: {







                            legend: {
                                display: false,
                                labels: {

                                    color: COLORS["chart_plugins_legend_color"],

                                },

                            },



                            tooltip: {
                                //  enabled : false,

                                backgroundColor: COLORS['chart_plugins_tooltip_background_color'],
                                titleColor: COLORS['chart_plugins_tooltip_title_color'],
                                bodyColor: COLORS['chart_plugins_tooltip_body_color'],
                                //footerColor : "yellow",
                                // borderColor : 'green',
                                // borderWidth : 1,

                            },



                        },

                        animation: {
                            duration: 4000,
                            //from : 0,
                        },









                    },
                };



                new Chart(SalesReportsChart, SalesReportsChart_config);
            </script>



            {{-- END OF  script Reports chart  using chartjs  --}}








    </div>


    </div>
</div>

{{-- ============================================================ --}}
{{-- End of column --}}
{{-- ============================================================ --}}

























{{-- ============================================================ --}}
{{-- Start of column --}}
{{-- ============================================================ --}}
<div class="my-2  col-md-6 mx-auto">

    <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2">
<div class="d-flex justify-content-between align-items-center">

        <h3 class="darkcolor m-0 font18 text-capitalize"> Example 2  </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">




                        {{-- START OF  chart legends  --}}


                        <div class="row mx-auto col-md-8 pt-4">


                            {{-- start here  Orders chart legend  number 1 --}}
                            <div class="col-md-6 text-center">

                                <span class="darkcolor font16 fontw600 mx-2">$8,550</span>
                                <span class="successcolor fontw600"><i class="successcolor fa-solid fa-arrow-up"></i>
                                    <strong>25%</strong></span>

                            </div>

                            {{-- END OF  Orders chart legend number 1 --}}




                            {{-- START OF   Sales chart legend number 2  --}}
                            <div class="col-md-6 text-center">

                                <span class="darkcolor font16 fontw600 mx-2">$5,550</span>
                                <span class="dangercolor fontw600"><i class="dangercolor fa-solid fa-arrow-down"></i>
                                    <strong>15%</strong></span>

                            </div>

                            {{-- END OF Sales chart legend number 2  --}}


                        </div>

                        {{-- END OF  chart legends  --}}




                        <canvas id="SalesGrowthchartToday" height="200" width="357"></canvas>


                        <script>
                            const SalesGrowthchartToday = document.getElementById('SalesGrowthchartToday');







                            SalesGrowthchartToday_labels = ["Sat", "San", "Mon", "Tue", "Wed", "Thu", "Fri"];

                            SalesGrowthchartToday_data = {
                                labels: SalesGrowthchartToday_labels,
                                datasets: [{
                                        label: 'Target',
                                        data: [30, 70, 66, 77, 60, 60, 76],
                                        backgroundColor: COLORS["primaryColor"],
                                        hoverBackgroundColor: COLORS["primaryColorHover"],

                                        barPercentage: 0.45,
                                        borderRadius: 2,
                                        maxBarThickness: 11,
                                        minBarLength: 2,
                                        barThickness: 15,

                                    },
                                    {
                                        label: 'Total Sales',
                                        data: [10, 60, 60, 50, 33, 20, 33],

                                        backgroundColor: COLORS["secColor"],

                                        hoverBackgroundColor: COLORS["secColorHover"],

                                        barPercentage: 0.45,
                                        borderRadius: 2,
                                        maxBarThickness: 11,
                                        minBarLength: 2,
                                        barThickness: 15,

                                    }
                                ]
                            };








                            SalesGrowthchartToday_config = {
                                type: 'bar',
                                data: SalesGrowthchartToday_data,
                                options: {
                                    animation: {
                                        //from : 0 ,
                                        //delay: 1000,
                                        duration: 3000,
                                    },
                                    plugins: {







                                        legend: {
                                            display: false,
                                            labels: {

                                                color: COLORS["chart_plugins_legend_color"],

                                            },

                                        },



                                        tooltip: {
                                            //  enabled : false,

                                            backgroundColor: COLORS['chart_plugins_tooltip_background_color'],
                                            titleColor: COLORS['chart_plugins_tooltip_title_color'],
                                            bodyColor: COLORS['chart_plugins_tooltip_body_color'],
                                            //footerColor : "yellow",
                                            // borderColor : 'green',
                                            // borderWidth : 1,

                                        },



                                    },





                                    elements: {
                                        bar: {
                                            //backgroundColor: '#000000',
                                            //borderColor: 'yellow',
                                            //  borderWidth: 2
                                        }
                                    },

                                    scales: {
                                        y: {
                                            stacked: !1,

                                            min: 0,
                                            max: 80,
                                            //display : false,
                                            ticks: {
                                                // forces step size to be 50 units
                                                stepSize: 20,
                                                callback: (e, a, t) => e + "K",
                                                padding: 15,

                                                color: COLORS['chart_scales_tics_color'],




                                            },

                                            grid: {
                                                //lineWidth : 0 ,
                                                zeroLineWidth: 3,
                                                color: COLORS['chart_grid_color'],

                                            },






                                        },
                                        x: {

                                            grid: {
                                                lineWidth: 0,
                                                color: COLORS['chart_grid_color'],



                                            },

                                            ticks: {

                                                color: COLORS['chart_scales_tics_color'],
                                            },


                                        },
                                    },

                                }
                            };





                            new Chart(SalesGrowthchartToday, SalesGrowthchartToday_config);
                        </script>




    </div>


    </div>
</div>

{{-- ============================================================ --}}
{{-- End of column --}}
{{-- ============================================================ --}}
















{{-- ============================================================ --}}
{{-- Start of column --}}
{{-- ============================================================ --}}
<div class="my-2  col-md-6 mx-auto">

    <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2">
<div class="d-flex justify-content-between align-items-center">

        <h3 class="darkcolor m-0 font18 text-capitalize"> Example 3 </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">


            <canvas id="filter-today-Sales-Overview-canvas" class="Sales-Overview-canvas my-3"></canvas>

            <div class="row py-2">

                <div class="col text-center mx-auto">


                    <div class="darkcolor fontw600 font20 ">$7,9k</div>
                    <div>
                        <small class=""> Revenue </small>

                    </div>


                </div>


                <div class="col text-center mx-auto">


                    <div class="darkcolor fontw600 font20 ">50</div>
                    <div>
                        <small class=""> Sales </small>

                    </div>

                </div>
                <div class="col text-center mx-auto">

                    <div class="darkcolor fontw600 font20 ">15</div>
                    <div>
                        <small class=""> Products </small>

                    </div>


                </div>
            </div>

            <script>
                const filter_today_Sales_Overview_canvas = document.getElementById('filter-today-Sales-Overview-canvas');


                filter_today_Sales_Overview_canvas_data = {

                    labels: [
                        'Revenue',
                        'Sales',
                        'Products'
                    ],
                    datasets: [{
                        label: 'Sales Overview',
                        data: [30, 30, 40],
                        backgroundColor: [
                            COLORS["primaryColor"],
                            COLORS["secColor"],
                            COLORS["thirdColor"]
                        ],
                        hoverBackgroundColor: [
                            COLORS["primaryColorHover"],
                            COLORS["secColorHover"],
                            COLORS["thirdColorHover"],
                        ],
                        hoverOffset: 4,

                    }]
                };




                const filter_today_Sales_Overview_canvas_config = {
                    type: 'doughnut',
                    data: filter_today_Sales_Overview_canvas_data,




                    options: {





                        plugins: {







                            legend: {
                                display: true,
                                position: 'bottom',
                                labels: {

                                    color: COLORS["chart_plugins_legend_color"],
                                    padding: 12,
                                    usePointStyle: true,


                                },

                            },



                            tooltip: {
                                //  enabled : false,

                                backgroundColor: COLORS['chart_plugins_tooltip_background_color'],
                                titleColor: COLORS['chart_plugins_tooltip_title_color'],
                                bodyColor: COLORS['chart_plugins_tooltip_body_color'],
                                //footerColor : "yellow",
                                // borderColor : 'green',
                                // borderWidth : 1,

                            },



                        },











                    }



                };

                new Chart(filter_today_Sales_Overview_canvas, filter_today_Sales_Overview_canvas_config);
            </script>





    </div>


    </div>
</div>

{{-- ============================================================ --}}
{{-- End of column --}}
{{-- ============================================================ --}}


























{{-- ============================================================ --}}
{{-- Start of column --}}
{{-- ============================================================ --}}
<div class="my-2  col-md-6 mx-auto">

    <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2">
<div class="d-flex justify-content-between align-items-center">

        <h3 class="darkcolor m-0 font18 text-capitalize">  Bar Chart  </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">


            <canvas id="bar-chart" width="800" height="450"></canvas>
            <script>
            // Bar chart
            new Chart(document.getElementById("bar-chart"), {
                type: 'bar',
                data: {
                  labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
                  datasets: [
                    {
                      label: "Population (millions)",
                      backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                      data: [2478,5267,734,784,433]
                    }
                  ]
                },
                options: {
                  legend: { display: false },
                  title: {
                    display: true,
                    text: 'Predicted world population (millions) in 2050'
                  }
                }
            });

</script>



    </div>


    </div>
</div>

{{-- ============================================================ --}}
{{-- End of column --}}
{{-- ============================================================ --}}

















{{-- ============================================================ --}}
{{-- Start of column --}}
{{-- ============================================================ --}}
<div class="my-2  col-md-6 mx-auto">

    <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2">
<div class="d-flex justify-content-between align-items-center">

        <h3 class="darkcolor m-0 font18 text-capitalize">  Line chart   </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">


            <canvas id="line-chart" width="800" height="450"></canvas>

<script>
    new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
    datasets: [{
        data: [86,114,106,106,107,111,133,221,783,2478],
        label: "Africa",
        borderColor: "#3e95cd",
        fill: false
      }, {
        data: [282,350,411,502,635,809,947,1402,3700,5267],
        label: "Asia",
        borderColor: "#8e5ea2",
        fill: false
      }, {
        data: [168,170,178,190,203,276,408,547,675,734],
        label: "Europe",
        borderColor: "#3cba9f",
        fill: false
      }, {
        data: [40,20,10,16,24,38,74,167,508,784],
        label: "Latin America",
        borderColor: "#e8c3b9",
        fill: false
      }, {
        data: [6,3,2,2,7,26,82,172,312,433],
        label: "North America",
        borderColor: "#c45850",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'World population per region (in millions)'
    }
  }
});

</script>


    </div>


    </div>
</div>

{{-- ============================================================ --}}
{{-- End of column --}}
{{-- ============================================================ --}}












{{-- ============================================================ --}}
{{-- Start of column --}}
{{-- ============================================================ --}}
<div class="my-2  col-md-6 mx-auto">

    <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2">
<div class="d-flex justify-content-between align-items-center">

        <h3 class="darkcolor m-0 font18 text-capitalize"> Pie chart  </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">


            <canvas id="pie-chart" width="800" height="450"></canvas>

<script>
    new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: [2478,5267,734,784,433]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});

</script>


    </div>


    </div>
</div>

{{-- ============================================================ --}}
{{-- End of column --}}
{{-- ============================================================ --}}
















{{-- ============================================================ --}}
{{-- Start of column --}}
{{-- ============================================================ --}}
<div class="my-2  col-md-6 mx-auto">

    <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2">
<div class="d-flex justify-content-between align-items-center">

        <h3 class="darkcolor m-0 font18 text-capitalize"> Radar chart  </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">

            <canvas id="radar-chart" width="800" height="600"></canvas>

            <script>
                new Chart(document.getElementById("radar-chart"), {
    type: 'radar',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [
        {
          label: "1950",
          fill: true,
          backgroundColor: "rgba(179,181,198,0.2)",
          borderColor: "rgba(179,181,198,1)",
          pointBorderColor: "#fff",
          pointBackgroundColor: "rgba(179,181,198,1)",
          data: [8.77,55.61,21.69,6.62,6.82]
        }, {
          label: "2050",
          fill: true,
          backgroundColor: "rgba(255,99,132,0.2)",
          borderColor: "rgba(255,99,132,1)",
          pointBorderColor: "#fff",
          pointBackgroundColor: "rgba(255,99,132,1)",
          pointBorderColor: "#fff",
          data: [25.48,54.16,7.61,8.06,4.45]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Distribution in % of world population'
      }
    }
});

            </script>



    </div>


    </div>
</div>

{{-- ============================================================ --}}
{{-- End of column --}}
{{-- ============================================================ --}}















{{-- ============================================================ --}}
{{-- Start of column --}}
{{-- ============================================================ --}}
<div class="my-2  col-md-6 mx-auto">

    <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2">
<div class="d-flex justify-content-between align-items-center">

        <h3 class="darkcolor m-0 font18 text-capitalize"> Mixed chart  </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">


            <canvas id="mixed-chart" width="800" height="450"></canvas>


              <script>
                new Chart(document.getElementById("mixed-chart"), {
    type: 'bar',
    data: {
      labels: ["1900", "1950", "1999", "2050"],
      datasets: [{
          label: "Europe",
          type: "line",
          borderColor: "#8e5ea2",
          data: [408,547,675,734],
          fill: false
        }, {
          label: "Africa",
          type: "line",
          borderColor: "#3e95cd",
          data: [133,221,783,2478],
          fill: false
        }, {
          label: "Europe",
          type: "bar",
          backgroundColor: "rgba(0,0,0,0.2)",
          data: [408,547,675,734],
        }, {
          label: "Africa",
          type: "bar",
          backgroundColor: "rgba(0,0,0,0.2)",
          backgroundColorHover: "#3e95cd",
          data: [133,221,783,2478]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Population growth (millions): Europe & Africa'
      },
      legend: { display: false }
    }
});

              </script>

    </div>


    </div>
</div>

{{-- ============================================================ --}}
{{-- End of column --}}
{{-- ============================================================ --}}

























</section>




</section>







<script src="{{ asset('assets/DashBoard/js/CopyCode.js') }}"></script>






@include('Dashboard.inc.DashBoardFooter')
