<h1>All Statuses</h1>

<?php
echo('<table border="1"><tr><th>user</th><th>Title</th><th>Date</th><th>See</th></tr>');
foreach($parameters as $key => $value){
	echo '<tr>';
	echo '<td>'.$value['user'].'</td>';
	echo '<td>'.$value['message'].'</td> ';
	echo '<td>'.$value['date'].'</td> ';
	echo '<td><a href="/statuses/'.$key.'">See</a></td>';
	echo '</tr>';

}
echo '</table>';

?>
<br />
<h1>Post a new status</h1>

<form action="/statuses" method="POST">
    <label for="username">Username:</label>
    <br/>
    <input type="text" name="username">
	<br/>
    <label for="message">Message:</label>
    <br/>
    <textarea name="message"></textarea>
	<br/>
    <input type="submit" value="Tweet!">
</form>
