<div class="divider"></div>

<div class="content">
	<div class="container">

		<div class="main-content" style="width: 100%">
            <h1>Agenda Sekolah</h1>
            <?php foreach ($agendas as $agenda) { ?>
			<section class="posts-con">
				<article>
					<div class="current-date">
						<p><?=mToMonth($agenda->month)?></p>
						<p class="date"><?=$agenda->day?></p>
					</div>
					<div class="info">
						<h3>
                            <a href="<?=base_url("agenda/$agenda->id/read")?>"><?=$agenda->title?></a>
                        </h3>
						<p class="info-line"><span class="place">SDN Cimuning 1</span></p>
					</div>
                </article>
            <?php } ?>
			</section>
		</div>

	</div>
	<!-- / container -->
</div>