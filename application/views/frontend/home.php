
			<!-- Home -->

			<div class="home">
				<div class="home_slider_container">
					<!-- Home Slider -->
					<div class="owl-carousel owl-theme home_slider">
						<!-- Home Slider Item -->
						<div class="owl-item">
							<div
								class="home_slider_background"
								style="background-image: url(<?= base_url() ?>frontend/images/image2.png)"
							></div>
							<div class="home_slider_content">
								<div class="container">
									<div class="row">
										<div class="col text-center">
											<div class="home_slider_title">
												Selamat Datang di PPID LLDIKTI V
											</div>
											<div class="home_slider_subtitle">
												Dapatkan layanan PPID dimanapun anda berada
											</div>
											<div class="home_slider_form_container"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Event  -->
			<div class="events">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="section_title_container text-center">
								<h2 class="section_title">Informasi Terbaru</h2>
							</div>
						</div>
					</div>
					<div class="row events_row">
						<!-- Event -->
						<?php $no = 1;
						foreach ($artikel as $admin): ?>
						<div class="col-lg-3 event_col">
							<div class="event event_left">
								<div class="event_body d-flex flex-row align-items-start justify-content-start">	
									<div class="event_content">
										<div class="event_image">
											<img src="<?= base_url('./gambar/'); ?><?= $admin->Gambar ?>" alt="" />
										</div>
										<div class="event_title">
											<a href="#"><?= $admin->Judul ?></a>
										</div>
										<div class="event_info_container">
											<div class="event_info">
												<i class="icofont-ui-clock" aria-hidden="true"></i><span><?= $admin->Waktu ?></span>
											</div>
											<div class="event_info">
												<i class="icofont-ui-user"aria-hidden="true"></i><span><?= $admin->Pengarang ?></span>
											</div>
											<div class="event_text">
												<p>
												<?= $admin->Deskripsi ?>
												</p>
											</div>
										</div>
									</div>	
								</div>
							</div>
						</div>
						<?php endforeach ?>
						<!-- Event -->
					</div>
				</div>
			</div>
			<!-- video  -->
			<div class="video">
				<div class="container">
					<div class="row">
						<div class="col">
							<h2 class="section_title">
								<div class="row">
									<div class="col">
										<h2 class="section_title">
											Video Pelayanan dan Pengelolaan Informasi Publik
										</h2>
									</div>
								</div>
							</h2>
						</div>
					</div>
					<div>
						<div class="konten row justify-content-around gap-3">
							<div class="col-md-6">
								<iframe
									style="width: 100%; height: 300px"
									src="https://www.youtube.com/embed/fnSx6UwcrcY?si=mCsoa34shj-peLMv"
									title="YouTube video player"
									frameborder="0"
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
									allowfullscreen
								></iframe>
							</div>
							<div class="col-md-6">
								<iframe
									style="width: 100%; height: 300px"
									src="https://www.youtube.com/embed/-yLzBXmQdx4?si=E1jkGg_2sjytrEH4"
									title="YouTube video player"
									frameborder="0"
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
									allowfullscreen
								></iframe>
							</div>
						</div>
						<div class="konten row justify-content-around">
							<div class="col-md-6">
								<iframe
									style="width: 100%; height: 300px"
									src="https://www.youtube.com/embed/lQAK7E3GYG8?si=DgguTftPXkvfuStd"
									title="YouTube video player"
									frameborder="0"
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
									allowfullscreen
								></iframe>
							</div>
							<div class="col-md-6">
								<iframe
									style="width: 100%; height: 300px"
									src="https://www.youtube.com/embed/tz9b_dnC8Xo?si=BFXX3sFDptFRvyV6"
									title="YouTube video player"
									frameborder="0"
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
									allowfullscreen
								></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Slides  -->
			<div class="slide container">
				<div class="home_slider_container">
					<div class="row">
						<div class="col">
							<h2 class="section_title">
								<div class="row">
									<div class="col">
										<h2
											class="section_title"
											style="text-align: center; padding-bottom: 30px"
										>
											Publikasi LLDIKTI Wilayah V Yogyakarta
										</h2>
									</div>
								</div>
							</h2>
						</div>
					</div>
					<!-- Home Slider -->
					<div class="owl-carousel owl-theme home_slider">
						<!-- Home Slider Item -->
						<div class="owl-item">
							<div
								class="slide_slider_background"
								style="background-image: url(<?= base_url() ?>frontend/images/image_9.png)"
							></div>
							<div class="home_slider_content">
								<div class="container">
									<div class="row">
										<div class="col text-center">
											<div class="slide_slider_title">
												Anugerah HUMAS DIKTIRISTEK, LLDIKTI Kembali Raih
												Prestasi
											</div>
											<!-- <div class="home_slider_subtitle">Future Of Education Technology</div> -->
											<div class="home_slider_form_container"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Home Slider Item -->
						<div class="owl-item">
							<div
								class="slide_slider_background"
								style="background-image: url(<?= base_url() ?>frontend/images/image_3.png)"
							></div>
							<div class="home_slider_content">
								<div class="container">
									<div class="row">
										<div class="col text-center">
											<div class="slide_slider_title">
												The Premium System Education
											</div>
											<!-- <div class="home_slider_subtitle">Future Of Education Technology</div> -->
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Home Slider Item -->
						<div class="owl-item">
							<div
								class="slide_slider_background"
								style="background-image: url(<?= base_url() ?>frontend/images/home_slider_1.jpg)"
							></div>
							<div class="home_slider_content">
								<div class="container">
									<div class="row">
										<div class="col text-center">
											<div class="slide_slider_title">
												The Premium System Education
											</div>
											<!-- <div class="home_slider_subtitle">Future Of Education Technology</div> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Nav -->
				<div class="home_slider_nav home_slider_prev">
					<i class="icofont-thin-left" aria-hidden="true"></i>
				</div>
				<div class="home_slider_nav home_slider_next">
					<i class="icofont-thin-right" aria-hidden="true"></i>
				</div>
			</div>
			<!-- Features -->
			<div class="features">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="section_title_container text-center">
								<h2 class="section_title">Welcome To Unicat E-Learning</h2>
								<div class="section_subtitle">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices
										fermentum congue, quam velit venenatis sem
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row features_row">
						<!-- Features Item -->
						<div class="col-lg-3 feature_col">
							<div class="feature text-center trans_400">
								<div class="feature_icon">
									<img src="<?= base_url() ?>frontend/images/icon_1.png" alt="" />
								</div>
								<h3 class="feature_title">The Experts</h3>
								<div class="feature_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
								</div>
							</div>
						</div>

						<!-- Features Item -->
						<div class="col-lg-3 feature_col">
							<div class="feature text-center trans_400">
								<div class="feature_icon">
									<img src="<?= base_url() ?>frontend/images/icon_2.png" alt="" />
								</div>
								<h3 class="feature_title">Book & Library</h3>
								<div class="feature_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
								</div>
							</div>
						</div>

						<!-- Features Item -->
						<div class="col-lg-3 feature_col">
							<div class="feature text-center trans_400">
								<div class="feature_icon">
									<img src="<?= base_url() ?>frontend/images/icon_3.png" alt="" />
								</div>
								<h3 class="feature_title">Best Courses</h3>
								<div class="feature_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
								</div>
							</div>
						</div>

						<!-- Features Item -->
						<div class="col-lg-3 feature_col">
							<div class="feature text-center trans_400">
								<div class="feature_icon">
									<img src="<?= base_url() ?>frontend/images/icon_4.png" alt="" />
								</div>
								<h3 class="feature_title">Award & Reward</h3>
								<div class="feature_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>