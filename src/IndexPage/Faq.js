import React, {useEffect, useRef} from 'react'
import AccorodialElements from './AccorodialElements'



export default function Faq() {

	return (
		<>
			<section className="faq-section faq-1 mb-20 mb-lg-30">
				<div className="container">
					<div className="row gx-0 gy-lg-0 gy-30">
						<div className="col-lg-5">
							<div className="sticky-contents">
								<div className="section-title section-title-style-2 mb-30 mb-lg-40 mb-xxl-60">
									<span className="fs-3 straight-line-wrapper fw-semibold position-relative"> <span
										className="straight-line"></span>Solutions for Your Curiosities</span>
									<h2 className="title display-3 fw-extra-bold d-flex flex-column">
										<span className="mb-n2 text-opacity">Harmony</span>
										<span className="sub-title fw-extra-bold primary-text-shadow">Helpdesk</span>
									</h2>
								</div>
								{/* <!-- section-title --> */}
							</div>
						</div>
						{/* <!-- col-4 --> */}
						<div className="col-lg-7">
							<div className="faq-wrapper position-relative">
								<div className="accordion" id="faq-1-accordion">
									
									<AccorodialElements id="item1" question="What is the date and location of the Harmonia
												music concert?" answer="Outside food and beverages are not allowed inside the event grounds. We have
                    a wide selection of food vendors and specialty beverages to cater to your
                    culinary preferences." />
									{/* <!-- accordion-item --> */}

									<AccorodialElements id="item2" question="what is the process of registration ?" answer="Outside food and beverages are not allowed inside the event grounds. We have
                    a wide selection of food vendors and specialty beverages to cater to your
                    culinary preferences." />
									{/* <!-- accordion-item --> */}

									<AccorodialElements id="item3" question="what is the process of registration ?" answer="Outside food and beverages are not allowed inside the event grounds. We have
                    a wide selection of food vendors and specialty beverages to cater to your
                    culinary preferences." />
									{/* <!-- accordion-item --> */}

									<AccorodialElements id="item4" question="what is the process of registration ?" answer="Outside food and beverages are not allowed inside the event grounds. We have
                    a wide selection of food vendors and specialty beverages to cater to your
                    culinary preferences." />
									{/* <!-- accordion-item --> */}

									<AccorodialElements id="item5" question="what is the process of registration ?" answer="Outside food and beverages are not allowed inside the event grounds. We have
                    a wide selection of food vendors and specialty beverages to cater to your
                    culinary preferences." />
									{/* <!-- accordion-item --> */}
								</div>
								{/* <!-- .accordion --> */}

								<div className="ellipse-image-2">
									<img src="assets/images/home-1/ellipse-2.png" alt="ellipse-1" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</>
	)
}
