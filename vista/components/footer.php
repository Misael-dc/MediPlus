             
          </div>
          
          </div>
          
            <!-- Footer -->
          <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>
                &copy; <span id="copy-year"></span> R A M <a class="text-primary" href="#" target="_blank" >Abdus</a>.
              </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>
  
        </div>
      </div>
  
                      
      
    <script src="../plugins/jquery/jquery.min.js"></script>
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../plugins/simplebar/simplebar.min.js"></script>
    <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>
  
    
    
    <script src="../plugins/apexcharts/apexcharts.js"></script>
    
    
    
    <script src="../plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    
    
    
    <script src="../plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="../plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
    <script src="../plugins/jvectormap/jquery-jvectormap-us-aea.js"></script>
    
    
    
    <script src="../plugins/daterangepicker/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <script>
      jQuery(document).ready(function() {
        jQuery('input[name="dateRange"]').daterangepicker({
        autoUpdateInput: false,
        singleDatePicker: true,
        locale: {
          cancelLabel: 'Clear'
        }
      });
        jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
          jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
        });
        jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
          jQuery(this).val('');
        });
      });
    </script>
    
    
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    
    
    
    <script src="../plugins/toaster/toastr.min.js"></script>                   
    
    <script src="../js/mono.js"></script>
    <script src="../js/chart.js"></script>
    <script src="../js/map.js"></script>
    <script src='../js/custom.js'></script>
    <script src='../js/mensaje.js' type="module"></script>
    <script  type="module">

      <?php 
        if (isset($_SESSION['mensaje_info'])) {
          $mensaje = $_SESSION['mensaje_info']['mensaje'];
          $titulo = $_SESSION['mensaje_info']['titulo'];
          $tipo = $_SESSION['mensaje_info']['tipo'];
          unset($_SESSION['mensaje_info']);
      ?>
        import {callToaster} from '../js/mensaje.js';
        callToaster('<?=$mensaje?>', '<?=$titulo?>', '<?=$tipo?>');
      <?php    
        }
      ?>
      
    </script>
    </body>
  </html>
  