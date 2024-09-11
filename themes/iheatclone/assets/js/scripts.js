jQuery(document).ready(function ($) {
  $(".owl-carousel").owlCarousel({
    loop: true,

    margin: 10,

    nav: false,

    autoplay: true,

    dots: false,

    responsive: {
      0: {
        items: 1,
      },

      600: {
        items: 2,
      },

      1000: {
        items: 2,
      },
    },
  });
  
  
  
});




//   jQuery(document).ready(function($) {
//         var endDate = new Date("July 31, 2024 23:59:59").getTime();
//         var now = new Date().getTime();
//         var distance = endDate - now;

//         var clock = new FlipClock($('#countdown'), {
//             clockFace: 'DailyCounter',
//             autoStart: false,
//             countdown: true
//         });

//         clock.setTime(distance / 1000);
//         clock.setCountdown(true);
//         clock.start();
//     });
    
    
     jQuery(document).ready(function($) {
        var endDate = new Date("August 31, 2024 23:59:59").getTime();
        
        function updateCountdown() {
            var now = new Date().getTime();
            var distance = endDate - now;

            if (distance <= 0) {
                // Hide the offer-section when the countdown reaches zero
                $('#offer').hide();
                return;
            }

            // Initialize and update the FlipClock
            var clock = new FlipClock($('#countdown'), {
                clockFace: 'DailyCounter',
                autoStart: false,
                countdown: true
            });

            clock.setTime(distance / 1000);
            clock.setCountdown(true);
            clock.start();
        }

        // Call updateCountdown immediately
        updateCountdown();

        // Optionally, set an interval to check every minute
        setInterval(updateCountdown, 60000); // Check every 60 seconds
    });

  (() => {

        const website = window.location.hostname;

        const pageUrl = window.location.href; // Get the full URL of the visited page

        const trackingUrl = 'https://emeraboiler.com/tracking/log_visit.php'; // URL of the log_visit.php script



        // Construct the tracking URL with parameters

        const params = new URLSearchParams({

            website: website,

            pageUrl: pageUrl

        });

        const fullTrackingUrl = `${trackingUrl}?${params.toString()}`;
        // Send the tracking request

        const img = new Image();

        img.src = fullTrackingUrl;

    })();