import React from 'react'
import { Swiper, SwiperSlide } from 'swiper/react';

import 'swiper/css';
import BlogCard from './BlogCard';

export default function Blog() {
	return (
		<>
			<section className="blog-section blog-horizontal pt-3 pb-50 pb-lg-80 pb-xxl-100">
				<div className="container">
					<div className="row gy-4 gy-lg-0 align-items-lg-end justify-content-lg-between mb-30 mb-lg-70">
						<div className="col-lg-4">
							<div className="section-title section-title-style-2">
								<span className="fs-3 straight-line-wrapper fw-semibold position-relative"> <span
									className="straight-line"></span>What is going to happen ?</span>
								<h2 className="title display-3 fw-extra-bold d-flex flex-column">
									<span className="mb-n2 text-opacity">Main</span>
									<span className="sub-title fw-extra-bold primary-text-shadow">Attraction</span>
								</h2>
							</div>
							{/* <!-- section-title --> */}
						</div>
						<div className="col-lg-5">
							<div className="highlights-text">
								<p className="custom-roboto text-lg-end">
									Elevating the Music. Our valued partners and sponsors play a pivotal role in bringing
									our vision to life. We orchestrate an unforgettable music celebration that resonates.
								</p>
							</div>
						</div>
					</div>
					{/* <!-- row --> */}
					<div className="blog-content-wrapper position-relative">
						<div className="ellipse-image-1">
							<img src="assets/images/home-1/ellipse-1.png" alt="ellipse-1" />
						</div>

						<Swiper
							slidesPerView={2}
							spaceBetween={30}
							loop={true}
							breakpoints= {{ 
								300: {
								  slidesPerView: 1,
								  slidesPerGroup: 1,
								  spaceBetween: 20
								},      
								768: {
								  slidesPerView: 2,
								  slidesPerGroup: 2,
								  spaceBetween: 30
								},
							  }}

							className="mySwiper blog-swiper"
						>
							<SwiperSlide>
								<BlogCard image="assets/images/home-1/blog-image-1.jpg" date="08 Aug 2024" title1="Harmonia's Prestigious Excellence Award!" title2="Celebrating a remarkable achievement, Harmonia Music Festival has been honored ..." />
							</SwiperSlide>

							<SwiperSlide>
								<BlogCard image="assets/images/home-1/blog-image-2.jpg" date="09 Aug 2024" title1="Harmonia's Prestigious Excellence Award!" title2="Celebrating a remarkable achievement, Harmonia Music Festival has been honored ..." />
							</SwiperSlide>

							<SwiperSlide>
								<BlogCard image="assets/images/home-1/blog-image-3.jpg" date="10 Aug 2024" title1="Harmonia's Prestigious Excellence Award!" title2="Celebrating a remarkable achievement, Harmonia Music Festival has been honored ..." />
							</SwiperSlide>

							<SwiperSlide>
								<BlogCard image="assets/images/home-1/blog-image-1.jpg" date="11 Aug 2024" title1="Harmonia's Prestigious Excellence Award!" title2="Celebrating a remarkable achievement, Harmonia Music Festival has been honored ..." />
							</SwiperSlide>

							<SwiperSlide>
								<BlogCard image="assets/images/home-1/blog-image-2.jpg" date="12 Aug 2024" title1="Harmonia's Prestigious Excellence Award!" title2="Celebrating a remarkable achievement, Harmonia Music Festival has been honored ..." />
							</SwiperSlide>

							<SwiperSlide>
								<BlogCard image="assets/images/home-1/blog-image-3.jpg" date="19 Aug 2024" title1="Harmonia's Prestigious Excellence Award!" title2="Celebrating a remarkable achievement, Harmonia Music Festival has been honored ..." />
							</SwiperSlide>

						</Swiper>
						{/* <!-- swiper --> */}
					</div>
					{/* <!-- blog-content-wrapper --> */}
				</div>
			</section>
		</>
	)
}
