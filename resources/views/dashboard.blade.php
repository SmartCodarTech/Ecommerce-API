<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FarmConnect</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link href="{{ asset("bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
   <link href="{{ asset("bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
   <link href="{{ asset("bower_components/AdminLTE/plugins/morris/morris.css")}}" rel="stylesheet" type="text/css" />

  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
   <link href="{{ asset("bower_components/AdminLTE/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />
   <link href="{{ asset("bower_components/AdminLTE/dist/css/skins/_all-skins.min.css")}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset("bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.cs")}}" rel="stylesheet" type="text/css" />
   <link href="{{ asset("bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css")}}" rel="stylesheet" type="text/css" />

  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->

 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  @include('layouts.header')
  <!-- Sidebar -->
  @include('layouts.sidebar')
  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Job Hub
        <small> Dashboard</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    @if ($message = Session::get('success'))

    <div class="alert alert-success alert-block">

    <button type="button" class="close" data-dismiss="alert">×</button> 

        <strong>{{ $message }}</strong>

   </div>

@endif

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{DB::table('users')->count()}}</h3>

              <p>Users</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="{{ route('user-management.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>{{DB::table('farmer')->count()}}</h3>

              <p>Employers</p>
            </div>
            <div class="icon">
              <i class="fa fa-institution"></i>
            </div>
            <a href="{{ url('system-management/empolyers') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{DB::table('customer')->count()}}</h3>

              <p>Countries</p>
            </div>
            <div class="icon">
              <i class="fa fa-flag"></i>
            </div>
            <a href="{{ url('system-management/country') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{DB::table('product')->count()}}</h3>

              <p>Courses</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="{{ url('system-management/course') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


           <div class="col-lg-3 col-xs-6">
             <div class="small-box bg-blue">
            <div class="inner">
              <h3>{{DB::table('admin')->count()}}</h3>

              <p>Schools</p>
            </div>
            <div class="icon">
              <i class="fa fa-institution"></i>
            </div>
            <a href="{{ url('system-management/schools') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{DB::table('category')->count()}}</h3>

              <p>Category of Courses</p>
            </div>
            <div class="icon">
              <i class="fa fa-list"></i>
            </div>
            <a href="{{ url('system-management/penalty') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{DB::table('payment')->count()}}</h3>

              <p>Graduates </p>
            </div>
            <div class="icon">
              <i class="fa fa-graduation-cap"></i>
            </div>
            <a href="{{ url('system-management/bank') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{DB::table('users')->count()}}</h3>

              <p>Vacancy&Jobs</p>
            </div>
            <div class="icon">
              <i class="fa fa-laptop"></i>
            </div>
            <a href="{{ url('system-management/bank') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
</div>




       
        <div class="app">

<center>



</center>

</div>

        <div class="row">
        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h2 class="box-title"><b>Graduates Statistics</b></h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p><h4>Employeed</h4></p>

              <div class="progress active">
                <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                  <span class="sr-only">40% Complete (success)</span>
                </div>
              </div>
               <p><h4>Unemployeed</h4></p>
              <div class="progress active">
                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                  <span class="sr-only">40% Complete (success)</span>
                </div>
              </div>
               <p><h4>Fresh Graduates</h4></p>
              <div class="progress active">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                  <span class="sr-only">40% Complete (success)</span>
                </div>
              </div>
            </div>
          </div>
        </div>
            
            <!-- /.box-body -->
          
          
          <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h2 class="box-title"><b>Organization Statistics</b></h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p><h4>Government Sectors Employeers</h4></p>

              <div class="progress active">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                  <span class="sr-only">40% Complete (success)</span>
                </div>
              </div>
               <p><h4>Private Sector Employeers</b></h4></p>
              <div class="progress active">
                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                  <span class="sr-only">40% Complete (success)</span>
                </div>
              </div>
               
            </div>
          </div>
        </div>
  
            
            <!-- /.box-body -->
          
          <!-- /.box -->
       
      </div>
        

        <!-- /.col -->
    

 
  </div>
</div>
 
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
     <!-- ./wrapper -->

 <!-- Footer -->

  @include('layouts.footer')
  
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

 <!-- jQuery 2.1.3 -->
<script src="{{ asset ("bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>

<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>

<!-- AdminLTE App -->
<script src="{{ asset ("bower_components/AdminLTE/dist/js/app.min.js")}}" type="text/javascript"></script>


<script src="{{ asset ("bower_components/AdminLTE/plugins/chartjs/Chart.min.js")}}" type="text/javascript"></script>
 <script src="{{ asset ("bower_components/AdminLTE/plugins/chartjs/Chart.js")}}" type="text/javascript"></script>

<!-- Bootstrap 3.3.6 -->

<!-- ChartJS 1.0.1 -->

<!-- FastClick -->
 <script src="{{ asset ("bower_components/AdminLTE/plugins/morris/morris.js")}}" type="text/javascript"></script>
 <script src="{{ asset ("bower_components/AdminLTE/plugins/morris/morris.min.js")}}" type="text/javascript"></script>
 <script src="{{ asset ("bower_components/AdminLTE/plugins/fastclick/fastclick.js")}}" type="text/javascript"></script>
