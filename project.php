<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sualkuchi Handloom Survey 2016</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">

    function publish(){

    var name=document.getElementById("name").value;
    var chuba=document.getElementById("chuba").value;
    var village=document.getElementById("village").value;
    var house=document.getElementById("house").value;
    var househead=document.getElementById("househead").value;
    var sex=document.getElementById("sex").value;
    var age=document.getElementById("age").value;
    var phone=document.getElementById("phone").value;
    var add_village=document.getElementById("add_village").value;
    var add_co=document.getElementById("add_co").value;
    var add_chuba=document.getElementById("add_chuba").value;
    var add_po=document.getElementById("add_po").value;
    var add_dist=document.getElementById("add_dist").value;
    var add_state=document.getElementById("add_state").value;
    var add_pin=document.getElementById("add_pin").value;
    var pvillage=document.getElementById("pvillage").value;
    var pco=document.getElementById("pco").value;
    var pchuba=document.getElementById("pchuba").value;
    var ppo=document.getElementById("ppo").value;
    var pdist=document.getElementById("pdist").value;
    var pstate=document.getElementById("pstate").value;
    var ppin=document.getElementById("ppin").value;
    var name1=document.getElementById("name1").value;
    var age1=document.getElementById("age1").value;
    var relation1=document.getElementById("relation1").value;
    var qual1=document.getElementById("qual1").value;
    var occ1=document.getElementById("occ1").value;
    var name2=document.getElementById("name2").value;
    var age2=document.getElementById("age2").value;
    var relation2=document.getElementById("relation2").value;
    var qual2=document.getElementById("qual2").value;
    var occ2=document.getElementById("occ2").value;
    var name3=document.getElementById("name3").value;
    var age3=document.getElementById("age3").value;
    var relation3=document.getElementById("relation3").value;
    var qual3=document.getElementById("qual3").value;
    var occ3=document.getElementById("occ3").value;
    var name4=document.getElementById("name4").value;
    var age4=document.getElementById("age4").value;
    var relation4=document.getElementById("relation4").value;
    var qual4=document.getElementById("qual4").value;
    var occ4=document.getElementById("occ4").value;
    var name5=document.getElementById("name5").value;
    var age5=document.getElementById("age5").value;
    var relation5=document.getElementById("relation5").value;
    var qual5=document.getElementById("qual5").value;
    var occ5=document.getElementById("occ5").value;
    var name6=document.getElementById("name6").value;
    var age6=document.getElementById("age6").value;
    var relation6=document.getElementById("relation6").value;
    var qual6=document.getElementById("qual6").value;
    var occ6=document.getElementById("occ6").value;
    var name7=document.getElementById("name7").value;
    var age7=document.getElementById("age7").value;
    var relation7=document.getElementById("relation7").value;
    var qual7=document.getElementById("qual7").value;
    var occ7=document.getElementById("occ7").value;
    var name8=document.getElementById("name8").value;
    var age8=document.getElementById("age8").value;
    var relation8=document.getElementById("relation8").value;
    var qual8=document.getElementById("qual8").value;
    var occ8=document.getElementById("occ8").value;
    var houstype=document.getElementById("houstype");
    if(housetype!=null)
    {
      housetype=housetype.value;
    }
    var vehicle=document.getElementById("vehicle").value;
    var vehicletype=document.getElementById("vehicletype");
    var occupation=document.getElementById("occupation");
    var handloom=document.getElementById("handloom");

    xmlhttp=new XMLHttpRequest();
    data=new FormData();

    
    var column=["name","chuba","village","house","househead","sex","age","phone","add_village","add_co","add_chuba","add_po","add_dist","add_state","add_pin","pvillage","pco","pchuba","ppo","pdist","pstate","ppin","name1","age1","relation1","qual1","occ1","name2","age2","relation2","qual2","occ2","name3","age3","relation3","qual3","occ3","name4","age4","relation4","qual4","occ4","name5","age5","relation5","qual5","occ5","name6","age6","relation6","qual6","occ6","name7","age7","relation7","qual7","occ7","name8","age8","relation8","qual8","occ8","houstype","vehicle","vehicletype","occupation","handloom"];

    for(i=0; i<column.length; i++)
    { 
      var myvar=eval(column[i]);
      data.append(column[i],myvar);
    }
    xmlhttp.open('POST', "insert_data.php", true);
    xmlhttp.send(this.data);
    
    
  }

  </script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */
     .jumbotron {
      margin-bottom: 0;
      background-color: #B0B0B0;
    }

     
     
     .border {
        border-style: solid;
        border-spacing: 10px;
     }

   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Sualkuchi Handloom Survey 2016</h1><br><br>
    <p>Questionnaire For Survey Of  House  Hold/Weaver/Loom/Shopkeeper</p><br>
    <p align=left><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> &nbsp;All information will be kept confidential.</p>
    <p align=left><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> &nbsp;Survey result wil be used for categorizing stateholder.</p>   
  </div>
