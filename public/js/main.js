(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    if (all) {
      select(el, all).forEach(e => e.addEventListener(type, listener))
    } else {
      select(el, all).addEventListener(type, listener)
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    if (!header.classList.contains('header-scrolled')) {
      offset -= 10
    }

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Services Slider
   */
  const topSwiper = new Swiper('.top-swiper', {
    effect: "fade",
    loop: true,  // Enable loop
    allowTouchMove: false,  // Disable swipe
    // autoplay: {
    //     delay: 5000,  // Delay between transitions
    //     disableOnInteraction: false,  // Continue autoplay after interaction
    // },
    watchSlidesVisibility: true,
  });

  const bottomSwiper = new Swiper('.bottom-swiper', {
      pagination: {
          el: '.swiper-pagination',
          clickable: false,
      },
      slidesPerView: 1,
      loop: true,  // Enable loop
      allowTouchMove: false,  // Disable swipe
      // autoplay: {
      //     delay: 5000,  // Delay between transitions
      //     disableOnInteraction: false,  // Continue autoplay after interaction
      // },
      watchSlidesVisibility: true,
  });

  /**
   * Clients Slider
   */
  new Swiper('.clients-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 60
      },
      640: {
        slidesPerView: 4,
        spaceBetween: 80
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 120
      }
    }
  });

  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let serviceContainer = select('.service-container');
    if (serviceContainer) {
      let serviceIsotope = new Isotope(serviceContainer, {
        itemSelector: '.service-item',
        layoutMode: 'fitRows'
      });
  
      let serviceFilters = select('#service-filters li', true);
  
      // Function to set the active filter
      const setActiveFilter = (filter) => {
        serviceFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        const activeFilter = serviceFilters.find(el => el.getAttribute('data-filter') === filter);
        if (activeFilter) {
          activeFilter.classList.add('filter-active');
        }
        serviceIsotope.arrange({
          filter: filter
        });
        aos_init();
      };
  
      // Set "Education" as the default active filter on load
      setActiveFilter('.filter-education');
  
      on('click', '#service-filters li', function(e) {
        e.preventDefault();
        setActiveFilter(this.getAttribute('data-filter'));
      }, true);
    }
  });

  /**
   * Portfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
      });

      let portfolioFilters = select('#portfolio-filters li', true);

      // Function to set the active filter
      const setActiveFilter = (filter) => {
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        const activeFilter = portfolioFilters.find(el => el.getAttribute('data-filter') === filter);
        if (activeFilter) {
          activeFilter.classList.add('filter-active');
        }
        portfolioIsotope.arrange({
          filter: filter
        });
        aos_init();
      };

      // Set "Education" as the default active filter on load
      setActiveFilter('.filter-education');

      on('click', '#portfolio-filters li', function(e) {
        e.preventDefault();
        setActiveFilter(this.getAttribute('data-filter'));
      }, true);
    }

    // Now initialize Swiper after Isotope
    const topSwiper = new Swiper('.top-swiper', {
      effect: "fade",
      loop: true,
      allowTouchMove: false,
      // autoplay: {
      //   delay: 5000,
      //   disableOnInteraction: false,
      // },
      watchSlidesVisibility: true,
    });

    const bottomSwiper = new Swiper('.bottom-swiper', {
      pagination: {
        el: '.swiper-pagination',
        clickable: false,
      },
      slidesPerView: 1,
      loop: true,
      allowTouchMove: false,
      // autoplay: {
      //   delay: 5000,
      //   disableOnInteraction: false,
      // },
      watchSlidesVisibility: true,
    });

    document.getElementById('next-button').addEventListener('click', function() {
      topSwiper.slideNext();
      bottomSwiper.slideNext();
    });

    document.getElementById('prev-button').addEventListener('click', function() {
      topSwiper.slidePrev();
      bottomSwiper.slidePrev();
    });
  });

  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 40
      },

      1200: {
        slidesPerView: 3,
      }
    }
  });

  /**
   * Animation on scroll
   */
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', () => {
    aos_init();
  });

  /**
   * Initiate Pure Counter 
   */
  new PureCounter();

})();

function salinNorek() {
  var copyText = document.getElementById("norek");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  alert("Success!");
}

function toggleText(element) {
  var shortText = element.closest('td').querySelector('.short-text');
  var fullText = element.closest('td').querySelector('.full-text');
  
  if (shortText.style.display === 'none') {
      shortText.style.display = 'block';
      fullText.style.display = 'none';
  } else {
      shortText.style.display = 'none';
      fullText.style.display = 'block';
  }
}