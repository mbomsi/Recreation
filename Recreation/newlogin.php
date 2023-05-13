

<style>
    body{
        background-image: url("Online-Pharmacy-Service.png");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="newlogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Bungee+Spice?coloronly=true">
    <link rel="stylesheet" href="chart.css">
    <title>A NEW PHARMACY</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Customers', 'Returning Customers'],
                ['2020',  1000,      400],
                ['2021',  1170,      460],
                ['2022',  660,       1120],
                ['2023',  1030,      540]
            ]);

            var options = {
                title: 'Pharmacy Performance',
                curveType: 'function',
                legend: { position: 'bottom' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    </script>

</head>
<body>
<div class="bc-image"></div>
    <div class="filter">
<div class="menubar">
<ul>
<!--    <Li class="active"><a href="#"><i class="fa-solid fa-users"></i>CLIENT</a>-->
    <div class="submenu">
<!--    <ul>-->
<!--        <li><a href="signup.html "><i class="fa-solid fa-arrow-right fa-fade"></i>Sign up</a>-->
<!--        </li>-->
<!--        <li> <a href="#" ><i class="fa-solid fa-prescription-bottle-medical fa-bounce"></i>Drugs Stock</a></li>-->
<!--        <li> <a href="" ><i class="fa-sharp fa-solid fa-calendar-check fa-bounce"></i>Book Appointment</a></li>-->
<!--    </ul>-->

    </div>


    </Li>
    <Li ><a href="#"><i class="fa-solid fa-user-doctor"></i>DOCTORS</a>
    <div class="submenu1">
        <ul>
            <li><a href="index.php"><i class="fa-solid fa-prescription-bottle-medical fa-bounce"></i>Drug Storage</a></li>
            <li><a href="index1.php"><i class="fa-sharp fa-solid fa-user-plus fa-shake"></i>Add Pharmacists</a></li>

        </ul>
    </div>
    </Li>
    <Li ><a href="#"><i class="fa-solid fa-user-nurse"></i>PHARMACIST</a>
    <div class="submenu2">
        <ul>
            <li><a href="data.php"><i class="fa-solid fa-hospital-user"></i>Patients Record</a></li>
            <li><a href="#"> <i class="fa-regular fa-calendar-days fa-flip"></i>Schedule</a></li>
            <li><a href="DrugS.html"><i class="fa-solid fa-prescription-bottle-medical fa-bounce"></i>Drug Storage</a></li>
            <li><a href="#"></a></li>
        </ul>
    </div>
    </Li>
    <li ><a href="#"><i class="fa-sharp fa-solid fa-address-card"></i>About Us</a>
    <div class="submenu3">
        <ul>
            <Li><a href="#"><i class="fa-sharp fa-solid fa-location-dot"></i>Location</a></Li>
            <li><a href="#"><i class="fa-solid fa-id-card"></i>Contacts & Working Hours</a></li>
        </ul>
    </div>
    </li>



</ul>
</div>
</div><br>
<!--<button type="button" onclick="document.getElementById('demo').innerHTML=Date()">-->
<!--    Click me for the Date-->
<!--</button>-->
<!--<p id="demo"></p>-->

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<h2 style="background-color: teal;border-radius: 50px;color: darkseagreen"> <ion-icon name="logo-web-component size=large"></ion-icon>Pharmacy Dashboard</h2><strong></strong>
    <div class="container">
        <div class="box">
            <div class="boxes">
                <div class="tap">
                <ion-icon name="sync-outline" size="large" color:green></ion-icon><br><br>
                </div>
             <h2 style="color: black; text-align: center; ">Out of Stock</h2><br>
                <h5 style="text-align: center;color: tomato">05</h5>
            </div>
        </div>
        <div class="box">
            <div class="boxes">
                <div class="tap">
                <ion-icon name="list-outline" size="large" color:red></ion-icon><br><br>
                </div>
                <p><h2 style="color: black; text-align: center; ">Medicine List</h2></p><br>
                                <h4  style="text-align: center;color: tomato">00</h4>

            </div>
        </div>
        <div class="box">
            <div class="boxes">
                <div class="tap">
                <ion-icon name="bag-add-outline" size="large" color:red></ion-icon><br><br>
                </div>
                <h2 style="color: black; text-align: center; ">Expired Drugs</h2><br>
                            <h4  style="text-align: center;color: tomato">00</h4>

            </div>
        </div>
        <div class="box">
        <div class="boxes">
            <div class="tap">
            <ion-icon name="people-circle-outline" size="large" color:red></ion-icon><br><br>
            </div>
            <h2 style="color: black; text-align: center; ">Total Customers</h2><br>
                           <h4  style="text-align: center;color: tomato">1212</h4>
        </div>
      </div>
        <div class="box">
        <div class="boxes">
            <div class="tap">
            <ion-icon name="logo-python" size="large" color="red"></ion-icon><br><br>
            </div>
            <h2 style="color: black; text-align: center; ">Total Manufacturers</h2><br>
                         <h4  style="text-align: center;color: tomato">4500</h4>
        </div>
        </div>
        <div class="box">
            <div class="boxes">
                <div class="tap">
                <ion-icon name="stats-chart-outline" size="large" color:red></ion-icon><br><br>
                </div>
                <h2 style="color: black; text-align: center; ">Today's Sale</h2><br>
                        <h4  style="text-align: center;color: skyblue">85%</h4>

            </div>
        </div>

    </div>

<div class="grid">
   <div class="first">
       <h2><b>REPORTS FOR MONTH OF 20/03/2023--27/04/2023</b></h2>
       <h3> Delivered on :19/03/2023</h3>
       <table>
          <caption> Monthly Statistics</caption>

           <tr>
               <th>FACTOR</th>
               <th>RECORD</th>
           </tr>
           <tr>
               <td> Growing Rate</td>
               <td>27.9%</td>
           </tr>
           <tr>
               <td> Monthly sales</td>
               <td>45%</td>
           </tr>
           <tr>
               <td> Monthly Profits</td>
               <td>35%</td>
           </tr>
           <tr>
               <td>Monthly Expenditures</td>
               <td>15%</td>
           </tr>
           <tr>
               <td> Least Bought Drug</td>
               <td>Aqualine</td>
           </tr>
           <tr>
               <td> Expired Drugs</td>
               <td>70</td>
           </tr>
       </table>
   </div>
    <div class="second">
        <div id="curve_chart" style="width: 700px; height: 400px;margin-top: 10%;color: rosybrown"></div>
    </div>
</div>


</body>
</html>