</div>
<br>
<br>
<div class="container">
  <!-- <div class="border"> -->
    <h3 align=center>Section 1</h3><br>


<form class="form-horizontal" id="myform">
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">1. Name of the Panchayat:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" placeholder="Enter name of the Panchayat">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="chuba">2. Chuba/Para:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="chuba" placeholder="Enter chuba/para">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="village">3. Village:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="village" placeholder="Enter Village">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="house">4. House No.:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="house" placeholder="Enter House Number">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="househead">5. Name of the House Head:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="househead" placeholder="Enter Name of the House Head">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="sex">6. Sex:</label>
      <div class="col-sm-10">
      <select id="sex" class="col-sm-12 form-control">
        <option value="Null">Select</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="age">7. Age:</label>
    <div class="col-sm-10"> 
      <input type="number" class="form-control" id="age" placeholder="Enter Age">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="phone">8. Phone:</label>
    <div class="col-sm-10"> 
      <input type="number" class="form-control" id="phone" placeholder="Enter phone number">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="address">9. Address:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="add_village" placeholder="Vilage">
      <input type="text" class="form-control" id="add_co" placeholder="C/O">
      <input type="text" class="form-control" id="add_chuba" placeholder="Chuba/Para">
      <input type="text" class="form-control" id="add_po" placeholder="P.O.">
      <input type="text" class="form-control" id="add_dist" placeholder="District">
      <input type="text" class="form-control" id="add_state" placeholder="State">
      <input type="number" class="form-control" id="add_pin" placeholder="Pin">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="paddress">10. Present Address:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="pvillage" placeholder="Vilage">
      <input type="text" class="form-control" id="pco" placeholder="C/O">
      <input type="text" class="form-control" id="pchuba" placeholder="Chuba/Para">
      <input type="text" class="form-control" id="ppo" placeholder="P.O.">
      <input type="text" class="form-control" id="pdist" placeholder="District">
      <input type="text" class="form-control" id="pstate" placeholder="State">
      <input type="number" class="form-control" id="ppin" placeholder="Pin">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="details">11. Family Details:</label>
      <div class="col-sm-10">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>S.No.</th>
                <th>Name</th>
                <th>Age</th>
                <th>Relation with Head</th>
                <th>Qualification</th>
                <th>Occupation</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                 <td>1.</td>
                 <td><input type="text" class="form-control" id="name1"/></td>
                 <td><input type="number" class="form-control" id="age1"/></td>
                 <td><input type="text" class="form-control" id="relation1"/></td>
                 <td><input type="text" class="form-control" id="qual1"/></td>
                 <td><input type="text" class="form-control" id="occ1"/></td>
              </tr>
              <tr>
                 <td>2.</td>
                 <td><input type="text" class="form-control" id="name2"/></td>
                 <td><input type="number" class="form-control" id="age2"/></td>
                 <td><input type="text" class="form-control" id="relation2"/></td>
                 <td><input type="text" class="form-control" id="qual2"/></td>
                 <td><input type="text" class="form-control" id="occ2"/></td>
              </tr>
              <tr>
                 <td>3.</td>
                 <td><input type="text" class="form-control" id="name3"/></td>
                 <td><input type="number" class="form-control" id="age3"/></td>
                 <td><input type="text" class="form-control" id="relation3"/></td>
                 <td><input type="text" class="form-control" id="qual3"/></td>
                 <td><input type="text" class="form-control" id="occ3"/></td>
              </tr>
              <tr>
                 <td>4.</td>
                 <td><input type="text" class="form-control" id="name4"/></td>
                 <td><input type="number" class="form-control" id="age4"/></td>
                 <td><input type="text" class="form-control" id="relation4"/></td>
                 <td><input type="text" class="form-control" id="qual4"/></td>
                 <td><input type="text" class="form-control" id="occ4"/></td>
              </tr>
              <tr>
                 <td>5.</td>
                 <td><input type="text" class="form-control" id="name5"/></td>
                 <td><input type="number" class="form-control" id="age5"/></td>
                 <td><input type="text" class="form-control" id="relation5"/></td>
                 <td><input type="text" class="form-control" id="qual5"/></td>
                 <td><input type="text" class="form-control" id="occ5"/></td>
              </tr>
              <tr>
                 <td>6.</td>
                 <td><input type="text" class="form-control" id="name6"/></td>
                 <td><input type="number" class="form-control" id="age6"/></td>
                 <td><input type="text" class="form-control" id="relation6"/></td>
                 <td><input type="text" class="form-control" id="qual6"/></td>
                 <td><input type="text" class="form-control" id="occ6"/></td>
              </tr>
              <tr>
                 <td>7.</td>
                 <td><input type="text" class="form-control" id="name7"/></td>
                 <td><input type="number" class="form-control" id="age7"/></td>
                 <td><input type="text" class="form-control" id="relation7"/></td>
                 <td><input type="text" class="form-control" id="qual7"/></td>
                 <td><input type="text" class="form-control" id="occ7"/></td>
              </tr>
              <tr>
                 <td>8.</td>
                 <td><input type="text" class="form-control" id="name8"/></td>
                 <td><input type="number" class="form-control" id="age8"/></td>
                 <td><input type="text" class="form-control" id="relation8"/></td>
                 <td><input type="text" class="form-control" id="qual8"/></td>
                 <td><input type="text" class="form-control" id="occ8"/></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="housetype">12. Type of House:</label>
    <div class="col-sm-10">
      <select id="housetype" class="col-sm-12 form-control">
        <option value="Null">Select</option>
        <option value="Assam Type">Assam Type</option>
        <option value="RCC Building">RCC Building</option>
        <option value="Katcha House">Katcha House</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="vehicle">13. Do You Own Vehicle?:</label>
    <div class="col-sm-10">
      <select id="vehicle" class="col-sm-10 form-control">
        <option value="Yes">Yes</option>
        <option value="No">No</option>
      </select>
        <div class="form-group">
          <label class="control-label col-sm-2" for="vehicletype">If Yes :</label>
          <div class="col-sm-10">
            <select id="vehicletype" class="col-sm-12 form-control">
              <option value="Null">Select</option>
              <option value="twowheeler">Two Wheeler</option>
              <option value="threewheeler">Three Wheeler</option>
              <option value="fourwheeler">Four Wheeler</option>
              <option value="others">Others</option>
            </select>
          </div>
        </div>
        
    </div>  
  </div> 
 


  <div class="form-group">
    <label class="control-label col-sm-2" for="occpation">14. Main Occupation of Household Head:</label>
      <div class="col-sm-10">
      <select id="occupation" class="col-sm-12 form-control">
        <option value="Null">Select</option>
        <option value="govtservice">Govt. Service</option>
        <option value="privatejob">Private Job</option>
        <option value="handloom">Handloom</option>
        <option value="silktraders">Silk Traders</option>
        <option value="others">Others</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="handloom">15. If Main Occupation is Handloom:</label>
      <div class="col-sm-10">
      <select name="handloom" class="col-sm-12 form-control">
        <option value="Null">Select</option>
        <option value="weaver">Weaver</option>
        <option value="helper">Helper</option>
        <option value="masterweaver">Master Weaver</option>
        <option value="entrepreneur">Entrepreneur</option>
        <option value="trader">Trader/Shopkeeper</option>
      </select>
    </div>
  </div>
  <br>


  <div class="form-group"> 
    <div class="col-sm-offset-5 col-sm-10">
      <button type="button" class="btn btn-success" onclick="publish()">Submit</button>
    </div>
  </div>
</form>
    

</div><br><br>
<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

</body>
</html>

