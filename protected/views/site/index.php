<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<h1>Selamat datang di <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>


<h2>Daftar Ketersediaan Obat</h2>

<table class="table">
    <thead>
        <tr>
            <th>Nama Obat</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($obatList as $obat): ?>
        <tr>
            <td><?php echo CHtml::encode($obat->nama); ?></td>
            <td>Rp. <?php echo CHtml::encode($obat->harga); ?></td>
            <td><?php echo CHtml::encode($obat->stok); ?> strip</td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<p></p>

<p>Untuk informasi lebih lanjut silahkan hubungi customer service kami di: +6285315069098
<?php 
	// if (Yii::app()->user->getState('role') === 'admin') {
	//     echo "Welcome, Admin!";
	// }
?>
