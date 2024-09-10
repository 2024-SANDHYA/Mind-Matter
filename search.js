function searchSite() {
    const searchInput = document.getElementById('searchInput').value.toLowerCase();
    const bodyContent = document.body.innerHTML;

    // Clear previous search highlights
    document.body.innerHTML = document.body.innerHTML.replace(/<mark>/g, "").replace(/<\/mark>/g, "");

    if (searchInput) {
        if (bodyContent.toLowerCase().includes(searchInput)) {
            const regex = new RegExp(searchInput, 'gi');
            document.body.innerHTML = document.body.innerHTML.replace(regex, (match) => `<mark>${match}</mark>`);
        } else {
            alert('No results found.');
        }
    } else {
        alert('Please enter a search term.');
    }
}
