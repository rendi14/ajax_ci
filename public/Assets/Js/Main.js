(function ($) {
  "use strict";
  $(".mobile-toggle").click(function () {
    $(".nav-menus").toggleClass("open");
  });
  $(".mobile-toggle-left").click(function () {
    $(".left-header").toggleClass("open");
  });
  $(".mobile-search").click(function () {
    $(".form-control-plaintext").toggleClass("open");
  });
  $(".bookmark-search").click(function () {
    $(".form-control-search").toggleClass("open");
  });
  $(".filter-toggle").click(function () {
    $(".product-sidebar").toggleClass("open");
  });
  $(".toggle-data").click(function () {
    $(".product-wrapper").toggleClass("sidebaron");
  });
  $(".form-control-search").keyup(function (e) {
    if (e.target.value) {
      $(".page-wrapper.horizontal-wrapper").addClass("offcanvas-bookmark");
    } else {
      $(".page-wrapper.horizontal-wrapper").removeClass("offcanvas-bookmark");
    }
  });
})(jQuery);

$(".loader-wrapper").fadeOut("slow", function () {
  $(this).remove();
});

$(window).on("scroll", function () {
  if ($(this).scrollTop() > 600) {
    $(".tap-top").fadeIn();
  } else {
    $(".tap-top").fadeOut();
  }
});

$(".media-size-email svg").on("click", function (e) {
  $(this).toggleClass("like");
});

$(".tap-top").click(function () {
  $("html, body").animate({
      scrollTop: 0,
    },
    600
  );
  return false;
});

function toggleFullScreen() {
  if (
    (document.fullScreenElement && document.fullScreenElement !== null) ||
    (!document.mozFullScreen && !document.webkitIsFullScreen)
  ) {
    if (document.documentElement.requestFullScreen) {
      document.documentElement.requestFullScreen();
    } else if (document.documentElement.mozRequestFullScreen) {
      document.documentElement.mozRequestFullScreen();
    } else if (document.documentElement.webkitRequestFullScreen) {
      document.documentElement.webkitRequestFullScreen(
        Element.ALLOW_KEYBOARD_INPUT
      );
    }
  } else {
    if (document.cancelFullScreen) {
      document.cancelFullScreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitCancelFullScreen) {
      document.webkitCancelFullScreen();
    }
  }
}

(function ($, window, document, undefined) {
  "use strict";
  var $ripple = $(".js-ripple");
  $ripple.on("click.ui.ripple", function (e) {
    var $this = $(this);
    var $offset = $this.parent().offset();
    var $circle = $this.find(".c-ripple__circle");
    var x = e.pageX - $offset.left;
    var y = e.pageY - $offset.top;
    $circle.css({
      top: y + "px",
      left: x + "px",
    });
    $this.addClass("is-active");
  });
  $ripple.on(
    "animationend webkitAnimationEnd oanimationend MSAnimationEnd",
    function (e) {
      $(this).removeClass("is-active");
    }
  );
})(jQuery, window, document);

//dark light tombol //
$(".toggle-menu").click(function () {
  $(".landing-menu").toggleClass("open");
});
$(".menu-back").click(function () {
  $(".landing-menu").toggleClass("open");
});

$(".product-size ul li ").on("click", function (e) {
  $(".product-size ul li ").removeClass("active");
  $(this).addClass("active");
});

$(".email-sidebar .email-aside-toggle ").on("click", function (e) {
  $(".email-sidebar .email-left-aside ").toggleClass("open");
});

$(".job-sidebar .job-toggle ").on("click", function (e) {
  $(".job-sidebar .job-left-aside ").toggleClass("open");
});

$(".mode").on("click", function () {
  $(".mode i").toggleClass("fa-moon-o").toggleClass("fa-lightbulb-o");
  $("body").toggleClass("dark-only");
  var color = $(this).attr("data-attr");
  localStorage.setItem("body", "dark-only");
});

// aktif link
const activePage = window.location.pathname;
const navLinks = document.querySelectorAll("nav a").forEach((link) => {
  if (link.href.includes(`${activePage}`)) {
    link.classList.add("active");
    console.log(link);
  }
});
// end aktif

// DATATABEL
$(document).ready(function () {
  $("#tabel1").DataTable();
  
  $('#tabelmodal').DataTable({
    "scrollY": "200px",
    "scrollCollapse": true,
  });
  $('#tabelmodalgreen').DataTable({
    "scrollY": "200px",
    "scrollCollapse": true,
  });

  $('#tabeldetaildomisli').DataTable({
    "scrollY": "200px",
    "scrollCollapse": true,
  });
});


