
  <section class="product spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="trending__product">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="section-title">
                  <h4>MY Pokemon Raid</h4>
                </div>
              </div>
            </div>
            <?php if($my_pokemon):?>
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-8">         
               <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal2">Change my pokemon raid</button>
                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <center>
                        <h4 style="color:red">Warning, change pokemon squad means delete your pokemon squad!</h4>
                        </center>
                      </div>
                      <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <a href="<?=base_url('pokemon/change_pokemon');?>"><button type="button" class="btn btn-danger">Yes</button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            <div class="row mt-4">
              <?php foreach ($my_pokemon as $p) :?>
                <div class="col-lg-2 col-md-4 col-sm-4 col-4">
                  <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/images/pokemon/'.$p->name.'.png');?>">
                      <div class="ep"><?=$p->primary;?></div>
                      <div class="comment">Tier : <?=$p->Tier;?> </div>
                      <div class="view">CP : <?=$p->combat_power;?> </div>
                    </div>
                    <div class="product__item__text">
                      <h5><a href="#"><?=$p->name;?></a></h5>
                    </div>
                  </div>
                </div>
              <?php endforeach;?>
            <?php else:?>
            <div class="row justify-content-md-center">
              <h4 style="color:white">Don't have any Pokemon !</h4>
            </div>
            <div class="row justify-content-md-center mt-2">
              <a href="<?=base_url('pokemon');?>"><h6 style="color:red">Get Pokemon now</h6></a>
            <?php endif;?>     
            </div>
          </div>
        </div>               
      </div>         
    </div>
  </section>
      
      
      
    