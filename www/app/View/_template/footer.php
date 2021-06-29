<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #007bfc;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 48px;
  right: 28px;
  z-index: 1000;
  border-radius: 50%;
  box-shadow: 5px 5px 5px #666;
    -moz-box-shadow: 5px 5px 5px #666;
    -webkit-box-shadow: 5px 5px 5px #666;
    -khtml-box-shadow: 5px 5px 5px #666;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 48px;
  right: 15px;
  /* border: 3px solid #f1f1f1; */
  z-index: 1000;
  width: 400px;
  box-shadow: 5px 5px 5px #666;
      -moz-box-shadow: 5px 5px 5px #666;
      -webkit-box-shadow: 5px 5px 5px #666;
      -khtml-box-shadow: 5px 5px 5px #666;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

<button class="open-button" onclick="openForm()"><i class="nav-icon fas fa-comments"></i></button>

<div class="form-popup" id="myForm">
  <div class="card card-primary" style="margin-bottom: 0px">
    <div class="card-header">
      <h3 class="card-title">Contact</h3>
    </div>
    <form id="contact-form" class="form-horizontal">
        <div class="card-body">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" name="message" rows="3" placeholder="Enter message ..." spellcheck="false" required style="margin-top: 0px; margin-bottom: 0px; height: 106px;"></textarea>
            </div>
            <div class="form-group">
                <p>You may also email us at <a href="mailto:support@cargomation.com">support@cargomation.com</a></p>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Send</button>
            <button type="button" class="btn btn-danger float-right" onclick="closeForm()">Close</button>
        </div>
    </form>
  </div>
</div>



  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019-2020 <a href="/"><?=APP_NAME?></a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.7
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/bower_components/admin-lte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/bower_components/admin-lte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="/bower_components/admin-lte/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="/bower_components/admin-lte/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- ChartJS -->
<script src="/bower_components/admin-lte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/bower_components/admin-lte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/bower_components/admin-lte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/bower_components/admin-lte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/bower_components/admin-lte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/bower_components/admin-lte/plugins/moment/moment.min.js"></script>
<script src="/bower_components/admin-lte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/bower_components/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/bower_components/admin-lte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/bower_components/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/bower_components/admin-lte/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/bower_components/admin-lte/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/bower_components/admin-lte/dist/js/demo.js"></script>
<script src="/bower_components/admin-lte/plugins/select2/js/select2.full.min.js"></script>
<!-- Selectize JS -->
<script src="/bower_components/selectize/dist/js/standalone/selectize.js"></script>
<!-- DataTables -->
<script src="/bower_components/admin-lte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/bower_components/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/bower_components/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/bower_components/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/bower_components/admin-lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/bower_components/admin-lte/plugins/datatables-select/js/select.bootstrap4.min.js"></script>
<!-- Bootstrap File Input -->
<script src="/bower_components/bootstrap-fileinput/js/plugins/piexif.js" type="text/javascript"></script>
<script src="/bower_components/bootstrap-fileinput/js/plugins/sortable.js" type="text/javascript"></script>
<script src="/bower_components/bootstrap-fileinput/js/fileinput.js" type="text/javascript"></script>
<script src="/bower_components/bootstrap-fileinput/js/locales/fr.js" type="text/javascript"></script>
<script src="/bower_components/bootstrap-fileinput/js/locales/es.js" type="text/javascript"></script>
<script src="/bower_components/bootstrap-fileinput/themes/fas/theme.js" type="text/javascript"></script>
<script src="/bower_components/bootstrap-fileinput/themes/explorer-fas/theme.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/colreorder/1.5.3/js/dataTables.colReorder.min.js" type="text/javascript"></script>
<!--for 3rd party-->
<!-- <script src="https://cdn.datatables.net/colreorder/1.5.3/js/dataTables.colReorder.min.js" type="text/javascript"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap4-duallistbox/4.0.2/jquery.bootstrap-duallistbox.min.js"></script>
<!-- Custome JS -->
<?= $this->getJS(); ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>
<!-- Sweetalert -->
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
<!-- Bootstrap Sweetalert -->
<!-- <script src="/bower_components/bootstrap-sweetalert/dist/sweetalert.min.js"></script> -->
<!-- SweetAlert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
crossorigin=""></script>
<script src="https://cdn.jsdelivr.net/npm/Leaflet-MovingMaker@0.0.1/MovingMarker.js"></script>
<script src="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.umd.js"></script>
<script src="/bower_components/admin-lte/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<script>
$(document).ready(function () {
  $("#contact-form").submit(function (e) {

      var data = $(this).serializeArray();
      var email = data[0]['value'];
      var name = data[1]['value'];
      var message = data[2]['value'];

      $.ajax({
          url: '/contact/sendEmailAPI',
          type: "POST",
          dataType: "json",
          data: {
              'name': name,
              'email': email,
              'message': message
          },
          beforeSend: function () {
              $("#contact-form .card-body").append('<center id="loader"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span></center>');
          }, success: function (result) {
              $('#loader').remove();
              Swal.fire({
                  icon: 'success',
                  title: 'Message Sent!',
                  text: 'Your message was sent!',
                  timer: 3000
              });
              $('#myForm').find('input:text, input:password, input, select, textarea')
                          .each(function () {
                              $(this).val('');
                          });
              closeForm();
          }
      });
      e.preventDefault();
  });

});

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
$(document).ready(function(){
  // var mymap = L.map('dashmap').setView([10.3130247, 123.9471531], 5);
  //   var polyArray = [];
  //   L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=iPr7S2yMM5rvXzDFNlFW35qgk2HTvVSuZTgY6EWcMYgYknPfEnPYAhIbB366OUeC', {
  //     attribution: '<a href="http://jawg.io" title="Tiles Courtesy of Jawg Maps" target="_blank">&copy; <b>Jawg</b>Maps</a> &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
  //     minZoom: 0,
  //     maxZoom: 13,
  //     subdomains: 'abcd',
  //     accessToken: 'iPr7S2yMM5rvXzDFNlFW35qgk2HTvVSuZTgY6EWcMYgYknPfEnPYAhIbB366OUeC'
  //   }).addTo(mymap);
  
  var mapboxAccessToken = 'iPr7S2yMM5rvXzDFNlFW35qgk2HTvVSuZTgY6EWcMYgYknPfEnPYAhIbB366OUeC';
  var map = L.map('dashmap').setView([33.8688, 151.2093], 4);
  var polyArray = [  
          [[31.366365,121.61475],[-33.86785, 151.20732]],
          [[1.28967,103.85007],[-37.814,144.96332]],
          [[13.08775,100.88433],[31.366365,121.61475]]
        ];
  var markerpoly = [[31.366365,121.61475],[-33.86785, 151.20732],[1.28967,103.85007],[-37.814,144.96332],[13.08775,100.88433],[31.366365,121.61475]];
  
  L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
    subdomains: 'abcd',
    maxZoom: 19
  }).addTo(map);

  $.each(markerpoly,function(k,v){
      L.marker(v).bindPopup(
            '<div class="text-center">'
            +'<br>'
            +'<span>Origin: Australia - Destination: Singapore</span><br>'
            +'<span>Container Number: AMCU9279460</span><br>'
            +'<span>Arrival: 2021-06-26 06:00:00</span><br>'
            +'<a href="/vessel/tracking?AMCU9279460" class="btn btn-success text-white">Live Tracking</a>'
            +'</div>'
        ).addTo(map);
  });
  // var greenIcon = L.icon({
  //     iconUrl: 'leaf-green.png',
  //     shadowUrl: 'leaf-shadow.png',
  //     iconSize:     [38, 95], // size of the icon
  //     shadowSize:   [50, 64], // size of the shadow
  //     iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
  //     shadowAnchor: [4, 62],  // the same for the shadow
  //     popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
  // });
  // L.marker([51.5, -0.09], {icon: greenIcon}).addTo(map);
  
