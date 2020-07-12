<div class="container">
   <div class="row h-50">
      <div class="col-md-8">
          <br/>
         <img src="http://localhost/loo/assets/mdb/img/heroi/<?= $heroi[$index]['image']?>/<?= $image?>.jpg" class="img-fluid" width="750" height="500">
      </div>
      <div class="col-md-4 card">
         <div class="card-body">
             <h4 class="font-weight-bold card-title text-center"><?= $heroi[$index]['title']?></h4>
             <p class="alert alert-primary"><?= $heroi[$index]['descricao']?><p>
             <p class="alert alert-secondary"><?= $heroi[$index]['observacao']?></p>
         </div>
     </div>
    </div>
    <p class="text-right mt-2">Guarulhos, 07/03/2019</p>
</div>
