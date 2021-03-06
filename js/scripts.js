$(document).ready(function() {

    $(function() {
        // Toggle Nav on Click
        $('.toggle-nav').click(function() {
            // Calling a function in case you want to expand upon this.
            toggleNav();
        });
    });


    function toggleNav() {
        if ($('#site-wrapper').hasClass('show-nav')) {
            // Do things on Nav Close
            $('#site-wrapper').removeClass('show-nav');
            $('#top-header').removeClass('mover-header');
            $('#mid-image').removeClass('blur');
            $('#contenedor-principal').removeClass('blur');
            $('#top-header').removeClass('blur');


        } else {
            // Do things on Nav Open
            $('#site-wrapper').addClass('show-nav');
            $('#top-header').addClass('mover-header');
            $('#mid-image').addClass('blur');
            $('#contenedor-principal').addClass('blur');
            $('#top-header').addClass('blur');
        }
        //$('#site-wrapper').toggleClass('show-nav');
    }


    $('ul.tabs li a:first').addClass('active');
    $('.secciones article').hide();
    $('.secciones article:first').show();

    $('ul.tabs li a').click(function() {
        $('ul.tabs li a').removeClass('active');
        $(this).addClass('active');
        $('.secciones article').hide();

        var activeTab = $(this).attr('href');
        $(activeTab).show();
        return false;
    });


    // When the user scrolls the page, execute myFunction


    // Get the header
    var header = document.getElementById("myHeader");



    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }




    /*MODAL*/

    (function() {
        setTimeout(function() {
            $('#ventana-modal').modal()
        }, 60000);
    }());



    const items = document.querySelectorAll(".accordion button");

    function toggleAccordion() {
        const itemToggle = this.getAttribute('aria-expanded');

        for (i = 0; i < items.length; i++) {
            items[i].setAttribute('aria-expanded', 'false');
        }

        if (itemToggle == 'false') {
            this.setAttribute('aria-expanded', 'true');
        }
    }

    items.forEach(item => item.addEventListener('click', toggleAccordion));


    (function() {
        var v = document.getElementsByClassName("reproductor");
        for (var n = 0; n < v.length; n++) {
            var p = document.createElement("div");
            p.innerHTML = labnolThumb(v[n].dataset.id);
            p.onclick = labnolIframe;
            v[n].appendChild(p);
        }
    })();

    (function() {
        var v = document.getElementsByClassName("reproductor-rectangular");
        for (var n = 0; n < v.length; n++) {
            var p = document.createElement("div");
            p.innerHTML = labnolThumbRectangular(v[n].dataset.id);
            p.onclick = labnolIframe;
            v[n].appendChild(p);
        }
    })();

    function labnolThumb(id) {
        return '<img class="imagen-previa" src="//i.ytimg.com/vi/' + id + '/hqdefault.jpg"><div class="youtube-play"></div>';
    }

    function labnolThumbRectangular(id) {
        return '<img class="imagen-previa-rectangular" src="//i.ytimg.com/vi/' + id + '/hqdefault.jpg"><div class="youtube-play"></div>';
    }



    function labnolIframe() {
        var iframe = document.createElement("iframe");
        iframe.setAttribute("src", "//www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
        iframe.setAttribute("frameborder", "0");
        iframe.setAttribute("id", "youtube-iframe");
        this.parentNode.replaceChild(iframe, this);
    }

});