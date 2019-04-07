
   <script type="text/javascript" src="{{ url('assets/node_modules/jquery/dist/jquery.min.js') }}"></script>
   <script type="text/javascript" src="{{ url('assets/node_modules/coreui-pro/js/coreui.min.js') }}"></script>
   <script type="text/javascript" src="{{ url('assets/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
   <script type="text/javascript" src="{{ url('assets/node_modules/perfect-scrollbar/js/perfect-scrollbar.min.js') }}"></script>
   <script type="text/javascript" src="{{ url('assets/node_modules/loader/js/jquery.loadingModal.js') }}"></script>
   <script type="text/javascript" src="{{ url('assets/node_modules/loader/js/jquery.loadingModal.min.js') }}"></script>

   <script type="text/javascript" src="{{ url('assets/node_modules/datatables/jquery.dataTables.js') }}"></script>
   <script type="text/javascript" src="{{ url('assets/node_modules/datatables/dataTables.bootstrap4.js') }}"></script>
   <script type="text/javascript" src="{{ url('assets/node_modules/datatables/datatables.js') }}"></script>
   
    
<script type="text/javascript">

    var arrayVar = [];
    var arrayVarPurchases = [];
    var arrayVarSales = [];
    var totalArray = [];
    var totalArrayPurchases = [];
    var totalArraySales = [];
    var totalInt;
    var totalIntPurchases;
    var totalIntSales;
    var freight_charge = 0;
    var purchase_fcharge = 0;
    var overall_total;
    var overall_totalPurchases;
    var overall_totalSales;
    var data;
    var dataPurchases;
    var dataSales;

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(".alert-success").hide();

              $("#bill-form").on('submit',function(e){
                e.preventDefault();
                  $('body').loadingModal({
                  text: 'Loading...'
                  });

                  var bill_year   = $("#bill_year option:selected").val();
                  var bill_month  = $("#bill_month option:selected").val();
                  var bill_period = $("#bill_period option:selected").val();

                  var bill_date = bill_month+"-"+bill_period+"-"+bill_year;

                   $.post("{{ url('/addbill') }}", {'bill_date':bill_date}, function(data){

                        if(data.notify=='Success'){  
                            $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             document.getElementById("bill-form").reset();
     
                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");
              });

              $("#journalvoucher-form").on('submit',function(e){
                e.preventDefault();
                  $('body').loadingModal({
                  text: 'Loading...'
                  });
                   $.post("{{ url('/addjournalvoucher') }}", $("#journalvoucher-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                            $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             document.getElementById("journalvoucher-form").reset();
     
                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");
              });

              $("#member-form").on('submit',function(e){
                e.preventDefault();
                  $('body').loadingModal({
                  text: 'Loading...'
                  });
                   $.post("{{ url('/addmember') }}", $("#member-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                            $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             document.getElementById("member-form").reset();
     
                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");
              });

               $("#payment-form").on('submit',function(e){
                  e.preventDefault();
                  $('body').loadingModal({
                  text: 'Loading...'
                  });

                  if($('#payment_amortization').val() >= $('#payment_amount').val() ){

                       $.post("{{ url('/addpayment') }}", $("#payment-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                            $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             document.getElementById("payment-form").reset();
     
                        } else{
                          console.log(data.notify);
                        }
                    
                    },"json");
                  }else{
                       $('body').loadingModal('hide');
                       swal({
                          title: "Error cannot save payment amount is greater than the amortization amount",
                          text: "Message will close in 7 seconds",
                          type: "error",
                          timer: 7000
                        });
                  }  
              });

               $("#payee-form").on('submit',function(e){
                  e.preventDefault();
                  $('body').loadingModal({
                  text: 'Loading...'
                  });

                   $.post("{{ url('/addpayee') }}", $("#payee-form").serialize(), function(data){

                    if(data.notify=='Success'){  
                        $('body').loadingModal('hide');
                         swal({
                                title: "Record successfully saved",
                                text: "Message will close in 2 seconds",
                                type: "success",
                                timer: 2000
                              });

                         document.getElementById("payee-form").reset();
 
                    } else{
                      console.log(data.notify);
                    }
                
                },"json");
               });


               //register new account name
              $("#accountcategory-form").on('submit',function(e){
                e.preventDefault();

                $('body').loadingModal({
                  text: 'Loading...'
                });
                  
                   $.post("{{ url('/addaccountcategory') }}", $("#accountcategory-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                             $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             document.getElementById("accountcategory-form").reset();

     
                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");
              });


              //register new account name
              $("#accountname-form").on('submit',function(e){
                e.preventDefault();

                $('body').loadingModal({
                  text: 'Loading...'
                });
                  
                   $.post("{{ url('/addaccountname') }}", $("#accountname-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                             $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             document.getElementById("accountname-form").reset();

     
                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");
              });

              //register new position
              $("#position-form").on('submit',function(e){
                e.preventDefault();

                $('body').loadingModal({
                  text: 'Loading...'
                });
                  
                   $.post("{{ url('/addposition') }}", $("#position-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                             $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             document.getElementById("position-form").reset();

     
                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");
              });



              //register new bill
              $("#bill-form").on('submit',function(e){
                e.preventDefault();
                  
                $('body').loadingModal({
                  text: 'Loading...'
                });
                  
                   $.post("{{ url('/addbill') }}", $("#bill-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                             $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             document.getElementById("bill-form").reset();
                             console.log(data.notify);
     
                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");
              });

               //register new division
              $("#division-form").on('submit',function(e){
                e.preventDefault();
                   $('body').loadingModal({
                    text: 'Loading...'
                  });
                   $.post("{{ url('/adddivision') }}", $("#division-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                            $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             document.getElementById("division-form").reset();
     
                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");
              });

                //register new particular
              $("#particular-form").on('submit',function(e){
                e.preventDefault();
                   $('body').loadingModal({
                    text: 'Loading...'
                  });
                   $.post("{{ url('/addparticular') }}", $("#particular-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                            $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             document.getElementById("particular-form").reset();
     
                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");
              });


               //register new product/service
              $("#productservice-form").on('submit',function(e){
                e.preventDefault();
                   $('body').loadingModal({
                    text: 'Loading...'
                  });
                   $.post("{{ url('/addproductservice') }}", $("#productservice-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                            $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             document.getElementById("productservice-form").reset();
     
                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");
              });

              //show bill page
              $("#show-bill-form").on('submit',function(e){
                e.preventDefault();

                $('body').loadingModal({
                  text: 'Loading...'
                });

                  var bill_year   = $("#show_bill_year option:selected").val();
                  var bill_month  = $("#show_bill_month option:selected").val();
                  var bill_period = $("#show_bill_period option:selected").val();

                  var bill_date = bill_month+"-"+bill_period+"-"+bill_year;
                  window.open("{{ url('/show-bill') }}"+"/"+bill_date, "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=100,left=500,width=900, height=600");
                  $('body').loadingModal('hide');
              });

               //show loan releases page
              $("#show-loanreleases-form").on('submit',function(e){
                e.preventDefault();

                $('body').loadingModal({
                  text: 'Loading...'
                });

                  var loan_year   = $("#show_loan_year option:selected").val();
                  var loan_month  = $("#show_loan_month option:selected").val();
                  var loan_period = $("#show_loan_period option:selected").val();

                  var loan_date = loan_month+"-"+loan_period+"-"+loan_year;
                  window.open("{{ url('/show-loanreleases') }}"+"/"+loan_date, "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=100,left=500,width=1500, height=600");
                  $('body').loadingModal('hide');
              });


              //show payment page
              $("#show-paymentreceived-form").on('submit',function(e){
                e.preventDefault();

                $('body').loadingModal({
                  text: 'Loading...'
                });

                  var payment_year   = $("#show_payment_year option:selected").val();
                  var payment_month  = $("#show_payment_month option:selected").val();
                  var payment_period = $("#show_payment_period option:selected").val();

                  var payment_date = payment_month+"-"+payment_period+"-"+payment_year;
                  window.open("{{ url('/show-paymentreceived') }}"+"/"+payment_date, "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=100,left=500,width=1500, height=600");
                  $('body').loadingModal('hide');
              });

              // Edit Member

              $(".edit-member").click(function(e){

                e.preventDefault();

                var valArray = [];      
                  
                $(".member-id-checkbox:input:checkbox:checked").each(function(i){
                  valArray[i] = $(this).val();
                });

                if( valArray > 0 ){

                $('.table-members-content tr.tbl-members-row').filter(':has(:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        
                        document.getElementById("primary_id").value               = $tr.find('td:eq(1)').html();
                        document.getElementById("member_id").value                = $tr.find('td:eq(2)').html();
                        document.getElementById("editMember_name").value          = $tr.find('td:eq(3)').text();
                        document.getElementById("editMember_mname").value         = $tr.find('td:eq(4)').text();
                        document.getElementById("editMember_lname").value         = $tr.find('td:eq(5)').html();
                        document.getElementById("editMember_extension").value     = $tr.find('td:eq(6)').text();
                        document.getElementById("editMember_dateofbirth").value   = $tr.find('td:eq(7)').text();
                        document.getElementById("editMember_maritalstatus").value = $tr.find('td:eq(8)').html();
                        document.getElementById("editMember_sex").value           = $tr.find('td:eq(9)').html();
                        document.getElementById("editMember_age").value           = $tr.find('td:eq(10)').html();
                        document.getElementById("editMember_homeaddress").value   = $tr.find('td:eq(11)').html();
                        document.getElementById("editMember_division").value      = $tr.find('td:eq(12)').html();
                        document.getElementById("editMember_particular").value    = $tr.find('td:eq(13)').html();
                        document.getElementById("editMember_email").value         = $tr.find('td:eq(14)').html();
                        document.getElementById("editMember_contact").value       = $tr.find('td:eq(15)').html();
                        document.getElementById("editMember_photourl").value      = $tr.find('td:eq(16)').html();
                        document.getElementById("editMember_type").value          = $tr.find('td:eq(17)').html();
                        document.getElementById("editMember_status").value        = $tr.find('td:eq(18)').html();

                        $('#editMemberModal').modal('show');

                    });

                });

              } else{

                swal("Please select a record. Thanks.", "")

              }

          });

          $(".edit-journalvouchers-details").click(function(e){

                e.preventDefault();

                var valArray = [];      
                  
                $(".journalvoucher-id-checkbox:input:checkbox:checked").each(function(i){
                  valArray[i] = $(this).val();
                });

                if( valArray > 0 ){

                $('.table-journalvouchers-content tr.tbl-journalvouchers-row').filter(':has(:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        
                        document.getElementById("primary_id").value               = $tr.find('td:eq(1)').html();
                        document.getElementById("editVoucher_number").value       = $tr.find('td:eq(2)').html();
                        document.getElementById("EditVoucher_type").value         = $tr.find('td:eq(3)').text();
                        document.getElementById("Editpayee_name").value           = $tr.find('td:eq(4)').text();
                        document.getElementById("Editaddress").value              = $tr.find('td:eq(5)').html();
                        document.getElementById("Edittransaction_date").value     = $tr.find('td:eq(6)').html();
                        document.getElementById("Editproduct_service").value      = $tr.find('td:eq(7)').text();
                        document.getElementById("Editparticular").value           = $tr.find('td:eq(8)').text();
                        document.getElementById("Editdebit").value                = $tr.find('td:eq(9)').html();
                        document.getElementById("Editcredit").value               = $tr.find('td:eq(10)').html();
                        document.getElementById("Editremarks").value              = $tr.find('td:eq(12)').html();


                        $('#editJournalvoucherModal').modal('show');

                    });

                });

              } else{

                swal("Please select a record. Thanks.", "")

              }

          });

           $(".deactivate-vouchers").click(function(e){

                e.preventDefault();

                var valArray = [];      
                  
                $(".journalvoucher-id-checkbox:input:checkbox:checked").each(function(i){
                  valArray[i] = $(this).val();
                });

                if( valArray > 0 ){

                $('.table-journalvouchers-content tr.tbl-journalvouchers-row').filter(':has(:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        
                        document.getElementById("primary_id").value                = $tr.find('td:eq(1)').html();
                        document.getElementById("deactvoucher_number").value       = $tr.find('td:eq(2)').html();
                        document.getElementById("deactremarks").value              = $tr.find('td:eq(12)').html();


                        $('#deactivateVoucherModal').modal('show');

                    });

                });

              } else{

                swal("Please select a record. Thanks.", "")

              }

          });

         // retrieve account name data for updating
          $(".edit-accountname").click(function(e){

                e.preventDefault();

                var valArray = [];      
                  
                $(".accountname-id-checkbox:input:checkbox:checked").each(function(i){
                  valArray[i] = $(this).val();
                });

                if( valArray > 0 ){

                $('.table-accountnames-content tr.tbl-accountnames-row').filter(':has(:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        document.getElementById("primary_id").value               = $tr.find('td:eq(1)').html();
                        document.getElementById("editCategory_code").value        = $tr.find('td:eq(3)').text();
                        document.getElementById("editAccount_code").value         = $tr.find('td:eq(4)').text();
                        document.getElementById("editAccount_name").value         = $tr.find('td:eq(5)').text();
                        document.getElementById("editDescription").value          = $tr.find('td:eq(6)').text();
                       
                        $('#editAccountnameModal').modal('show');

                    });

                });

              } else{

                swal("Please select a record. Thanks.", "")

              }

          });

           // retrieve account name data for updating
          $(".edit-accountcategory").click(function(e){

                e.preventDefault();

                var valArray = [];      
                  
                $(".category-id-checkbox:input:checkbox:checked").each(function(i){
                  valArray[i] = $(this).val();
                });

                if( valArray > 0 ){

                $('.table-accountcategories-content tr.tbl-accountcategories-row').filter(':has(:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        document.getElementById("primary_id").value               = $tr.find('td:eq(1)').html();
                        document.getElementById("editCategory_code").value        = $tr.find('td:eq(3)').text();
                        document.getElementById("editCategory_name").value        = $tr.find('td:eq(4)').text();
                        document.getElementById("editDescription").value          = $tr.find('td:eq(5)').text();
                       
                        $('#editAccountcategoryModal').modal('show');

                    });

                });

              } else{

                swal("Please select a record. Thanks.", "")

              }

          });


          // retrieve productservice data for updating
          $(".edit-productservice").click(function(e){

                e.preventDefault();

                var valArray = [];      
                  
                $(".productservice-id-checkbox:input:checkbox:checked").each(function(i){
                  valArray[i] = $(this).val();
                });

                if( valArray > 0 ){

                $('.table-productservices-content tr.tbl-productservices-row').filter(':has(:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        
                        document.getElementById("primary_id").value               = $tr.find('td:eq(1)').html();
                        document.getElementById("edit_name").value                 = $tr.find('td:eq(3)').text();
                        document.getElementById("editDescription").value          = $tr.find('td:eq(4)').text();
                       
                        $('#editProductserviceModal').modal('show');

                    });

                });

              } else{

                swal("Please select a record. Thanks.", "")

              }

          });

          // retrieve division data for updating
          $(".edit-division").click(function(e){

                e.preventDefault();

                var valArray = [];      
                  
                $(".division-id-checkbox:input:checkbox:checked").each(function(i){
                  valArray[i] = $(this).val();
                });

                if( valArray > 0 ){

                $('.table-division-content tr.tbl-divisions-row').filter(':has(:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        
                        document.getElementById("primary_id").value               = $tr.find('td:eq(1)').html();
                        document.getElementById("editDivision_name").value        = $tr.find('td:eq(3)').text();
                        document.getElementById("editDescription").value          = $tr.find('td:eq(4)').text();
                       
                        $('#editDivisionModal').modal('show');

                    });

                });

              } else{

                swal("Please select a record. Thanks.", "")

              }

          });

          // retrieve particular data for updating
          $(".edit-particular").click(function(e){

                e.preventDefault();

                var valArray = [];      
                  
                $(".particular-id-checkbox:input:checkbox:checked").each(function(i){
                  valArray[i] = $(this).val();
                });

                if( valArray > 0 ){

                $('.table-particular-content tr.tbl-particulars-row').filter(':has(:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        
                        document.getElementById("primary_id").value               = $tr.find('td:eq(1)').html();
                        document.getElementById("editParticular_name").value      = $tr.find('td:eq(3)').text();
                        document.getElementById("editDescription").value          = $tr.find('td:eq(4)').text();
                       
                        $('#editParticularModal').modal('show');

                    });

                });

              } else{

                swal("Please select a record. Thanks.", "")

              }

          });

           // retrieve payee data for updating
          $(".edit-payee").click(function(e){

                e.preventDefault();

                var valArray = [];      
                  
                $(".payee-id-checkbox:input:checkbox:checked").each(function(i){
                  valArray[i] = $(this).val();
                });

                if( valArray > 0 ){

                $('.table-payees-content tr.tbl-payees-row').filter(':has(:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        
                        document.getElementById("primary_id").value               = $tr.find('td:eq(1)').html();
                        document.getElementById("editPayee_name").value           = $tr.find('td:eq(3)').text();
                        document.getElementById("editDescription").value          = $tr.find('td:eq(4)').text();
                        document.getElementById("editAddress").value              = $tr.find('td:eq(5)').text();
                       
                        $('#editPayeeModal').modal('show');

                    });

                });

              } else{

                swal("Please select a record. Thanks.", "")

              }

          });

          // Edit Member

              $(".edit-user").click(function(e){

                e.preventDefault();

                var valArray = [];      
                  
                $(".user-id-checkbox:input:checkbox:checked").each(function(i){
                  valArray[i] = $(this).val();
                });

                if( valArray > 0 ){

                $('.table-users-content tr.tbl-users-row').filter(':has(:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        
                        document.getElementById("primary_id").value     = $tr.find('td:eq(1)').html();
                        document.getElementById("user_id").value        = $tr.find('td:eq(2)').html();
                        document.getElementById("editUsername").value   = $tr.find('td:eq(3)').text();
                        document.getElementById("editEmail").value      = $tr.find('td:eq(4)').text();
                        document.getElementById("editRole_id").value    = $tr.find('td:eq(5)').text();
                        document.getElementById("editPhoto_url").value  = $tr.find('td:eq(8)').text();
                        
                        $('#editUserModal').modal('show');

                    });

                });

              } else{

                swal("Please select a record. Thanks.", "")

              }

          });

          //save position data
          $("#update-position-form").on("submit",function(e){

          e.preventDefault();
          $('body').loadingModal({
                  text: 'Loading...'
                });
          $.post("{{ url('updateposition') }}", $("#update-position-form").serialize(), function(data){
          $('body').loadingModal('hide');   
                if(data.notify == "Success"){
                            
                    swal({
                          title: "Record successfully updated",
                          text: "Message will close in 2 seconds",
                          type: "success",
                          timer: 2000
                        });

                } else{

                  console.log(data.notify);

                }

              },"json"); 

          });

          //save position data
          $("#voucher-form").on("submit",function(e){

          e.preventDefault();
          $('body').loadingModal({
                  text: 'Loading...'
                });
          $.post("{{ url('updatestatus') }}", $("#voucher-form").serialize(), function(data){
          $('body').loadingModal('hide');   
                if(data.notify == "Success"){
                            
                    swal({
                          title: "Record successfully updated",
                          text: "Message will close in 2 seconds",
                          type: "success",
                          timer: 2000
                        });

                } else{

                  console.log(data.notify);

                }

              },"json"); 

          });

           //save payee data
          $("#update-payee-form").on("submit",function(e){

          e.preventDefault();
          $('body').loadingModal({
                  text: 'Loading...'
                });
          $.post("{{ url('updatepayee') }}", $("#update-payee-form").serialize(), function(data){
          $('body').loadingModal('hide');   
                if(data.notify == "Success"){
                            
                    swal({
                          title: "Record successfully updated",
                          text: "Message will close in 2 seconds",
                          type: "success",
                          timer: 2000
                        });

                } else{

                  console.log(data.notify);

                }

              },"json"); 

          });

          $("#update-productservice-form").on("submit",function(e){

          e.preventDefault();
          $('body').loadingModal({
                  text: 'Loading...'
                });
          $.post("{{ url('updateproductservice') }}", $("#update-productservice-form").serialize(), function(data){
          $('body').loadingModal('hide');   
                if(data.notify == "Success"){
                            
                    swal({
                          title: "Record successfully updated",
                          text: "Message will close in 2 seconds",
                          type: "success",
                          timer: 2000
                        });

                } else{

                  console.log(data.notify);

                }

              },"json"); 

          });

           //save position data
          $("#update-accountname-form").on("submit",function(e){

          e.preventDefault();
           $('body').loadingModal({
                  text: 'Loading...'
                });

          $.post("{{ url('updateaccountname') }}", $("#update-accountname-form").serialize(), function(data){
                $('body').loadingModal('hide');
                if(data.notify == "Success"){
                            
                    swal({
                          title: "Record successfully updated",
                          text: "Message will close in 2 seconds",
                          type: "success",
                          timer: 2000
                        });

                } else{

                  console.log(data.notify);

                }

              },"json"); 

          });


           //save account category data
          $("#update-accountcategory-form").on("submit",function(e){

             e.preventDefault();
             $('body').loadingModal({
                    text: 'Loading...'
                  });

            $.post("{{ url('updateaccountcategory') }}", $("#update-accountcategory-form").serialize(), function(data){
                  $('body').loadingModal('hide');
                  if(data.notify == "Success"){
                              
                      swal({
                            title: "Record successfully updated",
                            text: "Message will close in 2 seconds",
                            type: "success",
                            timer: 2000
                          });

                  } else{

                    console.log(data.notify);

                  }

                },"json"); 
          });

              //Update Member

          $("#update-member-form").on("submit",function(e){

          e.preventDefault();
          $('body').loadingModal({
                  text: 'Loading...'
                });
          $.post("{{ url('updatemember') }}", $("#update-member-form").serialize(), function(data){
          $('body').loadingModal('hide'); 
              if(data.notify == "Success"){
                          
                  swal({
                        title: "Record successfully updated",
                        text: "Message will close in 2 seconds",
                        type: "success",
                        timer: 2000
                      });

              } else{

                console.log(data.notify);

              }


            },"json"); 

          });

          //update journal voucher
          $("#update-journalvoucher-form").on("submit",function(e){

          e.preventDefault();
          $('body').loadingModal({
                  text: 'Loading...'
                });
          $.post("{{ url('updatejournalvoucher') }}", $("#update-journalvoucher-form").serialize(), function(data){
          $('body').loadingModal('hide'); 
              if(data.notify == "Success"){
                          
                  swal({
                        title: "Record successfully updated",
                        text: "Message will close in 2 seconds",
                        type: "success",
                        timer: 2000
                      });

              } else{

                console.log(data.notify);

              }


            },"json"); 

          });

           //Update User

          $("#update-user-form").on("submit",function(e){

          e.preventDefault();
           $('body').loadingModal({
                  text: 'Loading...'
                });
          $.post("{{ url('updateuser') }}", $("#update-user-form").serialize(), function(data){
          $('body').loadingModal('hide');    
                if(data.notify == "Success"){
                            
                    swal({
                          title: "Record successfully updated",
                          text: "Message will close in 2 seconds",
                          type: "success",
                          timer: 2000
                        });

                } else{

                  console.log(data.notify);

                }


              },"json"); 

          });


          //Employee

          $("#add-employee-id").change(function(e){

                e.preventDefault();
                var employeeID = $(this).val();
                var obj;
               
                $.get("{{ url('/compareEmployeeID') }}", { 'employeeID': employeeID }, function(data){

                  obj = JSON.parse(data);

                      if( obj.notify == 'Success' ){ 

                             swal({
                                    title:employeeID+" employee id already exist.",
                                    text: "Message will close in 5 seconds",
                                    type: "warning",
                                    timer: 5000
                                  });
     
                        } else{
                          console.log(obj.notify);
                        }

                });

          });

          $("#employee-form").on("submit",function(e){
                e.preventDefault();
                   $('body').loadingModal({
                        text: 'Loading...'
                        });
                   $.post("{{ url('/addemployee') }}", $("#employee-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                           $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             document.getElementById("employee-form").reset();
     
                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");
              });


          $(".edit-employee").click(function(e){
             
                e.preventDefault();

                var valArray = [];      
                  
                $(".employee-id-checkbox:input:checkbox:checked").each(function(i){
                  valArray[i] = $(this).val();
                });


                if( valArray > 0 ){

                  $('.table-employees-content tr.tbl-employees-row').filter(':has(:checkbox:checked)').each(function() {
                      // this = tr
                      $tr = $(this);

                      $('td', $tr).each(function() {
                          // If you need to iterate the TD's
                          var employee_status = $tr.find('td:eq(18)').html();
                         
                          if(employee_status == "Active"){
                            employee_status = 1;
                          }else{
                            employee_status = 0;
                          }

                          document.getElementById("primary_id").value                = $tr.find('td:eq(1)').html();
                          document.getElementById("editEmp_id").value                = $tr.find('td:eq(2)').html();
                          document.getElementById("editEmp_fname").value             = $tr.find('td:eq(3)').text();
                          document.getElementById("editEmp_mname").value             = $tr.find('td:eq(4)').text();
                          document.getElementById("editEmp_lname").value             = $tr.find('td:eq(5)').html();
                          document.getElementById("editEmp_extnsion").value          = $tr.find('td:eq(6)').text();
                          document.getElementById("editEmp_dateofbirth").value       = $tr.find('td:eq(7)').text();
                          document.getElementById("editEmp_maritalstatus").value     = $tr.find('td:eq(8)').html();
                          document.getElementById("editEmp_sex").value               = $tr.find('td:eq(9)').html();
                          document.getElementById("editEmp_bloodtype").value         = $tr.find('td:eq(10)').html();
                          document.getElementById("editEmp_philhealth").value        = $tr.find('td:eq(11)').html();
                          document.getElementById("editEmp_pagibig").value           = $tr.find('td:eq(12)').html();
                          document.getElementById("editEmp_sss").value               = $tr.find('td:eq(13)').html();
                          document.getElementById("editEmp_tin").value               = $tr.find('td:eq(14)').html();
                          document.getElementById("editEmp_datestarted").value       = $tr.find('td:eq(15)').html();
                          document.getElementById("editEmp_dateofeffectivity").value = $tr.find('td:eq(16)').html();
                          document.getElementById("editEmp_employmentstatus").value  = $tr.find('td:eq(17)').html();
                          document.getElementById("editEmp_employeestatus").value    = employee_status;
                          document.getElementById("editEmp_division").value          = $tr.find('td:eq(19)').html();
                          document.getElementById("editEmp_unit").value              = $tr.find('td:eq(20)').html();
                          document.getElementById("editEmp_posid").value             = $tr.find('td:eq(21)').html();
                          document.getElementById("editEmp_salary").value            = $tr.find('td:eq(22)').html();
                          document.getElementById("editEmp_homeaddress").value       = $tr.find('td:eq(23)').html();
                          document.getElementById("editEmp_email").value             = $tr.find('td:eq(24)').html();
                          document.getElementById("editEmp_contact").value           = $tr.find('td:eq(25)').html();
                          document.getElementById("editEmp_photo").value             = $tr.find('td:eq(26)').html();
                          
                          $('#editEmployeeModal').modal('show');

                      });

                  });

              }else{

                swal("Please select a record. Thanks.", "")

              }

          });

          $("#update-position-form").on("submit",function(e){

            e.preventDefault();
             $('body').loadingModal({
                        text: 'Loading...'
                        });
            $.post("{{ url('updateposition') }}", $("#update-position-form").serialize(), function(data){
                
                  if(data.notify == "Success"){
                      $('body').loadingModal('hide');        
                      swal({
                            title: "Record successfully updated",
                            text: "Message will close in 2 seconds",
                            type: "success",
                            timer: 2000
                          });

                  } else{

                    console.log(data.notify);

                  }

                },"json"); 

          });

          $("#update-division-form").on("submit",function(e){

            e.preventDefault();

            $.post("{{ url('updatedivision') }}", $("#update-division-form").serialize(), function(data){
                
                  if(data.notify == "Success"){
                              
                      swal({
                            title: "Record successfully updated",
                            text: "Message will close in 2 seconds",
                            type: "success",
                            timer: 2000
                          });

                  } else{

                    console.log(data.notify);

                  }

                },"json"); 

          });
          // save changes to particulars table
          $("#update-particular-form").on("submit",function(e){

            e.preventDefault();

            $.post("{{ url('updateparticular') }}", $("#update-particular-form").serialize(), function(data){
                
                  if(data.notify == "Success"){
                              
                      swal({
                            title: "Record successfully updated",
                            text: "Message will close in 2 seconds",
                            type: "success",
                            timer: 2000
                          });

                  } else{

                    console.log(data.notify);

                  }

                },"json"); 

          });

          $("#update-employee-form").on("submit",function(e){

          e.preventDefault();
          $('body').loadingModal({
            text: 'Loading...'
          });
          $.post("{{ url('updateEmployee') }}", $("#update-employee-form").serialize(), function(data){
              
                if(data.notify == "Success"){
                 $('body').loadingModal('hide');            
                    swal({
                          title: "Record successfully updated",
                          text: "Message will close in 2 seconds",
                          type: "success",
                          timer: 2000
                        });

                } else{

                  console.log(data.notify);

                }

              },"json"); 

          });


          //Loan Functions

          $(".btn-submit-loan").click(function(e){
                e.preventDefault();
  
              var approval_val = $(".loan-approval-new").prop('checked');
              /*$('#loan-form input, #loan-form select').each(function() {

                  if( $(this).val() === "" ){
                     swal({
                            title: $(this).attr('name')+" is empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                      //alert($(this).attr('name'));
                     return false;
                  }

              });*/

               if($('#app-for-loan').val() == ''){

                          swal({
                            title: "Application for loan cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#date-of-filing').val() == '') {

                         swal({
                            title: "Date of filing cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#amount-requested').val() == '') {

                         swal({
                            title: "Amount requested cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#loan-terms').val() == '') {

                         swal({
                            title: "Loan terms cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#loan-type').val() == '') {

                         swal({
                            title: "Loan type cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#mode-payment').val() == '') {

                        swal({
                            title: "Mode of payment cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;


               }else if ($('#member-id').val() == '') {

                         swal({
                            title: "Name of borrower cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#comaker-member-id').val() == '') {

                         swal({
                            title: "Name of co-maker cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#member-homeaddress').val() == '') {

                         swal({
                            title: "Member home address cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#member-age').val() == '') {

                         swal({
                            title: "Member age cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#member-dateofbirth').val() == '') {

                         swal({
                            title: "Member date of birth cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#member-contactnumber').val() == '') {

                         swal({
                            title: "Member contact number of birth cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#member-maritalstatus').val() == '') {

                         swal({
                            title: "Member marital status cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#member-status').val() == '') {

                         swal({
                            title: "Member status cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#member-type').val() == '') {

                         swal({
                            title: "Member type cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else{

                $.post("{{ url('/addloan') }}", $("#loan-form").serialize() + '&approval_status=' + approval_val, function(data){
                        $('body').loadingModal({
                        text: 'Loading...'
                        });
                        if(data.notify=='Success'){  
                        $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });
                             document.getElementById("loan-form").reset();
     
                        } else{
                          console.log(data.notify);
                        }
                    
                    },"json");

               }
               
          });


          $(".edit-loan-details").click(function(e){

                e.preventDefault();
               
                var memberIDchecked;      
                var obj;

                $('.table-loans-content tr.tbl-loans-row').filter(':has(#loan-id-checkbox:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        memberIDchecked = $tr.find('td:eq(37)').html();
                    });

                });

                if( memberIDchecked > 0 ){

                $.get("{{ url('/getMemberDetails') }}", { 'memberID': memberIDchecked }, function(data){

                 obj = JSON.parse(data);
                 //console.log(obj.memberDetails.age);
                 document.getElementById("edit-member-homeaddress").value      = obj.memberDetails.home_address;
                 document.getElementById("edit-member-age").value              = obj.memberDetails.age;
                 document.getElementById("edit-member-dateofbirth").value      = obj.memberDetails.date_of_birth;
                 document.getElementById("edit-member-contactnumber").value    = obj.memberDetails.contact_number;
                 document.getElementById("edit-member-maritalstatus").value    = obj.memberDetails.marital_status;
                 
                 //console.log(data);

                 if( obj.loanApproval[0].approval_status == true ){
                 
                  $("input.loan-item-required").prop('disabled', false);
                  $('.loan-approval-2').prop('checked', true);
                  
                 }else{

                  $("input.loan-item-required").prop('disabled', true);
                  $('.loan-approval-2').prop('checked', false);

                 }

                });

                $('.table-loans-content tr.tbl-loans-row').filter(':has(#loan-id-checkbox:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        
                        document.getElementById("loan-primaryID").value           = $tr.find('td:eq(1)').html();
                        document.getElementById("edit-app-for-loan").value        = $tr.find('td:eq(6)').html();
                        document.getElementById("edit-date-of-filing").value      = $tr.find('td:eq(7)').text();
                        document.getElementById("edit-amount-requested").value    = $tr.find('td:eq(9)').text();
                        document.getElementById("edit-loan-terms").value          = $tr.find('td:eq(10)').html();
                        document.getElementById("edit-loan-type").value           = $tr.find('td:eq(11)').text();
                        document.getElementById("edit-mode-payment").value        = $tr.find('td:eq(41)').text();
                        document.getElementById("edit-member-id").value           = $tr.find('td:eq(37)').html();
                        document.getElementById("edit-comaker-member-id").value   = $tr.find('td:eq(38)').html();
                        document.getElementById("edit-member-status").value       = $tr.find('td:eq(39)').html();
                        document.getElementById("edit-member-type").value         = $tr.find('td:eq(14)').html();
                        document.getElementById("edit-amount-granted").value      = $tr.find('td:eq(15)').html();
                        document.getElementById("edit-interest").value            = $tr.find('td:eq(16)').html();
                        document.getElementById("edit-service-fee").value         = $tr.find('td:eq(17)').html();
                        document.getElementById("edit-clpp-insurance").value      = $tr.find('td:eq(18)').html();
                        document.getElementById("edit-filing-fee").value          = $tr.find('td:eq(19)').html();
                        document.getElementById("edit-notarial-fee").value        = $tr.find('td:eq(20)').html();
                        document.getElementById("edit-life-insurance").value      = $tr.find('td:eq(21)').html();
                        document.getElementById("edit-cbu").value                 = $tr.find('td:eq(22)').html();
                        document.getElementById("edit-savings").value             = $tr.find('td:eq(23)').html();
                        document.getElementById("edit-other").value               = $tr.find('td:eq(25)').html();
                        document.getElementById("edit-total-deduction").value     = $tr.find('td:eq(26)').html();
                        document.getElementById("edit-net-proceed").value         = $tr.find('td:eq(27)').html();
                        document.getElementById("edit-loan-balance").value        = $tr.find('td:eq(24)').html();
                        document.getElementById("edit-amortization").value        = $tr.find('td:eq(42)').html();
                        document.getElementById("edit-date-start").value          = $tr.find('td:eq(40)').html();
                        document.getElementById("edit-unit").value                = $tr.find('td:eq(31)').html();
                        document.getElementById("edit-computedby").value          = $tr.find('td:eq(32)').html();
                        document.getElementById("edit-certifiedby").value         = $tr.find('td:eq(33)').html();

                        $('#editLoanModal').modal('show');

                    });

                });

              } else{ 

                swal("Please select a record. Thanks.", "")

              }

          });

          $(".add-payments-details").click(function(e){

                e.preventDefault();
               
                var loanIDchecked;  
                var memberIDchecked;     
                var obj;

                $('.table-payments-content tr.tbl-payments-row').filter(':has(#payment-id-checkbox:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        loanIDchecked                                          = $tr.find('td:eq(1)').html();
                        memberIDchecked                                        = $tr.find('td:eq(2)').html();
                        document.getElementById("loan_type_payment").value     = $tr.find('td:eq(7)').text();
                    });

                });

                if( loanIDchecked > 0 ){

                    $.get("{{ url('/getLoanDetails') }}", { 'memberID': memberIDchecked,'loanID': loanIDchecked}, function(data){

                     obj = JSON.parse(data);
                     //console.log(obj.memberDetails.age);
                     document.getElementById("add-loan-id").value    = obj.amortizations[0].loan_id;
                     document.getElementById("add-member-id").value  = obj.memberDetails.member_id;
                     document.getElementById("first-name").value     = obj.memberDetails.fname;
                     document.getElementById("middle-name").value    = obj.memberDetails.mname;
                     document.getElementById("last-name").value      = obj.memberDetails.lname;
                     document.getElementById("extension").value      = obj.memberDetails.extension;
                    
                      $('#schedule_payment').empty();
                      $('#schedule_payment').append($('<option>', { 
                              value: '',
                              text : 'Select Schedule'
                          }));

                      $.each(obj.amortizations, function (i, item) {

                        if( item.payment_status == true ){

                          $('#schedule_payment').append($('<option style="background-color:green; color:#fff;" disabled>').attr('value', item.schedule).text(item.schedule+" ------- Paid"));

                         }else{

                          $('#schedule_payment').append($('<option style="color:red">').attr('value', item.schedule).text(item.schedule));

                         }

                      });
  
                     $('#addPaymentModal').modal('show');
                    });
              }else{ 
                swal("Please select a record. Thanks.", "")
              }
          });

          function getAmortizationAmount()
          {
              var schedule = $('#schedule_payment').val();
              var loan_id  = $('#add-loan-id').val();

              $.get("{{ url('/getAmortizationAmount') }}", { 'schedule': schedule,'loan_id': loan_id}, function(data){

                     obj = JSON.parse(data);
                     console.log(obj);
                     document.getElementById("payment_amortization").value    = obj.amortizations[0].loan_amortization;
                     document.getElementById("bill_id").value    = obj.bill[0].id;

                });
          }
  
          $(".btn-update-loan").click(function(e){

             e.preventDefault();
              $('body').loadingModal({
                        text: 'Loading...'
                        });

             var approval = $(".loan-approval-2").prop('checked');

             $.post("{{ url('/updateloan') }}", $("#edit-loan-form").serialize() + '&approval_status=' + approval, function(data){

                        if(data.notify=='Success'){  
                          $('body').loadingModal('hide');
                             swal({
                                    title: "Loan details successfully updated",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });
     
                        } else{
                          console.log(data.notify);
                        }
                    
             },"json");

          });


          $('.loan-approval-1').on('change', function () {

            var loan_approval = $(this).prop('checked');
            var postdata;

            if(loan_approval == true){

              $.post("{{ url('/updateLoanApprovalStatus') }}", $("#approval-switch").serialize() + '&id=' + $(this).val() + '&approval_status=' + "true", function(data){
                        console.log(data.notify);
                        if(data.notify=='Success'){  
                           console.log(data.notify);
                             swal({
                                    title: "Loan approval set to true",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });
     
                        } else{
                          console.log(data.notify);
                        }
                    
             },"json");

            $("input.loan-item-required").prop('disabled', false);
            $('.loan-approval-2').prop('checked', true); 

            }else{

              $.post("{{ url('/updateLoanApprovalStatus') }}", $("#approval-switch").serialize() + '&id=' + $(this).val() + '&approval_status=' + "false", function(data){
                        console.log(data.notify);
                        if(data.notify=='Success'){  
                           console.log(data.notify);
                             swal({
                                    title: "Loan approval set to false",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });
     
                        } else{
                          console.log(data.notify);
                  }
                    
              },"json");

              $("input.loan-item-required").prop('disabled', true);
              $('.loan-approval-2').prop('checked', false);

            }

          });


          $('.loan-approval-new').on('change', function () {

            var loan_approval = $(this).prop('checked');
            
            if(loan_approval == true){
              $("input.loan-item").prop('disabled', false);
            }else{
              $("input.loan-item").prop('disabled', true);
            }

          });

          $('.loan-approval-2').on('change', function () {

            var loan_approval = $(this).prop('checked');
            
            if(loan_approval == true){
              $("input.loan-item-required").prop('disabled', false);
            }else{
              $("input.loan-item-required").prop('disabled', true);
            }

          });


          function calculateLoan(){

              var loanType = $("#loan-type").val();
              var amountGranted = $("#amount-granted").val();
              var loanTerms = $("#loan-terms").val();
              var modePayment = $("#mode-payment").val();
              var interest_amount = 0;
              var interest = 0;
              var clpp_insurance = 0;
              var life_insurance = 0;
              var filing_fee = $("#filing-fee").val();
              var notarial_fee = $("#notarial-fee").val();
              var savings = $("#savings").val();
              var others = $("#other").val();
              var amortization = 0;
              var serviceFee = 0;
              var CBU = 0;

              if( loanType == "Salary" ){

                interest_amount = (amountGranted*0.05)*(loanTerms/2);
                amortization = (+amountGranted + +interest_amount)/(loanTerms*2);
                serviceFee = amountGranted*0.02
                CBU = amountGranted*0.02
                document.getElementById("interest").value = interest_amount.toFixed(2);
                document.getElementById("service-fee").value = serviceFee.toFixed(2);
                document.getElementById("cbu").value = CBU.toFixed(2);
                document.getElementById("amortization").value = amortization.toFixed(2);
                clpp_insurance = $("#clpp-insurance").val();
                life_insurance = $("#life-insurance").val();
                document.getElementById("total-deduction").value = +interest_amount + +serviceFee + +CBU + +clpp_insurance + +life_insurance + +filing_fee + +notarial_fee + +savings + +others;
                document.getElementById("net-proceed").value = amountGranted-serviceFee-CBU-interest_amount-clpp_insurance-life_insurance-filing_fee-notarial_fee-savings-others;
                document.getElementById("loan-balance").value = +amountGranted + +interest_amount;


              }else if ( loanType == "Hospitalization" || loanType == "Emergency" || loanType == "Pension" || loanType == "Personal" || loanType == "Others") {

                interest_amount = (amountGranted*0.02)*(loanTerms/2);
                amortization = (+amountGranted + +interest_amount)/(loanTerms*2);
                serviceFee = amountGranted*0.02
                CBU = amountGranted*0.02
                document.getElementById("interest").value = interest_amount.toFixed(2);
                document.getElementById("service-fee").value = serviceFee.toFixed(2);
                document.getElementById("cbu").value = CBU.toFixed(2);
                document.getElementById("amortization").value = amortization.toFixed(2);
                clpp_insurance = $("#clpp-insurance").val();
                life_insurance = $("#life-insurance").val();
                document.getElementById("total-deduction").value = +interest_amount + +serviceFee + +CBU + +clpp_insurance + +life_insurance + +filing_fee + +notarial_fee + +savings + +others;
                document.getElementById("net-proceed").value = amountGranted-serviceFee-CBU-interest_amount-clpp_insurance-life_insurance-filing_fee-notarial_fee-savings-others;
                document.getElementById("loan-balance").value = +amountGranted + +interest_amount;

               }else{

                return false;

              }

          }

        function generateSchedule(id){

              $('body').loadingModal({text: 'Loading...'});
              $.post("{{ url('/addamortization') }}", {'loanId':id}, function(data){
                if(data.notify=='Success'){

                   $('body').loadingModal('hide'); 
                   
                   $('a.generate').addClass('disabled');
                   $("a.btn-showAmort").removeClass("disabled");
                  

                   swal({
                          title: "Schedule successfully generated",
                          text: "Message will close in 2 seconds",
                          type: "success",
                          timer: 2000
                        });

              } else{
                console.log(data.notify);
              }
           },"json");
        }


          function editCalculateLoan(){

              var loanType = $("#edit-loan-type").val();
              var amountGranted = $("#edit-amount-granted").val();
              var loanTerms = $("#edit-loan-terms").val();
              var modePayment = $("#edit-mode-payment").val();
              var interest_amount = 0;
              var interest = 0;
              var clpp_insurance = 0;
              var life_insurance = 0;
              var filing_fee = $("#edit-filing-fee").val();
              var notarial_fee = $("#edit-notarial-fee").val();
              var savings = $("#edit-savings").val();
              var others = $("#edit-other").val();
              var amortization = 0;
              var serviceFee = 0;
              var CBU = 0;

              if( loanType == "Salary" ){

                interest_amount = (amountGranted*0.05)*(loanTerms/2);
                amortization = (+amountGranted + +interest_amount)/(loanTerms*2);
                serviceFee = amountGranted*0.02
                CBU = amountGranted*0.02
                document.getElementById("edit-interest").value = interest_amount.toFixed(2);
                document.getElementById("edit-service-fee").value = serviceFee.toFixed(2);
                document.getElementById("edit-cbu").value = CBU.toFixed(2);
                document.getElementById("edit-amortization").value = amortization.toFixed(2);
                clpp_insurance = $("#edit-clpp-insurance").val();
                life_insurance = $("#edit-life-insurance").val();
                document.getElementById("edit-total-deduction").value = +interest_amount + +serviceFee + +CBU + +clpp_insurance + +life_insurance + +filing_fee + +notarial_fee + +savings + +others;
                document.getElementById("edit-net-proceed").value = amountGranted-serviceFee-CBU-interest_amount-clpp_insurance-life_insurance-filing_fee-notarial_fee-savings-others;
                document.getElementById("edit-loan-balance").value = +amountGranted + +interest_amount;


              }else if ( loanType == "Hospitalization" || loanType == "Emergency" || loanType == "Pension" || loanType == "Personal" || loanType == "Others") {

                interest_amount = (amountGranted*0.02)*(loanTerms/2);
                amortization = (+amountGranted + +interest_amount)/(loanTerms*2);
                serviceFee = amountGranted*0.02
                CBU = amountGranted*0.02
                document.getElementById("edit-interest").value = interest_amount.toFixed(2);
                document.getElementById("edit-service-fee").value = serviceFee.toFixed(2);
                document.getElementById("edit-cbu").value = CBU.toFixed(2);
                document.getElementById("edit-amortization").value = amortization.toFixed(2);
                clpp_insurance = $("#edit-clpp-insurance").val();
                life_insurance = $("#edit-life-insurance").val();
                document.getElementById("edit-total-deduction").value = +interest_amount + +serviceFee + +CBU + +clpp_insurance + +life_insurance + +filing_fee + +notarial_fee + +savings + +others;
                document.getElementById("edit-net-proceed").value = amountGranted-serviceFee-CBU-interest_amount-clpp_insurance-life_insurance-filing_fee-notarial_fee-savings-others;
                document.getElementById("edit-loan-balance").value = +amountGranted + +interest_amount;

               }else{

                return false;

              }
          }

          $("#add-member-id").change(function(e){

                e.preventDefault();
                var memberID = $(this).val();
                var obj;
               
                $.get("{{ url('/compareMemberId') }}", { 'memberID': memberID }, function(data){

                  obj = JSON.parse(data);

                      if( obj.notify == 'Success' ){ 

                             swal({
                                    title:memberID+" member id already exist.",
                                    text: "Message will close in 5 seconds",
                                    type: "warning",
                                    timer: 5000
                                  });
     
                        } else{
                          console.log(obj.notify);
                        }

                });

          });

          $("#payee_name #Editpayee_name").change(function(e){

                e.preventDefault();
                var payee_name = $(this).val();
                var obj;
               
                $.get("{{ url('/getpayee') }}", { 'payee_name': payee_name }, function(data){

                  obj = JSON.parse(data);
                     $('#address').val(obj.address);
                });

          });

          $("#member-id").change(function(e){
      
                e.preventDefault();
                var memberID = $(this).val();
                var obj;
               
                $.get("{{ url('/getMemberDetails') }}", { 'memberID': memberID }, function(data){

                 obj = JSON.parse(data);
                 //console.log(obj.memberDetails.age);
                 document.getElementById("member-homeaddress").value = obj.memberDetails.home_address;
                 document.getElementById("member-age").value = obj.memberDetails.age;
                 document.getElementById("member-dateofbirth").value = obj.memberDetails.date_of_birth;
                 document.getElementById("member-contactnumber").value = obj.memberDetails.contact_number;
                 document.getElementById("member-maritalstatus").value = obj.memberDetails.marital_status;
 
                });

           });

          $("#edit-member-id").change(function(e){
      
                e.preventDefault();
                var memberID = $(this).val();
                var obj;
               
                $.get("{{ url('/getMemberDetails') }}", { 'memberID': memberID }, function(data){

                 obj = JSON.parse(data);
                 //console.log(obj.memberDetails.age);
                 document.getElementById("edit-member-homeaddress").value = obj.memberDetails.home_address;
                 document.getElementById("edit-member-age").value = obj.memberDetails.age;
                 document.getElementById("edit-member-dateofbirth").value = obj.memberDetails.date_of_birth;
                 document.getElementById("edit-member-contactnumber").value = obj.memberDetails.contact_number;
                 document.getElementById("edit-member-maritalstatus").value = obj.memberDetails.marital_status;
 
                });

           });

              //Old Content
               
              $('#table-prod-contents').dataTable({
                  "lengthMenu": [[10, 50, 100, -1], [10, 50, 100, "All"]],
                  columnDefs : [ 
                    { type : 'date', targets : [8] } 
                    ],"order": [[ 8, 'desc' ]] 
              });

              $('#table-prodpharma-contents').dataTable({
                  "lengthMenu": [[10, 50, 100, -1], [10, 50, 100, "All"]],
                  columnDefs : [ 
                    { type : 'date', targets : [8] } 
                    ],"order": [[ 8, 'desc' ]] 
              });

              $('#table-inv-contents').dataTable({
                  "lengthMenu": [[10, 50, 100, -1], [10, 50, 100, "All"]],
                  columnDefs : [ 
                    { type : 'date', targets : [7] } 
                    ],"order": [[ 7, 'desc' ]] 
              });

              $('#table-invoices-contents').dataTable({
                  "lengthMenu": [[10, 50, 100, -1], [10, 50, 100, "All"]],
                  columnDefs : [ 
                    { type : 'date', targets : [10] } 
                    ],"order": [[ 10, 'desc' ]] 
              });

              $('#table-sales-contents').dataTable({
                  "lengthMenu": [[10, 50, 100, -1], [10, 50, 100, "All"]],
                  columnDefs : [ 
                    { type : 'date', targets : [11] } 
                    ],"order": [[ 11, 'desc' ]] 
              });
            
              $('#table-po-contents').dataTable({
                  "lengthMenu": [[10, 50, 100, -1], [10, 50, 100, "All"]],
                  columnDefs : [ 
                    { type : 'date', targets : [2] } 
                    ],"order": [[ 2, 'desc' ]] 
              });

              $('#table-purchases-contents').dataTable({
                  "lengthMenu": [[10, 50, 100, -1], [10, 50, 100, "All"]],
                  columnDefs : [ 
                    { type : 'date', targets : [2] } 
                    ],"order": [[ 2, 'desc' ]] 
              });


              $('#table-supp-contents').dataTable({
                  "lengthMenu": [[10, 50, 100, -1], [10, 50, 100, "All"]],
                  columnDefs : [ 
                    { type : 'date', targets : [5] } 
                    ],"order": [[ 5, 'desc' ]]
              });


               $('#table-clients-contents').dataTable({
                  "lengthMenu": [[10, 50, 100, -1], [10, 50, 100, "All"]],
                  columnDefs : [ 
                    { type : 'date', targets : [7] } 
                    ],"order": [[ 7, 'desc' ]]
              });


               $('#table-agents-contents').dataTable({
                "lengthMenu": [[10, 50, 100, -1], [10, 50, 100, "All"]],
                 columnDefs : [ 
                    { type : 'date', targets : [9] } 
                    ],"order": [[ 9, 'desc' ]]
              });


               $('#table-payments-contents').dataTable({
                "lengthMenu": [[10, 50, 100, -1], [10, 50, 100, "All"]],
                 columnDefs : [ 
                    { type : 'date', targets : [5] } 
                    ],"order": [[ 5, 'desc' ]]
              });


             
           


            $(function(){

                $('#tbl-po-list').on( 'keyup change', 'input[type="number"]' ,function(){

                     $(this).parents('.info').find('.total').val($(this).val() * $(this).parents('.info').find('.price').val());

                     data = {

                       id: $(this).parents('.info').find('.prod-id').val(),
                       qty: $(this).val(),
                       unit: $(this).parents('.info').find('.pro-unit').text(),
                       pharma: $(this).parents('.info').find('.pro-pharmaceutical').text(),
                       pharmaDesc: $(this).parents('.info').find('.pro-desc').text(),
                       packaging: $(this).parents('.info').find('.pro-packaging').val(),
                       price: $(this).parents('.info').find('.price').val(),
                       total: $(this).parents('.info').find('.total').val()

                    }


                   for(var i = 0; i < arrayVar.length && arrayVar[i].id !== data.id; i++);
                       arrayVar[i] = data;
                       totalArray[i] = data.total;

 
                       totalInt = totalArray.map(Number);
                       overall_total = totalInt.reduce(function(a,b){return a + b});
                       console.log(overall_total);

                       document.getElementById("overall-total").value = overall_total + freight_charge;

                });   


               $('#tbl-po-list').on( 'keyup change', 'input[type="text"]:not(#freight-charge-id)' ,function(){

                      $(this).parents('.info').find('.po-Qty').val(0);

                      data = {

                         id: $(this).parents('.info').find('.prod-id').val(),
                         qty: 0,
                         unit: $(this).parents('.info').find('.pro-unit').text(),
                         pharma: $(this).parents('.info').find('.pro-pharmaceutical').text(),
                         pharmaDesc: $(this).parents('.info').find('.pro-desc').text(),
                         packaging: $(this).parents('.info').find('.pro-packaging').val(),
                         price: $(this).parents('.info').find('.price').val(),
                         total: $(this).parents('.info').find('.total').val()

                       }


                       for(var i = 0; i < arrayVar.length && arrayVar[i].id !== data.id; i++);
                           arrayVar[i] = data;
                           totalArray[i] = data.total;
                   
               });



              $('#tbl-purchase-list').on( 'keyup change', 'input[type="number"]' ,function(){

                    $(this).parents('.tr-purchase').find('.purchase-total').val($(this).val() * $(this).parents('.tr-purchase').find('.po-price').val());
                 
                     dataPurchases = {

                       po_id: $("#purchase_order_id").val(),
                       prod_id: $(this).parents('.tr-purchase').find('.prod-id').text(),
                       purchasesID: $(this).parents('.tr-purchase').find('.purchase-ID').text(),
                       po_qty: $(this).parents('.tr-purchase').find('.po-qty').text(),
                       addon_qty: $(this).parents('.tr-purchase').find('.purchase-addon-qty').val(),
                       purchase_qty: $(this).val(),
                       purchase_packaging: $(this).parents('.tr-purchase').find('.purchase-packaging').val(),
                       purchase_lot: $(this).parents('.tr-purchase').find('.purchase-lot').val(),
                       purchase_xpiryDate: $(this).parents('.tr-purchase').find('.purchase-xpiryDate').val(),
                       po_price: $(this).parents('.tr-purchase').find('.po-price').val(),
                       po_total: $(this).parents('.tr-purchase').find('.po-total').text(),
                       purchase_total: $(this).parents('.tr-purchase').find('.purchase-total').val()
                      
                    }

                  
                   for(var i = 0; i < arrayVarPurchases.length && arrayVarPurchases[i].prod_id !== dataPurchases.prod_id; i++);
                       arrayVarPurchases[i] = dataPurchases;
                       totalArrayPurchases[i] = dataPurchases.purchase_total;

 
                       console.log(arrayVarPurchases);
                       totalIntPurchases = totalArrayPurchases.map(Number);
                       overall_totalPurchases = totalIntPurchases.reduce(function(a,b){return a + b});

                       document.getElementById("overall-totalPurchases").value = overall_totalPurchases + parseFloat($("#purchase-freight-charge").val());

               
                });



              $('#tbl-purchase-list').on( 'keyup change', 'input[type="text"]:not(#purchase-freight-charge)' ,function(){

                    $(this).parents('.tr-purchase').find('.purchase-qty').val("");

                    dataPurchases = {

                       po_id: $("#purchase_order_id").val(),
                       prod_id: $(this).parents('.tr-purchase').find('.prod-id').text(),
                       purchasesID: $(this).parents('.tr-purchase').find('.purchase-ID').text(),
                       po_qty: $(this).parents('.tr-purchase').find('.po-qty').text(),
                       addon_qty: $(this).parents('.tr-purchase').find('.purchase-addon-qty').val(),
                       purchase_qty: "",
                       purchase_packaging: $(this).parents('.tr-purchase').find('.purchase-packaging').val(),
                       purchase_lot: $(this).parents('.tr-purchase').find('.purchase-lot').val(),
                       purchase_xpiryDate: $(this).parents('.tr-purchase').find('.purchase-xpiryDate').val(),
                       po_price: $(this).parents('.tr-purchase').find('.po-price').val(),
                       po_total: $(this).parents('.tr-purchase').find('.po-total').text(),
                       purchase_total: $(this).parents('.tr-purchase').find('.purchase-total').val()
                      
                    }

                  
                   for(var i = 0; i < arrayVarPurchases.length && arrayVarPurchases[i].prod_id !== dataPurchases.prod_id; i++);
                       arrayVarPurchases[i] = dataPurchases;
                       totalArrayPurchases[i] = dataPurchases.purchase_total;
               
                });


              $('#tbl-purchase-list').on( 'keyup change', 'input[type="date"]' ,function(){

                    $(this).parents('.tr-purchase').find('.purchase-qty').val("");

                    dataPurchases = {

                       po_id: $("#purchase_order_id").val(),
                       prod_id: $(this).parents('.tr-purchase').find('.prod-id').text(),
                       purchasesID: $(this).parents('.tr-purchase').find('.purchase-ID').text(),
                       po_qty: $(this).parents('.tr-purchase').find('.po-qty').text(),
                       addon_qty: $(this).parents('.tr-purchase').find('.purchase-addon-qty').val(),
                       purchase_qty: "",
                       purchase_packaging: $(this).parents('.tr-purchase').find('.purchase-packaging').val(),
                       purchase_lot: $(this).parents('.tr-purchase').find('.purchase-lot').val(),
                       purchase_xpiryDate: $(this).parents('.tr-purchase').find('.purchase-xpiryDate').val(),
                       po_price: $(this).parents('.tr-purchase').find('.po-price').val(),
                       po_total: $(this).parents('.tr-purchase').find('.po-total').text(),
                       purchase_total: $(this).parents('.tr-purchase').find('.purchase-total').val()
                      
                    }

                  
                   for(var i = 0; i < arrayVarPurchases.length && arrayVarPurchases[i].prod_id !== dataPurchases.prod_id; i++);
                       arrayVarPurchases[i] = dataPurchases;
                       totalArrayPurchases[i] = dataPurchases.purchase_total;

                });



              $('#tbl-sales-list').on( 'keyup change', 'input[type="number"]' ,function(){
    
                 $(this).parents('.tr-salesInvoice').find('.sales-amount').val($(this).val() * $(this).parents('.tr-salesInvoice').find('.sales-unitPrice').val());
                 
                 var val1 = $(this).val();
                 var val2 = parseInt($(this).parents('.tr-salesInvoice').find('.sales-inventory-quantity').text());

                 if( val1 > val2 ){
                    $(this).val("");
                    swal("Not enough quantity. Only "+val2+" is available", "")
                 }else{

                     dataSales = {

                       sales_inv_id: $(this).parents('.tr-salesInvoice').find('.sales-inv-id').text(),
                       sales_prod_id: $(this).parents('.tr-salesInvoice').find('.sales-product-id').text(),
                       sales_po_id: $(this).parents('.tr-salesInvoice').find('.sales-po-id').text(),
                       sales_purchase_id: $(this).parents('.tr-salesInvoice').find('.sales-purchase-id').text(),
                       sales_lot: $(this).parents('.tr-salesInvoice').find('.sales-lot').text(),
                       sales_expiry_date: $(this).parents('.tr-salesInvoice').find('.sales-expiry-date').text(),
                       sales_type: $(this).parents('.tr-salesInvoice').find('.sales-type').text(),
                       sales_pharma: $(this).parents('.tr-salesInvoice').find('.sales-pharma').text(),
                       sales_qty: $(this).val(),
                       sales_unit: $(this).parents('.tr-salesInvoice').find('.sales-unit').text(),
                       sales_unitPrice: $(this).parents('.tr-salesInvoice').find('.sales-unitPrice').val(),
                       sales_amount: $(this).parents('.tr-salesInvoice').find('.sales-amount').val(),
                       actual_inv_quantity: val2
                      
                    }

                  
                   for(var i = 0; i < arrayVarSales.length && arrayVarSales[i].sales_inv_id !== dataSales.sales_inv_id; i++);
                       arrayVarSales[i] = dataSales;
                       totalArraySales[i] = dataSales.sales_amount;

 
                       console.log(arrayVarSales);
                       totalIntSales = totalArraySales.map(Number);
                       overall_totalSales = totalIntSales.reduce(function(a,b){return a + b});

                       document.getElementById("total-amountDue").value = overall_totalSales;       

                  }
                     
                });



                $('#tbl-sales-list').on( 'keyup change', 'input[type="text"]' ,function(){

                       $(this).parents('.tr-salesInvoice').find('.sales-prodQty').val(0);
                
                       dataSales = {

                         sales_inv_id: $(this).parents('.tr-salesInvoice').find('.sales-inv-id').text(),
                         sales_prod_id: $(this).parents('.tr-salesInvoice').find('.sales-product-id').text(),
                         sales_po_id: $(this).parents('.tr-salesInvoice').find('.sales-po-id').text(),
                         sales_purchase_id: $(this).parents('.tr-salesInvoice').find('.sales-purchase-id').text(),
                         sales_lot: $(this).parents('.tr-salesInvoice').find('.sales-lot').text(),
                         sales_expiry_date: $(this).parents('.tr-salesInvoice').find('.sales-expiry-date').text(),
                         sales_type: $(this).parents('.tr-salesInvoice').find('.sales-type').text(),
                         sales_pharma: $(this).parents('.tr-salesInvoice').find('.sales-pharma').text(),
                         sales_qty: 0,
                         sales_unit: $(this).parents('.tr-salesInvoice').find('.sales-unit').text(),
                         sales_unitPrice: $(this).parents('.tr-salesInvoice').find('.sales-unitPrice').val(),
                         sales_amount: $(this).parents('.tr-salesInvoice').find('.sales-amount').val()
                       
                      }

                    
                     for(var i = 0; i < arrayVarSales.length && arrayVarSales[i].sales_inv_id !== dataSales.sales_inv_id; i++);
                         arrayVarSales[i] = dataSales;
                         totalArraySales[i] = dataSales.sales_amount;  

                
                 });


                 $("#create-sales-invoice").click(function(e){
      
                      e.preventDefault();
                      var prodIdArray = [];
                      var purchaseIdArray = [];
                      var salesArraySelected = [];
                      var txt = "";

                       $("#table-inv-contents tr td input:checkbox:checked").each(function(i){
                         prodIdArray[i] = $(this).val();
                         purchaseIdArray[i] = $(this).closest('tr').find('.purchase-id').text();
                       });
                     
                     document.getElementById("numberOfSalesItem").value = prodIdArray.length;
                      
                      if( prodIdArray.length > 0 ){
                    
                          $("option:selected").each(function(i){
                               salesArraySelected[i] = $(this).text();
                          });


                          $.post("{{ url('create_salesInvoice') }}", { 'prod_IDs': prodIdArray, 'purchase_IDs': purchaseIdArray }, function(data){

                            var obj = JSON.parse(data);

                            for(var i = 0; i < obj.prodval.length; i++){

                                txt += "<tr class='info tr-salesInvoice'><td style='display:none;'class='sales-inv-id'>"+obj.prodval[i].id+
                                       "</td><td style='display:none;'class='sales-product-id'>"+obj.prodval[i].product_id+
                                       "</td><td style='display:none;'class='sales-po-id'>"+obj.prodval[i].purchase_order_id+
                                       "</td><td style='display:none;'class='sales-purchase-id'>"+obj.prodval[i].purchase_id+
                                       "</td><td class='sales-lot'>"+obj.prodval[i].lot+
                                       "</td><td class='sales-expiry-date'>"+obj.prodval[i].expiry_date_month+
                                       "</td><td class='sales-type'>"+obj.prodval[i].type+
                                       "</td><td class='sales-pharma'>"+obj.prodval[i].pharmaceutical+
                                       "</td><td class='sales-unit'>"+obj.prodval[i].unit+
                                       "</td><td><input type='text' class='form-control sales-unitPrice' style='width:100px;' value='"+obj.prodval[i].unit_price+"'/>"+
                                       "</td><td class='sales-qty'><input title='Available Quantity is : "+obj.prodval[i].total_qty+"' type='number' class='form-control sales-prodQty' style='width:100px;' value='0' />"+
                                       "</td><td><input type='text' class='form-control sales-amount' style='width:100px;' value='0' disabled=disabled />"+
                                       "</td><td style='display:none;' class='sales-inventory-quantity'>"+obj.prodval[i].total_qty+
                                       "</td></tr>"; 
                              }

                              $("#tbl-sales-list").append(txt);

                            });

                            $(".create-salesInvoice-modal").modal({show:true});
                            $('.create-salesInvoice-modal').on('hidden.bs.modal', function () {
                            $("#salesInvoice-create").empty();
                            });

                         } else{

                            swal("Please select a record. Thanks.", "")

                         }
                    });


            });  // end of function clause 




            $("#freight-charge-id").on( 'keyup change', function(){
              freight_charge = parseFloat($(this).val());
              document.getElementById("overall-total").value = overall_total + parseFloat($(this).val());
            });


             $("#purchase-freight-charge").on( 'keyup change', function(){
              //event.stopImmediatePropagation(); this is a good line of code, equivalent to 'input[type="text"]:not(#purchase-freight-charge)'
              purchase_fcharge = parseFloat($(this).val());
              document.getElementById("overall-totalPurchases").value = overall_totalPurchases + parseFloat($(this).val());
            });

             //Onchange for Pharma

             $("#inputCategory, #editCategory").change(function(){

              var selectedText = $(this).find("option:selected").text();
              var optionTxtMedical = ['None'];
              var optionTxtPharma = ['Select type','Branded','Generics'];
              var select = document.getElementById("inputType");
              var select2 = document.getElementById("editType");
              var options = [];
              var option = document.createElement('option');

                if(selectedText == "Pharma"){

                  document.getElementById('inputType').innerHTML = "";
                  document.getElementById('editType').innerHTML = "";

                    for (var i = 0; i < optionTxtPharma.length; i++)
                    {
                        
                        option.text = option.value = optionTxtPharma[i];
                        options.push(option.outerHTML);
                    }

                    select.insertAdjacentHTML('beforeEnd', options.join('\n'));
                    select2.insertAdjacentHTML('beforeEnd', options.join('\n'));
                  
                    
                }else{

                  document.getElementById('inputType').innerHTML = "";
                  document.getElementById('editType').innerHTML = "";

                  for (var i = 0; i < optionTxtMedical.length; i++)
                    {
                        
                        option.text = option.value = optionTxtMedical[i];
                        options.push(option.outerHTML);
                    }

                    select.insertAdjacentHTML('beforeEnd', options.join('\n'));
                    select2.insertAdjacentHTML('beforeEnd', options.join('\n'));
                  
                }

             });


             $('.create-po-modal').on('hidden.bs.modal', function () {

              arrayVar = [];
              totalArray = [];
              overall_total = 0;

              document.getElementById("overall-total").value = overall_total;

             });


             $(".btn-edit-po").click( function(e) {

              e.preventDefault();
              var editvalArray = [];
              var poID;

              $("input:checkbox:checked").each(function(i){
                 editvalArray[i] = $(this).val();
                 poID = $(this).val();
              });

              if( editvalArray.length > 0 &&  editvalArray.length == 1 ){

                 window.location.replace("http://promed/editPurchase/"+poID);
                
              }else{
                swal("Please select a record to update.Thank you.", "")
              }

             });


            $(".add-prod-btn").click(function(e){
              e.preventDefault();
              $(".add-prod-modal").modal({show:true});
            });


            $(".add-prodpharma-btn").click(function(e){
              e.preventDefault();
              $(".add-prod-pharma-modal").modal({show:true});
            });


            $(".edit-prod-btn").click(function(e){

              e.preventDefault();
              var Txt = $("#pageTxt").text();
              var editvalArray = [];
              var editvalArraySelected = [];

              $("input:checkbox:checked").each(function(i){
                 editvalArray[i] = $(this).val();
              });

              if( editvalArray.length > 0 &&  editvalArray.length == 1 ){

               $('#table-prod-contents tr.tbl-prod-row, #table-prodpharma-contents tr.tbl-prod-row').filter(':has(:checkbox:checked)').each(function() {
                  // this = tr
                  $tr = $(this);
                  $('td', $tr).each(function() {
                     
                      document.getElementById("edit-prodID").value = $tr.find('td:eq(1)').html();
                      document.getElementById("editPharmaceutical").value = $tr.find('td:eq(3)').html();
                      document.getElementById("editDescription").value = $tr.find('td:eq(4)').html();
                      document.getElementById("editType").value = $tr.find('td:eq(5)').html();
                      document.getElementById("editUnit").value = $tr.find('td:eq(6)').html();
                      document.getElementById("editCategory").value = $tr.find('td:eq(2)').html();
                      document.getElementById("editPrice").value = $tr.find('td:eq(7)').html();

                      if( Txt == "Medical"){
                        $(".edit-prod-modal").modal({show:true}); 
                      }else{
                        $(".edit-prodPharma-modal").modal({show:true});
                      }

                  });
                    
                    return false;

              });

              }else{
                swal("Please select a product to update.Thank you.", "")
              }
    
            });


            $(".add-supp-btn").click(function(e){
              e.preventDefault();
             $(".add-supp-modal").modal({show:true});
            });

            //Edit Supplier
            $(".edit-supp-btn").click(function(e){
              e.preventDefault();

              var editvalArray = [];

              $("input:checkbox:checked").each(function(i){
                 editvalArray[i] = $(this).val();
              });

              if( editvalArray.length > 0 &&  editvalArray.length == 1 ){

               $('#table-supp-contents tr.tbl-supp-row').filter(':has(:checkbox:checked)').each(function() {
                  // this = tr
                  $tr = $(this);
                  $('td', $tr).each(function() {
                     
                      document.getElementById("supplierID").value = $tr.find('td:eq(0) input').val();
                      document.getElementById("updateName").value = $tr.find('td:eq(1)').html();
                      document.getElementById("updateAddress").value = $tr.find('td:eq(2)').html();
                      document.getElementById("updateContact").value = $tr.find('td:eq(3)').html();
                      document.getElementById("updateTIN").value = $tr.find('td:eq(4)').html();

                     $(".edit-supp-modal").modal({show:true}); 

                  });
                    
                    return false;

              });

              }else{
                swal("Please select a supplier to update.Thank you.", "")
              }

            });

            // Edit Agent Details
            $(".edit-agent-btn").click(function(e){
              e.preventDefault();

              var editvalArray = [];

              $("input:checkbox:checked").each(function(i){
                 editvalArray[i] = $(this).val();
              });

              if( editvalArray.length > 0 &&  editvalArray.length == 1 ){

               $('#table-agents-contents tr.tbl-agents-row').filter(':has(:checkbox:checked)').each(function() {
                  // this = tr
                  $tr = $(this);
                  $('td', $tr).each(function() {
                     
                      document.getElementById("agentID").value = $tr.find('td:eq(1)').html();
                      document.getElementById("updateFname").value = $tr.find('td:eq(2)').html();
                      document.getElementById("updateLname").value = $tr.find('td:eq(3)').html();
                      document.getElementById("updateSex").value = $tr.find('td:eq(4)').html();
                      document.getElementById("updateAge").value = $tr.find('td:eq(5)').html();
                      document.getElementById("updateAddress").value = $tr.find('td:eq(6)').html();
                      document.getElementById("updateContactNum").value = $tr.find('td:eq(7)').html();
                      document.getElementById("updateDateofBirth").value = $tr.find('td:eq(8)').html();

                     $(".edit-agent-modal").modal({show:true}); 

                  });
                    
                    return false;

              });

              }else{
                swal("Please select an agent to update.Thank you.", "")
              }

            });


// Submit and save product data

    $(".submit-prod").click(function(e){

     e.preventDefault();
     document.getElementById("submit-prod").disabled = true;
      
       $.post("{{ url('addprod') }}", $("#prod-form").serialize(), function(data){

        document.getElementById('loading-image').style.display="block";

           if(data.notify == "Success"){
              setTimeout(function(){
                 $(".alert-addprod-success").fadeIn(100);
                 $(".alert-addprod-success").delay(2000).fadeOut(800);
                 window.location.reload(1);
              }, 2000);

           }else{
            console.log(data.notify);
           }

        },"json");

    }); //end


    //Update Product

    $("#update-prod").click(function(e){

       e.preventDefault();
       document.getElementById("update-prod").disabled = true;
      
       var postdata;

       var conditionalTxt = $("#pharmaTxtVal").val();
       var prodID = document.getElementById("edit-prodID").value;
       var editPharma = document.getElementById("editPharmaceutical").value;
       var editDesc = document.getElementById("editDescription").value;
       var editType = document.getElementById("editType").value;
       var editUnit = document.getElementById("editUnit").value;
       var editCat = document.getElementById("editCategory").value;
       var editPrice = document.getElementById("editPrice").value;
      

       postdata = {

            'prod_id': prodID,
            'editPharma': editPharma,
            'editDesc': editDesc,
            'editType': editType,
            'editUnit': editUnit,
            'editCat': editCat,
            'editPrice': editPrice

           };


            $.post("{{ url('updateprod') }}", postdata, function(data){

              if( conditionalTxt == "Pharma" ){
                document.getElementById('updatePharma-loading-image').style.display="block";
              }else{
                document.getElementById('update-loading-image').style.display="block";
              }

               if(data.notify == "Success"){

                  var txt = "";
                  
                  txt += "<tr class='tbl-prod-row'><td><input type='checkbox' style='width:30px; height:20px;' checked='checked' style='width:30px; height:20px;' class='radio_check_all prod-id-checkbox' id='radio_check_all prod-id-checkbox' value="+prodID+"></td><td style='display:none;'>"+prodID+
                                   "</td><td style='display:none;'>"+editCat+"</td><td>"+editPharma+"</td><td>"+editDesc+"</td><td>"+editType+"</td><td>"+editUnit+
                                   "</td><td>"+editPrice+"</td></tr>";
                 
                  $('#table-prod-contents tr.tbl-prod-row').filter(':has(:checkbox:checked)').replaceWith(txt);

                  setTimeout(function(){
                   $(".alert-notice-success-update").fadeIn(100);
                   $(".alert-notice-success-update").delay(2000).fadeOut(800);
                   window.location.reload(1);
                  }, 2000);

               }else{
                console.log(data.notify);
               }

            },"json");

    });


    $(".submit-supp").click(function(e){

     e.preventDefault();

     document.getElementById("submit-supp").disabled = true;
      
       $.post("{{ url('addsupp') }}", $("#supp-form").serialize(), function(data){

           if(data.notify == "Success"){

            document.getElementById('supplierLoading-image').style.display="block";

             setTimeout(function(){
              $(".alert-addsupp-success").fadeIn(100);
              $(".alert-addsupp-success").delay(2000).fadeOut(800);
                   window.location.reload(1);
              }, 2000);

           }else{

            console.log(data.notify);

           }

        },"json");

      
    }); //end


    // Submit Client Details

    $(".submit-client").click(function(e){

     e.preventDefault();

     document.getElementById("submit-client").disabled = true;
      
       $.post("{{ url('saveclient') }}", $("#client-form").serialize(), function(data){

           if(data.notify == "Success"){

            document.getElementById('clientsLoading-image').style.display="block";

             setTimeout(function(){
                $(".alert-addclient-success").fadeIn(100);
                $(".alert-addclient-success").delay(2000).fadeOut(800);
                   window.location.reload(1);
              }, 2000);

           }else{

            console.log(data.notify);

           }

        },"json");

      
    }); //end


    //Edit Client

    $(".edit-client-btn").click(function(e){
      e.preventDefault();

      var editvalArray = [];

              $("input:checkbox:checked").each(function(i){
                 editvalArray[i] = $(this).val();
              });

              if( editvalArray.length > 0 &&  editvalArray.length == 1 ){

               $('#table-clients-contents tr.tbl-clients-row').filter(':has(:checkbox:checked)').each(function() {
                  // this = tr
                  $tr = $(this);
                  $('td', $tr).each(function() {
                     
                      document.getElementById("clientID").value = $tr.find('td:eq(0) input').val();
                      document.getElementById("editName").value = $tr.find('td:eq(1)').html();
                      document.getElementById("editTIN").value = $tr.find('td:eq(2)').html();
                      document.getElementById("editAddress").value = $tr.find('td:eq(3)').html();
                      document.getElementById("editBusinessStyle").value = $tr.find('td:eq(4)').html();
                      document.getElementById("editTerms").value = $tr.find('td:eq(5)').html();
                      document.getElementById("editOsca").value = $tr.find('td:eq(6)').html();

                     $(".edit-client-modal").modal({show:true}); 

                  });
                    
                    return false;

              });

              }else{
                swal("Please select a client to update.Thank you.", "")
              }


    });


    //Submit Agent Details

    $(".submit-agent").click(function(e){

     e.preventDefault();

     document.getElementById("submit-agent").disabled = true;
      
       $.post("{{ url('saveagent') }}", $("#agent-form").serialize(), function(data){

           if(data.notify == "Success"){

            document.getElementById("agentsLoading-image").style.display = "block";

             setTimeout(function(){
              $(".alert-addagent-success").fadeIn(100);
              $(".alert-addagent-success").delay(2000).fadeOut(800);
                   window.location.reload(1);
              }, 2000);

           }else{

            console.log(data.notify);

           }

        },"json");

      
    }); //end


    //Update Client Details
    $(".update-client").click(function(e){
            
            e.preventDefault();

            $.post("{{ url('updateClient') }}", $("#update-client-form").serialize(), function(data){

               if(data.notify == "Success"){

                  $(".alert-notice-success-update").fadeIn(100);
                  $(".alert-notice-success-update").delay(2000).fadeOut(800);
                  setTimeout(function(){
                   window.location.reload(1);
                  }, 2000);

               }else{

                console.log(data.notify);

               }

            },"json");

    });


    //Update Supplier Details
    $(".update-supp").click(function(e){
            
            e.preventDefault();

            $.post("{{ url('updateSupplier') }}", $("#update-supp-form").serialize(), function(data){

               if(data.notify == "Success"){

                  $(".alert-notice-success-update").fadeIn(100);
                  $(".alert-notice-success-update").delay(2000).fadeOut(800);
                  setTimeout(function(){
                   window.location.reload(1);
                  }, 2000);

               }else{

                console.log(data.notify);

               }

            },"json");

    });


    //Update Agent Details
    $(".update-agent").click(function(e){
            
            e.preventDefault();

            $.post("{{ url('updateAgent') }}", $("#update-agent-form").serialize(), function(data){

               if(data.notify == "Success"){

                  $(".alert-notice-success-update").fadeIn(100);
                  $(".alert-notice-success-update").delay(2000).fadeOut(800);
                  setTimeout(function(){
                   window.location.reload(1);
                  }, 2000);

               }else{

                console.log(data.notify);

               }

            },"json");

    });



      $('#create-po').click(function(e){
      
        e.preventDefault();
        var valArray = [];
        var valArraySelected = [];
        var txt = "";


         $("input:checkbox:checked").each(function(i){
           valArray[i] = $(this).val();
         });

        document.getElementById("numberOfItem").value = valArray.length;

        if( valArray.length > 0 ){
    
          $("option:selected").each(function(i){
               valArraySelected[i] = $(this).text();
               //console.log(valArraySelected[i]);
          });


          $.post("{{ url('create_po') }}", { 'prod_IDs': valArray }, function(data){

            var obj = JSON.parse(data);

            for(var i = 0; i < obj.prodval.length; i++){

              txt += "<tr class='info'><td><input type='text' class='form-control pro-packaging' style='width:100px;' value=''/>"+
                     "</td><td class='pro-unit'><input type='hidden' class='form-control prod-id' style='width:100px;' value='"+obj.prodval[i].id+"'/>"+obj.prodval[i].unit+
                     "</td><td class='pro-pharmaceutical'>"+obj.prodval[i].pharmaceutical+
                     "</td><td class='pro-desc'>"+obj.prodval[i].description+
                     "</td><td><input type='number' class='form-control po-Qty' style='width:100px;' value='0'/>"+
                     "</td><td><input type='text' class='form-control price' style='width:100px;' value='"+obj.prodval[i].price+"' disabled=disabled />"+
                     "</td><td><input type='text' class='form-control total' style='width:100px;' value='0' disabled=disabled />"+
                     "</td></tr>";
                
            }
            
            $("#tbl-po-list").append(txt);

            });

            $(".create-po-modal").modal({show:true});
            $('.create-po-modal').on('hidden.bs.modal', function () {
            $("#po-create").empty();
            });

         } else{

            swal("Please select a record. Thanks.", "")

         }   

    });


   /* ******************************************************sales invoice************************************************************************ */

    
//Save Purchase Orders

$("#save-po-button").click(function(e){

  e.preventDefault();
  var supplierName = $("#supplierID").val();
  var shippedViaPO = $("#po-shipped-via").val();
  var termsPO = $("#po-terms").val();
  var numberOfItems = $("#numberOfItem").val();
  

  if( supplierName == 0 ){
    swal("Please enter value in supplier field. Thank you.")
    return false;
  }else if( shippedViaPO == "Select"){
     swal("Please enter value in shipped via field. Thank you.")
     return false;
  }else if( termsPO == "" ){
     swal("Please enter value in terms field. Thank you.")
     return false;
  }else if( arrayVar == ""){
      swal("Please enter values in the Purchase Order Form. Thank you.")
      return false;
  }else if( numberOfItems > arrayVar.length ){
    swal("Please enter value for other items. Thank you.")
    return false;
  }


  for (var i = arrayVar.length - 1; i >= 0; i--) {

    if( arrayVar[i].packaging == "" ){
      swal("Please enter packaging value. For no value, type 'None'. Thank you.")
      return false;
    }else if( arrayVar[i].qty == 0 ){
      swal("Please enter quantity value. Thank you.")
      return false;
    }

  }

  document.getElementById("save-po-button").disabled = true;
  
   $.post("{{ url('savepurchaseorders') }}", { 
      'po_code': $(".po-code").text(), 
      'purchase_orders': arrayVar,
      'shipped_via': $("#po-shipped-via :selected").text(),
      'terms': $("#po-terms").val(),
      'freight_charge': freight_charge, 
      'supplierID': $("#supplierID").val(),
      'overall_total': overall_total + freight_charge }, function(data){
     
      if(data.notify == "Success"){

        document.getElementById('poLoading-image').style.display="block";
      
        setTimeout(function(){
          $(".alert-addpo-success").fadeIn(100);
          $(".alert-addpo-success").delay(2000).fadeOut(800);
             window.location.reload(1);
        }, 2000);

      }else{
        console.log(data.notify);
      }

    }, 'json');

});

//Save Purchases
$("#save-purchases-button").click(function(e){

  e.preventDefault();
  var numberOfItemsPos = $("#numberOfItemsPos").val();
  var purchasesFCharge = $("#purchase-freight-charge").val();

  if( arrayVarPurchases == "" ){
    swal("Please enter values in the purchases form. Thank you.")
    return false;
  }else if( numberOfItemsPos > arrayVarPurchases.length ){
    swal("Please enter value for the other items. Thank you.")
    return false;
  }else if( purchasesFCharge=="" ){
    swal("Please enter freight charge value. Enter 0 if none. Thank you.")
    return false;
  }


  for (var i = arrayVarPurchases.length - 1; i >= 0; i--) {
    if( arrayVarPurchases[i].addon_qty == "" ){
      swal("Please enter add-on value. Enter 0 if none. Thank you.")
      return false;
    }else if( arrayVarPurchases[i].purchase_qty == "" ){
      swal("Please enter value for actual purchase quantity. Thank you.")
      return false;
    }

  }

  document.getElementById("save-purchases-button").disabled = true;

  $.post("{{ url('savepurchases') }}", {
    'purchases_data': arrayVarPurchases,
    'freight_charge': purchasesFCharge
    }, function(data){
   
       if(data.notify == "Success"){

        document.getElementById('purchasesLoading-image').style.display="block";

        setTimeout(function(){
          $(".alert-notice-success").fadeIn(100);
          $(".alert-notice-success").delay(2000).fadeOut(800);
           window.location.replace("http://promed/purchaseorders");
        }, 2000);

       }else{
        console.log("Failed");   
      }

    }, 'json');
  
});



$("#update-purchases-button").click(function(e){

  e.preventDefault();
  var purchasesFCharge = $("#purchase-freight-charge").val();

  $.post("{{ url('updatepurchases') }}", {
    'purchases_data': arrayVarPurchases,
    'freight_charge': purchasesFCharge
    }, function(data){
   
       if(data.notify == "Success"){

        $(".alert-notice-success-update").fadeIn(100);
        $(".alert-notice-success-update").delay(2000).fadeOut(800);
        setTimeout(function(){
           window.location.replace("http://promed/purchaseorders");
        }, 2000);

       }else{
        console.log("Failed");   
      }

    }, 'json');

})

//Save Sales
$("#save-sales-button").click(function(e){

 e.preventDefault();
 var sales_params = $(".tbl-sales-details :input").serialize();
 var salesNumber = $(".sales_number").val();
 var numberOfSalesItem = $("#numberOfSalesItem").val();
 var agentName = $("#agentsID").val();
 var clientName = $("#clientsID").val();
 

   if( clientName == 0 ){

    swal("Please enter value in the client field. Thank you.")
    return false;

   }else if( arrayVarSales == "" ){

    swal("Please enter values in the sales invoice form. Thank you.")
    return false;

  }else if( numberOfSalesItem > arrayVarSales.length ){

    swal("Please enter value for the other items. Thank you.")
    return false;

  }


  for (var i = arrayVarSales.length - 1; i >= 0; i--) {

    if( arrayVarSales[i].sales_qty == 0 ){
      swal("Please enter sales quantity. Thank you.")
      return false;
    }

  }

   document.getElementById("save-sales-button").disabled = true;
  
   $.post("{{ url('saveSales') }}", {
      'salesNumber': salesNumber,
      'customerID': $("#clientsID").val(),
      'agentID': $("#agentsID").val(),
      'salesDetails': arrayVarSales
      }, function(data){

      $.post("{{ url('updateInventory') }}", {
      'salesDetails': arrayVarSales
      }, function(data){

        document.getElementById('createInvoiceLoading-image').style.display="block";
     
        if(data.notify == "Success"){

          setTimeout(function(){
            $(".alert-saveSales-success").fadeIn(100);
            $(".alert-saveSales-success").delay(2000).fadeOut(800);
             window.location.reload(1);
          }, 2000);

         }else{
          console.log("Failed");
        }

      }, 'json');
     
    }, 'json');
 
  
});

//Add purchases to Inventory

$("#purchase_toInventoryID").click(function(e){

  e.preventDefault();
         
        var array_prodID = <?php echo json_encode(isset($array_prodID) ? $array_prodID : 0); ?>;
        var array_poID = <?php echo json_encode(isset($array_poID) ? $array_poID : 0); ?>;
        var array_purchaseID = <?php echo json_encode(isset($array_purchaseID) ? $array_purchaseID : 0); ?>;
        var array_purchasePrice = <?php echo json_encode(isset($array_purchasePrice) ? $array_purchasePrice : 0); ?>;
        var array_purchaseQuantity = <?php echo json_encode(isset($array_purchaseQuantity) ? $array_purchaseQuantity : 0); ?>;
        var array_purchaseAddOnQty = <?php echo json_encode(isset($array_purchaseAddOnQty) ? $array_purchaseAddOnQty : 0); ?>;
        var array_purchaseExpiryDate = <?php echo json_encode(isset($array_purchaseExpiryDate) ? $array_purchaseExpiryDate : 0); ?>;
        

        document.getElementById("purchase_toInventoryID").disabled = true;

        $.post("{{ url('saveToInventory') }}", { 
                'product_ids': array_prodID, 
                'purchase_order_ids': array_poID,
                'purchase_ids':array_purchaseID,
                'purchasePrice': array_purchasePrice,
                'purchaseQuantity': array_purchaseQuantity,
                'purchaseAddOnQty': array_purchaseAddOnQty,
                'purchaseExpiryDate': array_purchaseExpiryDate
           }, function(data){
           
            if(data.notify == "Success"){

              document.getElementById('purchasesToInventoryLoading-image').style.display="block";

                   $.post("{{ url('updatePOStatus') }}", { 
                          'purchase_order_ids': array_poID
                     }, function(data){
                     
                      if(data.notify == "Success"){

                        setTimeout(function(){
                          $(".alert-notice-success").fadeIn(100);
                          $(".alert-notice-success").delay(2000).fadeOut(800);
                           window.location.replace("http://promed/purchaseorders");
                        }, 2000);

                      }else{
                        console.log(data.notify);
                      }

                    }, 'json');

            }else{

              console.log(data.notify);

            }

          }, 'json');
           
});


$('#table-prod-contents').on('search.dt', function() {
    var value = $('.dataTables_filter input').val();
    document.getElementById("export-prod-id").href="{{ url('exportProduct') }}"+'/'+value;
    
});

$('#table-prodpharma-contents').on('search.dt', function() {
    var value = $('.dataTables_filter input').val();
    document.getElementById("export-prodPharma-id").href="{{ url('exportProductPharma') }}"+'/'+value;
    
});

$('#table-sales-contents').on('search.dt', function() {
    var value = $('.dataTables_filter input').val();
    document.getElementById("export-sales-id").href="{{ url('exportSales') }}"+'/'+value;
    
});

$('#table-inv-contents').on('search.dt', function() {
    var value = $('.dataTables_filter input').val();
    document.getElementById("export-inv-id").href="{{ url('exportInventory') }}"+'/'+value;
    
});

$('#table-invoices-contents').on('search.dt', function() {
    var value = $('.dataTables_filter input').val();
    document.getElementById("export-invoices-id").href="{{ url('exportInvoices') }}"+'/'+value;
    
});

$('#table-clients-contents').on('search.dt', function() {
    var value = $('.dataTables_filter input').val();
    document.getElementById("export-client-id").href="{{ url('exportClient') }}"+'/'+value;
    
});

$('#table-supp-contents').on('search.dt', function() {
    var value = $('.dataTables_filter input').val();
    document.getElementById("export-supplier-id").href="{{ url('exportSupplier') }}"+'/'+value;
    
});

$('#table-agents-contents').on('search.dt', function() {
    var value = $('.dataTables_filter input').val();
    document.getElementById("export-agent-id").href="{{ url('exportAgents') }}"+'/'+value;
    
});

/*$('#table-payments-contents').on('search.dt', function() {
    var value = $('.dataTables_filter input').val();
    document.getElementById("export-payment-history").href="{{ url('exportPaymentHistory') }}"+'/'+value;
    
});*/


$("#add-prodpo-btn").change(function(e){

  var txt;
  var pharmaID = $(this).find('option:selected').val();
  var pharmaName = $(this).find('option:selected').text();
  var pharmaUnit = $("#prod-unit").text();
  
  
  txt += "<tr class='info1'><td><input type='number' class='form-control' style='width:100px;' value='0'/>"+
                     "</td><td class='pro-unit'><input type='hidden' class='form-control prod-id' style='width:100px;' value='"+pharmaID+"'/>"+pharmaUnit+
                     "</td><td class='pro-pharmaceutical'>"+pharmaName+
                     "</td><td><input type='text' class='form-control pro-packaging' style='width:100px;' value=''/>"+
                     "</td><td><input type='text' class='form-control price' style='width:100px;' value='' />"+
                     "</td><td><input type='text' class='form-control total' style='width:100px;' value='0' disabled=disabled />"+
                     "</td></tr>";
                
            
  $("#tbl-po-list").append(txt);

});

//Client Modal
$("#create-client-details").click(function(e){

 e.preventDefault();
 
  $(".add-clients-modal").modal({show:true});
  $('.add-clients-modal').on('hidden.bs.modal', function () {
  $("#po-create").empty();
  });
 
});

//Agent Modal

$("#add-agent-btn").click(function(e){

 e.preventDefault();
 
  $(".add-agent-modal").modal({show:true});
 
});


//Change collectibles to collected

$("#btn-saleNum-collected").click(function(e){

  e.preventDefault();
  var sale_num = [];

  $("#table-invoices-contents tr td input:checkbox:checked").each(function(i){
    sale_num[i] = $(this).val();
  });

  
  if(sale_num.length > 0){

    $.post("{{ url('changesalestatus') }}", {
      'saleNumber': sale_num
      }, function(data){
     
         if(data.notify == "Success"){

          $(".alert-notice-success-collected").fadeIn(100);
          $(".alert-notice-success-collected").delay(2000).fadeOut(800);
          setTimeout(function(){
             window.location.reload(1);
          }, 1000);
          
         }else{
          console.log("Failed");   
        }

      }, 'json');
  }else{
    swal("Please select a record. Thanks.", "")
  }

});


//Delete functions
$(".delete-supp-btn").click(function(e){
  e.preventDefault();
  swal('This function is not enabled. Please contact system developer for additional functions needed. Thank you.')
});


//Payment Functions

$("#btn-enter-payment").click(function(e){
  e.preventDefault();

    var sale_num = [];

    $("#table-invoices-contents tr td input:checkbox:checked").each(function(i){
      sale_num[i] = $(this).val();
    });

    if( sale_num.length > 0 && sale_num.length == 1 ){

      $('#table-invoices-contents tr.tbl-invoices-row').filter(':has(:checkbox:checked)').each(function() {
               
                  $tr = $(this);
                  $('td', $tr).each(function() {

                      if( $tr.find('td:eq(8)').html() == "Fully Paid"){

                         swal("Fully Paid");

                      }else{

                         document.getElementById("salesNumID").value = $tr.find('td:eq(0) input').val(); 
                         document.getElementById("client_id").value = $tr.find('td:eq(11)').html(); 
                         document.getElementById("customerNameID").value = $tr.find('td:eq(3)').html(); 
                         document.getElementById("customerBalanceID").value = $tr.find('td:eq(7)').html(); 
                         $(".enter-payment-modal").modal({show:true});

                      }

                  });
                    
                  return false;
             });

     }else if( sale_num.length > 1 ){

        swal("Please select one record at a time. Thanks.", "")

     }else{

        swal("Please select a record to enter payment. Thanks.", "")

     }

});


$(".submit-payment").click(function(e){
  e.preventDefault();

  var balancePayment = parseFloat($("#customerBalanceID").val().replace(/,/g, ''));
  var currentPayment = parseFloat($("#payment-value-id").val());
  var sale_num = $("#salesNumID").val();
  var orNumber = $("#orNumberID").val();

      if( orNumber == "" ){

        swal('Please enter official receipt number. Thank you.');

      }else if(balancePayment == currentPayment){

        document.getElementById("submit-payment").disabled = true;
        
        $.post("{{ url('enterPayment') }}", $("#enter-payment-form").serialize() + '&status=' + "TRUE", function(data){

          if( data.notify == "Success" ){

            document.getElementById('paymentLoading-image').style.display="block";

                setTimeout(function(){
                  $(".alert-payment-notice-success").fadeIn(100);
                  $(".alert-payment-notice-success").delay(2000).fadeOut(800);
                   window.location.reload(1);
                }, 1000);

          }else{

            swal('Error: Data not saved.');

          }

        },'json');


        $.post("{{ url('changesalestatus') }}", {
          'saleNumber': sale_num
          }, function(data){
           console.log(data.notify);
         }, 'json');
   

      }else if( balancePayment < currentPayment ){

        swal('Payment Exceeded.');

      }else if( !currentPayment){

        swal('Please enter payment. Thank you.');

      }else{

          document.getElementById("submit-payment").disabled = true;

          $.post("{{ url('enterPayment') }}", $("#enter-payment-form").serialize(), function(data){

          if( data.notify == "Success" ){

            document.getElementById('paymentLoading-image').style.display="block";

                setTimeout(function(){
                   $(".alert-payment-notice-success").fadeIn(100);
                   $(".alert-payment-notice-success").delay(2000).fadeOut(800);
                   window.location.reload(1);
                }, 1000);

          }else{

            swal('Error: Data not saved.');

          }

        },'json');

    }

});


//functions to get the current age of member

//calculate age 
              
              $('#date_of_birth').keyup(function() {
                   
                    var today = new Date();
                    var birthDate = new Date($('#date_of_birth').val());
                    var age = today.getFullYear() - birthDate.getFullYear();
                    var m = today.getMonth() - birthDate.getMonth();
                    $('#age').val(age);
                });



</script>