<?php
include 'db.inc.php'
?>
<script src="js/jquery.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/toutput.css">
<script>
    function activate(element){
     //   alert('element');
    }
    function updateValue(element,column,id){
      //  console.log(element.inlierText);
      var value = element.innerText
      //console.log(value+column+id)
      $.ajax({
          url:'backend.php',
          type:'post',
          data:{
              value: value,
              column: column,
              id: id
          },
          success: function(php_result){
              console.log(php_result);
          }
      })
    }
</script>
<div class="container">
    <h2 style="text-align:center; padding-top:25px">Information Of Staff</h2>
    <form action="tabulation2.php">
    <div class="container2" style="width:90%">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th><a href="tabulation2.php?mark_id=<?php echo $row['id']?>">tabulation</a> ||  <a href="admission.html">Admission Form</a> || <input type="submit" name="tabulation" value="Print_tabulation"></th> 
                   
                </tr>
            </thead>
        </table>
        </form>
       <form action="" method="post">
       <div class="">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>
                     <select style="width: 50%; " name="search_name" value="<?php echo $recv_class;?>">
                                <option value="">Select Class</option>
                                <option value="one">One</option>
                                <option value="two">Two</option>
                                <option value="three">Three</option>
                                <option value="four">Four</option>
                               <option value="five">Five</option>
                     </select>
                     
                     </th>
                     <th scope="col">
                            <select  style="width: 65%;" name="search_group" id="">
                                 <option value="">select Group</option>
                                 <option value="nill">N/A</option>
                                 <option value="science">Science</option>
                                 <option value="commerce">Commerce</option>
                                 <option value="arts">Arts</option>
                            </select>
                      
                    </th>
                    <th scope="col">
                            <select style="width: 60%;" name="search_academy_year" id="">
                                <option value="">select Year</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                            </select>
                        
                    </th>
                    <th scope="col">
                        
                            <select style="width: 55%;" name="search_section" id="">
                                <option value="">select Section</option>
                                <option value="nill">N/A</option>
                                <option value="joba">Joba</option>
                                <option value="belly">Belly</option>
                            </select>
                  
                    </th>
                     <th>
                        <input class="search" type="submit" name="search" value="search"> 
                     </th>
               </tr>
            </thead>
        </table>
<table class="table">
    
    <thead class="thead-dark">
        <tr class="show">
            <th>Roll</th>
            <th>class</th>
            <th>Group</th>
            <th>Year</th>
            <th>Section</th>
            <th>Bangla</th>
            <th>English</th>
            <th>Math </th>
            <th>Science </th>
            <th>Bob</th>
            <th>religion </th>
            <th>Music</th>
            <th>Social </th>
            <th>Expressive </th>
            <th>total</th>
            
          
        </tr>
    </thead>


<?php

$connection = mysqli_connect('localhost','root','','user_info');

if(!$connection){
    die("Not connected". mysqli_error()); 
}
 if(isset($_REQUEST['search'])){

    $recv_class = $_REQUEST['search_name'];
    $recv_group = $_REQUEST['search_group'];
    $recv_year = $_REQUEST['search_academy_year'];
    $recv_section = $_REQUEST['search_section'];
   
   
    $query  = "SELECT * FROM mark_table WHERE student_class LIKE '%$recv_class%' AND class_group LIKE '%$recv_group%' AND academy_year LIKE '%$recv_year%' AND section LIKE '%$recv_section%' ORDER BY student_roll ASC ";
   // $count = mysqli_num_rows($query);
  

      //  $query = "SELECT * FROM mark_table";
        $result = mysqli_query($connection,$query);
        $count = mysqli_num_rows($result);
        while ($row = mysqli_fetch_assoc($result)){
                    
            $roll = $row['student_roll'];
            $class = $row['student_class'];
            $group = $row['class_group'];
            $year = $row['academy_year'];
            $section = $row['section'];
            $bangla = $row['bangla_mark'];
            $english = $row['english_mark'];
            $math =  $row['math_mark'];
            $science = $row['science_mark'];
            $bob = $row['bob_mark'];
            $religion = $row['religion_mark'];
            $music = $row['music_mark'];
            $social = $row['social_mark'];
            $expressive = $row['expressive_mark'];
                $id = $row['id'];


            
    ?>
  
<tbody class="thead-light">
    <tr class="toutput">
    <td ><div  id="bangla" oninput="myFunction()" contenteditable="true" onBlur="updateValue(this,'student_roll','<?php echo $id?>')" onClick="activate(this)"><?php echo $roll;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'student_class','<?php echo $id?>')" onClick="activate(this)"><?php echo $class;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'class_group','<?php echo $id?>')" onClick="activate(this)"><?php echo $group;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'academy_year','<?php echo $id?>')" onClick="activate(this)"><?php echo $year;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'section','<?php echo $id?>')" onClick="activate(this)"><?php echo $section;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'bangla_mark','<?php echo $id?>')" onClick="activate(this)"><?php echo $bangla;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'english_mark','<?php echo $id?>')" onClick="activate(this)"><?php echo $english;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'math_mark','<?php echo $id?>')" onClick="activate(this)"><?php echo $math;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'science_mark','<?php echo $id?>')" onClick="activate(this)"><?php echo $science;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'bob_mark','<?php echo $id?>')" onClick="activate(this)"><?php echo $bob;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'religion_mark','<?php echo $id?>')" onClick="activate(this)"><?php echo $religion;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'music_mark','<?php echo $id?>')" onClick="activate(this)"><?php echo $music;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'social_mark','<?php echo $id?>')" onClick="activate(this)"><?php echo $social;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'expressive_mark','<?php echo $id?>')" onClick="activate(this)"><?php echo $expressive;?></div></td>
    <td><input type="text" id="m"></td>
  
    
    </tr>
</tbody>
<?php
}
}
?>
</table>
<th><a href="tabulation2.php?mark_id=<?php echo $id?>">tabulation</a> 
</div>

<script>
        function myFunction() {
          var a = Number(document.getElementById("bangla").value);
          var b = Number(document.getElementById("english").value);
          var c = Number(document.getElementById("math").value);
          var d = Number(document.getElementById("science").value);
         var e = Number(document.getElementById("bob").value);
          var f = Number(document.getElementById("religion").value);
         var g = Number(document.getElementById("music").value);
          var h = Number(document.getElementById("social").value);
          var i = Number(document.getElementById("expressive").value);
        
          var z = a;
          
        
          document.getElementById("m").value = z;
          alert(a);
        

}
</script>