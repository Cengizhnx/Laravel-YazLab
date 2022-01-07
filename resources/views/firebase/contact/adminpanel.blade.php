<!doctype html>
<html lang="en">

<head>
  <!-- https://shouts.dev/laravel-realtime-crud-using-google-firebase -->

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <title>Admin Paneli</title>

</head>

<body>

  <div class="container" style="margin-top: 50px;">

    <h4 class="text-center">Admin - Başvurular</h4><br>


    <br>
    <table class="table table-bordered">
      <tr>
        <th width="250">Başvuru Türü</th>
        <th width="200">Okul Numarası</th>
        <th>Adı</th>
        <th width="400" class="text-center">Action</th>
      </tr>
      <tbody id="tbody">

      </tbody>
    </table>
  </div>

  <!-- Update Model -->
  <form action="" method="POST" class="users-update-record-model form-horizontal">
    <div id="update-modal" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" style="width:55%;">
        <div class="modal-content" style="overflow: hidden;">
          <div class="modal-header">
            <h4 class="modal-title" id="custom-width-modalLabel">Onayla</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
            </button>
          </div>
          <div class="modal-body" id="updateBody">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Kapat
            </button>
            <button type="button" class="btn btn-success updateCustomer">Onayla
            </button>
          </div>
        </div>
      </div>
    </div>
  </form>

  <!-- Başvuru Görüntüle Model -->

  <form action="" method="POST" class="users-goruntule-record-model form-horizontal">
    <div id="goruntule-modal" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" style="width:55%;">
        <div class="modal-content" style="overflow: hidden;">
          <div class="modal-header">
            <h4 class="modal-title" id="custom-width-modalLabel">Görüntüle</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
            </button>
          </div>
          <div class="modal-body" id="goruntuleBody">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close
            </button>
            <button type="button" class="btn btn-success basvuruOgrenci">Update
              <!-- updateCustomer on clickte yazıyor-->
            </button>
          </div>
        </div>
      </div>
    </div>
  </form>

  <!-- Delete Model -->
  <form action="" method="POST" class="users-remove-record-model">
    <div id="remove-modal" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-dialog-centered" style="width:55%;">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="custom-width-modalLabel">Delete</h4>
            <button type="button" class="close remove-data-from-delete-form" data-dismiss="modal" aria-hidden="true">×
            </button>
          </div>
          <div class="modal-body">
            <p>Do you want to delete this record?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Close
            </button>
            <button type="button" class="btn btn-danger waves-effect waves-light deleteRecord">Delete
            </button>
          </div>
        </div>
      </div>
    </div>
  </form>


  {{--Firebase Tasks--}}
  <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
  <script type="module">
    import {
      initializeApp
    } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js";

    // Initialize Firebase
    var config = {
      apiKey: "{{ config('services.firebase.api_key') }}",
      authDomain: "{{ config('services.firebase.auth_domain') }}",
      databaseURL: "{{ config('services.firebase.database_url') }}",
      storageBucket: "{{ config('services.firebase.storage_bucket') }}",
    };

    firebase.initializeApp(config);

    var database = firebase.database();

    var lastIndex = 0;

    var basvuruTuruGoster;
    // Get Data
    firebase.database().ref('basvurular').on('value', function(snapshot) {
      var value = snapshot.val();
      var htmls = [];
      $.each(value, function(index, value) {
        $.each(value, function(index, value) {
          if (value) {
            basvuruTuruGoster = value.basvuruTuru == "cap" ? "Çap Başvurusu" :
              value.basvuruTuru == "dersintibak" ? "Ders İntibak Başvurusu" :
              value.basvuruTuru == "dgs" ? "DGS Başvurusu" :
              value.basvuruTuru == "basariyadayali" ? "Başarıya Dayalı Yatay Geçiş Başvurusu" :
              value.basvuruTuru == "merkeziyerlestirme" ? "Merkezi Ek Madde -1 Yatay Geçiş Başvurusu" :
              value.basvuruTuru == "yazokulu" ? "Yaz Okulu Başvurusu" :
              "Başvuru";
            htmls.push('<tr>\<td>' + basvuruTuruGoster + '</td>\
            <td>' + value.ogrNo + '</td>\
            <td style="text-align:center;padding: 3px 0;" data-id="2" data-env="PL1">' + value.adSoyad + '</td>\
        		<td><button data-toggle="modal" data-target="#goruntule-modal" class="btn btn-primary basGor" data-id="' + index + '">Görüntüle</button>\
            <button data-toggle="modal" data-target="#update-modal" class="btn btn-info updateData" data-id="' + index + '">Onayla</button>\
        		<button data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeData" data-id="' + index + '">Reddet</button></td>\
        	</tr>');
          }
          lastIndex = index;
        });
      });
      $('#tbody').html(htmls);
      $("#submitUser").removeClass('desabled');
    });

    // Update Data
    var updateID = 0;
    var basTur = "";
    $('body').on('click', '.updateData', function() {
      updateID = $(this).attr('data-id');
      firebase.database().ref('basvurular/cap' + updateID).on('value', function(snapshot) {
        var values = snapshot.val();
        var updateData = '<div class="form-group">\
		        <label for="first_name" class="col-md-12 col-form-label">Name</label>\
		        <div class="col-md-12">\
		            <input id="first_name" type="text" class="form-control" name="name" value="' + values.name + '" required autofocus>\
		        </div>\
		    </div>\
		    <div class="form-group">\
		        <label for="last_name" class="col-md-12 col-form-label">Email</label>\
		        <div class="col-md-12">\
		            <input id="last_name" type="text" class="form-control" name="email" value="' + values.email + '" required autofocus>\
		        </div>\
		    </div>';

        $('#updateBody').html(updateData);
      });
    });

    $('.updateCustomer').on('click', function() {
      var adSoyadtd = $(this).attr('data-id');
      //var values = $(".users-update-record-model").serializeArray();
      var postData = {
        adSoyad: "Osman Feyyaz Onur",
        ogrNo: updateID,
        status: "onaylandı",
        basvuruTuru: "cap",
      };

      var updates = {};
      updates['/basvurular/cap/' + updateID] = postData;

      firebase.database().ref().update(updates);

      $("#update-modal").modal('hide');
    });

    $("body").on('click', '.removeData', function() {
      var id = $(this).attr('data-id');
      $('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="' + id + '">');
    });


    $('.deleteRecord').on('click', function() {
      var values = $(".users-update-record-model").serializeArray();
      var postData = {
        adSoyad: "Osman Feyyaz",
        ogrNo: updateID,
        status: "reddedildi",
        basvuruTuru: "cap",
      };

      var updates = {};
      updates['/basvurular/cap/' + updateID] = postData;

      firebase.database().ref().update(updates);

      $("#update-modal").modal('hide');
    });
  </script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>