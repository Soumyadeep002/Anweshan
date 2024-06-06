import React from 'react'
import { Swiper, SwiperSlide } from 'swiper/react';

import 'swiper/css';
import { Link } from 'react-router-dom';

export default function Sponsor() {
    return (
        <>
            <section id="sponsor"
                className="sponsor-section sponsor-1 bg-lg custom-inner-bg position-relative pt-50 pt-lg-100 pt-xxl-120 pb-30 pb-lg-80 pb-xxl-100">
                <div className="ellipse-image-1">
                    <img src="assets/images/home-1/ellipse-1.png" alt="ellipse-1" />
                </div>
                <div className="container">
                    <div className="row gy-4 gy-lg-0 align-items-lg-end justify-content-lg-between mb-30 mb-lg-70">
                        <div className="col-lg-5">
                            <div className="section-title section-title-style-2">
                                <span className="fs-3 straight-line-wrapper fw-semibold position-relative"> <span
                                    className="straight-line"></span>The Power Behind Us</span>
                                <h2 className="title display-3 fw-extra-bold d-flex flex-column">
                                    <span className="mb-n2 text-opacity">Cadence</span>
                                    <span className="sub-title fw-extra-bold primary-text-shadow">Contributors</span>
                                </h2>
                            </div>
                            {/* <!-- section-title --> */}
                        </div>
                        <div className="col-lg-5">
                            <div className="highlights-text">
                                <p className="text-lg-end">
                                    Elevating the Music. Our valued partners and sponsors play a pivotal role in bringing
                                    our vision to life. We orchestrate an unforgettable music celebration that resonates.
                                </p>
                            </div>
                        </div>
                    </div>
                    {/* <!-- row --> */}

                    <div className="brand-logos position-relative">

                        <Swiper
                            slidesPerView={5}
                            spaceBetween={30}
                            loop={true}
                            breakpoints={{                
                                300: {
                                  slidesPerView: 2,
                                  slidesPerGroup: 2, 
                                  spaceBetween: 20,
                                },      
                                490: {
                                  slidesPerView: 3,
                                  slidesPerGroup: 3,
                                  spaceBetween: 20
                                },
                                720: {
                                  slidesPerView: 3,
                                  slidesPerGroup: 3,
                                  spaceBetween: 40
                                },
                                900: {
                                  slidesPerView: 4,
                                  slidesPerGroup: 4,
                                  spaceBetween: 60
                                },
                                1200: {
                                  slidesPerView: 5,
                                  slidesPerGroup: 5,
                                  spaceBetween: 90
                                }
                              }}
                            className="mySwiper brand-swiper"
                        >
                            <SwiperSlide>
                                <div className="brand-image position-relative">
                                    <Link to="" >
                                        <img src="assets/images/home-2/brand-1.png" className="img-fluid" alt=""/>
                                    </Link>
                                </div>
                            </SwiperSlide>
                            <SwiperSlide>
                                <div className="brand-image position-relative">
                                    <Link to="" >
                                        <img src="assets/images/home-2/brand-4.png" className="img-fluid" alt=""/>
                                    </Link>
                                </div>
                            </SwiperSlide>
                            <SwiperSlide>
                                <div className="brand-image position-relative">
                                    <Link to="" >
                                        <img src="assets/images/home-2/brand-3.png" className="img-fluid" alt=""/>
                                    </Link>
                                </div>
                            </SwiperSlide>
                            <SwiperSlide>
                                <div className="brand-image position-relative">
                                    <Link to="">
                                        <img src="assets/images/home-2/brand-2.png" className="img-fluid" alt=""/>
                                    </Link>
                                </div>
                            </SwiperSlide>
                            <SwiperSlide>
                                <div className="brand-image position-relative">
                                    <Link to="">
                                        <img src="assets/images/home-2/brand-4.png" className="img-fluid" alt=""/>
                                    </Link>
                                </div>
                            </SwiperSlide>
                            <SwiperSlide>
                                <div className="brand-image position-relative">
                                    <Link to="">
                                        <img src="assets/images/home-2/brand-1.png" className="img-fluid" alt=""/>
                                    </Link>
                                </div>
                            </SwiperSlide>
                            <SwiperSlide>
                                <div className="brand-image position-relative">
                                    <Link to="">
                                        <img src="assets/images/home-2/brand-4.png" className="img-fluid" alt=""/>
                                    </Link>
                                </div>
                            </SwiperSlide>
                            <SwiperSlide>
                                <div className="brand-image position-relative">
                                    <Link to="">
                                        <img src="assets/images/home-2/brand-3.png" className="img-fluid" alt=""/>
                                    </Link>
                                </div>
                            </SwiperSlide>
                            <SwiperSlide>
                                <div className="brand-image position-relative">
                                    <Link to="">
                                        <img src="assets/images/home-2/brand-2.png" className="img-fluid" alt=""/>
                                    </Link>
                                </div>
                            </SwiperSlide>
                            <SwiperSlide>
                                <div className="brand-image position-relative">
                                    <Link to="">
                                        <img src="assets/images/home-2/brand-4.png" className="img-fluid" alt=""/>
                                    </Link>
                                </div>
                            </SwiperSlide>
                           
                            
                           

                        </Swiper>
                        {/* <!-- swiper --> */}
                    </div>
                </div>
            </section>
        </>
    )
}
