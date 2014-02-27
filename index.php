<html>
<head><title>test</title></head>
</head>

<?php
if( ! $xml = simplexml_load_file('sample.xml') )
    {
        echo 'unable to load XML file';
    }
    else
    {
        foreach( $xml as $workers )
        {
            echo 'Name: '.$workers->name.'<br />';
			echo 'sunday: '.$workers->sunday.'<br />';
			echo 'monday: '.$workers->monday.'<br />';
			echo 'tuesday: '.$workers->tuesday.'<br />';
			echo 'wednesday: '.$workers->wednesday.'<br />';
			echo 'monday: '.$workers->thusday.'<br />';

        }
		
		
    } 
?>
 
<form name='input' action='insert.php' method='post'>
    insert activity:
    <input type='text' name='activity'/>
    <input type='submit' value='send'/>
</form>
</body>
</html>