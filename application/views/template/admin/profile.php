<li class="xn-profile">
    <a class="profile-mini">
        <img src="<?= base_url("assets/joli/img/twh.png") ?>" alt="User" />
    </a>
    <div class="profile">
        <div class="profile-image" style="border: none;">
            <img src="<?= base_url("assets/joli/img/twh.png") ?>" alt="User" />
        </div>
        <div class="profile-data">
            <div class="profile-data-name"><?=$this->auth->name?></div>
            <div class="profile-data-title">Level: <?=$this->auth->role?></div>
        </div>
    </div>
</li>