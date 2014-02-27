<!DOCTYPE html>
<html>
    <title>DIIT</title>
    <style> table
{
border-collapse:collapse;
}
table,th, td
{
border: 1px solid black;
}</style>
    <body>
        <table width="500px">
            <thead>
                <th>ID</th>
                <th>Type</th>
                <th>Name</th>
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Total</th>
            </thead>
            <tbody>
            <?php
                $xml = simplexml_load_file('sample.xml');
                foreach($xml->worker as $worker)
                {
                    $total = 0;
                    echo '<tr>'.PHP_EOL;
                    foreach($worker->attributes() as $key => $value)
                    {
                        if($key[0]=='d')
                            $total += intval($value);
                        echo '<td>'.$value.'</td>'.PHP_EOL;
                    }
                    echo '<td>'.$total.'</td>'.PHP_EOL;
                    echo '</tr>'.PHP_EOL;
                }
            ?>
            </tbody>
        </table>
        <form name='input' action='insert.php' method='post'>
            insert activity:
            <input type='text' name='activity'/>
            <input type='submit' value='send'/>
        </form>
    </body>
</html>