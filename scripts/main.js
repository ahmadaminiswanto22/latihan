// Add your javascript here
// Don't forget to add it into respective layouts where this js file is needed
$(document).ready(function () {
  AOS.init({
    // uncomment below for on-scroll animations to played only once
    // once: true
  }); // initialize animate on scroll library
});

// Smooth scroll for links with hashes
$("a.smooth-scroll").click(function (event) {
  // On-page links
  if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
    // Figure out element to scroll to
    var target = $(this.hash);
    target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
    // Does a scroll target exist?
    if (target.length) {
      // Only prevent default if animation is actually gonna happen
      event.preventDefault();
      $("html, body").animate(
        {
          scrollTop: target.offset().top,
        },
        1000,
        function () {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) {
            // Checking if the target was focused
            return false;
          } else {
            $target.attr("tabindex", "-1"); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          }
        }
      );
    }
  }
});

// Photo Filter
var activeFilter = "all";

$(".ww-filter-button").on("click", function (e) {
  // remove btn-primary from all buttons first
  $(".ww-filter-button").removeClass("btn-primary");
  $(".ww-filter-button").addClass("btn-outline-primary");

  // add btn-primary to active button
  var button = $(this);
  button.removeClass("btn-outline-primary");
  button.addClass("btn-primary");
  filterItems(button.data("filter"));
  e.preventDefault();
});

function filterItems(filter) {
  if (filter === activeFilter) {
    return;
  }

  activeFilter = filter;
  $(".ww-gallery .card").each(function () {
    var card = $(this);
    var groups = card.data("groups");
    var show = false;
    if (filter === "all") {
      show = true;
    } else {
      for (var i = 0; i < groups.length; i++) {
        if (groups[i] === filter) {
          show = true;
        }
      }
    }
    // hide everything first
    card.fadeOut(400);
    setTimeout(function () {
      if (show && !card.is(":visible")) {
        card.fadeIn(400);
      }
    }, 500);
  });
}

// Light Box
$(document).on("click", '[data-toggle="lightbox"]', function (event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});

//Menu
var general = {
  init: function () {
    general.menu();
  },

  menu: function () {
    var lastId,
      topMenu = $("#nav-menu"),
      topMenuHeight = topMenu.outerHeight() + 15,
      menuItems = topMenu.find("a"),
      scrollItems = menuItems.map(function () {
        var item = $($(this).attr("href"));
        if (item.length) {
          return item;
        }
      });

    $(".nav-link").on("click", function () {
      $("html, body").animate(
        {
          scrollTop: $($.attr(this, "href")).offset().top,
        },
        500
      );
    });

    $(window).scroll(function () {
      var fromTop = $(this).scrollTop() + topMenuHeight;

      var cur = scrollItems.map(function () {
        if ($(this).offset().top < fromTop) return this;
      });

      cur = cur[cur.length - 1];
      var id = cur && cur.length ? cur[0].id : "";

      if (lastId !== id) {
        lastId = id;

        menuItems
          .parent()
          .removeClass("active")
          .end()
          .filter("[href='#" + id + "']")
          .parent()
          .addClass("active");
      }
    });
  },
};

// backsound

const myAudio = document.getElementById("audio");
const btn = document.getElementById("btn-playback");
// const btnIcon = document.querySelector("#btn-playback > i");
const btnIcon = document.querySelector("#btn-playback #ubah");
const btnText = document.getElementById("btn-text");

const toggleMusic = () => {
  const dataPlay = btn.getAttribute("data-play");

  if (dataPlay === "false") {
    btn.setAttribute("data-play", "true");
    myAudio.play();
    // btnIcon.classList.remove("fa-play");
    // btnIcon.classList.add("fa-pause");
    btnIcon.removeChild.src = "images/btn_musik/stop.jpeg";
    btnIcon.src = "images/btn_musik/play.jpeg";
    btnText.innerText = "";
  } else {
    btn.setAttribute("data-play", "false");
    myAudio.pause();
    // btnIcon.classList.remove("fa-pause");
    // btnIcon.classList.add("fa-play");
    btnIcon.removeChild.src = "images/btn_musik/play.jpeg";
    btnIcon.src = "images/btn_musik/stop.jpeg";
    btnText.innerText = "";
  }
};

myAudio.onpause = () => {
  btn.setAttribute("data-play", "false");
  myAudio.pause();
  // btnIcon.classList.remove("fa-pause");
  // btnIcon.classList.add("fa-play");
  btnIcon.removeChild.src = "images/btn_musik/play.jpeg";
  btnIcon.src = "images/btn_musik/stop.jpeg";
  btnText.innerText = "";
};

// Timer
// Tetapkan tanggal kita menghitung mundur
var countDownDate = new Date("December 27, 2021 10:00:00").getTime();

// Perbarui hitungan mundur setiap 1 detik
var x = setInterval(function () {
  // Dapatkan tanggal dan waktu hari ini
  var now = new Date().getTime();

  // Temukan jarak antara sekarang dan tanggal hitung mundur
  var distance = countDownDate - now;

  // Perhitungan waktu untuk hari, jam, menit dan detik
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Keluarkan hasil dalam elemen dengan id = "demo"
  (document.getElementsByClassName("hari")[0].innerHTML = days),
    (document.getElementsByClassName("jam")[0].innerHTML = hours),
    (document.getElementsByClassName("menit")[0].innerHTML = minutes),
    (document.getElementsByClassName("detik")[0].innerHTML = seconds);

  //Jika hitungan mundur selesai, tulis beberapa teks
  if (distance < 0) {
    clearInterval(x);
    (document.getElementsByClassName("ex1")[0].innerHTML = "00"),
      (document.getElementsByClassName("ex2")[0].innerHTML = "00"),
      (document.getElementsByClassName("ex3")[0].innerHTML = "00"),
      (document.getElementsByClassName("ex4")[0].innerHTML = "00");
  }
}, 1000);
