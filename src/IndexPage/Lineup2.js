// import React from 'react'
import React, { useEffect, useState } from 'react'

import { Swiper, SwiperSlide } from 'swiper/react';

import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';

import LineUpCard from './LineUpCard';

import { Pagination, Navigation } from 'swiper/modules';
import { Link } from 'react-router-dom';

export default function Lineup2() {

	const [events, setEvents] = useState([])

	const api = "http://127.0.0.1:8000/api/events/3"

	const fetchApiData = async (url) => {
		try {
			const res = await fetch(url)
			const data = await res.json()
			setEvents(data);
			// console.log(data);
		} catch (error) {
			console.log(error);
		}
	}


	useEffect(() => {
		fetchApiData(api)
	}, [])


	return (
		<>
			<section id="line-up-2" className="lineup-section lineup-1 pt-60 pt-lg-0 mb-20 mb-lg-30 mb-xxl-40">
				<div className="lineup-contents custom-inner-bg bg-lg py-30 py-lg-50 position-relative">
					<div className="container">
						<div className="row gx-60 gx-xxl-80 gy-30">

							{/* <!-- col-7 --> */}
							<div className="col-lg-5">
								<div className="lineup-right-content mt-60 mt-lg-0">
									<div className="section-title section-title-style-2 mb-4 mb-lg-30 mb-xxl-40">
										<span className="fs-3 straight-line-wrapper fw-semibold position-relative"> <span
											className="straight-line"></span>Line-Up</span>
										<h2 className="title display-3 fw-extra-bold d-flex flex-column">
											<span className="mb-n2 text-opacity">Cultural</span>
											<span className="sub-title fw-extra-bold primary-text-shadow">Line Up</span>
										</h2>
									</div>
									{/* <!-- section-title --> */}
									<p className="mb-4 mb-lg-30">
										Unleash the rhythm with an extraordinary lineup. Get ready for a musical
										extravaganza that will captivate your senses.
									</p>
									<p className="mb-0">
										Experience the magic of harmonious melodies in a night to remember.
									</p>

									<div className="mt-20 mt-lg-0">
										<Link to="/cultural-fest"
											className="download-link d-flex align-items-center justify-content-lg-end gap-30"
											aria-label="buttons">See More<span className="ticket-arrow arrow-up-right"><svg
												width="32" height="32">
												<use xlinkHref="#arrow-up-right"></use>
											</svg></span></Link>
									</div>
								</div>
								{/* <!-- lineup-right-content --> */}
							</div>
							{/* <!-- col-5 --> */}
							<div className="col-lg-7">
								<div className="swiper-custom-progress position-relative">
									<Swiper
										slidesPerView={3}
										spaceBetween={30}
										loop={true}
										breakpoints={{
											380: {
												slidesPerView: 2,
												slidesPerGroup: 2,
											},
											430: {
												slidesPerView: 2,
												slidesPerGroup: 2,
											},
											900: {
												slidesPerView: 3,
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
										className="mySwiper"
									>


										{
											events.map((list, index) => (
												<SwiperSlide key={list.id}>
													<LineUpCard eventName={list.event_name} />
												</SwiperSlide>
											))
										}

										{/* <SwiperSlide>
                                            <LineUpCard eventName="Event 2"/>
                                        </SwiperSlide>

                                        <SwiperSlide>
                                            <LineUpCard eventName="Event 3"/>
                                        </SwiperSlide>

                                        <SwiperSlide>
                                           <LineUpCard eventName="Event 4"/>
                                        </SwiperSlide>

                                        <SwiperSlide>
                                            <LineUpCard eventName="Event 5"/>
                                        </SwiperSlide>

                                        <SwiperSlide>
                                            <LineUpCard eventName="Event 6"/>
                                        </SwiperSlide> */}
									</Swiper>
									<div className="lineup-swiper-pagination lineup-swiper-pagination-2 my-progress-bar"></div>

									<div className="swiper-button-progress">
										<div className="swiper-button-next swiper-button-next-2">
											<span className="chevron-right-icon"><svg width="12" height="14">
												<use xlinkHref="#chevron-right-icon"></use>P
											</svg></span>
										</div>
										<div className="swiper-button-prev swiper-button-prev-2">
											<span className="chevron-left-icon"><svg width="12" height="14">
												<use xlinkHref="#chevron-left-icon"></use>N
											</svg></span>
										</div>
									</div>
								</div>

							</div>
						</div>
						{/* <!-- row --> */}
					</div>
					{/* <!-- container --> */}
					<div className="ellipse-image-2">
						<img src="assets/images/home-1/ellipse-2.png" className="img-fluid" alt="img" />
					</div>
				</div>
				{/* <!-- lineup-contents --> */}
			</section>
		</>
	)
}