// Selected Disable for BC
const select = document.getElementById("select-option");
const talent_management = document.getElementById("talent_management");
const nama = document.getElementById("nama");
const no_pekerjaan = document.getElementById("no_pekerjaan");
const nik = document.getElementById("nik");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const jabatan = document.getElementById("jabatan");
const fungsi = document.getElementById("fungsi");
const tempat_lahir = document.getElementById("tempat_lahir");
const tanggal_lahir = document.getElementById("tanggal_lahir");
const negara_lahir = document.getElementById("negara_lahir");
const pendidikan = document.getElementById("pendidikan");
const npwp = document.getElementById("npwp");
// const alamat_tempat_tinggal = document.getElementById("alamat_tempat_tinggal");
const alamat_sesuai_ktp = document.getElementById("alamat_sesuai_ktp");
const fb = document.getElementById("fb");
const lk = document.getElementById("lk");
const ig = document.getElementById("ig");
const tw = document.getElementById("tw");
const tk = document.getElementById("tk");
const province = document.getElementById("bs-province");
const kabupaten = document.getElementById("bs-kabupaten");
const status_keluarga = document.getElementById("status_keluarga");
const gender = document.getElementById("gender");
// const ringkasan = document.getElementById("ringkasan");
const sosmed_lainnya = document.getElementById("sosmed_lainnya");
const cek = document.getElementById("cek");
const simpankosong = document.getElementById("simpankosong");

select.addEventListener("change", () => {
  const selectedOption = select.options[select.selectedIndex].value;
  if (selectedOption === "1") {
    talent_management.hidden = true;
    nama.disabled = false;
    no_pekerjaan.disabled = false;
    nik.disabled = false;
    email.disabled = false;
    phone.disabled = false;
    jabatan.disabled = false;
    fungsi.disabled = false;
    tempat_lahir.disabled = false;
    tanggal_lahir.disabled = false;
    negara_lahir.disabled = false;
    pendidikan.disabled = false;
    npwp.disabled = false;
    // alamat_tempat_tinggal.disabled = false;
    alamat_sesuai_ktp.disabled = false;
    fb.disabled = false;
    lk.disabled = false;
    ig.disabled = false;
    tw.disabled = false;
    tk.disabled = false;
    cek.disabled = false;
    kabupaten.disabled = false;
    province.disabled = false;
    simpankosong.disabled = false;
    status_keluarga.disabled = false;
    sosmed_lainnya.disabled = false;
    gender.disabled = false;
    // ringkasan.disabled = false;
  } else if (selectedOption === "2") {
    talent_management.hidden = false;
    nama.disabled = false;
    no_pekerjaan.disabled = false;
    nik.disabled = false;
    email.disabled = false;
    phone.disabled = false;
    jabatan.disabled = false;
    fungsi.disabled = false;
    tempat_lahir.disabled = false;
    tanggal_lahir.disabled = false;
    negara_lahir.disabled = false;
    pendidikan.disabled = false;
    npwp.disabled = false;
    // alamat_tempat_tinggal.disabled = false;
    alamat_sesuai_ktp.disabled = false;
    status_keluarga.disabled = false;
    fb.disabled = false;
    lk.disabled = false;
    ig.disabled = false;
    tw.disabled = false;
    tk.disabled = false;
    kabupaten.disabled = false;
    province.disabled = false;
    sosmed_lainnya.disabled = false;
    cek.disabled = false;
    simpankosong.disabled = false;
    gender.disabled = false;
    // ringkasan.disabled = false;
  }
});


function deletes(url) {
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed == true) {
      location.href = url;
    }
  })
}

// bc gender kondiisi
// document.getElementById("status_keluarga").addEventListener("change", function () {
//   const selectedValue = this.value;
//   const genderSelect = document.getElementById("gender");

//   if (selectedValue === "1") {
//     genderSelect.innerHTML = '<option value="1">Laki Laki</option>';
//   } else if (selectedValue === "2") {
//     genderSelect.innerHTML = '<option value="2">Perempuan</option>';
//   } else {
//     genderSelect.innerHTML = '<option value="" selected disabled>Pilih Gender</option>' +
//       '<option value="1">Laki Laki</option>' +
//       '<option value="2">Perempuan</option>';
//   }
// });