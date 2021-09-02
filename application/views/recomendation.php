

<?php


// memfilter pokemon sesuai yang dipilih //
// preprocessing data //
$id_user = $this->session->userdata('id_user');
$pokemon = $this->db->query("SELECT * from pokemon ")->result();
$mypokemon = $this->db->query("SELECT * from my_pokemon where id_user = '$id_user'")->result();

   
//merubah array objek ke array assosiatif//
$boss2 = json_decode(json_encode($boss), true);  
  

//merubah array objek ke array assosiatif//
$pokemon2 = json_decode(json_encode($pokemon), true);
$mypokemon2 = json_decode(json_encode($mypokemon), true);

$tiers = $_POST['cp'];
if($tiers >= 3000 && $tiers < 4431){
  $Tierx = 0;

}elseif($tiers >= 2526){
  $Tierx = 1;

}elseif($tiers >= 2004){
  $Tierx = 2;

}elseif($tiers >= 1521){
  $Tierx = 3;

}elseif($tiers >= 1002){
  $Tierx = 4;

}elseif($tiers >= 508){
  $Tierx = 5;

}elseif($tiers >= 274){
  $Tierx = 6;
}


      // My pokemon 

//////////////////////////////////////////////////////////////////////////////////////////////////////
 //////////////proses menghitung distance tiap pokemon2 dihitung per fiturnya dahulu 
 ////////////////////////////// tahap rumus  tiap fitur |data profile|-|data pokemon|  // /////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////
                  $counter = [];
                  for ($i=0; $i < count($mypokemon2) ; $i++) { 
                    if($boss2[0]['primary'] == 'dragon' && $mypokemon2[$i]['primary'] == 'Fairy'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);

                    }elseif($boss2[0]['primary'] == 'dragon' && $mypokemon2[$i]['primary'] == 'Dragon'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);



                    }elseif($boss2[0]['primary'] == 'fight' && $mypokemon2[$i]['primary'] == 'Flying'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);

                    }elseif($boss2[0]['primary'] == 'fight' && $mypokemon2[$i]['primary'] == 'Psychic'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);

                    }elseif($boss2[0]['primary'] == 'fight' && $mypokemon2[$i]['primary'] == 'Ghost' ){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);



                    }elseif($boss2[0]['primary'] == 'Fire' && $mypokemon2[$i]['primary'] == 'Water' ){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);

                    }elseif($boss2[0]['primary'] == 'Fire' && $mypokemon2[$i]['primary'] == 'Ground'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);





                    }elseif($boss2[0]['primary'] == 'flying' && $mypokemon2[$i]['primary'] == 'Rock' ){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);

                    }elseif($boss2[0]['primary'] == 'flying' && $mypokemon2[$i]['primary'] == 'Electric' ){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);

                    }elseif($boss2[0]['primary'] == 'flying' && $mypokemon2[$i]['primary'] == 'Psychic'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);

                    





                    }elseif($boss2[0]['primary'] == 'ground' && $mypokemon2[$i]['primary'] == 'Ground'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);

                    }elseif($boss2[0]['primary'] == 'ground' && $mypokemon2[$i]['primary'] == 'Water'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);




                    }elseif($boss2[0]['primary'] == 'normal' && $mypokemon2[$i]['primary'] == 'Fighting'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);



                    }elseif($boss2[0]['primary'] == 'psychic' && $mypokemon2[$i]['primary'] == 'Dark'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);

                    }elseif($boss2[0]['primary'] == 'psychic' && $mypokemon2[$i]['primary'] == 'Bug'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);




                    }elseif($boss2[0]['primary'] == 'steel' && $mypokemon2[$i]['primary'] == 'Fire'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);

                    }elseif($boss2[0]['primary'] == 'steel' && $mypokemon2[$i]['primary'] == 'Ground'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);



                    }else{
                      $jumlah_x = 100;
                      array_push($counter, $jumlah_x);
                    }
                    
                  }

                  // $cp = [];
                  //  for ($i=0; $i < count($pokemon2) ; $i++) { 
                  //   $jumlah_0 = abs($pokemon2[$i]['combat_power'] - $_POST['cp']);
                  //   array_push($cp, $jumlah_0);
                  // }
                 


                  $Tier = [];
                   for ($i=0; $i < count($mypokemon2) ; $i++) { 
                    $jumlah_2 = abs($mypokemon2[$i]['Tier'] - $Tierx);
                    array_push($Tier, $jumlah_2);
                  }

                  $Ground = [];
                   for ($i=0; $i < count($mypokemon2) ; $i++) { 
                    $jumlah_3 = abs($mypokemon2[$i]['Ground'] - $boss2[0]['Ground']);
                    array_push($Ground, $jumlah_3);
                  }

                  $Rock = [];
                   for ($i=0; $i < count($mypokemon2) ; $i++) { 
                    $jumlah_4 = abs($mypokemon2[$i]['Rock'] - $boss2[0]['Rock']);
                    array_push($Rock, $jumlah_4);
                  }

                  $Fire = [];
                   for ($i=0; $i < count($mypokemon2) ; $i++) { 
                    $jumlah_5 = abs($mypokemon2[$i]['Fire'] - $boss2[0]['Fire']);
                    array_push($Fire, $jumlah_5);
                  }

                  $water = [];
                   for ($i=0; $i < count($mypokemon2) ; $i++) { 
                    $jumlah_6 = abs($mypokemon2[$i]['water'] - $boss2[0]['water']);
                    array_push($water,  $jumlah_6);
                  }

                  $steel = [];
                   for ($i=0; $i < count($mypokemon2) ; $i++) { 
                    $jumlah_7 = abs($mypokemon2[$i]['steel'] - $boss2[0]['steel']);
                    array_push($steel,  $jumlah_7);
                  }

                  $ice = [];
                   for ($i=0; $i < count($mypokemon2) ; $i++) { 
                     $jumlah_8 = abs($mypokemon2[$i]['ice'] - $boss2[0]['ice']);
                    array_push($ice,  $jumlah_8);
                  }

                  $poison = [];
                   for ($i=0; $i < count($mypokemon2) ; $i++) { 
                     $jumlah_9 = abs($mypokemon2[$i]['poison'] - $boss2[0]['poison']);
                    array_push($poison,  $jumlah_9);
                  }

                  $electric = [];
                   for ($i=0; $i < count($mypokemon2) ; $i++) { 
                     $jumlah_10 = abs($mypokemon2[$i]['electric'] - $boss2[0]['electric']);
                    array_push($electric,  $jumlah_10);
                  }

                  $normal = [];
                   for ($i=0; $i < count($mypokemon2) ; $i++) { 
                     $jumlah_11 = abs($mypokemon2[$i]['normal'] - $boss2[0]['normal']);
                    array_push($normal,  $jumlah_11);
                  }

                  $fight = [];
                   for ($i=0; $i < count($mypokemon2) ; $i++) { 
                     $jumlah_12 = abs($mypokemon2[$i]['fight'] - $boss2[0]['fight']);
                    array_push($fight,  $jumlah_12);
                  }

                  $bug = [];
                   for ($i=0; $i < count($mypokemon2) ; $i++) { 
                     $jumlah_13 = abs($mypokemon2[$i]['bug'] - $boss2[0]['bug']);
                    array_push($bug,  $jumlah_13);
                  }

                  $ghost = [];
                   for ($i=0; $i < count($mypokemon2) ; $i++) { 
                     $jumlah_14 = abs($mypokemon2[$i]['ghost'] - $boss2[0]['ghost']);
                    array_push($ghost,  $jumlah_14);
                  }

                  $grass = [];
                   for ($i=0; $i < count($mypokemon2) ; $i++) { 
                     $jumlah_15 = abs($mypokemon2[$i]['grass'] - $boss2[0]['grass']);
                    array_push($grass,  $jumlah_15);
                  }

                  $psychic = [];
                   for ($i=0; $i < count($mypokemon2) ; $i++) { 
                     $jumlah_16 = abs($mypokemon2[$i]['psychic'] - $boss2[0]['psychic']);
                    array_push($psychic,  $jumlah_16);
                  }

                  $flying = [];
                   for ($i=0; $i < count($mypokemon2) ; $i++) { 
                     $jumlah_17 = abs($mypokemon2[$i]['flying'] - $boss2[0]['flying']);
                    array_push($flying,  $jumlah_17);
                  }

                  $dragon = [];
                   for ($i=0; $i < count($mypokemon2) ; $i++) { 
                     $jumlah_18 = abs($mypokemon2[$i]['dragon'] - $boss2[0]['dragon']);
                    array_push($dragon,  $jumlah_18);
                  }

                  $dark = [];
                   for ($i=0; $i < count($mypokemon2) ; $i++) { 
                     $jumlah_19 = abs($mypokemon2[$i]['dark'] - $boss2[0]['dark']);
                    array_push($dark,  $jumlah_19);
                  }

                  $psychic = [];
                   for ($i=0; $i < count($mypokemon2) ; $i++) { 
                     $jumlah_20 = abs($mypokemon2[$i]['psychic'] - $boss2[0]['psychic']);
                    array_push($psychic,  $jumlah_20);
                  }
                
                  $fairy = [];
                   for ($i=0; $i < count($mypokemon2) ; $i++) { 
                     $jumlah_21 = abs($mypokemon2[$i]['fairy'] - $boss2[0]['fairy']);
                    array_push($fairy,  $jumlah_21);
                  }

          
