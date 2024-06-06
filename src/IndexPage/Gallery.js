import React, {useEffect} from 'react'
import { Swiper, SwiperSlide } from 'swiper/react';

import $ from 'jquery';
import 'magnific-popup';

import 'swiper/css';

import { Autoplay} from 'swiper/modules';

export default function Gallery() {

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
  }, []); // Empty dependency array to run this effect only once on mount

  return (
   <>
        <div className="gallery-section gallery-1 py-50 py-lg-100 py-xxl-120">
            
        <Swiper
                slidesPerView={'auto'}
                spaceBetween={30}
                loop={true}  
                speed={3000}  
                autoplay={{
                    delay: 0,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                  }}
                modules={[Autoplay]}                                
                className="mySwiper swiper_gallery2">
                    <SwiperSlide>
                    <div className="gallery-image">
							<a href="assets/images/gallery-6.jpg" className="image-link hover-area"
								data-cursor-text="Image">
								<img src="assets/images/gallery-6.jpg" alt="img"/>
							</a>
						</div>
                    </SwiperSlide>
                    <SwiperSlide>
                    <div className="gallery-image">
							<a href="assets/images/gallery-2.jpg" className="image-link hover-area"
								data-cursor-text="Image">
								<img src="assets/images/gallery-2.jpg" alt="img"/>
							</a>
						</div>
                    </SwiperSlide>
                    
                    <SwiperSlide>
                    <div className="gallery-image">
							<a href="assets/images/gallery-8.jpg" className="image-link hover-area"
								data-cursor-text="Image">
								<img src="assets/images/gallery-8.jpg" alt="img"/>
							</a>
						</div>
                    </SwiperSlide>
                    <SwiperSlide>
                    <div className="gallery-image">
							<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" className="video-popup-link hover-area"
								data-cursor-text="Video">
								<img src="assets/images/gallery-9.jpg" alt="img"/>
							</a>
						</div>
                    </SwiperSlide>
                    <SwiperSlide>
                    <div className="gallery-image">
							<a href="assets/images/gallery-10.jpg" className="image-link hover-area"
								data-cursor-text="Image">
								<img src="assets/images/gallery-10.jpg" alt="img"/>
							</a>
						</div>
                    </SwiperSlide>
                    <SwiperSlide>
                    <div className="gallery-image">
							<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" className="video-popup-link hover-area"
								data-cursor-text="Video">
								<img src="assets/images/gallery-11.jpg" alt="img"/>
							</a>
						</div>
                    </SwiperSlide>
                    <SwiperSlide>
                    <div className="gallery-image">
							<a href="assets/images/gallery-1.jpg" className="image-link hover-area"
								data-cursor-text="Image">
								<img src="assets/images/gallery-1.jpg" alt="img"/>
							</a>
						</div>
                    </SwiperSlide>
                    <SwiperSlide>
                    <div className="gallery-image">
							<a href="assets/images/gallery-2.jpg" className="image-link hover-area"
								data-cursor-text="Image">
								<img src="assets/images/gallery-2.jpg" alt="img"/>
							</a>
						</div>
                    </SwiperSlide>
                    
                </Swiper>


            <Swiper
                slidesPerView={'auto'}
                spaceBetween={30}
                speed={7000}
                autoplay={{
                    delay: 0,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                  }}
                loop={true}    
                modules={[Autoplay]}                                
                className="mySwiper swiper_gallery2">
                    <SwiperSlide>
                    <div className="gallery-image">
							<a href="assets/images/gallery-6.jpg" className="image-link hover-area"
								data-cursor-text="Image">
								<img src="assets/images/gallery-6.jpg" alt="img"/>
							</a>
						</div>
                    </SwiperSlide>
                    <SwiperSlide>
                    <div className="gallery-image">
							<a href="assets/images/gallery-2.jpg" className="image-link hover-area"
								data-cursor-text="Image">
								<img src="assets/images/gallery-2.jpg" alt="img"/>
							</a>
						</div>
                    </SwiperSlide>
                    <SwiperSlide>
                    <div className="gallery-image">
							<a href="assets/images/gallery-8.jpg" className="image-link hover-area"
								data-cursor-text="Image">
								<img src="assets/images/gallery-8.jpg" alt="img"/>
							</a>
						</div>
                    </SwiperSlide>
                    <SwiperSlide>
                    <div className="gallery-image">
							<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" className="video-popup-link hover-area"
								data-cursor-text="Video">
								<img src="assets/images/gallery-9.jpg" alt="img"/>
							</a>
						</div>
                    </SwiperSlide>
                    <SwiperSlide>
                    <div className="gallery-image">
							<a href="assets/images/gallery-10.jpg" className="image-link hover-area"
								data-cursor-text="Image">
								<img src="assets/images/gallery-10.jpg" alt="img"/>
							</a>
						</div>
                    </SwiperSlide>
                    <SwiperSlide>
                    <div className="gallery-image">
							<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" className="video-popup-link hover-area"
								data-cursor-text="Video">
								<img src="assets/images/gallery-11.jpg" alt="img"/>
							</a>
						</div>
                    </SwiperSlide>
                    <SwiperSlide>
                    <div className="gallery-image">
							<a href="assets/images/gallery-1.jpg" className="image-link hover-area"
								data-cursor-text="Image">
								<img src="assets/images/gallery-1.jpg" alt="img"/>
							</a>
						</div>
                    </SwiperSlide>
                    <SwiperSlide>
                    <div className="gallery-image">
							<a href="assets/images/gallery-2.jpg" className="image-link hover-area"
								data-cursor-text="Image">
								<img src="assets/images/gallery-2.jpg" alt="img"/>
							</a>
						</div>
                    </SwiperSlide>
                    
                </Swiper>
            
        </div>
   </>
  )
}
