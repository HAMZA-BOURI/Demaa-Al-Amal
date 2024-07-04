function searchLocation(locationInputId) {
    var query = document.getElementById(locationInputId).value;
    if (query) {
        var url = `https://www.google.com/maps/search/?api=1&query=${encodeURIComponent(query)}`;
        window.location.href = url;
    } else {
        alert("Please enter a location.");
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // No need to add event listeners here since they are added inline in the Blade template
});
