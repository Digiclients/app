@include('dashboard.inc.DashBoardNavbars')


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>








<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">


    <h1 class="darkcolor font20 mx-2 ">Analytics</h1>

    {{--  START HERE statistics and Sales Reports section  --}}
    <section class="row pt-4">





        {{--  START HERE statistics --}}

        <div class="col-xl-6 row">




















            {{-- START OF statistics item 1  --}}
            <div class="col-md-6">

                <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2 bgwhite">

                    <div class="row justify-content-between ">
                        <div class="col">
                            <h2 class="darkcolor"> 100+ </h2>
                            <p class="graycolor">Total Products</p>
                        </div>

                        <div class="col">

                            <div class="rounded  float-end text-center p-3 m-1  bgprimaryopacity">
                                <i class="iconify primarycolor font40" data-icon="uil-arrow-growth"></i>

                            </div>

                        </div>
                    </div>

                    <div class="p-2 mt-1 BlocksBackground rounded">

                        <span class="successcolor">
                            <span class="iconify successcolor font20" data-icon="material-symbols:arrow-right-alt-rounded" data-rotate="270deg" style='margin-right: -5px;margin-top: -3px;'></span>
                            <strong>25.36%</strong></span> &nbsp;
                        <small class=""> Since last month </small>

                    </div>


                </div>

            </div>

            {{-- END OF statistics item 1  --}}












            {{-- START OF statistics item 2  --}}
            <div class="col-md-6 pt-2 pt-md-0">

                <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2 bgwhite">

                    <div class="row justify-content-between ">
                        <div class="col">
                            <h2 class="darkcolor"> 30,825 </h2>
                            <p class="graycolor">Total Orders</p>
                        </div>

                        <div class="col">

                            <div class="rounded  float-end text-center p-3 m-1  bgsecondaryopacity">
                                <i class="iconify seccolor font40" data-icon="uil:users-alt"></i>

                            </div>

                        </div>
                    </div>

                    <div class="p-2 mt-1 BlocksBackground rounded">

                        <span class="successcolor">
                            <span class="iconify successcolor font20" data-icon="material-symbols:arrow-right-alt-rounded" data-rotate="270deg" style='margin-right: -5px;margin-top: -3px;'></span>
                                                        <strong>25.36%</strong></span> &nbsp;
                        <small class=""> Since last month </small>

                    </div>


                </div>

            </div>

            {{-- END OF statistics item 2  --}}





















            {{-- START OF statistics item 3  --}}
            <div class="col-md-6">

                <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 mb-0 m-2 bgwhite">

                    <div class="row justify-content-between ">
                        <div class="col">
                            <h2 class="darkcolor"> $30,825 </h2>
                            <p class="graycolor">Total Sales</p>
                        </div>

                        <div class="col">

                            <div class="rounded  float-end text-center p-3 m-1  bgthirdopacity">
                                <i class="iconify thirdcolor font40" data-icon="uil:usd-circle"></i>

                            </div>

                        </div>
                    </div>

                    <div class="p-2 mt-1 BlocksBackground rounded">

                        <span class="dangercolor">
                            <span class="iconify dangercolor font20" data-icon="material-symbols:arrow-right-alt-rounded" data-rotate="90deg" style='margin-right: -5px;margin-top: -3px;'></span>
                            <strong>25.36%</strong></span> &nbsp;
                        <small class=""> Since last month </small>

                    </div>


                </div>

            </div>

            {{-- END OF statistics item 3  --}}





















            {{-- START OF statistics item 4  --}}
            <div class="col-md-6">

                <div class="BlocksBackground dark-box-shadow rounded  p-4  mt-md-3 mb-md-0 m-2 bgwhite">

                    <div class="row justify-content-between">
                        <div class="col">
                            <h2 class="darkcolor"> 30,825 </h2>
                            <p class="graycolor">New Customers</p>
                        </div>

                        <div class="col">

                            <div class="rounded  float-end text-center p-3 m-1 bgfourthopacity">
                                <i class="iconify fourthcolor font40" data-icon="uil:tachometer-fast"></i>

                            </div>

                        </div>
                    </div>

                    <div class="p-2 mt-1 BlocksBackground rounded">

                        <span class="successcolor">
                            <span class="iconify successcolor font20" data-icon="material-symbols:arrow-right-alt-rounded" data-rotate="270deg" style='margin-right: -5px;margin-top: -3px;'></span>                            <strong>25.36%</strong></span> &nbsp;
                        <small class=""> Since last month </small>

                    </div>


                </div>

            </div>

            {{-- END OF statistics item 4  --}}




























        </div>
        {{-- END HERE statistics   --}}






        {{--  START HERE Sales Reports --}}

        <div class="col-xl-6  mt-3 mt-xl-0 BlocksBackground dark-box-shadow rounded p-3 ">

            <h3 class="darkcolor font18 text-capitalize"> Sales Reports </h3>



            {{-- START OF  chart legends  --}}


            <div class="row mx-auto col-md-9">


                {{-- start here  Orders chart legend  number 1 --}}
                <div class="col-md-6 text-center">
                    <i class="fa-solid fa-circle primarycolor font12"></i>
                    <span class="">Orders</span>
                    <span class="darkcolor font24 fontw600 mx-2">$8,550</span>
                    <span class="successcolor fontw600">

                        <span class="iconify successcolor font20" data-icon="material-symbols:arrow-right-alt-rounded" data-rotate="270deg" style='margin-right: -5px;margin-top: -3px;'></span>     
                        <strong>25%</strong></span>

                </div>

                {{-- END OF  Orders chart legend number 1 --}}




                {{-- START OF   Sales chart legend number 2  --}}
                <div class="col-md-6 text-center">
                    <i class="fa-solid fa-circle seccolor font12"></i>
                    <span class="">Sales</span>
                    <span class="darkcolor font24 fontw600 mx-2">$5,550</span>
                    <span class="dangercolor fontw600">
                        <span class="iconify dangercolor font20" data-icon="material-symbols:arrow-right-alt-rounded" data-rotate="90deg" style='margin-right: -5px;margin-top: -3px;'></span>     

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





        {{--  END HERE Sales Reports --}}


    </section>




    {{-- END HERE statistics and Sales Reports section  --}}







    {{--  START HERE xxx section  --}}
    <section class="row pt-2">







        <div class="col-xl-4">
            <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">


                {{-- START OF TITLE AND TABS --}}
                <div class="row">

                    <div class="col-md-4">

                        <h3 class="darkcolor font18 text-capitalize"> Sales Growth </h3>

                    </div>

                    <div class="col-md-8">

                        
                        <ul class="nav  customTabs float-end" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link py-0 active text-capitalize" id="pills-today-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-today" type="button" role="tab"
                                    aria-controls="pills-today" aria-selected="true"> Today </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link  py-0 text-capitalize" id="pills-week-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-week" type="button" role="tab"
                                    aria-controls="pills-week" aria-selected="false"> Week </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link  py-0 text-capitalize" id="pills-mounth-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-mounth" type="button" role="tab"
                                    aria-controls="pills-mounth" aria-selected="false"> Mounth </a>
                            </li>
                        </ul>


                    </div>

                </div>


                {{-- END OF TITLE AND TABS --}}





                {{-- START OF tabs content --}}



                <div class="tab-content" id="pills-tabContent-Sales-Growth">

                    <div class="tab-pane fade show active" id="pills-today" role="tabpanel"
                        aria-labelledby="pills-today-tab">




                        {{-- START OF  chart legends  --}}


                        <div class="row mx-auto col-md-8 pt-4">


                            {{-- start here  Orders chart legend  number 1 --}}
                            <div class="col-md-6 text-center">

                                <span class="darkcolor font16 fontw600 mx-2">$8,550</span>
                                <span class="successcolor fontw600">
                        <span class="iconify successcolor font20" data-icon="material-symbols:arrow-right-alt-rounded" data-rotate="270deg" style='margin-right: -5px;margin-top: -3px;'></span>     
                                    <strong>25%</strong></span>

                            </div>

                            {{-- END OF  Orders chart legend number 1 --}}




                            {{-- START OF   Sales chart legend number 2  --}}
                            <div class="col-md-6 text-center">

                                <span class="darkcolor font16 fontw600 mx-2">$5,550</span>
                                <span class="dangercolor fontw600">
                                    <span class="iconify dangercolor font20" data-icon="material-symbols:arrow-right-alt-rounded" data-rotate="90deg" style='margin-right: -5px;margin-top: -3px;'></span>     

                                    <strong>15%</strong></span>

                            </div>

                            {{-- END OF Sales chart legend number 2  --}}


                        </div>

                        {{-- END OF  chart legends  --}}




                        <canvas id="SalesGrowthchartToday" height="301" width="457"></canvas>


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




                    <div class="tab-pane fade" id="pills-week" role="tabpanel" aria-labelledby="pills-week-tab">





                        {{-- START OF  chart legends  --}}


                        <div class="row mx-auto col-md-8 pt-4">


                            {{-- start here  Orders chart legend  number 1 --}}
                            <div class="col-md-6 text-center">

                                <span class="darkcolor font16 fontw600 mx-2">$8,550</span>
                                <span class="successcolor fontw600">
                        <span class="iconify successcolor font20" data-icon="material-symbols:arrow-right-alt-rounded" data-rotate="270deg" style='margin-right: -5px;margin-top: -3px;'></span>     

                                    <strong>25%</strong></span>

                            </div>

                            {{-- END OF  Orders chart legend number 1 --}}




                            {{-- START OF   Sales chart legend number 2  --}}
                            <div class="col-md-6 text-center">

                                <span class="darkcolor font16 fontw600 mx-2">$5,550</span>
                                <span class="dangercolor fontw600">
                        <span class="iconify dangercolor font20" data-icon="material-symbols:arrow-right-alt-rounded" data-rotate="90deg" style='margin-right: -5px;margin-top: -3px;'></span>     

                                    
                                    <strong>15%</strong></span>

                            </div>

                            {{-- END OF Sales chart legend number 2  --}}


                        </div>

                        {{-- END OF  chart legends  --}}




                        <canvas id="SalesGrowthchartByweek" height="301" width="457"></canvas>


                        <script>
                            const SalesGrowthchartByweek = document.getElementById('SalesGrowthchartByweek');







                            SalesGrowthchartByweek_labels = ["1-2", "2-3", "3-4", "4-5", "5-6", "6-7", "7-8"];

                            SalesGrowthchartByweek_data = {
                                labels: SalesGrowthchartByweek_labels,
                                datasets: [{
                                        label: 'Target',
                                        data: [60, 70, 66, 77, 22, 44, 76],
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
                                        data: [10, 22, 44, 20, 5, 20, 33],

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








                            SalesGrowthchartByweek_config = {
                                type: 'bar',
                                data: SalesGrowthchartByweek_data,
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





                            new Chart(SalesGrowthchartByweek, SalesGrowthchartByweek_config);
                        </script>




                    </div>




                    <div class="tab-pane fade" id="pills-mounth" role="tabpanel" aria-labelledby="pills-mounth-tab">





                        {{-- START OF  chart legends  --}}


                        <div class="row mx-auto col-md-8 pt-4">


                            {{-- start here  Orders chart legend  number 1 --}}
                            <div class="col-md-6 text-center">

                                <span class="darkcolor font16 fontw600 mx-2">$8,550</span>
                                <span class="successcolor fontw600">
                                    <span class="iconify successcolor font20" data-icon="material-symbols:arrow-right-alt-rounded" data-rotate="270deg" style='margin-right: -5px;margin-top: -3px;'></span>     
                                    <strong>25%</strong></span>

                            </div>

                            {{-- END OF  Orders chart legend number 1 --}}




                            {{-- START OF   Sales chart legend number 2  --}}
                            <div class="col-md-6 text-center">

                                <span class="darkcolor font16 fontw600 mx-2">$5,550</span>
                                <span class="dangercolor fontw600">
                                    <span class="iconify dangercolor font20" data-icon="material-symbols:arrow-right-alt-rounded" data-rotate="90deg" style='margin-right: -5px;margin-top: -3px;'></span>     
                                    <strong>15%</strong></span>

                            </div>

                            {{-- END OF Sales chart legend number 2  --}}


                        </div>

                        {{-- END OF  chart legends  --}}




                        <canvas id="SalesGrowthchartBymounth" height="301" width="457"></canvas>


                        <script>
                            const SalesGrowthchartBymounth = document.getElementById('SalesGrowthchartBymounth');







                            SalesGrowthchartBymounth_labels = ['Jan', 'Fev', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov',
                                'Dec'
                            ];

                            SalesGrowthchartBymounth_data = {
                                labels: SalesGrowthchartBymounth_labels,
                                datasets: [{
                                        label: 'Target',
                                        data: [30, 70, 66, 77, 60, 60, 76, 55, 32, 30, 50, 60],

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
                                        data: [10, 60, 60, 50, 33, 20, 33, 40, 10, 20, 40, 54],

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








                            SalesGrowthchartBymounth_config = {
                                type: 'bar',
                                data: SalesGrowthchartBymounth_data,
                                options: {
                                    animation: {
                                        //from : 0 ,
                                        // delay: 1000,
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





                            new Chart(SalesGrowthchartBymounth, SalesGrowthchartBymounth_config);
                        </script>





                    </div>

                </div>




                {{-- END OF tabs content --}}















            </div>




        </div>







        <div class="col-xl-4">
            <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">



                {{-- START OF TITLE AND TABS --}}
                <div class="row">

                    <div class="col-md-4">

                        <h3 class="darkcolor font18 text-capitalize"> Sales by Countries </h3>

                    </div>

                    <div class="col-md-8">


                        <ul class="nav  customTabs float-end" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link py-0 active text-capitalize" data-bs-toggle="pill"
                                    data-bs-target="#filter-today-Sales-by-Countries" type="button" role="tab"
                                    aria-controls="pills-today" aria-selected="true"> Today </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link  py-0 text-capitalize" data-bs-toggle="pill"
                                    data-bs-target="#filter-week-Sales-by-Countries" type="button" role="tab"
                                    aria-controls="pills-week" aria-selected="false"> Week </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link  py-0 text-capitalize" data-bs-toggle="pill"
                                    data-bs-target="#filter-mounth-Sales-by-Countries" type="button" role="tab"
                                    aria-controls="pills-mounth" aria-selected="false"> Mounth </a>
                            </li>
                        </ul>


                    </div>

                </div>


                {{-- END OF TITLE AND TABS --}}







                <div class="tab-content" id="pills-tabContent-Sales-by-Countries">

                    <div class="tab-pane fade show active" id="filter-today-Sales-by-Countries">



                        <ul class="list-group list-group-flush pt-1 ">


                            <li class="list-group-item">

                                <div class="row">
                                    <div class="col-2  d-flex mx-auto my-auto">
                                        <img src="{{ asset('assets/DashBoard/images/uk.png') }}" alt=""
                                            class="img-fluid mx-auto  rounded-circle">

                                    </div>

                                    <div class="col-7 my-auto">
                                        <div class="darkcolor fontw600 font20">$8,67k</div>
                                        <div>
                                            <small class="text-capitalize"> United state </small>

                                        </div>
                                    </div>

                                    <div class="col-3 mx-auto my-auto">

                                        <span class="successcolor text-center font16">
                                                <span class="iconify font26 successcolor" data-icon="material-symbols:keyboard-arrow-up-rounded" style="margin-right: 0px;margin-top: -3px;" ></span>
                                            <strong>25.36%</strong></span>

                                    </div>


                                </div>

                            </li>


                            <li class="list-group-item">

                                <div class="row">
                                    <div class="col-2  d-flex mx-auto my-auto">
                                        <img src="{{ asset('assets/DashBoard/images/germany.png') }}" alt=""
                                            class="img-fluid mx-auto  rounded-circle">

                                    </div>

                                    <div class="col-7 my-auto">
                                        <div class="darkcolor fontw600 font20">$2,45k</div>
                                        <div>
                                            <small class="text-capitalize"> Germany </small>

                                        </div>
                                    </div>

                                    <div class="col-3 mx-auto my-auto">

                                        <span class="dangercolor text-center font16">
                                         
                                            <span class="iconify font26 dangercolor" data-icon="material-symbols:keyboard-arrow-down-rounded" style="margin-right: 0px;margin-top: -3px;" ></span>
                                            
                                            <strong>5.36%</strong></span>

                                    </div>


                                </div>

                            </li>




                            <li class="list-group-item">

                                <div class="row">
                                    <div class="col-2  d-flex mx-auto my-auto">
                                        <img src="{{ asset('assets/DashBoard/images/italy.png') }}" alt=""
                                            class="img-fluid mx-auto  rounded-circle">

                                    </div>

                                    <div class="col-7 my-auto">
                                        <div class="darkcolor fontw600 font20">$86k</div>
                                        <div>
                                            <small class="text-capitalize"> italy </small>

                                        </div>
                                    </div>

                                    <div class="col-3 mx-auto my-auto">

                                        <span class="successcolor text-center font16">
                                            
                                            <span class="iconify font26 successcolor" data-icon="material-symbols:keyboard-arrow-up-rounded" style="margin-right: 0px;margin-top: -3px;" ></span>

                                            <strong>25.36%</strong></span>

                                    </div>


                                </div>

                            </li>





                            <li class="list-group-item">

                                <div class="row">
                                    <div class="col-2  d-flex mx-auto my-auto">
                                        <img src="{{ asset('assets/DashBoard/images/ar.png') }}" alt=""
                                            class="img-fluid mx-auto  rounded-circle">

                                    </div>

                                    <div class="col-7 my-auto">
                                        <div class="darkcolor fontw600 font20">$74k</div>
                                        <div>
                                            <small class="text-capitalize"> Saudi Arabia </small>

                                        </div>
                                    </div>

                                    <div class="col-3 mx-auto my-auto">

                                        <span class="dangercolor text-center font16">
                                            <span class="iconify font26 dangercolor" data-icon="material-symbols:keyboard-arrow-down-rounded" style="margin-right: 0px;margin-top: -3px;" ></span>
                                            
                                            <strong>8.44%</strong></span>

                                    </div>


                                </div>

                            </li>




                            <li class="list-group-item">

                                <div class="row">
                                    <div class="col-2  d-flex mx-auto my-auto">
                                        <img src="{{ asset('assets/DashBoard/images/spain.png') }}" alt=""
                                            class="img-fluid mx-auto  rounded-circle">

                                    </div>

                                    <div class="col-7 my-auto">
                                        <div class="darkcolor fontw600 font20">$6k</div>
                                        <div>
                                            <small class="text-capitalize"> spain </small>

                                        </div>
                                    </div>

                                    <div class="col-3 mx-auto my-auto">

                                        <span class="successcolor text-center font16">
                                            <span class="iconify font26 successcolor" data-icon="material-symbols:keyboard-arrow-up-rounded" style="margin-right: 0px;margin-top: -3px;" ></span>
                                            
                                            <strong>25.36%</strong></span>

                                    </div>


                                </div>

                            </li>









                        </ul>













                    </div>


                    <div class="tab-pane fade" id="filter-week-Sales-by-Countries">



                        <ul class="list-group list-group-flush pt-1 ">


                            <li class="list-group-item">

                                <div class="row">
                                    <div class="col-2  d-flex mx-auto my-auto">
                                        <img src="{{ asset('assets/DashBoard/images/uk.png') }}" alt=""
                                            class="img-fluid mx-auto  rounded-circle">

                                    </div>

                                    <div class="col-7 my-auto">
                                        <div class="darkcolor fontw600 font20">$86,567k</div>
                                        <div>
                                            <small class=""> United state </small>

                                        </div>
                                    </div>

                                    <div class="col-3 mx-auto my-auto">

                                        <span class="successcolor text-center font16">
                                            <span class="iconify font26 successcolor" data-icon="material-symbols:keyboard-arrow-up-rounded" style="margin-right: 0px;margin-top: -3px;" ></span>
                                            
                                            <strong>25.36%</strong></span>

                                    </div>


                                </div>

                            </li>


                            <li class="list-group-item">

                                <div class="row">
                                    <div class="col-2  d-flex mx-auto my-auto">
                                        <img src="{{ asset('assets/DashBoard/images/germany.png') }}" alt=""
                                            class="img-fluid mx-auto  rounded-circle">

                                    </div>

                                    <div class="col-7 my-auto">
                                        <div class="darkcolor fontw600 font20">$88,415k</div>
                                        <div>
                                            <small class=""> Germany </small>

                                        </div>
                                    </div>

                                    <div class="col-3 mx-auto my-auto">

                                        <span class="dangercolor text-center font16">
                                            <span class="iconify font26 dangercolor" data-icon="material-symbols:keyboard-arrow-down-rounded" style="margin-right: 0px;margin-top: -3px;" ></span>
                                            
                                            <strong>5.36%</strong></span>

                                    </div>


                                </div>

                            </li>




                            <li class="list-group-item">

                                <div class="row">
                                    <div class="col-2  d-flex mx-auto my-auto">
                                        <img src="{{ asset('assets/DashBoard/images/italy.png') }}" alt=""
                                            class="img-fluid mx-auto  rounded-circle">

                                    </div>

                                    <div class="col-7 my-auto">
                                        <div class="darkcolor fontw600 font20">$800k</div>
                                        <div>
                                            <small class=""> italy </small>

                                        </div>
                                    </div>

                                    <div class="col-3 mx-auto my-auto">

                                        <span class="successcolor text-center font16">                                          
                                            
                                        <span class="iconify font26 successcolor" data-icon="material-symbols:keyboard-arrow-up-rounded" style="margin-right: 0px;margin-top: -3px;" ></span>

                                            <strong>25.36%</strong></span>

                                    </div>


                                </div>

                            </li>





                            <li class="list-group-item">

                                <div class="row">
                                    <div class="col-2  d-flex mx-auto my-auto">
                                        <img src="{{ asset('assets/DashBoard/images/ar.png') }}" alt=""
                                            class="img-fluid mx-auto  rounded-circle">

                                    </div>

                                    <div class="col-7 my-auto">
                                        <div class="darkcolor fontw600 font20">$50k</div>
                                        <div>
                                            <small class=""> Saudi Arabia </small>

                                        </div>
                                    </div>

                                    <div class="col-3 mx-auto my-auto">

                                        <span class="dangercolor text-center font16">
                                            <span class="iconify font26 dangercolor" data-icon="material-symbols:keyboard-arrow-down-rounded" style="margin-right: 0px;margin-top: -3px;" ></span>
                                            
                                            <strong>8.44%</strong></span>

                                    </div>


                                </div>

                            </li>




                            <li class="list-group-item">

                                <div class="row">
                                    <div class="col-2  d-flex mx-auto my-auto">
                                        <img src="{{ asset('assets/DashBoard/images/spain.png') }}" alt=""
                                            class="img-fluid mx-auto  rounded-circle">

                                    </div>

                                    <div class="col-7 my-auto">
                                        <div class="darkcolor fontw600 font20">$12k</div>
                                        <div>
                                            <small class=""> spain </small>

                                        </div>
                                    </div>

                                    <div class="col-3 mx-auto my-auto">

                                        <span class="successcolor text-center font16">
                                            <span class="iconify font26 successcolor" data-icon="material-symbols:keyboard-arrow-up-rounded" style="margin-right: 0px;margin-top: -3px;" ></span>
                                            
                                            <strong>25.36%</strong></span>

                                    </div>


                                </div>

                            </li>









                        </ul>






                    </div>


                    <div class="tab-pane fade" id="filter-mounth-Sales-by-Countries">




                        <ul class="list-group list-group-flush pt-1 ">


                            <li class="list-group-item">

                                <div class="row">
                                    <div class="col-2  d-flex mx-auto my-auto">
                                        <img src="{{ asset('assets/DashBoard/images/uk.png') }}" alt=""
                                            class="img-fluid mx-auto  rounded-circle">

                                    </div>

                                    <div class="col-7 my-auto">
                                        <div class="darkcolor fontw600 font20">$999,567k</div>
                                        <div>
                                            <small class=""> United state </small>

                                        </div>
                                    </div>

                                    <div class="col-3 mx-auto my-auto">

                                        <span class="successcolor text-center font16">
                                            <span class="iconify font26 successcolor" data-icon="material-symbols:keyboard-arrow-up-rounded" style="margin-right: 0px;margin-top: -3px;" ></span>
                                            
                                            <strong>25.36%</strong></span>

                                    </div>


                                </div>

                            </li>


                            <li class="list-group-item">

                                <div class="row">
                                    <div class="col-2  d-flex mx-auto my-auto">
                                        <img src="{{ asset('assets/DashBoard/images/germany.png') }}" alt=""
                                            class="img-fluid mx-auto  rounded-circle">

                                    </div>

                                    <div class="col-7 my-auto">
                                        <div class="darkcolor fontw600 font20">$99,415k</div>
                                        <div>
                                            <small class=""> Germany </small>

                                        </div>
                                    </div>

                                    <div class="col-3 mx-auto my-auto">

                                        <span class="dangercolor text-center font16">
                                            <span class="iconify font26 dangercolor" data-icon="material-symbols:keyboard-arrow-down-rounded" style="margin-right: 0px;margin-top: -3px;" ></span>
                                            
                                            <strong>5.36%</strong></span>

                                    </div>


                                </div>

                            </li>




                            <li class="list-group-item">

                                <div class="row">
                                    <div class="col-2  d-flex mx-auto my-auto">
                                        <img src="{{ asset('assets/DashBoard/images/italy.png') }}" alt=""
                                            class="img-fluid mx-auto  rounded-circle">

                                    </div>

                                    <div class="col-7 my-auto">
                                        <div class="darkcolor fontw600 font20">$1989k</div>
                                        <div>
                                            <small class=""> italy </small>

                                        </div>
                                    </div>

                                    <div class="col-3 mx-auto my-auto">

                                        <span class="successcolor text-center font16">
                                            <span class="iconify font26 successcolor" data-icon="material-symbols:keyboard-arrow-up-rounded" style="margin-right: 0px;margin-top: -3px;" ></span>
                                            
                                            <strong>25.36%</strong></span>

                                    </div>


                                </div>

                            </li>





                            <li class="list-group-item">

                                <div class="row">
                                    <div class="col-2  d-flex mx-auto my-auto">
                                        <img src="{{ asset('assets/DashBoard/images/ar.png') }}" alt=""
                                            class="img-fluid mx-auto  rounded-circle">

                                    </div>

                                    <div class="col-7 my-auto">
                                        <div class="darkcolor fontw600 font20">$999k</div>
                                        <div>
                                            <small class=""> Saudi Arabia </small>

                                        </div>
                                    </div>

                                    <div class="col-3 mx-auto my-auto">

                                        <span class="dangercolor text-center font16">
                                        
                                            <span class="iconify font26 dangercolor" data-icon="material-symbols:keyboard-arrow-down-rounded" style="margin-right: 0px;margin-top: -3px;" ></span>
                                            
                                            <strong>8.44%</strong></span>

                                    </div>


                                </div>

                            </li>




                            <li class="list-group-item">

                                <div class="row">
                                    <div class="col-2  d-flex mx-auto my-auto">
                                        <img src="{{ asset('assets/DashBoard/images/spain.png') }}" alt=""
                                            class="img-fluid mx-auto  rounded-circle">

                                    </div>

                                    <div class="col-7 my-auto">
                                        <div class="darkcolor fontw600 font20">$400k</div>
                                        <div>
                                            <small class=""> spain </small>

                                        </div>
                                    </div>

                                    <div class="col-3 mx-auto my-auto">

                                        <span class="dangercolor text-center font16">
                                            <span class="iconify font26 dangercolor" data-icon="material-symbols:keyboard-arrow-down-rounded" style="margin-right: 0px;margin-top: -3px;" ></span>

                                            <strong>3.36%</strong></span>

                                    </div>


                                </div>

                            </li>









                        </ul>








                    </div>


                </div>








            </div>




        </div>












        <div class="col-xl-4">
            <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">



                {{-- START OF TITLE AND TABS --}}
                <div class="row">

                    <div class="col-md-4">

                        <h3 class="darkcolor font18 text-capitalize"> Sales Overview </h3>

                    </div>

                    <div class="col-md-8">


                        <ul class="nav  customTabs float-end" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link py-0 active text-capitalize" data-bs-toggle="pill"
                                    data-bs-target="#filter-today-Sales-Overview" type="button" role="tab"
                                    aria-controls="pills-today" aria-selected="true"> Today </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link  py-0 text-capitalize" data-bs-toggle="pill"
                                    data-bs-target="#filter-week-Sales-Overview" type="button" role="tab"
                                    aria-controls="pills-week" aria-selected="false"> Week </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link  py-0 text-capitalize" data-bs-toggle="pill"
                                    data-bs-target="#filter-mounth-Sales-Overview" type="button" role="tab"
                                    aria-controls="pills-mounth" aria-selected="false"> Mounth </a>
                            </li>
                        </ul>


                    </div>

                </div>


                {{-- END OF TITLE AND TABS --}}







                <div class="tab-content" id="pills-tabContent-Sales-Overview">

                    <div class="tab-pane fade show active" id="filter-today-Sales-Overview">


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







                    <div class="tab-pane fade" id="filter-week-Sales-Overview">


                        <canvas id="filter-week-Sales-Overview-canvas"class="Sales-Overview-canvas my-3"></canvas>

                        <div class="row py-2">

                            <div class="col text-center mx-auto">


                                <div class="darkcolor fontw600 font20 ">$75,9k</div>
                                <div>
                                    <small class=""> Revenue </small>

                                </div>


                            </div>


                            <div class="col text-center mx-auto">


                                <div class="darkcolor fontw600 font20 ">123</div>
                                <div>
                                    <small class=""> Sales </small>

                                </div>

                            </div>
                            <div class="col text-center mx-auto">

                                <div class="darkcolor fontw600 font20 ">99</div>
                                <div>
                                    <small class=""> Products </small>

                                </div>


                            </div>
                        </div>

                        <script>
                            const filter_week_Sales_Overview_canvas = document.getElementById('filter-week-Sales-Overview-canvas');


                            filter_week_Sales_Overview_canvas_data = {

                                labels: [
                                    'Revenue',
                                    'Sales',
                                    'Products'
                                ],
                                datasets: [{
                                    label: 'Sales Overview',
                                    data: [70, 10, 20],
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




                            const filter_week_Sales_Overview_canvas_config = {
                                type: 'doughnut',
                                data: filter_week_Sales_Overview_canvas_data,




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

                            new Chart(filter_week_Sales_Overview_canvas, filter_week_Sales_Overview_canvas_config);
                        </script>




                    </div>







                    <div class="tab-pane fade" id="filter-mounth-Sales-Overview">


                        <canvas id="filter-mounth-Sales-Overview-canvas" class="Sales-Overview-canvas my-3"></canvas>

                        <div class="row py-2">

                            <div class="col text-center mx-auto">


                                <div class="darkcolor fontw600 font20 ">$975,9k</div>
                                <div>
                                    <small class=""> Revenue </small>

                                </div>


                            </div>


                            <div class="col text-center mx-auto">


                                <div class="darkcolor fontw600 font20 ">406</div>
                                <div>
                                    <small class=""> Sales </small>

                                </div>

                            </div>
                            <div class="col text-center mx-auto">

                                <div class="darkcolor fontw600 font20 ">242</div>
                                <div>
                                    <small class=""> Products </small>

                                </div>


                            </div>
                        </div>

                        <script>
                            const filter_mounth_Sales_Overview_canvas = document.getElementById('filter-mounth-Sales-Overview-canvas');


                            filter_mounth_Sales_Overview_canvas_data = {

                                labels: [
                                    'Revenue',
                                    'Sales',
                                    'Products'
                                ],
                                datasets: [{
                                    label: 'Sales Overview',
                                    data: [50, 30, 20],
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




                            const filter_mounth_Sales_Overview_canvas_config = {
                                type: 'doughnut',
                                data: filter_mounth_Sales_Overview_canvas_data,




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

                            new Chart(filter_mounth_Sales_Overview_canvas, filter_mounth_Sales_Overview_canvas_config);
                        </script>



                    </div>


                </div>








            </div>




        </div>












    </section>


    {{--  START HERE statistics and Sales Reports section  --}}












    <section class="row pt-2">





        <div class="col-xl-6">
            <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">



                {{-- START OF TITLE AND TABS --}}
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
                                    aria-controls="pills-week" aria-selected="false"> Week </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link  py-0 text-capitalize" data-bs-toggle="pill"
                                    data-bs-target="#filter-mounth-Top-Selling-Products" type="button"
                                    role="tab" aria-controls="pills-mounth" aria-selected="false"> Mounth </a>
                            </li>
                        </ul>


                    </div>

                </div>


                {{-- END OF TITLE AND TABS --}}







                <div class="tab-content" id="pills-tabContent-Top-Selling-Products">





                    <div class="tab-pane fade show active" id="filter-today-Top-Selling-Products">






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







                    <div class="tab-pane fade" id="filter-week-Top-Selling-Products">




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






                    <div class="tab-pane fade" id="filter-mounth-Top-Selling-Products">



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














        <div class="col-xl-6">
            <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">



                {{-- START OF TITLE AND TABS --}}
                <div class="row">

                    <div class="col-md-4">

                        <h3 class="darkcolor font18 text-capitalize"> Best Seller </h3>

                    </div>

                    <div class="col-md-8">


                        <ul class="nav  customTabs float-end" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link py-0 active text-capitalize" data-bs-toggle="pill"
                                    data-bs-target="#filter-today-Best-Seller" type="button" role="tab"
                                    aria-controls="pills-today" aria-selected="true"> Today </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link  py-0 text-capitalize" data-bs-toggle="pill"
                                    data-bs-target="#filter-week-Best-Seller" type="button" role="tab"
                                    aria-controls="pills-week" aria-selected="false"> Week </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link  py-0 text-capitalize" data-bs-toggle="pill"
                                    data-bs-target="#filter-mounth-Best-Seller" type="button" role="tab"
                                    aria-controls="pills-mounth" aria-selected="false"> Mounth </a>
                            </li>
                        </ul>


                    </div>

                </div>


                {{-- END OF TITLE AND TABS --}}







                <div class="tab-content" id="pills-tabContent-Best-Seller">

                    <div class="tab-pane fade show active" id="filter-today-Best-Seller">







                        <div class="table-responsive pt-2">
                            <table class="table CustomTable m-0">



                                <thead>
                                    <tr>
                                        <th class="text-capitalize">Seller name</th>
                                        <th class="text-end text-capitalize">Product</th>
                                        <th class="text-end text-capitalize">Revenue</th>
                                        <th class="text-end text-capitalize">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="{{ asset('assets/DashBoard/usersavatar/avatar.jpg') }}" alt="">
                                            <b class="graycolor mx-2">Robert Clinton</b>
                                        </td>
                                        <td class="text-end">Smart Phone</td>
                                        <td class="text-end"> $38,536 </td>
                                        <td class="text-end">Done</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="{{ asset('assets/DashBoard/usersavatar/avatar.jpg') }}" alt="">
                                            <b class="graycolor mx-2">Robert Clinton</b>
                                        </td>
                                        <td class="text-end">Smart Phone</td>
                                        <td class="text-end"> $38,536 </td>
                                        <td class="text-end">Done</td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="{{ asset('assets/DashBoard/usersavatar/avatar.jpg') }}" alt="">
                                            <b class="graycolor mx-2">john doe</b>
                                        </td>
                                        <td class="text-end">Smart Phone</td>
                                        <td class="text-end"> $38,536 </td>
                                        <td class="text-end">Done</td>
                                    </tr>



                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="{{ asset('assets/DashBoard/usersavatar/avatar.jpg') }}" alt="">
                                            <b class="graycolor mx-2">Robert Clinton</b>
                                        </td>
                                        <td class="text-end">laptop</td>
                                        <td class="text-end"> $38,536 </td>
                                        <td class="text-end">Pending</td>
                                    </tr>



                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="{{ asset('assets/DashBoard/usersavatar/avatar.jpg') }}" alt="">
                                            <b class="graycolor mx-2">Robert Clinton</b>
                                        </td>
                                        <td class="text-end">Watch</td>
                                        <td class="text-end"> $38,536 </td>
                                        <td class="text-end">Done</td>
                                    </tr>



                                </tbody>



                            </table>
                        </div>













                    </div>


                    <div class="tab-pane fade" id="filter-week-Best-Seller">



                        <div class="table-responsive pt-2">
                            <table class="table CustomTable m-0">



                                <thead>
                                    <tr>
                                        <th class="text-capitalize">Seller name</th>
                                        <th class="text-end text-capitalize">Product</th>
                                        <th class="text-end text-capitalize">Revenue</th>
                                        <th class="text-end text-capitalize">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="{{ asset('assets/DashBoard/usersavatar/avatar.jpg') }}" alt="">
                                            <b class="graycolor mx-2">Robert Clinton</b>
                                        </td>
                                        <td class="text-end">Smart Phone</td>
                                        <td class="text-end"> $538,536 </td>
                                        <td class="text-end">Done</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="{{ asset('assets/DashBoard/usersavatar/avatar.jpg') }}" alt="">
                                            <b class="graycolor mx-2">Robert Clinton</b>
                                        </td>
                                        <td class="text-end">Smart Phone</td>
                                        <td class="text-end"> $384,536 </td>
                                        <td class="text-end">Done</td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="{{ asset('assets/DashBoard/usersavatar/avatar.jpg') }}" alt="">
                                            <b class="graycolor mx-2">john doe</b>
                                        </td>
                                        <td class="text-end">Smart Phone</td>
                                        <td class="text-end"> $383,536 </td>
                                        <td class="text-end">Done</td>
                                    </tr>



                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="{{ asset('assets/DashBoard/usersavatar/avatar.jpg') }}" alt="">
                                            <b class="graycolor mx-2">Robert Clinton</b>
                                        </td>
                                        <td class="text-end">laptop</td>
                                        <td class="text-end"> $384,536 </td>
                                        <td class="text-end">Pending</td>
                                    </tr>



                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="{{ asset('assets/DashBoard/usersavatar/avatar.jpg') }}" alt="">
                                            <b class="graycolor mx-2">Robert Clinton</b>
                                        </td>
                                        <td class="text-end">Watch</td>
                                        <td class="text-end"> $328,536 </td>
                                        <td class="text-end">Done</td>
                                    </tr>



                                </tbody>



                            </table>
                        </div>







                    </div>


                    <div class="tab-pane fade" id="filter-mounth-Best-Seller">



                        <div class="table-responsive pt-2">
                            <table class="table CustomTable m-0">



                                <thead>
                                    <tr>
                                        <th class="text-capitalize">Seller name</th>
                                        <th class="text-end text-capitalize">Product</th>
                                        <th class="text-end text-capitalize">Revenue</th>
                                        <th class="text-end text-capitalize">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="{{ asset('assets/DashBoard/usersavatar/avatar.jpg') }}" alt="">
                                            <b class="graycolor mx-2">Robert Clinton</b>
                                        </td>
                                        <td class="text-end">Smart Phone</td>
                                        <td class="text-end"> $4438,536 </td>
                                        <td class="text-end">Done</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="{{ asset('assets/DashBoard/usersavatar/avatar.jpg') }}" alt="">
                                            <b class="graycolor mx-2">Robert Clinton</b>
                                        </td>
                                        <td class="text-end">Smart Phone</td>
                                        <td class="text-end"> $4438,536 </td>
                                        <td class="text-end">Done</td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="{{ asset('assets/DashBoard/usersavatar/avatar.jpg') }}" alt="">
                                            <b class="graycolor mx-2">john doe</b>
                                        </td>
                                        <td class="text-end">Smart Phone</td>
                                        <td class="text-end"> $3668,536 </td>
                                        <td class="text-end">Done</td>
                                    </tr>



                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="{{ asset('assets/DashBoard/usersavatar/avatar.jpg') }}" alt="">
                                            <b class="graycolor mx-2">Robert Clinton</b>
                                        </td>
                                        <td class="text-end">laptop</td>
                                        <td class="text-end"> $3800,536 </td>
                                        <td class="text-end">Pending</td>
                                    </tr>



                                    <tr>
                                        <td>
                                            <img class="image-fluid  mx-auto rounded"
                                                src="{{ asset('assets/DashBoard/usersavatar/avatar.jpg') }}" alt="">
                                            <b class="graycolor mx-2">Robert Clinton</b>
                                        </td>
                                        <td class="text-end">Watch</td>
                                        <td class="text-end"> $3800,536 </td>
                                        <td class="text-end">Done</td>
                                    </tr>



                                </tbody>



                            </table>
                        </div>




                    </div>


                </div>








            </div>




        </div>



    </section>







</section>


















































































@include('dashboard.inc.DashBoardFooter')
