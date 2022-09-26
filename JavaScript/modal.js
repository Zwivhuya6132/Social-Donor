//get the modal
var modal = document.getElementById ("myModal");

//Get the button that opens the modal
var btn = document.getElementById("myBtn");

//Get the <span> element that closes the modal
var span = document.getElementsByClassName("close") [0];

//when the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

//When the user clicks on span (X), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

//When the user clicks anywhere outside of the modal, close the modal

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};