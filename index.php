<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
table {
  border-collapse: collapse;
width: 100%;


}

th {
  height: 70px;
  text-align: left;

}
td {
padding: 0px;
  text-align: left;

}
tr{
  
  text-align: left;

}

  .btn {

  border: black;
  color: white;
  padding: 12px 16px;

  cursor: pointer;
}

#button1{
  background-color: blue;
  border: none;
  color: white;

  font-size: 12px;
  border-radius: 2px;
  height: 30px;
}
.show{
  font-size: 12px;
  color: gray;
}

</style>

</head>

<body>


<table id="myTable" rules="rows" cellspacing="0px">
  Mathmetics
  <hr style="height:2px;border-width:0;color:gray;background-color:gray; width:100%;">
  
  <tr>
    <th>Action
<p class="show">Move,Ident<br>Outdent,Delete</p>
    </th>
    <th>Standard<p class="show">The text of the standard</p></th>
  
  </tr>
  <tr>
    
  </tr>

<br>
<tr>
<td>
 
<button  onclick="myCreateFunction()" id="button1" style="width:100%;" >Add a stanadrd</button>

</td>
</tr>
</table>
<script>
function myCreateFunction() {
  var table = document.getElementById("myTable");
 
    var row1 = table.insertRow(2);
  var cell5 = row1.insertCell(0);

    var cell1 = row1.insertCell(0);
    var cell2 = row1.insertCell(0);
    var cell3 = row1.insertCell(0);
    var cell4 = row1.insertCell(0);
 
  

  cell1.innerHTML= '<button onclick="moveLeft()" class="btn"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>';
  cell2.innerHTML= '<button onclick="moveRight()" class="btn"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>';
  cell3.innerHTML= '<button onclick="deleteRow(this)" class="btn"><i class="fa fa-trash"></i> </button>';
  cell4.innerHTML= '<button onclick="moveUpDown()" class="btn"><i class="fa fa-arrows" ></i></button>';                              
  cell5.innerHTML = "Type standard here ";




}

function textArea(){
  
        var div = $("<div />");
        div.html(GetDynamicTextBox(""));
        $("#TextBoxContainer").append(div);
    
}


function deleteRow(r) {
  var i = r.parentNode.parentNode.rowIndex;
  document.getElementById("myTable").deleteRow(i);
}

function moveUpDown(){
  $('#myTable input.move').click(function() {
    var row = $(this).closest('tr');
    if ($(this).hasClass('up'))
        row.prev().before(row);
    else
        row.next().after(row);
});
}

</script>

</body>
</html>
