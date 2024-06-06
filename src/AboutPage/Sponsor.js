import React from 'react'
import { Link } from 'react-router-dom'

export default function Sponsor() {
  return (
    <section id="sponsors" className="sponsor-section sponsor-2 position-relative pt-50 pt-lg-100 pt-xxl-130">
				
				<div className="container">			
					<div className="row gy-4 gy-lg-0 align-items-lg-end justify-content-lg-between mb-40 mb-lg-70">
						<div className="col-lg-4">
							<div className="section-title">
								<span className="fs-3 straight-line-wrapper fw-semibold position-relative custom-roboto"><span className="straight-line"></span>The Power Behind Us</span>
								<h2 className="title display-3 fw-extra-bold mb-n2 text-opacity custom-roboto">Cadence</h2>
								<h3 className="sub-title display-3 fw-extra-bold primary-text-shadow custom-roboto">Contributors</h3>						
							</div>
							{/* <!-- section-title --> */}
						</div>
						<div className="col-lg-5">
							<div className="highlights-text">
								<p className="custom-jakarta custom-font-style-2 text-lg-end mb-2">
									Elevating the Music. Our valued partners and sponsors play a pivotal role in bringing our vision to life. We orchestrate an unforgettable music celebration that resonates.
								</p>
							</div>
						</div>
					</div>
					{/* <!-- row --> */}

					<div className="row gy-4 gy-lg-0 justify-content-lg-between mb-60 mb-lg-100">
						<div className="col-lg-3">
							<div className="sponsors-type">
								<h2 className="fw-extra-bold mb-0">Platinum Sponsors</h2>
							</div>
						</div>
						{/* <!-- col-3 --> */}
						<div className="col-lg-8">
							<div className="row row-cols-2 row-cols-md-2 row-cols-lg-3 g-20 g-lg-30 align-items-center">
								<div className="col">
									<Link to="" className="sponsor-wrapper">
										<img src="assets/images/brand-1.png" className="img-fluid" alt="img"/>
									</Link>
								</div>
								<div className="col">
									<Link to="" className="sponsor-wrapper">
										<img src="assets/images/brand-17.png" className="img-fluid" alt="img"/>
									</Link>
								</div>
								<div className="col">
									<Link to="" className="sponsor-wrapper">
										<img src="assets/images/brand-3.png" className="img-fluid" alt="img"/>
									</Link>
								</div>
								<div className="col">
									<Link to="" className="sponsor-wrapper">
										<img src="assets/images/brand-4.png" className="img-fluid" alt="img"/>
									</Link>
								</div>
								<div className="col">
									<Link to="" className="sponsor-wrapper">
										<img src="assets/images/brand-5.png" className="img-fluid" alt="img"/>
									</Link>
								</div>
							</div>
							{/* <!-- row --> */}
						</div>
						{/* <!-- col-8 --> */}
					</div>
					{/* <!-- row --> */}

					<div className="row gy-4 gy-lg-0 justify-content-lg-between mb-60 mb-lg-100">
						<div className="col-lg-3">
							<div className="sponsors-type">
								<h2 className="fw-extra-bold mb-0">Gold Sponsors</h2>
							</div>
						</div>
						{/* <!-- col-3 --> */}
						<div className="col-lg-8">
							<div className="row row-cols-2 row-cols-md-2 row-cols-lg-3 g-20 g-lg-30 align-items-center">
								<div className="col">
									<Link to="" className="sponsor-wrapper">
										<img src="assets/images/brand-18.png" className="img-fluid" alt="img"/>
									</Link >
								</div>
								<div className="col">
									<Link to=""  className="sponsor-wrapper">
										<img src="assets/images/brand-7.png" className="img-fluid" alt="img"/>
									</Link >
								</div>
								<div className="col">
									<Link to=""  className="sponsor-wrapper">
										<img src="assets/images/brand-19.png" className="img-fluid" alt="img"/>
									</Link>
								</div>
								<div className="col">
									<Link to=""  className="sponsor-wrapper">
										<img src="assets/images/brand-20.png" className="img-fluid" alt="img"/>
									</Link>
								</div>
								<div className="col">
									<Link to=""  className="sponsor-wrapper">
										<img src="assets/images/brand-21.png" className="img-fluid" alt="img"/>
									</Link>
								</div>
								<div className="col">
									<Link to=""  className="sponsor-wrapper">
										<img src="assets/images/brand-22.png" className="img-fluid" alt="img"/>
									</Link>
								</div>
								<div className="col">
									<Link to=""  className="sponsor-wrapper">
										<img src="assets/images/brand-23.png" className="img-fluid" alt="img"/>
									</Link >
								</div>
							</div>
							{/* <!-- row --> */}
						</div>
						{/* <!-- col-8 --> */}
					</div>
					{/* <!-- row --> */}
				
				</div>
			</section>
  )
}
