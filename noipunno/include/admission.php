<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admission1.css">
</head>
<body>
    <div class="container">
         <h3 style="text-align:center; color:black;"> Please Select Below Information for Student Admission</h3>
        
        <hr><hr>
       

     <form action="admission3.php" method="get">
     
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>Class</h5></label>
            <div class="col-sm-10">
                <select style="width: 90%;" name="class" id="" required>
                  <option value="">Select Class</option>
                  <option value="one">One</option>
                  <option value="two">Two</option>
                  <option value="three">Three</option>
                  <option value="four">Four</option>
                  <option value="five">Five</option>
                </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>Group</h5></label>
            <div class="col-sm-10">
                <select style="width: 90%;" name="group" id="" required>
                <option value="">Select Group</option>
                  <option value="">N/A</option>
                  <option value="science">Science</option>
                  <option value="commerce">Commerce</option>
                  <option value="arts">Arts</option>
                </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>Year</h5></label>
            <div class="col-sm-10">
                <select style="width: 90%;" name="year" id="" required>
                <option value="">Select Year</option>
                  <option value="2021">2021</option>
                  <option value="2020">2020</option>
                  <option value="2019">2019</option>
                </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>Section</h5></label>
            <div class="col-sm-10">
                <select style="width: 90%; " name="section" id="" required>
                    <option value="">Select Srction</option>
                    <option value="N/A">N/A</option>
                    <option value="joba">Joba</option>
                    <option value="belly">Belly</option>
                </select>
            </div>
          </div>
         
          <div class="form-group row" style="padding-left: 18%; ">
            
            <div class="submit" >
              <input  type="submit"  name="submit3" value="Next" placeholder="Email">
            </div>
          </div>
      
  </form>

</body>
</html>`