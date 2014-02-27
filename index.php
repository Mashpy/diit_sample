<!DOCTYPE html>
<html>
    <title>DIIT</title>
    <style>
    table{border-collapse:collapse;}table,th,td{border: 1px solid black;}
    </style>
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
                
                if($_POST)
                {
                    $xml->addAttribute('type', 'documentary');
                    $newworker = $xml->addChild('worker');
                    foreach($_POST as $key=>$value)
                        $newworker->addAttribute($key, $value);
                }

                //$xml->asXML('sample2.xml');
                //$xml = simplexml_load_file('sample.xml');
                
                $id = 0;
                foreach($xml->worker as $worker)
                {
                    $total = 0;
                    echo '<tr>'.PHP_EOL;
                    foreach($worker->attributes() as $key => $value)
                    {
                        if($key[0]=='d')
                            $total += intval($value);
                        else if($key=='id')
                            $id = intval($value);
                        echo '<td>'.$value.'</td>'.PHP_EOL;
                    }
                    echo '<td>'.$total.'</td>'.PHP_EOL;
                    echo '</tr>'.PHP_EOL;
                }
            ?>
            </tbody>
        </table>
        <h3>insert</h3>
        <form name="input" method="post">
            <input type="text" name="id" placeholder="Enter id" value="<? echo $id+1; ?>"/><br/>
            <input type="text" name="type" placeholder="Enter type"/><br/>
            <input type="text" name="name" placeholder="Enter name"/><br/>
            <input type="submit" value="insert"/>
        </form>
    </body>
</html>