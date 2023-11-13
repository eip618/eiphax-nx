		
	<div class="footer">
	<div class="container-flex">
	<div class="logo"><h2>eipHax</h2></div>
	<span class="badge"><img src="./img/spaghetti.svg" width="270px"></div>
	</div>
	</div>
	</div>
	</div>
	</div>
<script>
// Get a reference to the close button
var closeButton = document.getElementById('closeButton');

// Function to close the modal
function closeModal() {
  var modal = document.getElementById('openModal');
  modal.style.opacity = 0;
  setTimeout(function() {
    modal.style.pointerEvents = 'none';
    modal.remove();
  }, 400); // Assuming the same transition duration as in your CSS
}

// Attach click event listener to the close button
closeButton.addEventListener('click', function(event) {
  event.preventDefault(); // Prevent the default behavior of the anchor tag
  closeModal();
});

// Function to open the modal
function openModal() {
  var modal = document.getElementById('openModal');
  modal.style.opacity = 1;
  modal.style.pointerEvents = 'auto';
}

// Open the modal on window load
window.onload = openModal;
</script>
	</body>
</html>