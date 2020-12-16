<div class="slider">
	<ul class="bxslider">
		<li>
			<div class="container">
				<div class="info">
					<h2>Saatnya <br><span>Kembali ke Sekolah</span></h2>
					<a href="<?=base_url("vimission")?>">Lihat Visi & Misi SDN CIMUNING 1</a>
				</div>
			</div>
			<!-- / content -->
		</li>
	</ul>
	<div class="bg-bottom"></div>
</div>

<section class="events">
	<div class="container">
		<h2>AGENDA SEKOLAH</h2>
        <?php foreach ($agenda as $ag) { ?>
            <article>
                <div class="current-date">
                    <p><?=mToMonth($ag->month)?></p>
                    <p class="date"><?=$ag->day?></p>
                </div>
                <div class="info">
                    <p><?=$ag->title?></p>
                    <a class="more" href="<?=base_url("agenda/$ag->id/read")?>">Baca Selengkapnya...</a>
                </div>
            </article>
        <?php } ?>
	
		<div class="btn-holder">
			<a class="btn blue" href="<?=base_url("agenda")?>">Lihat Semua Agenda</a>
		</div>
	</div>
	<!-- / container -->
</section>