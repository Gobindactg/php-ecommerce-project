<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/tabulation.css">
</head>
<body>
    <div class="container">
      <table class="table table-sm head">
        <thead>
          <tr >
              <th scope="col" >
                <div class="col-sm-12">
                    <label for="inputEmail3" style="font-size: 15px; font-family: tahoma; font-weight: 600;" >Class</label>
                      <select  name="" id="">
                          <option value="">Select Class</option>
                          <option value="male">One</option>
                          <option value="female">Two</option>
                          <option value="female">Three</option>
                          <option value="female">Four</option>
                          <option value="female">Five</option>
                      </select>
                  </div>
            </th>
           
            <th scope="col">
                <div class="col-sm-12">
                    <label for="inputEmail3" style="font-size: 15px; font-family: tahoma; font-weight: 600; padding-left: 7%;" >Group</label>
                      <select  name="" id="">
                          <option value="">Select Class</option>
                          <option value="male">Science</option>
                          <option value="female">Commerce</option>
                          <option value="female">Arts</option>
                          
                      </select>
                  </div>
            </th>
            <th scope="col">
                <div class="col-sm-12">
                    <label for="inputEmail3" style="font-size: 15px; font-family: tahoma; font-weight: 600; padding-left: 7%;" >Section</label>
                      <select name="" id="">
                          <option value="">Select Class</option>
                          <option value="male">A</option>
                          <option value="female">B</option>
                          <option value="female">C</option>
                          
                      </select>
                  </div>
            </th>
            <th scope="col">
                <div class="col-sm-12">
                    <label for="inputEmail3" style="font-family: tahoma; font-weight: 600;" >Year</label>
                      <select  name="" id="">
                          <option value="">2021</option>
                          <option value="male">2020</option>
                          <option value="female">2019</option>
                          
                      </select>
                  </div>
            </th>
           
            <th scope="col">
                <div class="col-sm-12">
                    <label for="inputEmail3" style="font-size: 15px; font-family: tahoma; font-weight: 600;" >Exam Name</label>
                      <select  name="" id="">
                          <option value="">Select </option>
                          <option value="male">First Terminal</option>
                          <option value="female">Second Terminal</option>
                          <option value="female">Final Exam</option>
                          
                      </select>
                  </div>
            </th>
          </tr>
        </thead>
    </table>
    <form action="" target="_blank">
    <!--<button onclick="window.print()">Print</button>-->
    <a href="tabulation_print.php" target="_blank">Print Tabulation</a>
    </form>
    <?php
            $connection = mysqli_connect('localhost','root','','user_info');

            if(!$connection){
                die("Not connected". mysqli_error()); 
            }
       
               $query = "SELECT * FROM mark_table";
               $result = mysqli_query($connection,$query);
               $count = mysqli_num_rows($result);
               while ($row = mysqli_fetch_assoc($result)){
               ?>

       <div class="heading">
            <h2 style="padding-top: 10px;">Shahebdinogor Govt. Primary School</h2>
            <h4> Aburhat, Jorargong, Mirsarai, Chattogram.</h4>
            <h2 style="padding:25px 0px">First Terminal Examination</h2>
            <h1 style="padding: 40px 0px;"><u>Progress Report</u></h1>
            
        </div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col" style="width: 33.33%; font-weight: 900; font-family: tahoma ; font-style: italic;">Student Name : Mita Rani Das</th>
              <th scope="col" style="width: 33.33%; font-weight: 900; font-family: tahoma ; font-style: italic;">Class : Five</th>
              <th scope="col" style="width: 33.33%; font-weight: 900; font-family: tahoma ; font-style: italic;">Roll : 10 </th>
            </tr>
          </thead>
        </table>
        <div style="margin-top: 35px;">
        <table class="table table-sm">
            <thead>
              <tr class="table-info" >
                <th scope="col" class="headding-table">Subject Name</th>
                <th scope="col">Total Mark</th>
                <th scope="col">Highest Mark</th>
                <th scope="col">Obtain Mark</th>
                <th scope="col">Grade</th>
                <th scope="col">GPA</th>
                
              </tr>
            </thead>
     

            <tbody class="table-data">
              <tr>
                <th scope="row" class="headding-table" style="width: 25%;">Bangla</th>
                <td>100</td>
                <td>99</td>
                <td><?php echo $row['bangla_mark']?></td>
                <td>A+</td>
                <td>5.00</td>
              </tr>
              <tr>
                <th scope="row" class="headding-table">English</th>
                <td>100</td>
                <td>98</td>
                <td><?php echo $row['english_mark']?></td>
                <td>A+</td>
                <td>5.00</td>
              </tr>
              <tr>
                <th scope="row" class="headding-table">Math</th>
                <td>100</td>
                <td>98</td>
                <td><?php echo $row['math_mark']?></td>
                <td>A+</td>
                <td>5.00</td>
              </tr>
              <tr>
                <th scope="row" class="headding-table">Science</th>
                <td>100</td>
                <td>98</td>
                <td><?php echo $row['science_mark']?></td>
                <td>A+</td>
                <td>5.00</td>
              </tr>
              <tr>
                <th scope="row" class="headding-table">Bangladesh and Global Study </th>
                <td>100</td>
                <td>98</td>
                <td><?php echo $row['bob_mark']?></td>
                <td>A+</td>
                <td>5.00</td>
              </tr>
              <tr>
                <th scope="row" class="headding-table">Religion <hr></th>
                <td>100 <hr></td>
                <td>98 <hr></td>
                <td><?php echo $row['religion_mark']?><hr></td>
                <td>A+ <hr></td>
                <td>5.00 <hr></td>
              </tr>
            </tbody>
          </table>
         
          </div>
          <div style="padding-top: 35px;">
          <table class="table table-bordered">
            <thead>
              <tr class="table-info">
                <th scope="col" style="width: 25%; font-weight: 900; font-family: tahoma ; font-style: italic; text-align: center;">Obtain Total Mark : 588</th>
                <th scope="col" style="width: 25%; font-weight: 900; font-family: tahoma ; font-style: italic; text-align: center;">Obtain Grade : A+</th>
                <th scope="col" style="width: 25%; font-weight: 900; font-family: tahoma ; font-style: italic; text-align: center;">Obtain GPA : 5.00 </th>
                <th scope="col" style="width: 25%; font-weight: 900; font-family: tahoma ; font-style: italic; text-align: center;">Merit : 01 </th>
              </tr>
            </thead>
          </table>
        </div>
        <div style=" text-align: center; padding-top: 200px;">
          <table class="table" >
            <thead>
              <tr >
                <th scope="col" style="width: 33.33%; font-weight: 900; font-family: tahoma ; font-style: italic;">Signature <br> (Result creator)</th>
                <th style=" text-align: center;"scope="col" style="width: 33.33%; font-weight: 900; font-family: tahoma ; font-style: italic;">Signature <br> (Class Teacher)</th>
                <th style=" text-align: center;"scope="col" style="width: 33.33%; font-weight: 900; font-family: tahoma ; font-style: italic;">Signature <br> (Head Teacher) </th>
              </tr>
            </thead>
          </table>
        </div>
        <div style="margin:45px">
          <p style="text-align: center; color: green;">All Copy right by Noipunno Digital</p>
          <p style="text-align: center; color: green;">www.educationresultinfo.com</p>
        </div>
         <?php
               }
          ?>
    </div>
   
</body>
</html>