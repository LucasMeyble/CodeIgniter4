<!-- aqui eu extendo as coisas do default -->
<?= $this->extend('layouts/default') ?>

<?= $this->section('seccao1') ?>
  <h3>section1</h3>
<?= $this->endSection(); ?>

<?= $this->section('seccao2') ?>
  <h3>section2</h3>
<?= $this->endSection(); ?>