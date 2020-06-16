$( function() {
    let availableTags = [
      "Appartement",
      "Maison",
      "Garage",
      "Terrain",
      "Local"
    ];
    $( "#autocomp" ).autocomplete({
      source: availableTags
    });
  } );