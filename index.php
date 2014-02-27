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
        foreach( $xml->workers as $workers )
        {
            echo '***Name: <b>'.$workers->name.'</b><br />';
                        echo 'sunday: '.$workers->sunday.'<br />';
                        echo 'monday: '.$workers->monday.'<br />';
                        echo 'tuesday: '.$workers->tuesday.'<br />';
                        echo 'wednesday: '.$workers->wednesday.'<br />';
                        echo 'thusday: '.$workers->thusday->getAttribute("type");

        }
        foreach( $xml->types as $type )
        {
            echo '***ID: <b>'.$type->id.'</b><br />';
                        echo 'typename: '.$type->typename.'<br />';

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