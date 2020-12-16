<div class="divider"></div>

<div class="content">
	<div class="container">

		<div class="main-content" style="width: 100%">
            <h1><?=$agenda->title?></h1>
			<section class="posts-con">
				<article>
					<div class="current-date">
						<p><?=mToMonth($agenda->month)?></p>
						<p class="date"><?=$agenda->day?></p>
					</div>
					<div class="info">
                        <p class="info-line"><span class="place">SDN Cimuning 1</span></p>
                        <p><?=$agenda->description?></p>
					</div>
                </article>
			</section>
		</div>

	</div>
	<!-- / container -->
</div>