import React from 'react'
import AboutVideo from './AboutVideo'
import { Link } from 'react-router-dom'


export default function About() {
  return (
    <>
    <section className="about-section about-1 pb-50 pb-lg-80 pb-xxl-100">
			<div className="container">
				<div className="row gy-50 gy-lg-0 gx-80 justify-content-lg-between">
					<div className="col-lg-5">
						<div>
							<div className="section-title section-title-style-2 mb-4 mb-lg-30 mb-xxl-40">
								<span className="fs-3 straight-line-wrapper fw-semibold position-relative"> <span
										className="straight-line"></span>About The Event</span>
								<h2 className="title display-3 fw-extra-bold mb-n2 d-flex flex-column">
									<span className="mb-n2 text-opacity">Spirit</span>
									<span
										className="sub-title fw-extra-bold primary-text-shadow custom-roboto">Unleashed</span>
								</h2>
							</div>
						
							<p className="mb-4 mb-lg-30">
								MAKAUT, WB students are hosting <strong>ANWESHAN</strong>, one of West Bengal's biggest
								festivals, featuring technical and cultural events. Over <strong>10,000</strong>
								participants from 200+ colleges will compete, showcasing their talents.</p>
							<p className="mb-0">
								Our goal is to make <strong>ANWESHAN</strong> the best and largest festival in West
								Bengal, leaving a lasting legacy for future students.</p>
							<Link to="/about#"
								className="btn btn-gradient d-inline-flex align-items-center gap-2 mt-4 mt-lg-30 mt-xxl-40"
								aria-label="buttons"><span className="buttons-logo"></span>Read More</Link>
						</div>
					</div>
					<AboutVideo/>
					
				</div>
			</div>
		</section>
    </>
  )
}