///////////////////////////////////////////////////////////////////////////////////////////////////////
 //////////////proses menghitung jumlah distance tiap pokemon2 setelah dihitung per fiturnya // /////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////

              
          
  ///////////////////////////////////////////////////////////////////////////////////////////////////////
 //////////////   memasukkan bobot kedalam array pokemon dari database  ///////////
///////////////////////////////////////////////////////////////////////////////////////////////////////
?>
<?php

                $b = 0; 
              foreach($mypokemon as $row){
                $totalmypokemon = $Tier[$b] + $Ground[$b] + $Rock[$b] + $Fire[$b] + $water[$b] + $steel[$b] + $ice[$b] + $poison[$b] + $electric[$b] + $normal[$b] + $fight[$b] + $bug[$b] + $ghost[$b] + $grass[$b] + $psychic[$b] + $flying[$b] + $dragon[$b] + $dark[$b] + $fairy[$b] + $counter[$b];
                $sortmypokemon[$row->name] = $totalmypokemon; // array yang berisi data tiap id_pokemon2 yang punya nilai bobot   
                $b++;
              }

  ///////////////////////////////// HASIL REKOMENDASI ////////////////////////////////////
    // tampilkan hasil rekomendasi berdasarkan bobot terkecil ke  terbesar //

      asort($sortmypokemon);
      





                // Another Pokemon
