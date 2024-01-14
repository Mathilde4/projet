function search() {
    var searchTerm = document.getElementById("search-input").value;

    displaySearchResults("Le résultat de la recherche est : "+ searchTerm);
}

function displaySearchResults(result){
    var searchResult = document.getElementById("search-results");

    searchResult.innerHTML = result;
}