<!-- Footer-->
<footer class="py-5 bg-dark">
	<div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
	<!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center active"><i class="bi bi-arrow-up-short"></i></a> -->
	<button onclick="topFunction()" id="myBtn"  title="Go to top"><i class="fas fa-arrow-alt-circle-up"></i></button>
</footer>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		mybutton.style.display = "block";
	} else {
		mybutton.style.display = "none";
	}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}
</script>

<!-- Bootstrap core JS-->
<script src="<?php echo base_url('home_page/dist/js/bootstrap.bundle.min.js')?>"></script>
<!-- Core theme JS-->
<script src="<?php echo base_url('home_page/dist/js/scripts.js')?>"></script>
</body>
</html>
