
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
            <div class="row">
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
            </div>

            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="section-title">
                  <h4>Select Boss Pokemon Raid</h4>
                </div>
              </div>
            </div>
            <div class="row">
              <?php foreach ($boss as $b): ?>
                <div class="col-lg-2 col-md-4 col-sm-4 col-4">
                  <div class="product__item">   
                      <center class="m-t-30"> <a href="#" data-toggle="modal" data-target="#exampleModal<?=$b->name;?>">
                        <div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/images/boss/'.$b->name.'.gif');?>">
                          <div class="ep"><?=$p->primary;?></div>
                          <div class="comment">SELECT</div>
                        </div>
                        <div class="product__item__text">
                          <h5><a href="#"><?=$p->name;?></a></h5>
                        </div>
                      </center>

                      <!-- modal -->
                      <div class="modal fade" id="exampleModal<?=$b->name;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel"><?=$b->name;?> Combat Power</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action = "<?=base_url('Pokemon/recomendation/'.$b->name);?>" method="post">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Combat Power</label>
                                  <input type="number" class="form-control" id="cp" name="cp" min="274"  placeholder="Enter Combat Power" required>
                                  <small id="cp" class="form-text text-muted">Min = 274 </small>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary btn-block">Save changes</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- end modal -->  
                  </div>
                </div>
              <?php endforeach;?>
            </div>  
          </div>
        </div>               
      </div>         
    </div>
  </section>
      
      
      
    