?>
<?php

      

//////////////////////////////////////////////////////////////////////////////////////////////////////
 //////////////proses menghitung distance tiap pokemon2 dihitung per fiturnya dahulu 
 ////////////////////////////// tahap rumus  tiap fitur |data profile|-|data pokemon|  // /////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////
                  $counter = [];
                  for ($i=0; $i < count($pokemon2) ; $i++) { 
                    if($boss2[0]['primary'] == 'dragon' && $pokemon2[$i]['primary'] == 'Fairy'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);

                    }elseif($boss2[0]['primary'] == 'dragon' && $pokemon2[$i]['primary'] == 'Dragon'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);



                    }elseif($boss2[0]['primary'] == 'fight' && $pokemon2[$i]['primary'] == 'Flying'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);

                    }elseif($boss2[0]['primary'] == 'fight' && $pokemon2[$i]['primary'] == 'Psychic'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);

                    }elseif($boss2[0]['primary'] == 'fight' && $pokemon2[$i]['primary'] == 'Ghost' ){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);



                    }elseif($boss2[0]['primary'] == 'Fire' && $pokemon2[$i]['primary'] == 'Water' ){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);

                    }elseif($boss2[0]['primary'] == 'Fire' && $pokemon2[$i]['primary'] == 'Ground'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);





                    }elseif($boss2[0]['primary'] == 'flying' && $pokemon2[$i]['primary'] == 'Rock' ){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);

                    }elseif($boss2[0]['primary'] == 'flying' && $pokemon2[$i]['primary'] == 'Electric' ){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);

                    }elseif($boss2[0]['primary'] == 'flying' && $pokemon2[$i]['primary'] == 'Psychic'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);

                    





                    }elseif($boss2[0]['primary'] == 'ground' && $pokemon2[$i]['primary'] == 'Ground'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);

                    }elseif($boss2[0]['primary'] == 'ground' && $pokemon2[$i]['primary'] == 'Water'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);




                    }elseif($boss2[0]['primary'] == 'normal' && $pokemon2[$i]['primary'] == 'Fighting'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);



                    }elseif($boss2[0]['primary'] == 'psychic' && $pokemon2[$i]['primary'] == 'Dark'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);

                    }elseif($boss2[0]['primary'] == 'psychic' && $pokemon2[$i]['primary'] == 'Bug'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);




                    }elseif($boss2[0]['primary'] == 'steel' && $pokemon2[$i]['primary'] == 'Fire'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);

                    }elseif($boss2[0]['primary'] == 'steel' && $pokemon2[$i]['primary'] == 'Ground'){
                      $jumlah_x = 0;
                      array_push($counter, $jumlah_x);



                    }else{
                      $jumlah_x = 100;
                      array_push($counter, $jumlah_x);
                    }
                    
                  }

                  // $cp = [];
                  //  for ($i=0; $i < count($pokemon2) ; $i++) { 
                  //   $jumlah_0 = abs($pokemon2[$i]['combat_power'] - $_POST['cp']);
                  //   array_push($cp, $jumlah_0);
                  // }
                 


                  $Tier = [];
                   for ($i=0; $i < count($pokemon2) ; $i++) { 
                    $jumlah_2 = abs($pokemon2[$i]['Tier'] - $Tierx);
                    array_push($Tier, $jumlah_2);
                  }

                  $Ground = [];
                   for ($i=0; $i < count($pokemon2) ; $i++) { 
                    $jumlah_3 = abs($pokemon2[$i]['Ground'] - $boss2[0]['Ground']);
                    array_push($Ground, $jumlah_3);
                  }

                  $Rock = [];
                   for ($i=0; $i < count($pokemon2) ; $i++) { 
                    $jumlah_4 = abs($pokemon2[$i]['Rock'] - $boss2[0]['Rock']);
                    array_push($Rock, $jumlah_4);
                  }

                  $Fire = [];
                   for ($i=0; $i < count($pokemon2) ; $i++) { 
                    $jumlah_5 = abs($pokemon2[$i]['Fire'] - $boss2[0]['Fire']);
                    array_push($Fire, $jumlah_5);
                  }

                  $water = [];
                   for ($i=0; $i < count($pokemon2) ; $i++) { 
                    $jumlah_6 = abs($pokemon2[$i]['water'] - $boss2[0]['water']);
                    array_push($water,  $jumlah_6);
                  }

                  $steel = [];
                   for ($i=0; $i < count($pokemon2) ; $i++) { 
                    $jumlah_7 = abs($pokemon2[$i]['steel'] - $boss2[0]['steel']);
                    array_push($steel,  $jumlah_7);
                  }

                  $ice = [];
                   for ($i=0; $i < count($pokemon2) ; $i++) { 
                     $jumlah_8 = abs($pokemon2[$i]['ice'] - $boss2[0]['ice']);
                    array_push($ice,  $jumlah_8);
                  }

                  $poison = [];
                   for ($i=0; $i < count($pokemon2) ; $i++) { 
                     $jumlah_9 = abs($pokemon2[$i]['poison'] - $boss2[0]['poison']);
                    array_push($poison,  $jumlah_9);
                  }

                  $electric = [];
                   for ($i=0; $i < count($pokemon2) ; $i++) { 
                     $jumlah_10 = abs($pokemon2[$i]['electric'] - $boss2[0]['electric']);
                    array_push($electric,  $jumlah_10);
                  }

                  $normal = [];
                   for ($i=0; $i < count($pokemon2) ; $i++) { 
                     $jumlah_11 = abs($pokemon2[$i]['normal'] - $boss2[0]['normal']);
                    array_push($normal,  $jumlah_11);
                  }

                  $fight = [];
                   for ($i=0; $i < count($pokemon2) ; $i++) { 
                     $jumlah_12 = abs($pokemon2[$i]['fight'] - $boss2[0]['fight']);
                    array_push($fight,  $jumlah_12);
                  }

                  $bug = [];
                   for ($i=0; $i < count($pokemon2) ; $i++) { 
                     $jumlah_13 = abs($pokemon2[$i]['bug'] - $boss2[0]['bug']);
                    array_push($bug,  $jumlah_13);
                  }

                  $ghost = [];
                   for ($i=0; $i < count($pokemon2) ; $i++) { 
                     $jumlah_14 = abs($pokemon2[$i]['ghost'] - $boss2[0]['ghost']);
                    array_push($ghost,  $jumlah_14);
                  }

                  $grass = [];
                   for ($i=0; $i < count($pokemon2) ; $i++) { 
                     $jumlah_15 = abs($pokemon2[$i]['grass'] - $boss2[0]['grass']);
                    array_push($grass,  $jumlah_15);
                  }

                  $psychic = [];
                   for ($i=0; $i < count($pokemon2) ; $i++) { 
                     $jumlah_16 = abs($pokemon2[$i]['psychic'] - $boss2[0]['psychic']);
                    array_push($psychic,  $jumlah_16);
                  }

                  $flying = [];
                   for ($i=0; $i < count($pokemon2) ; $i++) { 
                     $jumlah_17 = abs($pokemon2[$i]['flying'] - $boss2[0]['flying']);
                    array_push($flying,  $jumlah_17);
                  }

                  $dragon = [];
                   for ($i=0; $i < count($pokemon2) ; $i++) { 
                     $jumlah_18 = abs($pokemon2[$i]['dragon'] - $boss2[0]['dragon']);
                    array_push($dragon,  $jumlah_18);
                  }

                  $dark = [];
                   for ($i=0; $i < count($pokemon2) ; $i++) { 
                     $jumlah_19 = abs($pokemon2[$i]['dark'] - $boss2[0]['dark']);
                    array_push($dark,  $jumlah_19);
                  }

                  $psychic = [];
                   for ($i=0; $i < count($pokemon2) ; $i++) { 
                     $jumlah_20 = abs($pokemon2[$i]['psychic'] - $boss2[0]['psychic']);
                    array_push($psychic,  $jumlah_20);
                  }
                
                  $fairy = [];
                   for ($i=0; $i < count($pokemon2) ; $i++) { 
                     $jumlah_21 = abs($pokemon2[$i]['fairy'] - $boss2[0]['fairy']);
                    array_push($fairy,  $jumlah_21);
                  }

          
