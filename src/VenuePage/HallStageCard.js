import React, {useEffect} from 'react'

import $ from 'jquery';
import 'magnific-popup';

export default function HallStageCard(props) {

    useEffect(() => {
        // Initialize Magnific-Popup when component mounts
        $('.image-link').magnificPopup({
          type: 'image',
          gallery: {
            enabled: true
          },
          zoom: {
            enabled: true,
            duration: 300,
            opener: function(element) {
              return element.find('img');
            }
          }
        });
    
        $('.video-popup-link').magnificPopup({
          disableOn: 200,
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: false,
          fixedContentPos: false
        });
    
        // Cleanup function to destroy Magnific-Popup when component unmounts
        return () => {
          $('.image-link').magnificPopup('destroy');
        };
      }, []);

    return (
        <div className="hall-image">
            <a href={props.image} className="image-link" >
                <img src={props.image} className="img-fluid" alt="img" />
            </a>
        </div>
    )
}
