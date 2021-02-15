<div>

  <?php foreach ($dados as $dado):?>
    
      <?= view_cell('\App\Libraries\Componentes::cliente', ['cliente'=>$dado]); ?>
    
  <?php endforeach;?> 

</div>
