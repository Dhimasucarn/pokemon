

<footer class="footer">
  <div class="page-up">
    <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="footer__logo">
          <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
      </div>
      
      <div class="col-lg-6">
        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

        </div>
      </div>
    </div>
</footer>

  <!-- Footer Section End -->

  <!-- Search model Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
</body>

  
    <!-- Js Plugins -->
    <script src="<?=base_url('assets/vendor/anime-main/');?>js/jquery-3.3.1.min.js"></script>
    <script src="<?=base_url('assets/vendor/anime-main/');?>js/bootstrap.min.js"></script>
    <script src="<?=base_url('assets/vendor/anime-main/');?>js/player.js"></script>
    <script src="<?=base_url('assets/vendor/anime-main/');?>js/jquery.nice-select.min.js"></script>
    <script src="<?=base_url('assets/vendor/anime-main/');?>js/mixitup.min.js"></script>
    <script src="<?=base_url('assets/vendor/anime-main/');?>js/jquery.slicknav.js"></script>
    <script src="<?=base_url('assets/vendor/anime-main/');?>js/owl.carousel.min.js"></script>
    <script src="<?=base_url('assets/vendor/anime-main/');?>js/main.js"></script>


      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="<?=base_url('assets/');?>image-picker/image-picker.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
          listRecords();
          $('#multiSelectSearch').change(function() {
            console.log($('#multiSelectSearch').val());
            $('#location').val($('#multiSelectSearch').val());
            var searchQuery = $('#location').val();
            listRecords(searchQuery);
        });
      });
        function listRecords(searchQuery='') {
          $.ajax({
            url:"<?=base_url('welcome/live_search');?>",
            method:"POST",
            dataType: "json",
            data:{query:searchQuery},
            success:function(response) {
              $('tbody').html(response.html);
          }
      });
      }
    </script>
    <script>
      $(".image-picker").imagepicker({
         // show/hide the regular select box
          hide_select: true,

          // show/hide image labels
          show_label: true,

          // set the max number of selectable options 
          limit: 6,

          // called when the limit cap has been reached
        
          // using Font Awesome icons instead
          font_awesome: false
          
        })
    </script>
   
    <script src="<?=base_url('assets/');?>dist/starrr.js"></script>
    
    <script>
    $('#star1').starrr({
      change: function(e, value){
        if (value) {
          $('.your-choice-was').show();
          $('.choice').text(value);
          $.ajax({
            type: 'POST',
            url: "aksi.php",
            data: value,
            success: function() {
              $('.tampildata').load("tampil.php");
            }
          });
        } else {
          $('.your-choice-was').hide();
        }
      }
    });

    var $s2input = $('#star2_input');
    $('#star2').starrr({
      max: 10,
      rating: $s2input.val(),
      change: function(e, value){
        $s2input.val(value).trigger('input');
      }
    });
  </script>
	
</html>