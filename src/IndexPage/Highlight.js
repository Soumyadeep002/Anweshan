import React from 'react'

import { Swiper, SwiperSlide } from 'swiper/react';

import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';


// import highlight1 from '../../public/assets/images/homs

import { Pagination, Navigation } from 'swiper/modules';
import HighlightCard from './HighlightCard';

export default function Highlight() {
    return (
        <>
            <section className="highlight-section highlight-1 py-50 py-lg-100 py-xxl-120 mt-20 mt-lg-40" data-bs-theme="dark">
                <div className="container position-relative">
                    <div className="ellipse-image-1">
                        <img src="assets/images/home-1/ellipse-1.png" alt="ellipse-1" />
                    </div>
                    <div className="row gy-4 gy-lg-0 align-items-lg-end justify-content-lg-between mb-30 mb-lg-70">
                        <div className="col-lg-5">
                            <div className="section-title section-title-style-2">
                                <span className="fs-3 straight-line-wrapper fw-semibold position-relative"> <span
                                    className="straight-line"></span>Highlights</span>
                                <h2 className="title display-3 fw-extra-bold d-flex flex-column">
                                    <span className="mb-n2 text-opacity">Festival</span>
                                    <span className="sub-title fw-extra-bold primary-text-shadow">Extravaganza</span>
                                </h2>
                            </div>
                            {/* <!-- section-title --> */}
                        </div>
                        <div className="col-lg-5">
                            <div className="highlights-text">
                                <p className="text-lg-end">
                                    Immerse in mesmerizing performances and interactive art at our music extravaganza.
                                    Experience a festival atmosphere like no other, where unforgettable moments.
                                </p>
                            </div>
                        </div>
                    </div>
                    {/* <!-- row --> */}

                    <Swiper
                        slidesPerView={3}
                        spaceBetween={30}
                        loop={true}
                        breakpoints= {{   
                            300: {
                              slidesPerView: 1,
                              slidesPerGroup: 1,
                              spaceBetween: 20
                            },               
                            430: {
                              slidesPerView: 1,
                              slidesPerGroup: 1,
                              spaceBetween: 20
                            },      
                            768: {
                              slidesPerView: 2,
                              slidesPerGroup: 1,
                              spaceBetween: 20
                            },
                            1100: {
                              slidesPerView: 3,
                              slidesPerGroup: 1,
                              spaceBetween: 20
                            }
                          }} 
                        pagination={{
                            el: ".lineup-swiper-pagination-2",
                            type: 'progressbar',
                        }}
                        navigation={{
                            nextEl: ".swiper-button-next-2",
                            prevEl: ".swiper-button-prev-2",
                        }}
                        modules={[Pagination, Navigation]}
                        className="mySwiper highlight-swiper"
                    >
                        <SwiperSlide>
                            <HighlightCard title="lorem ipsum dolor sum" image="assets/images/home-1/highlights-icon-1.png"/>
                        </SwiperSlide>

                        <SwiperSlide>
                            <HighlightCard title="lconor ipdum hor ki" image="assets/images/home-1/highlights-icon-2.png"/>
                        </SwiperSlide>

                        <SwiperSlide>
                            <HighlightCard title="jfodm kdoyuin odi gh" image="assets/images/home-1/highlights-icon-3.png"/>
                        </SwiperSlide>

                        <SwiperSlide>
                            <HighlightCard title="jjosum nue hsua li" image="assets/images/home-1/highlights-icon-2.png"/>
                        </SwiperSlide>
                    </Swiper>

                 
                    {/* <!-- swiper--> */}
                </div>
            </section>
        </>
    )
}
