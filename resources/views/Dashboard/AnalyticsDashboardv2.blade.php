@include('Dashboard.inc.DashBoardNavbars')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>













<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">



    <h1 class="darkcolor font20 mx-2 ">Analyses</h1>






    {{--  START OF statistics  section  --}}
    <section id="statistics-section" class="row pt-4">









        {{-- START OF statistics item 1  --}}
        <div class="col-xl-3 col-md-6 my-2 my-xl-0">

            <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2 bgwhite">
                <div id="right-circle" class="bgprimaryopacity"></div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-8">
                        <p class="graycolor mb-1">donnée moyenne</p>
                        <h2 class="darkcolor mb-1"> {{ $leboncoinDataCount }} </h2>

                        {{-- <div class="mt-1">

                            <span class="successcolor">

                                <span class="iconify successcolor font20"
                                    data-icon="material-symbols:arrow-right-alt-rounded" data-rotate="270deg"
                                    style='margin-right: -5px;margin-top: -3px;'></span>


                                <strong>25.36%</strong></span>
                            <small class=""> Since last month </small>

                        </div> --}}


                    </div>

                    <div class="col-4">

                        <div class="rounded right-icon float-end text-center p-3">
                            {{-- <i class="font30 fa-solid primarycolor fa-arrow-trend-up"></i> --}}
                            <i class="iconify primarycolor font40" data-icon="uil-arrow-growth"></i>


                        </div>

                    </div>
                </div>




            </div>

        </div>

        {{-- END OF statistics item 1  --}}



















        {{-- START OF statistics item 2  --}}
        <div class="col-xl-3 col-md-6 my-2 my-xl-0">

            <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2 bgwhite">
                <div id="right-circle" class="bgsecondaryopacity"></div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-8">
                        <p class="graycolor mb-1">Nombre d'utilisateurs</p>
                        <h2 class="darkcolor mb-1"> {{ $UsersCount }} </h2>

                        {{-- <div class="mt-1">

                            <span class="successcolor">

                                <span class="iconify successcolor font20"
                                    data-icon="material-symbols:arrow-right-alt-rounded" data-rotate="270deg"
                                    style='margin-right: -5px;margin-top: -3px;'></span>


                                <strong>25.36%</strong></span>
                            <small class=""> Since last month </small>

                        </div> --}}


                    </div>

                    <div class="col-4">

                        <div class="rounded right-icon float-end text-center p-3">
                            <i class="iconify seccolor font40" data-icon="uil:users-alt"></i>

                        </div>

                    </div>
                </div>




            </div>

        </div>

        {{-- END OF statistics item 2  --}}


























        {{-- START OF statistics item 3  --}}
        <div class="col-xl-3 col-md-6 my-2 my-xl-0">

            <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2 bgwhite">
                <div id="right-circle" class="bgthirdopacity"></div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-8">
                        <p class="graycolor mb-1">Nombre de recherches</p>
                        <h2 class="darkcolor mb-1"> {{ $AveragePricesCount }} </h2>
                        {{--
                        <div class="mt-1">

                            <span class="dangercolor">

                                <span class="iconify dangercolor font20"
                                    data-icon="material-symbols:arrow-right-alt-rounded" data-rotate="90deg"
                                    style='margin-right: -5px;margin-top: -3px;'></span>



                                <strong>25.36%</strong></span>
                            <small class=""> Since last month </small>

                        </div> --}}


                    </div>

                    <div class="col-4">

                        <div class="rounded right-icon float-end text-center p-3">
                            {{-- <i class="font30 fa-solid primarycolor fa-dollar-sign"></i> --}}
                            <i class="iconify thirdcolor font40" data-icon="uil:usd-circle"></i>

                        </div>

                    </div>
                </div>




            </div>

        </div>

        {{-- END OF statistics item 3  --}}




























        {{-- START OF statistics item 4  --}}
        <div class="col-xl-3 col-md-6 my-2 my-xl-0">

            <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2 bgwhite">
                <div id="right-circle" class="bgfourthopacity"></div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-8">
                        <p class="graycolor mb-1">Nombre de leads collectés</p>
                        <h2 class="darkcolor mb-1"> {{ $LeadsCount }} </h2>

                        {{-- <div class="mt-1">

                            <span class="successcolor">

                                <span class="iconify successcolor font20"
                                    data-icon="material-symbols:arrow-right-alt-rounded" data-rotate="270deg"
                                    style='margin-right: -5px;margin-top: -3px;'></span>
                                <strong>88.62%</strong></span>
                            <small class=""> Since last month </small>

                        </div> --}}


                    </div>

                    <div class="col-4">

                        <div class="rounded right-icon float-end text-center p-3">
                            <i class="iconify fourthcolor font40" data-icon="uil:tachometer-fast"></i>
                        </div>

                    </div>
                </div>




            </div>

        </div>

        {{-- END OF statistics item 4  --}}



















    </section>






    {{--  END OF statistics  section  --}}


























































































    {{--  START OF charts data section  Top Selling Products / Browser States   --}}
    <section id="table-data-section" class="row pt-2">













        <div class="col-xl-6">
            <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">

                <h3 class="darkcolor font18 text-capitalize"> Sales Growth </h3>



                <div id='SalesGrowth'></div>


                <script>
                    var SalesGrowthoptions = {
                        series: [{
                                name: 'Orders',
                                data: [30, 60, 60, 50, 66, 45, 33, 55, 40, 50, 70, 62],
                            },
                            {
                                name: 'Sales',
                                data: [20, 20, 30, 60, 40, 45, 50, 50, 40, 50, 40, 62],
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
                                "color": COLORS["chart_scales_tics_color"],
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
                            },
                            "axisTicks": {
                                "color": COLORS["chart_scales_tics_color"],
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










        <div class="col-xl-6">
            <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">

                <h3 class="darkcolor font18 text-capitalize"> Unique Visitors </h3>




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
                                "color": COLORS["chart_scales_tics_color"],


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

                            },
                            "axisTicks": {
                                "color": COLORS["chart_scales_tics_color"],
                            },
                            labels: {
                                style: {
                                    colors: COLORS["labels"],
                                    // fontSize: '16px',
                                }
                            },
                            "color": COLORS["chart_scales_tics_color"],

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







    </section>








































































































































    {{-- ===================================================================== --}}
    {{--  START OF table data section  Top Selling Products / Browser States   --}}
    {{-- ===================================================================== --}}

    <section id="table-data-section" class="row pt-2">










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
                                <a class="nav-link py-0 active text-capitalize" data-bs-toggle="pill"
                                    data-bs-target="#filter-today-Top-Selling-Products" type="button" role="tab"
                                    aria-controls="pills-today" aria-selected="true"> Today </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link  py-0 text-capitalize" data-bs-toggle="pill"
                                    data-bs-target="#filter-week-Top-Selling-Products" type="button" role="tab"
                                    aria-controls="pills-week" aria-selected="false" tabindex="-1"> Week </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link  py-0 text-capitalize" data-bs-toggle="pill"
                                    data-bs-target="#filter-mounth-Top-Selling-Products" type="button" role="tab"
                                    aria-controls="pills-mounth" aria-selected="false" tabindex="-1"> Mounth </a>
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
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png"
                                                alt="">
                                            <b class="graycolor mx-2">Boys T-Shirt</b>
                                        </td>
                                        <td class="text-end">$220</td>
                                        <td class="text-end">800</td>
                                        <td class="text-end">$20,573</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png"
                                                alt="">
                                            <b class="graycolor mx-2">Boys T-Shirt</b>
                                        </td>
                                        <td class="text-end">$180</td>
                                        <td class="text-end">562</td>
                                        <td class="text-end">$14,503</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png"
                                                alt="">
                                            <b class="graycolor mx-2">Boys T-Shirt</b>
                                        </td>
                                        <td class="text-end">$80</td>
                                        <td class="text-end">214</td>
                                        <td class="text-end">$12,45</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png"
                                                alt="">
                                            <b class="graycolor mx-2">Boys T-Shirt</b>
                                        </td>
                                        <td class="text-end">$60</td>
                                        <td class="text-end">100</td>
                                        <td class="text-end">$4,503</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png"
                                                alt="">
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
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png"
                                                alt="">
                                            <b class="graycolor mx-2">Boys T-Shirt</b>
                                        </td>
                                        <td class="text-end">$2620</td>
                                        <td class="text-end">8880</td>
                                        <td class="text-end">$910,573</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png"
                                                alt="">
                                            <b class="graycolor mx-2">Boys T-Shirt</b>
                                        </td>
                                        <td class="text-end">$1080</td>
                                        <td class="text-end">5620</td>
                                        <td class="text-end">$104,503</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png"
                                                alt="">
                                            <b class="graycolor mx-2">Boys T-Shirt</b>
                                        </td>
                                        <td class="text-end">$800</td>
                                        <td class="text-end">2104</td>
                                        <td class="text-end">$102,45</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png"
                                                alt="">
                                            <b class="graycolor mx-2">Boys T-Shirt</b>
                                        </td>
                                        <td class="text-end">$600</td>
                                        <td class="text-end">1000</td>
                                        <td class="text-end">$40,503</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png"
                                                alt="">
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
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png"
                                                alt="">
                                            <b class="graycolor mx-2">Boys T-Shirt</b>
                                        </td>
                                        <td class="text-end">$900</td>
                                        <td class="text-end">1500</td>
                                        <td class="text-end">$956,573</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png"
                                                alt="">
                                            <b class="graycolor mx-2">Boys T-Shirt</b>
                                        </td>
                                        <td class="text-end">$1080</td>
                                        <td class="text-end">5062</td>
                                        <td class="text-end">$1044,503</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png"
                                                alt="">
                                            <b class="graycolor mx-2">Boys T-Shirt</b>
                                        </td>
                                        <td class="text-end">$8050</td>
                                        <td class="text-end">21404</td>
                                        <td class="text-end">$1120,45</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png"
                                                alt="">
                                            <b class="graycolor mx-2">Boys T-Shirt</b>
                                        </td>
                                        <td class="text-end">$6800</td>
                                        <td class="text-end">10600</td>
                                        <td class="text-end">$400,503</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/premium-clock.png"
                                                alt="">
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
        {{--  END OF  Top  Selling Products table / Browser States   --}}
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
                                <a class="nav-link py-0 active text-capitalize" data-bs-toggle="pill"
                                    data-bs-target="#filter-today-Browser-States" type="button" role="tab"
                                    aria-controls="pills-today" aria-selected="true"> Today </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link  py-0 text-capitalize" data-bs-toggle="pill"
                                    data-bs-target="#filter-week-Browser-States" type="button" role="tab"
                                    aria-controls="pills-week" aria-selected="false" tabindex="-1"> Week </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link  py-0 text-capitalize" data-bs-toggle="pill"
                                    data-bs-target="#filter-mounth-Browser-States" type="button" role="tab"
                                    aria-controls="pills-mounth" aria-selected="false" tabindex="-1"> Mounth </a>
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
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://cdn-icons-png.flaticon.com/512/732/732205.png"
                                                alt="">

                                            <b class="graycolor mx-2"> Google Chrome </b>
                                        </td>
                                        <td class="text-end">92,345</td>
                                        <td class="text-end">3.5%</td>
                                        <td class="text-end">12025</td>
                                        <td class="text-end">90%</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://cdn-icons-png.flaticon.com/512/5968/5968827.png"
                                                alt="">

                                            <b class="graycolor mx-2"> Mozila Firefox </b>
                                        </td>
                                        <td class="text-end">92,345</td>
                                        <td class="text-end">3.5%</td>
                                        <td class="text-end">12025</td>
                                        <td class="text-end">90%</td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://cdn-icons-png.flaticon.com/512/564/564442.png"
                                                alt="">

                                            <b class="graycolor mx-2"> Apple Safari </b>
                                        </td>
                                        <td class="text-end">92,345</td>
                                        <td class="text-end">3.5%</td>
                                        <td class="text-end">12025</td>
                                        <td class="text-end">90%</td>
                                    </tr>



                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://cdn-icons-png.flaticon.com/512/220/220213.png"
                                                alt="">

                                            <b class="graycolor mx-2"> Internet Explorer </b>
                                        </td>
                                        <td class="text-end">92,345</td>
                                        <td class="text-end">3.5%</td>
                                        <td class="text-end">12025</td>
                                        <td class="text-end">90%</td>
                                    </tr>



                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://cdn-icons-png.flaticon.com/512/6124/6124994.png"
                                                alt="">

                                            <b class="graycolor mx-2"> Opera Mini </b>
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
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://cdn-icons-png.flaticon.com/512/732/732205.png"
                                                alt="">
                                            <b class="graycolor mx-2"> Google Chrome </b>
                                        </td>
                                        <td class="text-end">3392,345</td>
                                        <td class="text-end">333.5%</td>
                                        <td class="text-end">3312025</td>
                                        <td class="text-end">390%</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://cdn-icons-png.flaticon.com/512/5968/5968827.png"
                                                alt="">

                                            <b class="graycolor mx-2"> Mozila Firefox </b>
                                        </td>
                                        <td class="text-end">2292,345</td>
                                        <td class="text-end">223.5%</td>
                                        <td class="text-end">2212025</td>
                                        <td class="text-end">290%</td>
                                    </tr>


                                    <tr>
                                        <td>

                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://cdn-icons-png.flaticon.com/512/564/564442.png"
                                                alt="">

                                            <b class="graycolor mx-2"> Apple Safari </b>
                                        </td>
                                        <td class="text-end">1192,345</td>
                                        <td class="text-end">113.5%</td>
                                        <td class="text-end">1112025</td>
                                        <td class="text-end">190%</td>
                                    </tr>



                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://cdn-icons-png.flaticon.com/512/220/220213.png"
                                                alt="">
                                            <b class="graycolor mx-2"> Internet Explorer </b>

                                        </td>
                                        <td class="text-end">112,345</td>
                                        <td class="text-end">3.5%</td>
                                        <td class="text-end">1207725</td>
                                        <td class="text-end">150%</td>
                                    </tr>



                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://cdn-icons-png.flaticon.com/512/6124/6124994.png"
                                                alt="">

                                            <b class="graycolor mx-2"> Opera Mini </b>
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
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://cdn-icons-png.flaticon.com/512/732/732205.png"
                                                alt="">

                                            <b class="graycolor mx-2"> Google Chrome </b>
                                        </td>
                                        <td class="text-end">9742,345</td>
                                        <td class="text-end">3555.5%</td>
                                        <td class="text-end">132025</td>
                                        <td class="text-end">95880%</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://cdn-icons-png.flaticon.com/512/5968/5968827.png"
                                                alt="">

                                            <b class="graycolor mx-2"> Mozila Firefox </b>
                                        </td>
                                        <td class="text-end">922,345</td>
                                        <td class="text-end">300.5%</td>
                                        <td class="text-end">102025</td>
                                        <td class="text-end">9000%</td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://cdn-icons-png.flaticon.com/512/564/564442.png"
                                                alt="">

                                            <b class="graycolor mx-2"> Apple Safari </b>
                                        </td>
                                        <td class="text-end">9235,345</td>
                                        <td class="text-end">364.5%</td>
                                        <td class="text-end">185025</td>
                                        <td class="text-end">684%</td>
                                    </tr>



                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://cdn-icons-png.flaticon.com/512/220/220213.png"
                                                alt="">

                                            <b class="graycolor mx-2"> Internet Explorer </b>
                                        </td>
                                        <td class="text-end">92,345</td>
                                        <td class="text-end">3661.5%</td>
                                        <td class="text-end">152025</td>
                                        <td class="text-end">520%</td>
                                    </tr>



                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="https://cdn-icons-png.flaticon.com/512/6124/6124994.png"
                                                alt="">


                                            <b class="graycolor mx-2"> Opera Mini </b>
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

































</section>


















































































@include('Dashboard.inc.DashBoardFooter')
