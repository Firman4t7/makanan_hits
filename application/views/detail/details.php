<?= $header ?>




<style>


	.img-magnifier-container {
		position:relative;
	}

	.img-magnifier-glass {
		position: absolute;
		/*border: 3px solid #000;*/
		border-radius: 100%;
		cursor: none;
		/*Set the size of the magnifier glass:*/
		width: 90px;
		height: 60px;
	}


</style>




<!-- Product section-->
<section class="py-5">

	<div class="container px-4 px-lg-5 my-5">
		<div>
			<button class="btn btn-primary" style="float: right;" onclick="document.location.href='<?= base_url('index.php/Home/index')?>'"><i class="fas fa-arrow-circle-left"></i> Kembali</button>
		</div>
		<div class="row gx-4 gx-lg-5 align-items-center ">
			<div class="col-md-6 img-magnifier-container"><img class="card-img-top mb-5 mb-md-0" id="myimage" src="<?php echo base_url(). 'asset/img/' . $makanan->Gambar?>" alt="" /></div>
			<div class="col-md-6">

				<input type="hidden" name="id" value="<?php echo $makanan->id?>">
				<h1 class="display-5 fw-bolder"><?php echo $makanan->nama_makanan?></h1>
				<div class="fs-5 mb-5">
					<!-- <span class="text-decoration-line-through">$45.00</span> -->
					<span><?php echo "Rp.".number_format($makanan->harga);?></span>
				</div>	
				<p class="lead"><?php echo $makanan->keterangan?></p>
				
			</div>
		</div>
	</div>
</section>


<script>
	function magnify(imgID, zoom) {
		var img, glass, w, h, bw;
		img = document.getElementById(imgID);
		/*create magnifier glass:*/
		glass = document.createElement("DIV");
		glass.setAttribute("class", "img-magnifier-glass");
		/*insert magnifier glass:*/
		img.parentElement.insertBefore(glass, img);
		/*set background properties for the magnifier glass:*/
		glass.style.backgroundImage = "url('" + img.src + "')";
		glass.style.backgroundRepeat = "no-repeat";
		glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
		bw = 3;
		w = glass.offsetWidth / 2;
		h = glass.offsetHeight / 2;
		/*execute a function when someone moves the magnifier glass over the image:*/
		glass.addEventListener("mousemove", moveMagnifier);
		img.addEventListener("mousemove", moveMagnifier);
		/*and also for touch screens:*/
		glass.addEventListener("touchmove", moveMagnifier);
		img.addEventListener("touchmove", moveMagnifier);
		function moveMagnifier(e) {
			var pos, x, y;
			/*prevent any other actions that may occur when moving over the image*/
			e.preventDefault();
			/*get the cursor's x and y positions:*/
			pos = getCursorPos(e);
			x = pos.x;
			y = pos.y;
			/*prevent the magnifier glass from being positioned outside the image:*/
			if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
			if (x < w / zoom) {x = w / zoom;}
			if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
			if (y < h / zoom) {y = h / zoom;}
			/*set the position of the magnifier glass:*/
			glass.style.left = (x - w) + "px";
			glass.style.top = (y - h) + "px";
			/*display what the magnifier glass "sees":*/
			glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
		}
		function getCursorPos(e) {
			var a, x = 0, y = 0;
			e = e || window.event;
			/*get the x and y positions of the image:*/
			a = img.getBoundingClientRect();
			/*calculate the cursor's x and y coordinates, relative to the image:*/
			x = e.pageX - a.left;
			y = e.pageY - a.top;
			/*consider any page scrolling:*/
			x = x - window.pageXOffset;
			y = y - window.pageYOffset;
			return {x : x, y : y};
		}
	}
</script>

<script>
/* Initiate Magnify Function
with the id of the image, and the strength of the magnifier glass:*/
magnify("myimage", 3);
</script>


<?= $footer ?>