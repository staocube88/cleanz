<script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init();
        
        App.formElements();
      });

  $(document).ready(function() {
     
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

     $('#unitcostbtn').on('click', function(event) {
       event.preventDefault();
       /* Act on the event */
       $('#unitcost').removeAttr('disabled');

     });


      $('#brand1').click(function(event) {

        //console.log($('#brand2').val());
        $('#title').html("ADD NEW BRAND");
        $('#addlabel').html("NAME OF BRAND");
        $('#saveplus').val('brand');
        $('#mod-form').modal('show');

      });

      $('#color1').click(function(event) {

        //console.log($('#brand2').val());
        $('#title').html("ADD NEW COLOR");
        $('#addlabel').html("NAME OF COLOR");
        $('#saveplus').val('color');
        $('#mod-form').modal('show');

      });


      $('#fabric1').click(function(event) {

        //console.log($('#brand2').val());
        $('#title').html("ADD NEW FABRIC");
        $('#addlabel').html("NAME OF FABRIC");
        $('#saveplus').val('fabric');
        $('#mod-form').modal('show');

      });


      $('#saveplus').on('click', function(event) {
        event.preventDefault();
        /* Act on the event */

        var table = $('#saveplus').val();
        var staff = $('#staff').val();
        var name =  $('#modalname').val();
        var list = "#" +table + "list";

        console.log(list);


        $.ajax({
          url: '/admin/table/'+table,
          type: 'POST',
          dataType: 'json',
          data: {name: name, staff: staff},
          success: function(data){

            $(list).empty();
          $.each(data,function(a, v){
            $(list).append("<option value="+v.id+">"+v.name+"</option>");
          });

          }
        });
        

      });







     var cloth = 0;
      $.get('/admin/cloth', function (data) {
            //success data
           console.log(data);
      
       $.each(data,function(a, v){
          $("#clothings").append("<option value="+v.id+">"+v.name+"</option>");
          });

        })

      $.get('/admin/service', function (data) {
            //success data
           console.log(data);
      
       $.each(data,function(a, v){
          $("#services").append("<option value="+v.id+">"+v.name+"</option>");
          });

        })





    $("#customerName").change(function(e){
      

       $('#loader').append('<img src="{{ asset('assets/img/default/loading.gif') }}">');
      
      var customer_id = $('#customerName').val(); 
      var url = "/admin/customers"; 
  

   $.get(url + '/' + customer_id, function (data) {
            //success data
          // console.log(data);
          $('#discount').val(data.discount);  
            $('#loader').empty();
        }) 


      // $.ajax({
      //   url: url + '/' + customer_id,
      //   type: 'GET',
      //   dataType: 'json',
      //   success: function(data){
      //     console.log(data);
      //     //$('#discount').val('show');             
      //   }

      // });
      

    });







    var table = $('#table3').DataTable({
     scrollY: "200",
      //scrollX: true,
      //scrollCollapse: true,
      paging: false,
     //bFilter: false
      bInfo: false,
      footerCallback: function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column( 6 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                //alert(total);
 
            // Total over this page
            pageTotal = api
                .column( 6, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
              //  alert(pageTotal);
 
            // Update footer
            $( api.column( 6 ).footer() ).html(
                '$'+pageTotal +' ( $'+ total +' total)'
            );
            $('#result').empty();
            $('#result').html(pageTotal);
        }
    });
 
    $('#table3 tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('active') ) {
            $(this).removeClass('active');
        }
        else {
            table.$('tr.active').removeClass('active');
            $(this).addClass('active');
        }
    } );
 
    $('#button').click( function () {
        table.row('.active').remove().draw( false );
    } );
} );
   //App.dataTables();
    </script>