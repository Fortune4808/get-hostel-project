<?php include '../../config/config.php'; ?>
<!doctype html>
<html>
<head>
  <?php include 'meta.php';?>
  <title><?php echo $website_name;?> Admininstrative Login</title>
</head>
<body>
  <main class="">
  <?php include 'alert.php';?>
  	<div class="overlay-div"></div>

	  <?php include 'header.php';?>
    <?php include 'side-nav.php';?>
    
    <div class="absolute w-[calc(100%-110px)] h-[calc(100%-60px)] right-0 top-[60px]">
      <div class="w-[70%] h-[100%] float-left">
        <div class="w-[100%] min-h-[120px] bg-[#F8F8F7] flex justify-between py-[15px] px-[25px] border-b border-solid border-[#CECDCD]">
          <div class="w-[65%] flex items-center">
            <div class="w-[70px] h-[70px]">
              <img id="profile_url" class="w-[100%] h-[100%] object-cover rounded-[5px]" alt="profile_pix" title="Profile Pix" style="width: 70px; height: 70px; object-position: top;" />
            </div>

            <div class="flex flex-col px-[20px]">
              <p class="text-[#424141] text-lg"><i class="bi-speedometer2"></i> <span id="staff_role"></span> DASHBOARD</p>
              <p class="text-[#FF8A33] text-lg font-bold" id="staff_fullname">XXXX</p>
              <p class="text-[#424141] text-[10px]">Last Login Date: <strong id="last_login">xxxx</strong></p>
            </div>
            
            <script> _get_staff_login(staff_id);</script>
          </div>

          <div class="w-[35%] flex items-center border-l border-dashed border-[#CECDCD]">
            <div class="px-[20px] text-[12px] text-[#424141]">
                <div>Current Time</div>
                <div><strong id="digitalclock" class="text-3xl text-[#be1d1d]">00:00</strong></div>
                <?php echo date("l, d F Y");?>
              </div>
          </div>
        </div>
        
        <div class="w-[100%] min-h-[400px] mb-[30px]">
          <div id="main-div">  
              <?php             
                $page='dashboard';
                include 'config/content-page.php';
              ?>
            </div>
        </div>
      </div>

      <div class="w-[28%] h-[100%] bg-[#CECDCD] bg-opacity-80 float-right fixed right-0">
        <div class="w-[85%] m-auto py-[20px] flex flex-col gap-[15px]">
          <div class="w-[100%] h-[260px] bg-white rounded-[5px]">
            <div class="w-[90%] m-auto py-[15px]">
              <p class="text-[16px] text-[#424141]">Order Matrix</p>
              <div class="border-b border-solid border-[#CECDCD] mt-[5px]"></div>
              <div id="chartContainer" style="height: 200px; width: 100%;"></div>
            </div>
          </div>

          <div class="w-[100%] h-[260px] bg-white rounded-[5px]">
            <div class="w-[90%] m-auto py-[15px]">
              <p class="text-[16px] text-[#424141]">Payment Matrix</p>
              <div class="border-b border-solid border-[#CECDCD] mt-[5px]"></div>
              <div id="chartContainer1" style="height: 200px; width: 100%;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php include 'bottom-script.php';?>

  <script>
   document.addEventListener("DOMContentLoaded", function() {
    var chart = new CanvasJS.Chart("chartContainer", {
        exportEnabled: false,
        animationEnabled: true,
        title: {
            text: ""
        },
        legend: {
            cursor: "pointer",
            itemclick: explodePie
        },
        data: [{
            type: "pie",
            showInLegend: true,
            toolTipContent: "{name}: <strong>{y}%</strong>",
            indexLabel: "{name} - {y}%",
            dataPoints: [
                { y: 26, name: "School Aid", exploded: true },
                { y: 20, name: "Medical Aid" },
                { y: 5, name: "Debt/Capital" }
            ]
        }]
    });
    chart.render();

    function explodePie(e) {
        const dataPoint = e.dataSeries.dataPoints[e.dataPointIndex];
        dataPoint.exploded = typeof dataPoint.exploded === "undefined" || !dataPoint.exploded;
        e.chart.render();
    }
});

  </script>



<script>
   document.addEventListener("DOMContentLoaded", function() {
    var chart = new CanvasJS.Chart("chartContainer1", {
        exportEnabled: false,
        animationEnabled: true,
        title: {
            text: ""
        },
        legend: {
            cursor: "pointer",
            itemclick: explodePie
        },
        data: [{
            type: "pie",
            showInLegend: true,
            toolTipContent: "{name}: <strong>{y}%</strong>",
            indexLabel: "{name} - {y}%",
            dataPoints: [
                { y: 26, name: "School Aid", exploded: true },
                { y: 20, name: "Medical Aid" },
                { y: 5, name: "Debt/Capital" }
            ]
        }]
    });
    chart.render();

    function explodePie(e) {
        const dataPoint = e.dataSeries.dataPoints[e.dataPointIndex];
        dataPoint.exploded = typeof dataPoint.exploded === "undefined" || !dataPoint.exploded;
        e.chart.render();
    }
});

</script>


<script>
function renderChart() {
            var options = {
                animationEnabled: true,
                backgroundColor: "transparent",
                title: {
                    text: "Monthly Sales - 2017"
                },
                axisX: {
                    valueFormatString: "MMM"
                },
                axisY: {
                    title: "Sales (in USD)",
                    prefix: "$"
                },
                data: [{
                    yValueFormatString: "$#,###",
                    xValueFormatString: "MMMM",
                    type: "spline",
                    dataPoints: [
                        { x: new Date(2017, 0), y: 25060 },
                        { x: new Date(2017, 1), y: 27980 },
                        { x: new Date(2017, 2), y: 33800 },
                        { x: new Date(2017, 3), y: 49400 },
                        { x: new Date(2017, 4), y: 40260 },
                        { x: new Date(2017, 5), y: 33900 },
                        { x: new Date(2017, 6), y: 48000 },
                        { x: new Date(2017, 7), y: 31500 },
                        { x: new Date(2017, 8), y: 32300 },
                        { x: new Date(2017, 9), y: 42000 },
                        { x: new Date(2017, 10), y: 52160 },
                        { x: new Date(2017, 11), y: 49400 }
                    ]
                }]
            };

            var chart = new CanvasJS.Chart("chartContainer2", options);
            chart.render();
        }

        document.addEventListener("DOMContentLoaded", function() {
            renderChart();
        });


</script>


</body>
</html>