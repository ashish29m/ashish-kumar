<html>
<style>
.b
{
background-image: url('bg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
color:white;
}
</style>
<body  class="b">
<h2  align="center" style="color:white;  font-family:sans-serif;"><i>Saarthi.AI</i></h2>
<div style="display: block; border: 1px white;">
<?php  
echo '<table>'.
        '<tr>'.
          '<th>'."NAME".str_repeat('&nbsp;', 5).'</th>'.
          '<th>'."Employee ID".str_repeat('&nbsp;', 5).'</th>'.
          '<th>'."Department".str_repeat('&nbsp;', 5).'</th>'.
          '<th>'."Email id ".str_repeat('&nbsp;', 5).'</th>'.
          '<th>'."Date of Joining".str_repeat('&nbsp;', 5).'</th>'.
        '</tr>'.
        
        '<tr>'.
          '<td>'.$_GET["name"].str_repeat('&nbsp;', 5).'</td>'.
          '<td>'.$_GET["empid"].str_repeat('&nbsp;', 5).'</td>'.
          '<td>'.$_GET["dept"].str_repeat('&nbsp;', 5).'</td>'.
          '<td>'.$_GET["email"].str_repeat('&nbsp;', 5).'</td>'.
          '<td>'.$_GET["DOJ"].str_repeat('&nbsp;', 5).'</td>'.
        '</tr>'.

'</table>';
?>
</div>
</body>
</html>