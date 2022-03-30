<?php
    // function for call api transfort to json and creat cache
    function apiCall($url)
    {
        // hashage + nom du fichier
        $fileName = md5($url);
        // chemin du fichier
        $filePath = './cache/' . $fileName;

        $fileExists = file_exists($filePath);

        if($fileExists)
        {
            $fileTime = filemtime($filePath);
            $time = time();

            if($fileTime < $time - 60 * 24)
            {
                unlink($filePath);
                $fileExists = false;
            }
        }

        if($fileExists)
        {
            $result = file_get_contents($filePath);
        }
        else
        {
            $curl = curl_init();                                    // Crée la requête
            curl_setopt($curl, CURLOPT_URL, $url);                  // Défini l'URL
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);       // Renvoyer le resultat au lieu de l'afficher
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);       // suit les redirections

            $result = curl_exec($curl);                             // Éxecuter la requête
            curl_close($curl);                                      // Fermer cURL

            file_put_contents($filePath, $result);
        }

        $result = json_decode($result);
        return $result;
    }
?>