function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
 
  while (switching) {
  
    switching = false;
    rows = table.rows;
    
    for (i = 1; i < (rows.length - 1); i++) {
    
      shouldSwitch = false;
   
      x = rows[i].getElementsByTagName("TD")[10];
      y = rows[i + 1].getElementsByTagName("TD")[10];

      if (Number(x.innerHTML) > Number(y.innerHTML)) {
     
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
   
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}