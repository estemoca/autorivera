 </main>
 </div>
 <!--fin main-container -->
 </body>

 <script>
  
    $('#example').DataTable({
          "order": [
             [0, "asc"]
          ],
          "language": {
           "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
         }
       });

   //  setTimeout(function() {
   //     orderFechas();
   //  }, 500);


   //  $(document).on('click', '.paginate_button', function() {
   //     orderFechas();
   //  });
   //  $(document).on('click', '#example tr th:first-child', function() {
   //     orderFechas();
   //  });
   //  $(document).on('change', "#example_wrapper select", function() {
   //     orderFechas();
   //  });

   //  function orderFechas() {
   //     var fechas = document.getElementsByClassName("sorting_1");
   //     for (i = 0; i < fechas.length; i++) {
   //        var arrFecha = fechas[i].innerText.split('-');

   //        if (arrFecha[2].length != 4) {
   //           fechas[i].innerText = arrFecha[2] + "-" + arrFecha[1] + "-" + arrFecha[0];
   //        }
   //        //  console.info(arrFecha);
   //     }

   //  }
 </script>

 </html>