<!-- AdminLTE App -->
 <script src="{{ asset ("bower_components/AdminLTE/dist/js/app.js")}}" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
 <script src="{{ asset ("bower_components/AdminLTE/dist/js/demo.js")}}" type="text/javascript"></script>
 <script src="{{ asset ("bower_components/AdminLTE/dist/js/pages/dashboard.js")}}" type="text/javascript"></script>
  <script src="{{ asset ("bower_components/AdminLTE/dist/js/pages/dashboard2.js")}}" type="text/javascript"></script>
  <script src="{{ asset ("bower_components/AdminLTE/plugins/flot/jquery.flot.min.js")}}" type="text/javascript"></script><!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
 <script src="{{ asset ("bower_components/AdminLTE/plugins/flot/jquery.flot.resize.min.js")}}" type="text/javascript"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
 <script src="{{ asset ("bower_components/AdminLTE/plugins/flot/jquery.flot.pie.min.js")}}" type="text/javascript"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
 <script src="{{ asset ("bower_components/AdminLTE/plugins/flot/jquery.flot.categories.min.js")}}" type="text/javascript"></script>
  <script src="{{ asset ("bower_components/AdminLTE/plugins/flot/excanvas.min.js")}}" type="text/javascript"></script>
   <script src="{{ asset ("bower_components/AdminLTE/plugins/flot/excanvas.js")}}" type="text/javascript"></script>


<!--script src="{{ asset ("/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js") }}"type="text/javascript"></script>
<!-- Bootstrap 3.3.6 -->
<script>
  $(function () {
    /*
     * Flot Interactive Chart
     * -----------------------
     */
    // We use an inline data source in the example, usually data would
    // be fetched from a server
    var data = [], totalPoints = 100;

    function getRandomData() {

      if (data.length > 0)
        data = data.slice(1);

      // Do a random walk
      while (data.length < totalPoints) {

        var prev = data.length > 0 ? data[data.length - 1] : 50,
            y = prev + Math.random() * 10 - 5;

        if (y < 0) {
          y = 0;
        } else if (y > 100) {
          y = 100;
        }

        data.push(y);
      }

      // Zip the generated y values with the x values
      var res = [];
      for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]]);
      }

      return res;
    }

    var interactive_plot = $.plot("#interactive", [getRandomData()], {
      grid: {
        borderColor: "#f3f3f3",
        borderWidth: 1,
        tickColor: "#f3f3f3"
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color: "#3c8dbc"
      },
      lines: {
        fill: true, //Converts the line chart to area chart
        color: "#3c8dbc"
      },
      yaxis: {
        min: 0,
        max: 100,
        show: true
      },
      xaxis: {
        show: true
      }
    });

    var updateInterval = 500; //Fetch data ever x milliseconds
    var realtime = "on"; //If == to on then fetch data every x seconds. else stop fetching
    function update() {

      interactive_plot.setData([getRandomData()]);

      // Since the axes don't change, we don't need to call plot.setupGrid()
      interactive_plot.draw();
      if (realtime === "on")
        setTimeout(update, updateInterval);
    }

    //INITIALIZE REALTIME DATA FETCHING
    if (realtime === "on") {
      update();
    }
    //REALTIME TOGGLE
    $("#realtime .btn").click(function () {
      if ($(this).data("toggle") === "on") {
        realtime = "on";
      }
      else {
        realtime = "off";
      }
      update();
    });
    /*
     * END INTERACTIVE CHART
     */


    /*
     * LINE CHART
     * ----------
     */
    //LINE randomly generated data

    var sin = [], cos = [];
    for (var i = 0; i < 14; i += 0.5) {
      sin.push([i, Math.sin(i)]);
      cos.push([i, Math.cos(i)]);
    }
    var line_data1 = {
      data: sin,
      color: "#3c8dbc"
    };
    var line_data2 = {
      data: cos,
      color: "#00c0ef"
    };
    $.plot("#line-chart", [line_data1, line_data2], {
      grid: {
        hoverable: true,
        borderColor: "#f3f3f3",
        borderWidth: 1,
        tickColor: "#f3f3f3"
      },
      series: {
        shadowSize: 0,
        lines: {
          show: true
        },
        points: {
          show: true
        }
      },
      lines: {
        fill: false,
        color: ["#3c8dbc", "#f56954"]
      },
      yaxis: {
        show: true,
      },
      xaxis: {
        show: true
      }
    });
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
      position: "absolute",
      display: "none",
      opacity: 0.8
    }).appendTo("body");
    $("#line-chart").bind("plothover", function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2);

        $("#line-chart-tooltip").html(item.series.label + " of " + x + " = " + y)
            .css({top: item.pageY + 5, left: item.pageX + 5})
            .fadeIn(200);
      } else {
        $("#line-chart-tooltip").hide();
      }

    });
    /* END LINE CHART */

    /*
     * FULL WIDTH STATIC AREA CHART
     * -----------------
     */
    var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
      [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
      [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]];
    $.plot("#area-chart", [areaData], {
      grid: {
        borderWidth: 0
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color: "#00c0ef"
      },
      lines: {
        fill: true //Converts the line chart to area chart
      },
      yaxis: {
        show: false
      },
      xaxis: {
        show: false
      }
    });

    /* END AREA CHART */

    /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data: [["January", 10], ["February", 8], ["March", 4], ["April", 13], ["May", 17], ["June", 9]],
      color: "#3c8dbc"
    };
    $.plot("#bar-chart", [bar_data], {
      grid: {
        borderWidth: 1,
        borderColor: "#f3f3f3",
        tickColor: "#f3f3f3"
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: "center"
        }
      },
      xaxis: {
        mode: "categories",
        tickLength: 0
      }
    });
    /* END BAR CHART */

    /*
     * DONUT CHART
     * -----------
     */

    var donutData = [
      {label: "Series2", data: 30, color: "#3c8dbc"},
      {label: "Series3", data: 20, color: "#0073b7"},
      {label: "Series4", data: 50, color: "#00c0ef"}
    ];
    $.plot("#donut-chart", donutData, {
      series: {
        pie: {
          show: true,
          radius: 1,
          innerRadius: 0.5,
          label: {
            show: true,
            radius: 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    });
    /*
     * END DONUT CHART
     */

  });

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
        + label
        + "<br>"
        + Math.round(series.percent) + "%</div>";
  }
</script>



<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>

