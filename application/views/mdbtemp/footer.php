  <!--Footer-->
  
  <!-- <footer class="page-footer text-center font-small primary-color-dark darken-2  fadeIn"> -->

    <!--  <div class="footer-copyright py-3">
      © 2019 Copyright: -->
      <!-- <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a> -->
    <!-- </div> -->
    <!--/.Copyright-->

  <!-- </footer> -->

  <!--Footer!-->
 <!-- SCRIPTS -->
  <!-- JQuery -->

  <script type="text/javascript" src="<?php echo base_url();?>mdbassets/js/jquery-3.4.1.min.js"></script>

  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo base_url();?>mdbassets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url();?>mdbassets/js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url();?>mdbassets/js/mdb.min.js"></script>
  <!-- MDB wizard template-->

  <!-- <script type="text/javascript" src="<?php echo base_url();?>assets/js/Chart2.9.4.js"></script> -->

   <!-- DATATABLE -->

   <script type="text/javascript" src="<?php echo base_url();?>mdbassets/js/addons/datatables.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>mdbassets/js/addons/datatables.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>mdbassets/js/addons/datatables-select.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>mdbassets/js/addons/datatables-select.min.js"></script>
  
  <!--  <script type="text/javascript" src="<?php echo base_url();?>assets_1/plugins/datatables/media/js/jquery.dataTables.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>mdbassets/datatables/media/js/dataTables.bootstrap.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>mdbassets/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script> -->

  <script src="<?php echo base_url(); ?>mdbassets/js/jquery.steps.js"></script>
  <script src="<?php echo base_url(); ?>mdbassets/js/main.js"></script>

  <!-- Initializations -->
  <script type="text/javascript">

    view_datas();
    setInterval(view_datas, 3000);
    function view_datas(){
      $.ajax({
        url:'notif_no',
        method:'POST',
        dataType:'json',
        success:function(data){
          $.each(data, function(i, d){
            $('#notif_new').html(d.new);
            console.log(d.new);
          });
        }
      });
    }

    
    // Animations initialization
    //new WOW().init();
    //countre();

    // $('input[name="flexRadioDefault"]').change(function() {
      
    //   if($('input[name="flexRadioDefault"]').is(':checked')){

    //     $('.carousel-control-next').removeAttr('hidden');
    //   }

    // }).change(); 

    $(".carousel-control-next").click(function() {
     
      //$(".carousel-inner .carousel-item.active .qq").find('input').each(function(){
          //var q_no = $(this).val();
          //var x_no = $(this).val();
          
          //var q_no = $(".carousel-inner .carousel-item.active .qq").find('.q_no').val(); 
          var x_no = $(".carousel-inner .carousel-item.active .qq").find('.x_no').val(); 

          if(x_no == 56) $('#testname').text("Training Literacy Test");
          if(x_no == 116) $('#testname').text("Occupational Literacy Test");

          var categ = $(".carousel-inner .carousel-item.active ").find('.category').val();

          // if($('input[name="flexRadioDefault"]').is(':checked')){

          //   $('.carousel-control-next').removeAttr('hidden');
          // }

          $(document).ready(function(){  
            if($('#cho1-'+x_no).is(':checked')){

              var cho1 = $('#cho1-'+x_no).val();
              console.log(cho1);
     
            }
            if($('#cho2-'+x_no).is(':checked')){
               var cho2 = $('#cho2-'+x_no).val();
              console.log(cho2);
            }
            if($('#cho3-'+x_no).is(':checked')){
               var cho3 = $('#cho3-'+x_no).val();
              console.log(cho3);
            }
            if($('#cho4-'+x_no).is(':checked')){
              var cho4 = $('#cho4-'+x_no).val();
              console.log(cho4);
            }

            $.ajax({
                  url:"<?php echo site_url("register/insert_answer") ?>",
                  //type:"POST",
                  data:{categ:categ,
                        cho1:cho1,
                        cho2:cho2,
                        cho3:cho3,
                        cho4:cho4,
                        x_no:x_no
                  },
                  success:function(msg){
                     console.log(msg);
                    if(msg == 'success'){
                      alert('continue answering');
                     
                    }else{
                     alert('answer not counted you already answer the question, go back hit the browser back button or sign up enroll before you can take the exam');
                    }
                  }
            });
          });

          if(x_no == 160){

            $('#modalLoginAvatarDemo').modal('show');
            $('#sub').hide();
            $('.form-check-label').hide();
            $('.carousel-control-next').hide();
            $('#finish').hide();
            $('#testname').text("FINISH");
            //$('.carousel-control-next').attr('hidden');
          }
          
            // clearInterval(counterBack);
            // $('.progress').hide();
            // $("#carouselExampleIndicators").carousel("next");
            //countre(); 
          // }   
          
      //});
    });

    // $(".carousel-control-prev").click(function() {
    //   clearInterval(counterBack);
    //   $('.progress').hide();
    //   $("#carouselExampleIndicators").carousel("prev");
    //   countre(); 
    // });

    function value_id(user_id) {
        console.log(user_id);
        $.ajax({
              url:'<?php echo site_url("register/match_answer")?>',
              type:'POST',
              data:{user_id:user_id},
          success:function(msg){
            //console.log(msg);
            if(msg == 'success'){
              // alert('');
              window.location = '<?php echo base_url(); ?>/my_records';
            }
            
          }    

        }); 

        //window.location = '<?php echo base_url(); ?>/my_records';
    }

    function countre(){
      setTimeout(function(){ }, 2000);
      var i = 100;
      var c = 45;
      $('.progress-bar').css('width', i+'%');
      $('.progress').show();


     counterBack = setInterval(function(){
        i = i - 0.225;
        c = c - 0.1;

        if (i > 0){
          $('.progress-bar').css('width', i+'%');
          d = Math.round(c);
          $('.cd').html(d);
        } 
        else {
          clearInterval(counterBack);
          $('.progress').hide();
          $("#carouselExampleIndicators").carousel("next");
          
          countre();
          return;
        }
        
      }, 100);
    }

  </script>

  <!-- Charts -->
  <script>
    //view_datas();
    //setInterval(view_datas, 3000);
  $( window ).on( "load", view_datas );
    function view_datas(){
      $.ajax({
        url:'course/get_course',
        method:'POST',
        dataType:'json',
        success:function(data){
          $.each(data, function(i, d){
            console.log(d.cookery);
            console.log(d.bartending);
            console.log(d.food_beverage);
            //alert(d.cookery);

            // Line
            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
              type: 'doughnut',
              data: {
                labels: ["Cookery NC II", "Bartending NC II", "Food and Beverage NC II"],
                datasets: [{
                  label: '# of enrolled',
                  data: [d.cookery, d.bartending, d.food_beverage],
                  backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                  ],
                  borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                  ],
                  borderWidth: 1
                }]
              },
              options: {
                scales: {
                  yAxes: [{
                    ticks: {
                      beginAtZero: true
                    }
                  }]
                }
              }
            });
          });
        }
      });
    }

    // Line
    // var ctx = document.getElementById("myChart").getContext('2d');
    // var myChart = new Chart(ctx, {
    //   type: 'bar',
    //   data: {
    //     labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
    //     datasets: [{
    //       label: '# of Votes',
    //       data: [12, 25, 23, 8, 18, 10],
    //       backgroundColor: [
    //         'rgba(255, 99, 132, 0.2)',
    //         'rgba(54, 162, 235, 0.2)',
    //         'rgba(255, 206, 86, 0.2)',
    //         'rgba(75, 192, 192, 0.2)',
    //         'rgba(153, 102, 255, 0.2)',
    //         'rgba(255, 159, 64, 0.2)'
    //       ],
    //       borderColor: [
    //         'rgba(255,99,132,1)',
    //         'rgba(54, 162, 235, 1)',
    //         'rgba(255, 206, 86, 1)',
    //         'rgba(75, 192, 192, 1)',
    //         'rgba(153, 102, 255, 1)',
    //         'rgba(255, 159, 64, 1)'
    //       ],
    //       borderWidth: 1
    //     }]
    //   },
    //   options: {
    //     scales: {
    //       yAxes: [{
    //         ticks: {
    //           beginAtZero: true
    //         }
    //       }]
    //     }
    //   }
    // });

    //pie
    var ctxP = document.getElementById("pieChart").getContext('2d');
    var myPieChart = new Chart(ctxP, {
      type: 'pie',
      data: {
        labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
        datasets: [{
          data: [300, 50, 100, 40, 120],
          backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
          hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
        }]
      },
      options: {
        responsive: true,
        legend: false
      }
    });


    //line
    var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
      type: 'line',
      data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "My First dataset",
            backgroundColor: [
              'rgba(105, 0, 132, .2)',
            ],
            borderColor: [
              'rgba(200, 99, 132, .7)',
            ],
            borderWidth: 2,
            data: [65, 59, 80, 81, 56, 55, 40]
          },
          {
            label: "My Second dataset",
            backgroundColor: [
              'rgba(0, 137, 132, .2)',
            ],
            borderColor: [
              'rgba(0, 10, 130, .7)',
            ],
            data: [28, 48, 40, 19, 86, 27, 90]
          }
        ]
      },
      options: {
        responsive: true
      }
    });


    //radar
    var ctxR = document.getElementById("radarChart").getContext('2d');
    var myRadarChart = new Chart(ctxR, {
      type: 'radar',
      data: {
        labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
        datasets: [{
          label: "My First dataset",
          data: [65, 59, 90, 81, 56, 55, 40],
          backgroundColor: [
            'rgba(105, 0, 132, .2)',
          ],
          borderColor: [
            'rgba(200, 99, 132, .7)',
          ],
          borderWidth: 2
        }, {
          label: "My Second dataset",
          data: [28, 48, 40, 19, 96, 27, 100],
          backgroundColor: [
            'rgba(0, 250, 220, .2)',
          ],
          borderColor: [
            'rgba(0, 213, 132, .7)',
          ],
          borderWidth: 2
        }]
      },
      options: {
        responsive: true
      }
    });

    //doughnut
    var ctxD = document.getElementById("doughnutChart").getContext('2d');
    var myLineChart = new Chart(ctxD, {
      type: 'doughnut',
      data: {
        labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
        datasets: [{
          data: [300, 50, 100, 40, 120],
          backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
          hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
        }]
      },
      options: {
        responsive: true
      }
    });

  </script>

  <!--Google Maps-->
  <script src="https://maps.google.com/maps/api/js"></script>
  <script>
    // Regular map
    function regular_map() {
      var var_location = new google.maps.LatLng(40.725118, -73.997699);

      var var_mapoptions = {
        center: var_location,
        zoom: 14
      };

      var var_map = new google.maps.Map(document.getElementById("map-container"),
        var_mapoptions);

      var var_marker = new google.maps.Marker({
        position: var_location,
        map: var_map,
        title: "New York"
      });
    }

    new Chart(document.getElementById("horizontalBar"), {
      "type": "horizontalBar",
      "data": {
        "labels": ["Red", "Orange", "Yellow", "Green", "Blue", "Purple", "Grey"],
        "datasets": [{
          "label": "My First Dataset",
          "data": [22, 33, 55, 12, 86, 23, 14],
          "fill": false,
          "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
            "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)",
            "rgba(54, 162, 235, 0.2)",
            "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"
          ],
          "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
            "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)",
            "rgb(201, 203, 207)"
          ],
          "borderWidth": 1
        }]
      },
      "options": {
        "scales": {
          "xAxes": [{
            "ticks": {
              "beginAtZero": true
            }
          }]
        }
      }
    });

  </script>
</body>

</html>