//   L.HtmlIcon = L.Icon.extend({
// 	options: {
// 		/*
// 		html: (String) (required)
// 		iconAnchor: (Point)
// 		popupAnchor: (Point)
// 		*/
// 	},

// 	initialize: function (options) {
// 		L.Util.setOptions(this, options);
// 	},

// 	createIcon: function () {
// 		var div = document.createElement('div');
// 		div.innerHTML = this.options.html;
// 		return div;
// 	},

// 	createShadow: function () {
// 		return null;
// 	}
// });

// const markerLocation = new L.LatLng(33.8684, 151.2092);

// const HTMLIcon = L.HtmlIcon.extend({
//     options : {
//         html : "<div class=\"map__marker\"></div>",
//     }
// });

// const customHtmlIcon = new HTMLIcon();

// const marker = new L.Marker(markerLocation, {icon: customHtmlIcon});
// map.addLayer(marker);

  
  
var polyline = L.polyline(polyArray[0], {
        color: '#007bff',
        weight: 2,
        opacity: 0.5,
        dashArray: '4',
        lineJoin: 'miter',
        lineCap: 'square',
      }).addTo(map);
var polyline2 = L.polyline(polyArray[1], {
  color: '#007bff',
  weight: 2,
  opacity: 0.5,
  dashArray: '4',
  lineJoin: 'miter',
  lineCap: 'square',
}).addTo(map);

var polyline3 = L.polyline(polyArray[2], {
  color: '#007bff',
  weight: 2,
  opacity: 0.5,
  dashArray: '4',
  lineJoin: 'miter',
  lineCap: 'square',
}).addTo(map);

map.fitBounds(polyline.getBounds());
map.fitBounds(polyline2.getBounds());

});
</script>
</body>
</html>

