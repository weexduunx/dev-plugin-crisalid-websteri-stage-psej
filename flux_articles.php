<table class="highlight responsive-table ">
    <thead>
        <tr>
            <th class="">Nom</th>
            <th class="">Famille</th>
            <th class="">Référence</th>
            <th class="">Prix</th>
            <th class="">TVA</th>
            <th class="">Disponible</th>
            <th class="">Description</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($xml->article as $article) {
                                
                $nom = $article->attributes()->nom_complet;
                $prix = $article->attributes()->prix;
                $ref = $article->attributes()->ref;
                $tva = $article->attributes()->tva;
                $famille = $article->attributes()->famille;
                $description = $article->attributes()->description;
                $disponible = $article->attributes()->disponible;
                echo '<tr>';
                echo '<td class="">'.$nom.'</td>';
                echo '<td class="">'.$famille.'</td>';
                echo '<td class="">'.$ref.'</td>';
                echo '<td class="">'.$prix.'</td>';
                echo '<td class="">'.$tva.'</td>';
                echo '<td class="">'.$disponible.'</td>';
                echo '<td class="">'.$description.'</td>';
                echo '</tr>';
            }	
        ?>
    </tbody>
</table>    