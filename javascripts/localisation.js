alert( ' Info --->  Javascript localisation ' ); // histoire de voir si le lien vers le script pointe bien au bon endroit.

// La géolocalisation est-elle prise en charge par le navigateur ?
    if(navigator.geolocation)
    {
        navigator.geolocation.getCurrentPosition(showLocation, errorHandler);
         alert('Votre navigateur prend en charge la géolocalisation.');
    }
    else
    {
        alert('Votre navigateur ne prend malheureusement pas en charge la géolocalisation.');
    }
    
   /* function showLocation(position)
    {
        alert('Latitude : '+ position.coords.latitude +' - Longitude : '+ position.coords.latitude);
    }
    */

