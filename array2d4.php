<?php
$negara =  array (
    array('BENUA ASIA', 'Indonesia' , 'Ambon','Balik Papan','Banda Aceh','Bandar lampung','Bandung',
                        'Malaysia' , 'Kuala Lumpur','Seberang Perai','Kajang','Klang','Subang Jaya',
                        'Singapura' , 'Western Islands','Changi Bay','Marina East','Marina South','Simpang'),
                      
    array ('BENUA AFRIKA' , 'Mesir' , 'Cairo','Alexandria','Giza','Shubra El Kheima','Suez',
                            'Libya' , 'Tripoli','Benghazi','Misrata','Bayda','Zawiya',
                            'Al jazair' , 'Relizane','Basyar','Tipasa','Bilda','El Bayadh'),
    array('BENUA AUSTRALIA','Victoria','Benalla','Ararat','Ballarat','Geelong','Bendino',
                            'South Australia' , 'Adelaide','Murray Bridge','Mount Barker','Whyalla','Victor Harbor',
                            'Queensland','Brisbane','Cairns','Gold Coast','Bundaberg','Ipswich'),
    array('BENUA EROPA','Rumania','Bukares','Timişoara','Iaşi','Cluj-Napoca','Craiova',
                       'Polandia','Barcin','Barczewo','Bardo','Barlinek','Barwice',
                       'Hungaria','Eger','Bábolna','Baja','Kiskunhalas ','Kisújszállás'
    ));
?>
<ul>
    <?php foreach ($negara as $key => $value): ?>
    <li>Negara di <?= $value[0] ?> adalah <?= $value[1].
    ','. $value[7].','.$value[8] . '<br>'.'Kota kota di ' .  $value[1] . ' adalah '.  $value[2] . ', '.  $value[3] . ', ' . $value[4] . ', '  .  $value[5]
    . ', '  .  $value[6] . ', '  . '<br>'.'Kota kota di ' .  $value[7] . ' adalah ' . $value[8] . ', '  .  $value[9]
    . ', '  .  $value[10] . ', ' .  $value[11] . ', '.  $value[12] . ', '. '<br>'.'Kota kota di ' .  $value[13] . ' adalah ' . $value[14] . ', '  .  $value[15]
    . ', '  .  $value[16] . ', ' .  $value[17] . ', '.  $value[18] . ', '
    ?></li>
    <?php endforeach ?>
</ul>
