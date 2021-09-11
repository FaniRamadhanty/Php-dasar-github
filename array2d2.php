<?php

$negara =  array [
    array['BENUA ASIA' => ['Indonesia' => ['Ambon','Balik Papan','Banda Aceh','Bandar lampung','Indonesia'],
                             'Malaysia' =>  ['Kuala Lumpur','Seberang Perai','Kajang','Klang','Subang Jaya'],
                             'Singapura' => ['Western Islands','Changi Bay','Marina East','Marina South','Simpang']]],
    array['BENUA AFRIKA' => ['Mesir' => ['Cairo','Alexandria','Giza','Shubra El Kheima','Suez'],
                             'Libya' => ['Tripoli','Benghazi','Misrata','Bayda','Zawiya'],
                             'Al jazair' => ['Relizane','Basyar','Tipasa','Bilda','El Bayadh']]],
    array['BENUA AUSTRALIA' => ['Victoria' => ['Benalla','Ararat','Ballarat','Geelong','Bendino'],
                                'South Australia' => ['Adelaide','Murray Bridge','Mount Barker','Whyalla','Victor Harbor'],
                                'Queensland' => ['Brisbane','Cairns','Gold Coast','Bundaberg','Ipswich']]],
    array['BENUA EROPA'=> ['Rumania' =>  ['Bukares','Timişoara','Iaşi','Cluj-Napoca','Craiova'],
                           'Polandia' => ['Barcin','Barczewo','Bardo','Barlinek','Barwice'],
                           'Hungaria' => ['Eger','Bábolna','Baja','Kiskunhalas ','Kisújszállás']]],]
;
?>


<ul>
    <?php foreach ($negara as $key => $value): ?>
    <li>Benua - benua di <? = $value[0] ?> adalah <?= $value[1].
    ',' . $value[2].','.$value[3] ?></li>
    <?php endforeach ?>
</ul>


