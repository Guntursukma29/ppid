<section class="page-title-about">
    <img src="https://lldikti5.kemdikbud.go.id/assets/images/pages/gedung_lldikti5.webp" alt="" class="img-fluid" style="width: 100%;">
</section>
   <!-- Home -->
<section class="blog-section mt-2">
    <div class="container">
	    <div class="block mt-3" style="text-align: center;">
            <h3>Visi dan Misi LLDIKTI Wilayah V</h3>
        </div>
        <?php $no = 1;
        foreach ($visimisi as $admin): ?>
        <div class="row">
            <div class="col-md-11 col-sm-12 col-xs-12">
                <div class="left-side">
                    <div class="item-holder">
                        <div class="content-text pt-4">
							<p><span style="font-size:20px"><strong>Visi</strong></span></p>
							<p class="text-justify" style="color: black; margin-top: -10px;"><?= $admin->visi; ?></p>
							<p><span style="font-size:20px;"><strong>Misi</strong></span></p>
							<p style="color: black; margin-top: -10px;"><?= $admin->misi; ?>
							</p>
                        </div>
                    </div>
                </div>
            </div>
		</div>
        <?php endforeach ?>
	</div>
</section>