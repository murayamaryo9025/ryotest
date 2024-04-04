<?php
require('connect');
$recordset = mysql_query('review_for user_worktime');
?>
<html>



<body>
    <table width="80%" border="1">
        <tr>
            <th scope="col">名前</th>
            <th scope="col">勤務開始</th>
            <th scope="col">勤務終了</th>
            <th scope="col">休憩時間</th>
            <th scope="col">勤務時間</th>
        </tr>
<?php
while($table = mysql_fetch_assoc($recordset)){
    <tr>
       <td><?php print(htmlspecialchars($table['name']));?></td>
       <td><?php print(htmlspecialchars($table['work_start']));?></td>
       <td><?php print(htmlspecialchars($table['work_end']));?></td>
       <td><?php print(htmlspecialchars($table['rest_time']));?></td>
       <td><?php print(htmlspecialchars($table['work_time']));?></td>
    </tr>
<?php    
}
?>
</table>
</body>
</html>