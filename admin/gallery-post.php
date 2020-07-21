<?php

include 'include/session.php';
?>


    <?php
    include 'include/header.php';
    include 'include/adminnav.php';
    ?>
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <?php
        include 'include/adminsidenav.php';

        ?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <main class="main-content">
				<div class="page">
					<div class="container">
						<div class="text-center">
							<div class="filter-links filterable-nav">
								<select class="mobile-filter">
									<option value="*">Show all</option>
									<option value=".hair">hair</option>
									<option value=".manicure">manicure</option>
									<option value=".pedicure">pedicure</option>
									<option value=".face">face</option>
								</select>
								<a href="#" class="current wow fadeInRight" data-filter="*">Show all</a>
								<a href="#" class="wow fadeInRight" data-wow-delay=".2s" data-filter=".hair">hair</a>
								<a href="#" class="wow fadeInRight" data-wow-delay=".4s" data-filter=".manicure">manicure</a>
								<a href="#" class="wow fadeInRight" data-wow-delay=".6s" data-filter=".pedicure">pedicure</a>
								<a href="#" class="wow fadeInRight" data-wow-delay=".8s" data-filter=".face">face</a>
						</div>

						<div class="filterable-items">
							<div class="gallery-item filterable-item manicure">
								<a href="manicure/image1.jpg">
									<figure class="featured-image">
										<img src="manicure/image1.jpg" alt="">
										<figcaption>
											<h2 class="gallery-title">Nails treat</h2>
											<p>filing and treatment of broken hails</p>
										</figcaption>
									</figure>
								</a>
							</div>

							<div class="gallery-item filterable-item makeup">
								<a href="pictures/images (15).jpeg">
									<figure class="featured-image">
										<img src="pictures/images (15).jpeg" alt="">
										<figcaption>
											<h2 class="gallery-title">Big braids</h2>
											<p>crochet twisting</p>
										</figcaption>
									</figure>
								</a>
							</div>

							<div class="gallery-item filterable-item face">
								<a href="face/image1.jpg">
									<figure class="featured-image">
										<img src="face/image1.jpg" alt="">
										<figcaption>
											<h2 class="gallery-title">Dream time</h2>
											<p>treatment for aging or wrinkle eye</p>
										</figcaption>
									</figure>
								</a>
							</div>
							<div class="gallery-item filterable-item hair">
								<a href="hair/image1.jpeg">
									<figure class="featured-image">
										<img src="hair/image1.jpeg" alt="">
										<figcaption>
											<h2 class="gallery-title">indian Hair</h2>
											<p>Virgin india hair (color 1)</p>
										</figcaption>
									</figure>
								</a>
							</div>

							<div class="gallery-item filterable-item body">
								<a href="pedicure/image4.jpg">
									<figure class="featured-image">
										<img src="pedicure/image4.jpg" alt="">
										<figcaption>
											<h2 class="gallery-title">soft toes</h2>
											<p>Epidermis toes treatment</p>
										</figcaption>
									</figure>
								</a>
							</div>

							<div class="gallery-item filterable-item hair">
								<a href="hair/image2.jpeg">
									<figure class="featured-image">
										<img src="hair/image2.jpeg" alt="">
										<figcaption>
											<h2 class="gallery-title">Brazillian Hair</h2>
											<p>Magical curl (color 1)</p>
										</figcaption>
									</figure>
								</a>
							</div>

							<div class="gallery-item filterable-item body">
								<a href="pictures/image14.jpeg">
									<figure class="featured-image">
										<img src="pictures/image14.jpeg" alt="">
										<figcaption>
											<h2 class="gallery-title">small braids</h2>
											<p>Crochet twist</p>
										</figcaption>
									</figure>
								</a>
							</div>

							<div class="gallery-item filterable-item hair">
								<a href="hair/image5.jpg">
									<figure class="featured-image">
										<img src="hair/image5.jpg" alt="">
										<figcaption>
											<h2 class="gallery-title">brazillian Hair</h2>
											<p>Deep wave 2 (colour 57)</p>
										</figcaption>
									</figure>
								</a>
							</div>

							<div class="gallery-item filterable-item pedicure">
								<a href="pedicure/image1.jpg">
									<figure class="featured-image">
										<img src="pedicure/image1.jpg" alt="">
										<figcaption>
											<h2 class="gallery-title">baby foot</h2>
											<p>cracking hills treatment</p>
										</figcaption>
									</figure>
								</a>
							</div>

							<div class="gallery-item filterable-item pedicure">
								<a href="pedicure/image2.jpg">
									<figure class="featured-image">
										<img src="pedicure/image2.jpg" alt="">
										<figcaption>
											<h2 class="gallery-title">soft foot</h2>
											<p>harden dead epidermis layer removal</p>
										</figcaption>
									</figure>
								</a>
							</div>

							<div class="gallery-item filterable-item hair">
								<a href="hair/image3.jpeg">
									<figure class="featured-image">
										<img src="hair/image3.jpeg" alt="">
										<figcaption>
											<h2 class="gallery-title">Mongolian Hair</h2>
											<p>Mongolian curly (color 17)</p>
										</figcaption>
									</figure>
								</a>
							</div>

							<div class="gallery-item filterable-item">
								<a href="pictures/images (16).jpeg">
									<figure class="featured-image">
										<img src="pictures/images (16).jpeg" alt="">
										<figcaption>
											<h2 class="gallery-title">Big braids</h2>
											<p>Ghana weaving</p>
										</figcaption>
									</figure>
								</a>
							</div>

							<div class="gallery-item filterable-item hair">
								<a href="hair/image4.jpg">
									<figure class="featured-image">
										<img src="hair/image4.jpg" alt="">
										<figcaption>
											<h2 class="gallery-title">brazillian Hair</h2>
											<p>Deep wave (color 27)</p>
										</figcaption>
									</figure>
								</a>
							</div>

							<div class="gallery-item filterable-item pedicure">
								<a href="pedicure/image3.jpg">
									<figure class="featured-image">
										<img src="pedicure/image3.jpg" alt="">
										<figcaption>
											<h2 class="gallery-title">Hot legs</h2>
											<p>hair removal treatment</p>
										</figcaption>
									</figure>
								</a>
							</div>

							<div class="gallery-item filterable-item face">
								<a href="face/image4.jpg">
									<figure class="featured-image">
										<img src="face/image4.jpg" alt="">
										<figcaption>
											<h2 class="gallery-title">Happy hour</h2>
											<p>Acne treatment</p>
										</figcaption>
									</figure>
								</a>
							</div>

							<div class="gallery-item filterable-item hair">
								<a href="hair/image6.jpeg">
									<figure class="featured-image">
										<img src="hair/image6.jpeg" alt="">
										<figcaption>
											<h2 class="gallery-title">Peruvian Hair</h2>
											<p>silky straight (color 4)</p>
										</figcaption>
									</figure>
								</a>
							</div>

							<div class="gallery-item filterable-item hair">
								<a href="hair/image7.jpeg">
									<figure class="featured-image">
										<img src="hair/image7.jpeg" alt="">
										<figcaption>
											<h2 class="gallery-title">Austrian Hair</h2>
											<p>Austrian rolls (color 2)</p>
										</figcaption>
									</figure>
								</a>
							</div>

							<div class="gallery-item filterable-item face">
								<a href="face/image3.jpg">
									<figure class="featured-image">
										<img src="face/image3.jpg" alt="">
										<figcaption>
											<h2 class="gallery-title">That Smile</h2>
											<p>days after sun burn treatment</p>
										</figcaption>
									</figure>
								</a>
							</div>
							<div class="gallery-item filterable-item manicure">
								<a href="manicure/image3.jpg">
									<figure class="featured-image">
										<img src="manicure/image3.jpg" alt="">
										<figcaption>
											<h2 class="gallery-title">Exfoliate</h2>
											<p>exfolating of dead skin cells</p>
										</figcaption>
									</figure>
								</a>
							</div>

							<div class="gallery-item filterable-item manicure">
								<a href="manicure/image4.jpg">
									<figure class="featured-image">
										<img src="manicure/image4.jpg" alt="">
										<figcaption>
											<h2 class="gallery-title">wrinkle treat</h2>
											<p>Dry skin treatment</p>
										</figcaption>
									</figure>
								</a>
							</div>

							<div class="gallery-item filterable-item face">
								<a href="face/image2.jpg">
									<figure class="featured-image">
										<img src="face/image2.jpg" alt="">
										<figcaption>
											<h2 class="gallery-title">Young again</h2>
											<p>Wrinkle treatment</p>
										</figcaption>
									</figure>
								</a>
							</div>

							<div class="gallery-item filterable-item face">
								<a href="face/image5.jpg">
									<figure class="featured-image">
										<img src="face/image5.jpg" alt="">
										<figcaption>
											<h2 class="gallery-title">Summer time</h2>
											<p>Sun burn treatment</p>
										</figcaption>
									</figure>
								</a>
							</div>

							<div class="gallery-item filterable-item manicure">
								<a href="manicure/image2.jpg">
									<figure class="featured-image">
										<img src="manicure/image2.jpg" alt="">
										<figcaption>
											<h2 class="gallery-title">Nail Polish</h2>
											<p>Dirt extraction and polishing</p>
										</figcaption>
									</figure>
								</a>
							</div>

							<div class="gallery-item filterable-item hair">
								<a href="hair/image8.jpeg">
									<figure class="featured-image">
										<img src="hair/image8.jpeg" alt="">
										<figcaption>
											<h2 class="gallery-title">Russian Hair</h2>
											<p>Russian twist (color 1)</p>
										</figcaption>
									</figure>
								</a>
							</div>

						</div>
					</div>
				</div>
			</main>



    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>

		<script src="../js/plugins.js"></script>
		<script src="../js/app.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>
