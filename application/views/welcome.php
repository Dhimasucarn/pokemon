
  <!-- <div class="container">
  <h1>My Pokemon</h1>
    
    <div class="card">
      <img class="card-img-top" src="<?=base_url('assets/images/bag.png');?>" alt="Card image cap">
      <div class="card-body">
        <center><h2> Select Your Pokemon</h2></center>
        <br>
        <center>
        <div class="form-group form-inline">
          <label>Filter Elemen</label>
          <select name="multiSelectSearch" id="multiSelectSearch" class="form-control ml-2">
              <option value="">All</option>
            <?php foreach ($elemen as $e):?>
              <option value="<?=$e->primary;?>"><?=$e->primary;?></option>
            <?php endforeach;?>  
          </select>
        </div>
        <form action ="<?=base_url('Pokemon/boss');?>" method="post">
          <button type = "submit" class="btn btn-success btn-block mb-4">SAVE</button>
          <br>
        
            <select class="image-picker" name="yaha[]" multiple required>
              <?php foreach ($elemen as $e):?>
                <optgroup label="<?=$e->primary;?>">
                  <?php for ($i=0; $i < count($primary[$e->primary]) ; $i++):?>
                    <option data-img-src="<?=base_url('assets/images/pokemon/'.$primary[$e->primary][$i].'.png');?>" value="<?=$primary[$e->primary][$i];?>" data-img-class="custom-class"><?=$primary[$e->primary][$i]?></option>
                  <?php endfor; ?>
                </optgroup>
              <?php endforeach;?>  
            </select>
          

        </form>
        </center>
      </div>
    </div>
  </div> -->






  
    <div class="row justify-content-md-center">
        <div class="col col-lg-4">
            <br>
            <center><h4><?= $this->session->flashdata('message'); ?></h4></center>      
        </div>
    </div>
  <!-- Product Section Begin -->
  <section class="product spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="trending__product">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="section-title">
                  <h4>Select 6 Pokemon and then click submit button below</h4>
                </div>
              </div>    
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <div class="product__item">              
                      <center>
                        <form action="<?=base_url('pokemon/boss');?>" method="post">
                        <select class="image-picker" name="yaha[]" multiple required>
                          <?php foreach ($elemen as $e):?>
                            <optgroup label="<?=$e->primary;?>">
                              <?php for ($i=0; $i < count($primary[$e->primary]) ; $i++):?>
                                <option data-img-src="<?=base_url('assets/images/pokemon/'.$primary[$e->primary][$i].'.png');?>" value="<?=$primary[$e->primary][$i];?>" data-img-class="custom-class"><?=$primary[$e->primary][$i]?></option>
                              <?php endfor; ?>
                            </optgroup>
                          <?php endforeach;?>  
                        </select>
                        <button class="btn btn-block btn-danger">Submit</button> 
                        </form>
                      </center> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


