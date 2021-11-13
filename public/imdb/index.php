<?php

	
$films = json_decode(file_get_contents('https://imdb-api.com/en/API/Top250Movies/k_rtxwsn5u'), true);


	$allFilms = '<table><tr><td>Id</td>
    <td>Rank</td>
    <td>    </td>
    <td>title</td>
    <td>year</td>

    </tr>';


	foreach($films['items'] as $film) {

		$allFilms .= '<tr><td>'.$film['id'].'</td>
        <td>'.$film['rank'].'</td>
        <td>     </td>
        <td>'.$film['title'].'</td>
        <td>'.$film['year'].'</td>
        </tr>'
        ;

	}
	$allFilms .= "</table>";

    echo $allFilms;


?>
