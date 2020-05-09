<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
	
      		<!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
      		<div class="hero-unit">
        		<p>
					Kami adalah distro online terlengkap dan terpercaya, dengan harga terjangkau kurang dari 100rb anda sudah dapat memiliki produk kami. Selamat Berbelanja Customer..
				</p>
        		<p><a class="btn btn-success btn-large" href="produk.php">Mulai Berbelanja &raquo;</a></p>
                                
      		</div>
            <div class="title"><h3>New Arrival</h3></div>
      		<div class="row">
	                <?php
                        foreach($new_arrival as $data){
                    ?>
        		<div class="span4">
          			<div class="icons-box">
                        <div class="title"><h3><?= $data['br_nm']; ?></h3></div>
                        <img src="<?= base_url('assets/'.$data['br_gbr']); ?>" />
						<div><h3>Rp.<?= number_format($data['br_hrg'],2,",",".");?></h3></div>
					<!--	<p>
						
						</p> -->
						<div class="clear"><a href="<?= base_url('home/detailproduk/'.$data['br_id']); ?>" class="btn btn-lg btn-danger">Detail</a> <a href="<?= base_url('home/beli/'.$data['br_id']); ?>" class="btn btn-lg btn-success">Beli &raquo;</a></div>
					
                    </div>
        		</div>
                <?php   
              }
              ?>
      		</div>
			<hr>
			<div class="title"><h3>Apparel</h3></div>
      		<div class="row">
	                <?php
                    foreach($apparel as $data){
                    ?>
        		<div class="span4">
          			<div class="icons-box">
                        <div class="title"><h3><?= $data['br_nm']; ?></h3></div>
                        <img src="<?= base_url('assets/'.$data['br_gbr']); ?>" />
						<div><h3>Rp.<?= number_format($data['br_hrg'],2,",",".");?></h3></div>
					<!--	<p>
						
						</p> -->
						<div class="clear"><a href="<?= base_url('home/detailproduk/'.$data['br_id']); ?>" class="btn btn-lg btn-danger">Detail</a> <a href="<?= base_url('home/beli/'.$data['br_id']); ?>" class="btn btn-lg btn-success">Beli &raquo;</a></div>
					
                    </div>
        		</div>
                <?php   
              }
              ?>
      		
         	 </div>
         	 <hr>
              <hr>
			<div class="title"><h3>Accesories</h3></div>
      		<div class="row">
	                <?php
                    foreach($accesories as $data){
                    ?>
        		<div class="span4">
          			<div class="icons-box">
                        <div class="title"><h3><?= $data['br_nm']; ?></h3></div>
                        <img src="<?= base_url('assets/'.$data['br_gbr']); ?>" />
						<div><h3>Rp.<?= number_format($data['br_hrg'],2,",",".");?></h3></div>
					<!--	<p>
						
						</p> -->
						<div class="clear"><a href="<?= base_url('home/detailproduk/'.$data['br_id']); ?>" class="btn btn-lg btn-danger">Detail</a> <a href="<?= base_url('home/beli/'.$data['br_id']); ?>" class="btn btn-lg btn-success">Beli &raquo;</a></div>
					
                    </div>
        		</div>
                <?php   
              }
              ?>
         	 </div>


			<!-- start: Row -->
			<div class="row">
				<div class="icons-box-vert-container">
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-ok ico-color circle-color big"></i>
							<div class="icons-box-vert-info">
								<h3>Kemudahan Berbelanja</h3>
								<p>Dapatkan kemudahan berbelanja di DMSN Cloth, Kami menyediakan kebutuhan untuk fasion anda.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box-->

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-cup  ico-white circle-color-full big-color"></i>
							<div class="icons-box-vert-info">
								<h3>Juara Pengiriman Delivery</h3>
								<p>Dapatkan kemudahan pengiriman barang ke rumah anda dengan minimal belanja 300 ribu radius 10km dari kantor kami.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-ipad ico-color circle-color big"></i>
							<div class="icons-box-vert-info">
								<h3>Berbelanja Dengan Gadget</h3>
								<p>Anda bisa memesan produk kami melalui gadget kesayangan anda, belanja di DMSN Cloth dengan praktis dan mudah.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-thumbs-up  ico-white circle-color-full big-color"></i>
							<div class="icons-box-vert-info">
								<h3>Sosial Media</h3>
								<p>Follow twitter dan fan page facebook kami untuk mendapatkan update promo special setiap harinya.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

				</div>
				<!-- end: Icon Boxes -->
				<div class="clear"></div>
			</div>
		</div>
		<!--end: Container-->
	
	</div>
	<!-- end: Wrapper  -->