@include('Dashboard.inc.DashBoardNavbars')





{{-- ######################################################## --}}
{{-- ############ START  CHART JS CDN ############# --}}
{{-- ######################################################## --}}
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
{{-- ######################################################## --}}
{{-- ############ END  CHART JS CDN ############# --}}
{{-- ######################################################## --}}




<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">


    <h1  class="darkcolor font20 mx-2 " >  ApexCharts.js </h1>



    <section class="row pt-4">















{{-- ============================================================ --}}
{{-- Start of column --}}
{{-- ============================================================ --}}
<div class="my-2  col-md-6 mx-auto">

    <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2">
<div class="d-flex justify-content-between align-items-center">

        <h3 class="darkcolor m-0 font18 text-capitalize"> Example 1  </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">



<div id='SalesGrowth'></div>


<script>

        var SalesGrowthoptions = {
          series: [
        {
          name: 'Orders',
          data: [30, 60, 60, 50, 66, 45 , 33 , 55 , 40, 50, 70, 62 ],
        },
        {
          name: 'Sales',
          data: [20, 20, 30, 60, 40, 45 , 50 , 50 , 40, 50, 40, 62 ],
        }
      ],
          chart: {
          height: 350,
          type: 'line',
          "animations": {
            "enabled": true,
           // "easing": "swing"
        },
        toolbar: {
            show: true,
            tools: {
                "selection": true,
                "zoom": true,
                "zoomin": true,
                "zoomout": true,
                "pan": true,
                "reset": true
            }
        },
        },

        colors: [COLORS["primaryColor"], COLORS["secColor"]],

        stroke: {
          width: 5,
          curve: 'smooth'
        },
        grid: {
        "borderColor": COLORS["chart_grid_color"],
        "padding": {
            "right": 25,
            "left": 15
        }
    },
    legend: {
        "position": "top",
        "fontSize": 14,
        "offsetY": 14,
        labels: {
          colors: COLORS["chart_plugins_legend_color"],
      },
    },


        "xaxis": {
          categories: ['Jan', 'Fev', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          labels: {
    style: {
      colors: COLORS["labels"],
      // fontSize: '16px',
    }
  },

        "axisBorder": {
            "color": COLORS["axisBorder"],
        },
        "axisTicks": {
            "color":  COLORS["chart_scales_tics_color"],
        },
        "tickAmount": "dataPoints",

    },

        // title: {
        //   text: 'Forecast',
        //   align: 'left',
        //   style: {
        //     fontSize: "16px",
        //     color: 'red'
        //   }
        // },

        yaxis: {
          min: 0,
          max: 80,
        "tickAmount": 4,
        labels: {
    style: {
      colors: COLORS["labels"],
      // fontSize: '16px',
    }
  },
        title: {
            text: '$ (thousands)',
           style: {
              color: COLORS["axis_title"],
          },
          } ,
          "axisTicks": {
            "color":  COLORS["chart_scales_tics_color"],
        },


        },
        tooltip: {
          y: {
            // formatter: function (val) {
            //   return "$ " + val + " thousands"
            // }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#SalesGrowth"), SalesGrowthoptions);
        chart.render();
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

        <h3 class="darkcolor m-0 font18 text-capitalize"> Example 2  </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">




            <div id="UniqueVisitors"></div>




            <script>




            var UniqueVisitorsChartoptions = {
                      series: [{
                      name: 'Direct',
                      data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
                    }, {
                      name: 'Organic',
                      data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
                    }],
                    grid: {
                    "borderColor": COLORS["chart_grid_color"],
                    "padding": {
                        "right": 25,
                        "left": 15
                    }
                },
                    legend: {
                    "position": "top",
                    "fontSize": 14,
                    "offsetY": 14,
                    labels: {
                      colors: COLORS["chart_plugins_legend_color"],
                  },
                },
                      chart: {
                      type: 'bar',
                      height: 350
                    },
                    colors: [COLORS["primaryColor"], COLORS["secColor"]],

                    plotOptions: {
                      bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded'
                      },
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      show: true,
                      width: 2,
                      colors: ['transparent']
                    },
                    xaxis: {
                      categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                      labels: {
                style: {
                  colors: COLORS["labels"],
                  // fontSize: '16px',
                }
              },
                      "axisTicks": {
                        "color":  COLORS["chart_scales_tics_color"],


              "axisBorder": {
                        "color": COLORS["axisBorder"],
                    },
                    },



                    },
                    yaxis: {
                      title: {
                        text: '$ (thousands)',
                        style: {
                          color: COLORS["axis_title"],
                      },

                      } ,
                      "axisTicks": {
                        "color":  COLORS["chart_scales_tics_color"],
                    },
                    labels: {
                style: {
                  colors: COLORS["labels"],
                  // fontSize: '16px',
                }
              },
              "color":  COLORS["chart_scales_tics_color"],

                    },
                    fill: {
                      opacity: 1
                    },
                    tooltip: {
                      y: {
                        // formatter: function (val) {
                        //   return "$ " + val + " thousands"
                        // }
                      }
                    }
                    };

                    var chart = new ApexCharts(document.querySelector("#UniqueVisitors"), UniqueVisitorsChartoptions);
                    chart.render();



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

        <h3 class="darkcolor m-0 font18 text-capitalize"> area charts  </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">

  <div id="area_charts"></div>

  <script>
    var options = {
          series: [{
          name: 'series1',
          data: [31, 40, 28, 51, 42, 109, 100]
        }, {
          name: 'series2',
          data: [11, 32, 45, 32, 34, 52, 41]
        }],
          chart: {
          height: 350,
          type: 'area'
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
        xaxis: {
          type: 'datetime',
          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
        },
        tooltip: {
          x: {
            format: 'dd/MM/yy HH:mm'
          },
        },
        };

        var chart = new ApexCharts(document.querySelector("#area_charts"), options);
        chart.render();
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

        <h3 class="darkcolor m-0 font18 text-capitalize"> line charts gradient  </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">


            <div id="line_charts_gradient"></div>


              <script>
                  var options = {
          series: [{
          name: 'Sales',
          data: [4, 3, 10, 9, 29, 19, 22, 9, 12, 7, 19, 5, 13, 9, 17, 2, 7, 5]
        }],
          chart: {
          height: 350,
          type: 'line',
        },
        forecastDataPoints: {
          count: 7
        },
        stroke: {
          width: 5,
          curve: 'smooth'
        },
        xaxis: {
          type: 'datetime',
          categories: ['1/11/2000', '2/11/2000', '3/11/2000', '4/11/2000', '5/11/2000', '6/11/2000', '7/11/2000', '8/11/2000', '9/11/2000', '10/11/2000', '11/11/2000', '12/11/2000', '1/11/2001', '2/11/2001', '3/11/2001','4/11/2001' ,'5/11/2001' ,'6/11/2001'],
          tickAmount: 10,
          labels: {
            formatter: function(value, timestamp, opts) {
              return opts.dateFormatter(new Date(timestamp), 'dd MMM')
            }
          }
        },
        title: {
          text: 'Forecast',
          align: 'left',
          style: {
            fontSize: "16px",
            color: '#666'
          }
        },
        fill: {
          type: 'gradient',
          gradient: {
            shade: 'dark',
            gradientToColors: [ '#FDD835'],
            shadeIntensity: 1,
            type: 'horizontal',
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 100, 100, 100]
          },
        },
        yaxis: {
          min: -10,
          max: 40
        }
        };

        var chart = new ApexCharts(document.querySelector("#line_charts_gradient"), options);
        chart.render();

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

        <h3 class="darkcolor m-0 font18 text-capitalize"> mixed-charts/line-column-area/  </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">


            <div id="mixed_charts_line_column_area"></div>

            <script>

        var options = {
          series: [{
          name: 'TEAM A',
          type: 'column',
          data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
        }, {
          name: 'TEAM B',
          type: 'area',
          data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43]
        }, {
          name: 'TEAM C',
          type: 'line',
          data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39]
        }],
          chart: {
          height: 350,
          type: 'line',
          stacked: false,
        },
        stroke: {
          width: [0, 2, 5],
          curve: 'smooth'
        },
        plotOptions: {
          bar: {
            columnWidth: '50%'
          }
        },

        fill: {
          opacity: [0.85, 0.25, 1],
          gradient: {
            inverseColors: false,
            shade: 'light',
            type: "vertical",
            opacityFrom: 0.85,
            opacityTo: 0.55,
            stops: [0, 100, 100, 100]
          }
        },
        labels: ['01/01/2003', '02/01/2003', '03/01/2003', '04/01/2003', '05/01/2003', '06/01/2003', '07/01/2003',
          '08/01/2003', '09/01/2003', '10/01/2003', '11/01/2003'
        ],
        markers: {
          size: 0
        },
        xaxis: {
          type: 'datetime'
        },
        yaxis: {
          title: {
            text: 'Points',
          },
          min: 0
        },
        tooltip: {
          shared: true,
          intersect: false,
          y: {
            formatter: function (y) {
              if (typeof y !== "undefined") {
                return y.toFixed(0) + " points";
              }
              return y;

            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#mixed_charts_line_column_area"), options);
        chart.render();


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

        <h3 class="darkcolor m-0 font18 text-capitalize"> Radial Bar Charts  Multiple  </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">

  <div id="Radial_Bar_Charts_Multiple"></div>


  <script>

    var options = {
          series: [44, 55, 67, 83],
          chart: {
          height: 350,
          type: 'radialBar',
        },
        plotOptions: {
          radialBar: {
            dataLabels: {
              name: {
                fontSize: '22px',
              },
              value: {
                fontSize: '16px',
              },
              total: {
                show: true,
                label: 'Total',
                formatter: function (w) {
                  // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                  return 249
                }
              }
            }
          }
        },
        labels: ['Apples', 'Oranges', 'Bananas', 'Berries'],
        };

        var chart = new ApexCharts(document.querySelector("#Radial_Bar_Charts_Multiple"), options);
        chart.render();


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

        <h3 class="darkcolor m-0 font18 text-capitalize"> Pie Charts  Simple Donut  </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">


          <div id="Pie_Charts_Simple_Donut"></div>

<script>

    var options = {
          series: [44, 55, 41, 17, 15],
          chart: {
          type: 'donut',
        },
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#Pie_Charts_Simple_Donut"), options);
        chart.render();
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
