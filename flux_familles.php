<table class="highlight responsive-table ">
    <thead>
        <tr>
            <th class="">#</th>
            <th class="">Site</th>
            <th class="">Description</th>
            <th class="">Photo</th>
            <th class="">Libellé</th>
                                    
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($xml->famille as $famille) {

                $famille_id = $famille->attributes()->id;
                $site = $famille->attributes()->site;
                $description = $famille->attributes()->description;
                $photo_url = $famille->attributes()->photo_url;
                echo '<tr>';
                echo '<td class="">'.$famille_id.'</td>';
                echo '<td class="">'.$site.'</td>';
                echo '<td class="">'.$description.'</td>';
                echo '<td class="">'.$photo_url.'</td>';
                echo '<td class="">'.$famille.'</td>';
                
                
                echo '</tr>';
            }	
        ?>
    </tbody>
</table>    