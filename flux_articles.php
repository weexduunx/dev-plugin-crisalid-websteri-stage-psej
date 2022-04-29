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
                                        foreach ($article->attributes() as $key => $value) {
                                                                            
                                            if ($key == "nom_complet") {
                                                $nom = $value;
                                            }
                                            if ($key == "prix") {
                                                $prix = $value;
                                            }
                                            if ($key == "ref") {
                                                $ref = $value;
                                            }
                                            if ($key == "tva") {
                                                $tva = $value;
                                            }
                                            if ($key == "famille") {
                                                $famille = $value;
                                            }
                                            if ($key == "description") {
                                                $description = $value;
                                            }
                                            if ($key == "disponible") {
                                                $disponible = $value;
                                            }
                                        }
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