///////////////////////////////////////////////////////////////////////////////////////////////////////
 //////////////proses menghitung jumlah distance tiap pokemon2 setelah dihitung per fiturnya // /////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////

              
          
  ///////////////////////////////////////////////////////////////////////////////////////////////////////
 //////////////   memasukkan bobot kedalam array pokemon dari database  ///////////
///////////////////////////////////////////////////////////////////////////////////////////////////////
?>
<?php

                $b = 0; 
              foreach($pokemon as $row){
                $total = $Tier[$b] + $Ground[$b] + $Rock[$b] + $Fire[$b] + $water[$b] + $steel[$b] + $ice[$b] + $poison[$b] + $electric[$b] + $normal[$b] + $fight[$b] + $bug[$b] + $ghost[$b] + $grass[$b] + $psychic[$b] + $flying[$b] + $dragon[$b] + $dark[$b] + $fairy[$b] + $counter[$b];
                $sort[$row->name] = $total; // array yang berisi data tiap id_pokemon2 yang punya nilai bobot   
                $b++;
              }

  ///////////////////////////////// HASIL REKOMENDASI ////////////////////////////////////
    // tampilkan hasil rekomendasi berdasarkan bobot terkecil ke  terbesar //

      asort($sort);
      
?>
<section class="product spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="trending__product">
          <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
              <div class="section-title">
                <h4>Boss Pokemon Raid Selected</h4>
              </div>
            </div>
          </div>
          <div class="row d-flex justify-content-center">
            <div class="col-lg-4 ">
              <div class="product__item"> 
                <div class="card">           
                  <div class="card-body">  
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/images/boss/'.$boss2[0]['name'].'.gif');?>">
                      <div class="ep"><?=$boss2[0]['primary'];?></div>
                      <div class="comment">Combat Power: <?=$_POST['cp'];?></div>
                    </div>
                    <center>
                      <b><h4 style="color:blue"><?=$boss2[0]['name'];?></h4></b>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
              <div class="section-title">
                <h4>Your Pokemon's Raid Recomendation </h4>
              </div>
            </div>
          </div>
          <div class="row justify-content-md-center mb-4">
            <div class="col-12">
              <center>
                <b><h4 style="color:white">Give Feedback</h4></b>
                <div class='starrr' id='star1'></div>
                 <div>&nbsp;
                  <span class='your-choice-was' style='color: white'>
                    Your rating was <span class='choice'></span>
                  </span>
                </div>
              </center>
            </div>
          </div>
          <div class="row mt-4">
            <?php 
            $inc = 0;
            foreach ($sortmypokemon as $key1 => $value): 
              $inc++;
              $row1 = $this->db->query("SELECT * from pokemon WHERE `name` = '$key1'")->row();
            ?>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6 ">
              <div class="product__item"> 
                <div class="card">           
                  <div class="card-body">  
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/images/pokemon/'.$row1->name.'.png');?>">
                      <div class="ep"><?= $row1->primary;?></div>
                      <div class="comment">Score :<?= $value;?> </div></center>
                    </div>
                    <center>
                      <b><h4><?= $row1->name;?></h4></b>
                      <b><h8 style="color:red">Combat Power: <b><?= $row1->combat_power;?></b></h8></b>
                    </center>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach;?>
          </div> 
          <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
              <div class="section-title">
                <h4>Another Pokemon Recomendation</h4>
              </div>
            </div>
          </div> 
          <div class="row">          
            <?php 
            $inc = 0;
            foreach ($sort as $key => $value): 
            $inc++;
            $row1 = $this->db->query("SELECT * from pokemon WHERE `name` = '$key'")->row();
            ?>
            <div class="col-lg-3 col-md-4 col-6 mb-4">
              <div class="card">           
                <div class="card-body">
                  <center class="m-t-30">
                    <img src="<?= base_url('assets/images/pokemon/'.$row1->name.'.png');?>" width="60%" />
                  </center> 
                  <center class="m-t-30">
                    <h4 class="card-title m-t-10"><?= $row1->name;?></h4>
                  </center> 
                  <center class="m-t-30">
                    <img src="<?= base_url('assets/images/elemen/'.$row1->primary.'.png');?>" width="30%" /><button class="btn btn-danger"><h6 style="color:white"><?= $row1->primary;?></h6></button>
                  </center> 
                  <center class="m-t-30">
                    <h6 class="card-title m-t-10"> Weight Score = <?= $value;?></h6>
                    <b><h8 style="color:red">Combat Power: <b><?= $row1->combat_power;?></b></h8></b>
                  </center> 
                </div> 
              </div>
            </div>
              <!--  -->
            <?php endforeach;?>
          </div>  
        </div>
      </div>               
    </div>         
  </div>
</section>

        

    
    
