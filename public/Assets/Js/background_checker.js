function big_checker(response) {
  $(".title-table").text("Information Recent");
  // $('.fall-regist').addClass('d-none');

  var jsonData = JSON.parse(response);

  //========== Pengadilan Negeri ========== //
  if (jsonData.pn.length > 0) {
    $(".number-case-pn").removeClass("d-none");
    $("#card-pn").removeClass("d-none");
    $(".no-case-all").addClass("d-none");
    $("#no-long-case").addClass("d-none");
    $(".no-case").addClass("d-none");
    $(".title-table-pn").text("Pengadilan Negeri");
    $(".number-case-pn").text(
      "Perhatian : " + jsonData.pn.length + " Kasus Ditemukan"
      // "Perhatian : " + "Red Flag"
    );
    $("#tabelpn > thead").html(
      "<tr>" +
        "<th>Pilih</th>" +
        "<th>No</th>" +
        "<th>Registrasi</th>" +
        "<th>Waktu</th>" +
        "<th>Kategori</th>" +
        "<th>Pihak</th>" +
        "<th>Status</th>" +
        "<th>Lama</th>" +
        "</tr>"
    );
    $("#tabelpn > tbody").empty();
    for (var i = 0; i < jsonData.pn.length; i++) {
      var content = "";
      content += "<tr>";
      content += "<td>" + "<input name='kasus[]' type='checkbox' class='checkbox-id' value='"+ jsonData.pn[i].id + ', pn'  +"'/>"+ "</td>";
      content += "<td>" + jsonData.pn[i].id + "</td>";
      content += "<td>" + jsonData.pn[i].regist + "</td>";
      content += "<td>" + jsonData.pn[i].date + "</td>";
      content += "<td>" + jsonData.pn[i].class + "</td>";
      content += "<td>" + jsonData.pn[i].pihak + "</td>";
      content += "<td>" + jsonData.pn[i].status + "</td>";
      content += "<td>" + jsonData.pn[i].lama + "</td>";
      content += "</tr>";
      $("#tabelpn > tbody").append(content);
    }
  }

  if (jsonData.pn.length == 0) {
    $("#card-pn").addClass("d-none");
    $(".fall-regist-pn").addClass("d-none");
  }

  if (jsonData.pn.length > 1) {
    $("#no_regist_pn").removeAttr("disabled");
    $(".fall-regist-pn").removeClass("d-none");
    $("#no_regist_pn").empty().append('<option value="">All</option>');
    for (var i = 0; i < jsonData.pn.length; i++) {
      var content = "";
      content +=
        "<option value='" +
        jsonData.pn[i].id +
        "'>" +
        jsonData.pn[i].regist +
        " - " +
        jsonData.pn[i].class +
        " - " +
        jsonData.pn[i].date +
        "</option>";
      $("#no_regist_pn").append(content);
    }
  }

  if (
    jsonData.pn.length == 0 &&
    jsonData.ham.length == 0 &&
    jsonData.ncb.length == 0 &&
    jsonData.ofac.length == 0 &&
    jsonData.adb.length == 0 &&
    jsonData.korupsi.length == 0
  ) {
    $(".no-case-all").removeClass("d-none");
    $("#no-long-case").removeClass("d-none");
    $(".number-case").addClass("d-none");
    $(".no-case-all").text("Perhatian : Green Flag");
  }

  // ========== END ============ //

  // ========== Tindak Pidana Korupsi ========== //
  if (jsonData.korupsi.length > 0) {
    $(".number-case-korupsi").removeClass("d-none");
    $("#card-korupsi").removeClass("d-none");
    $(".no-case-all").addClass("d-none");
    $("#no-long-case").addClass("d-none");
    $(".no-case").addClass("d-none");
    $(".title-table-korupsi").text("Tindak Pidana Korupsi");
    $(".number-case-korupsi").text(
      "Perhatian : " + jsonData.korupsi.length + " Kasus Ditemukan"
      // "Perhatian : " + "Red Flag"
    );
    $("#tabelkorupsi > thead").html(
      "<tr>" +
        "<th>Pilih</th>" +
        "<th>No</th>" +
        "<th>Registrasi</th>" +
        "<th>Waktu</th>" +
        "<th>Kategori</th>" +
        "<th>Pihak</th>" +
        "<th>Status</th>" +
        "<th>Lama</th>" +
        "</tr>"
    );
    $("#tabelkorupsi > tbody").empty();
    for (var i = 0; i < jsonData.korupsi.length; i++) {
      var content = "";
      content += "<tr>";
      content += "<td>" + "<input name='kasus[]' type='checkbox' class='checkbox-id' value='"+ jsonData.korupsi[i].id + ', korupsi' +"'/>"+ "</td>";
      content += "<td>" + jsonData.korupsi[i].id + "</td>";
      content += "<td>" + jsonData.korupsi[i].regist + "</td>";
      content += "<td>" + jsonData.korupsi[i].date + "</td>";
      content += "<td>" + jsonData.korupsi[i].class + "</td>";
      content += "<td>" + jsonData.korupsi[i].pihak + "</td>";
      content += "<td>" + jsonData.korupsi[i].status + "</td>";
      content += "<td>" + jsonData.korupsi[i].lama + "</td>";
      content += "</tr>";
      $("#tabelkorupsi > tbody").append(content);
    }
  }

  if (jsonData.korupsi.length == 0) {
    $("#card-korupsi").addClass("d-none");
    $(".fall-regist-korupsi").addClass("d-none");
  }

  if (jsonData.korupsi.length > 1) {
    $("#no_regist_korupsi").removeAttr("disabled");
    $(".fall-regist-korupsi").removeClass("d-none");
    $("#no_regist_korupsi").empty().append('<option value="">All</option>');
    for (var i = 0; i < jsonData.korupsi.length; i++) {
      var content = "";
      content +=
        "<option value='" +
        jsonData.korupsi[i].id +
        "'>" +
        jsonData.korupsi[i].regist +
        " - " +
        jsonData.korupsi[i].class +
        " - " +
        jsonData.korupsi[i].date +
        "</option>";
      $("#no_regist_korupsi").append(content);
    }
  }
  // ========== END ============================ //

  // =========== HAM =========== //
  if (jsonData.ham.length > 1) {
    $("#no_regist_ham").attr("disabled");
    $(".fall-regist-ham").removeClass("d-none");
    $("#no_regist_ham").empty().append('<option value="">All</option>');
    for (var i = 0; i < jsonData.ham.length; i++) {
      var content = "";
      content +=
        "<option value='" +
        jsonData.ham[i].id +
        "'>" +
        jsonData.ham[i].regist +
        "</option>";
      $("#no_regist_ham").append(content);
    }
  }

  if (jsonData.ham.length == 0) {
    $("#card-ham").addClass("d-none");
    $(".fall-regist-ham").addClass("d-none");
  }

  if (jsonData.ham.length > 0) {
    $(".number-case-ham").removeClass("d-none");
    $("#card-ham").removeClass("d-none");
    $(".no-case-all").addClass("d-none");
    $("#no-long-case").addClass("d-none");
    $(".no-case").addClass("d-none");
    $(".title-table-ham").text("HAM");
    $(".number-case-ham").text(
      "Perhatian : " + jsonData.ham.length + " Kasus Ditemukan"
      //  "Perhatian : " + "Red Flag"
    );
    $("#tabelham > thead").html(
      "<tr>" +
        "<th>Pilih</th>" +
        "<th>No</th>" +
        "<th>Register</th>" +
        "<th>Name</th>" +
        "<th>Date</th>" +
        "<th>Tingkat</th>" +
        "</tr>"
    );
    $("#tabelham > tbody").empty();
    for (var i = 0; i < jsonData.ham.length; i++) {
      var content = "";
      content += "<tr>";
      content += "<td>" + "<input name='kasus[]' type='checkbox' class='checkbox-id' value='"+ jsonData.ham[i].id + ', ham' +"'/>"+ "</td>";
      content += "<td>" + jsonData.ham[i].id + "</td>";
      content += "<td>" + jsonData.ham[i].regist + "</td>";
      content += "<td>" + jsonData.ham[i].name + "</td>";
      content += "<td>" + jsonData.ham[i].date + "</td>";
      content += "<td>" + jsonData.ham[i].tingkat + "</td>";
      content += "</tr>";
      $("#tabelham > tbody").append(content);
    }
  }

  // ============ END ============ //

  // ========= NCB ============= //
  if (jsonData.ncb.length > 0) {
    $(".number-case-ncb").removeClass("d-none");
    $(".no-case").addClass("d-none");

    $("#no-long-case").addClass("d-none");
    $(".no-case-all").addClass("d-none");
    $("#card-ncb").removeClass("d-none");
    $(".title-table-ncb").text("NCB");
    $(".number-case-ncb").text(
      "Perhatian : " + jsonData.ncb.length + " Kasus Ditemukan"
      //  "Perhatian : " + "Red Flag"
    );
    $("#tabelncb > thead").html(
      "<tr>" +
        "<th>Pilih</th>" +
        "<th>No</th>" +
        "<th>Name</th>" +
        "<th>Gender</th>" +
        "<th>Charge</th>" +
        "<th>Hair</th>" +
        "<th>Eye</th>" +
        "</tr>"
    );
    $("#tabelncb > tbody").empty();
    for (var i = 0; i < jsonData.ncb.length; i++) {
      var content = "";
      content += "<tr>";
      content += "<td>" + "<input name='kasus[]' type='checkbox' class='checkbox-id' value='"+ jsonData.ncb[i].id + ', ncb' +"'/>"+ "</td>";
      content += "<td>" + jsonData.ncb[i].id + "</td>";
      content += "<td>" + jsonData.ncb[i].name + "</td>";
      if (jsonData.ncb[i].gender == 1) {
        content += "<td>" + "Laki - Laki" + "</td>";
      } else if (jsonData.ncb[i].gender == 2) {
        content += "<td>" + "Perempuan" + "</td>";
      }
      content += "<td>" + jsonData.ncb[i].hair + "</td>";
      content += "<td>" + jsonData.ncb[i].charge + "</td>";
      content += "<td>" + jsonData.ncb[i].eye + "</td>";
      content += "</tr>";
      $("#tabelncb > tbody").append(content);
    }
  }
  if (jsonData.ncb.length == 0) {
    $("#card-ncb").addClass("d-none");
  }
  // ========== END =========== //

  // =========== OFAC =========== //
  if (jsonData.ofac.length > 1) {
    $("#no_regist_ofac").removeAttr("disabled");
    $(".fall-regist-ofac").removeClass("d-none");
    $("#no_regist_ofac").empty().append('<option value="">All</option>');
    for (var i = 0; i < jsonData.ofac.length; i++) {
      var content = "";
      content +=
        "<option value='" +
        jsonData.ofac[i].id +
        "'>" +
        jsonData.ofac[i].address +
        "</option>";
      $("#no_regist_ofac").append(content);
    }
  }

  if (jsonData.ofac.length > 0) {
    $(".number-case-ofac").removeClass("d-none");
    $(".no-case").addClass("d-none");
    $("#no-long-case").addClass("d-none");
    $(".no-case-all").addClass("d-none");
    $("#card-ofac").removeClass("d-none");
    $(".title-table-ofac").text("OFAC");
    $(".number-case-ofac").text(
      "Perhatian : " + jsonData.ofac.length + " Kasus Ditemukan"
      //  "Perhatian : " + "Red Flag"
    );
    $("#tabelofac > thead").html(
      "<tr>" +
        "<th>Pilih</th>" +
        "<th>No</th>" +
        "<th>Name</th>" +
        "<th>Address</th>" +
        "<th>Type</th>" +
        "<th>Programs</th>" +
        "<th>List</th>" +
        "</tr>"
    );
    $("#tabelofac > tbody").empty();
    for (var i = 0; i < jsonData.ofac.length; i++) {
      var content = "";
      content += "<tr>";
      content += "<td>" + "<input name='kasus[]' type='checkbox' class='checkbox-id' value='"+ jsonData.ofac[i].id + ', ofac' +"'/>"+ "</td>";
      content += "<td>" + jsonData.ofac[i].id + "</td>";
      content += "<td>" + jsonData.ofac[i].name + "</td>";
      content += "<td>" + jsonData.ofac[i].address + "</td>";
      content += "<td>" + jsonData.ofac[i].type + "</td>";
      content += "<td>" + jsonData.ofac[i].programs + "</td>";
      content += "<td>" + jsonData.ofac[i].list + "</td>";
      content += "</tr>";
      $("#tabelofac > tbody").append(content);
    }
  }

  if (jsonData.ofac.length == 0) {
    $("#card-ofac").addClass("d-none");
    $(".fall-regist-ofac").addClass("d-none");
  }
  // ============ END =========== //

  // ============== ADB ============= //
  if (jsonData.adb.length > 1) {
    $("#no_regist_adb").removeAttr("disabled");
    $(".fall-regist-adb").removeClass("d-none");
    $("#no_regist_adb").empty().append('<option value="">All</option>');
    for (var i = 0; i < jsonData.adb.length; i++) {
      var content = "";
      content +=
        "<option value='" +
        jsonData.adb[i].id +
        "'>" +
        jsonData.adb[i].address +
        "</option>";
      $("#no_regist_adb").append(content);
    }
  }

  if (jsonData.adb.length > 0) {
    $(".number-case-adb").removeClass("d-none");
    $(".no-case").addClass("d-none");
    $("#no-long-case").addClass("d-none");
    $(".no-case-all").addClass("d-none");
    $("#card-adb").removeClass("d-none");
    $(".title-table-adb").text("ADB");
    $(".number-case-adb").text(
      "Perhatian : " + jsonData.adb.length + " Kasus Ditemukan"
      // "Perhatian : " + "Red Flag"
    );
    $("#tabeladb > thead").html(
      "<tr>" +
        "<th>Pilih</th>" +
        "<th>No</th>" +
        "<th>Name</th>" +
        "<th>Address</th>" +
        "<th>Type</th>" +
        "<th>Programs</th>" +
        "<th>List</th>" +
        "</tr>"
    );
    $("#tabeladb > tbody").empty();
    for (var i = 0; i < jsonData.adb.length; i++) {
      var content = "";
      content += "<tr>";
      content += "<td>" + "<input name='kasus[]' type='checkbox' class='checkbox-id' value='"+ jsonData.adb[i].id + ', adb' +"'/>"+ "</td>";
      content += "<td>" + jsonData.adb[i].id + "</td>";
      content += "<td>" + jsonData.adb[i].name + "</td>";
      content += "<td>" + jsonData.adb[i].address + "</td>";
      content += "<td>" + jsonData.adb[i].type + "</td>";
      content += "<td>" + jsonData.adb[i].grounds + "</td>";
      content += "<td>" + jsonData.adb[i].edate + "</td>";
      content += "</tr>";
      $("#tabeladb > tbody").append(content);
    }
  }

  if (jsonData.adb.length == 0) {
    $("#card-adb").addClass("d-none");
    $(".fall-regist-adb").addClass("d-none");
  }
  // ============== END ============== //
}
$("#cek").on("click", function () {
  var name = $("#nama").val();
  var values = "";
  var data = {
    name: name,
    values: values,
  };
  $.ajax({
    type: "POST",
    url: "/bc/background-checker",
    data: data,
    success: function (response) {
      big_checker(response);
    },
  });
});

$(".value-select").on("change", function () {
  var values = $(this).val();
  var name = $("#nama").val();
  var data = {
    name: name,
    values: values,
  };
  $.ajax({
    type: "POST",
    url: "/bc/background-checker",
    data: data,
    success: function (response) {
      big_checker(response);
    },
  });
});

function push_data(e, $title){
  var j = "<p>"+ e.value +"</p>";
  $('.'+$title+'').html(j);
}

function push_data_date(e, $title){
  var j = "<p>"+ e.value +"</p>";
  $('.'+$title+'').html(j);
}


function push_data_change(e, $title){
  var gender;
  if(e.val == 1)
  {
    gender = "Laki Laki";
  }
  else{
    gender = "Perempuan";
  }
  var j = "<p>"+ gender +"</p>";
  $('.'+$title+'').html(j);
}

function previewTabel()
{
  $('.card-none').toggleClass('d-card-none').toggleClass('d-card-block');
}