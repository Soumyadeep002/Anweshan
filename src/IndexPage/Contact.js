import React from 'react'
import { Link } from 'react-router-dom'

export default function Contact() {
  return (
    <>
    <section className="contact-section contact-1 mt-50 mt-lg-100 mt-xxl-130" style={{ zIndex: 50 }}>
			<div className="container">
				<div className="contact-wrapper pt-60 pt-lg-100 pt-xxl-120 pb-40 pb-lg-50 pb-xxl-70">
					<div className="row gy-lg-0 gy-50">
						<div className="col-lg-7">
							<span className="fs-3 straight-line-wrapper fw-semibold position-relative custom-heading-color-1"><span className="straight-line"></span>Contact Team ANWESHAN</span>
							<div className="mt-20 mt-md-30 mt-lg-40 mt-xxl-60">
								<Link to="" className="text-decoration-none display-6 custom-jakarta fw-extra-bold">contact@mail.com</Link> 
								<div className="contact-details custom-heading-color-2 mt-10 mt-lg-30">
									<h3 className="custom-jakarta fw-bold mb-20">MAKAUT, Main Campus</h3>
									<h3 className="custom-jakarta fw-semibold mb-5">Haringhata, Nadia</h3>
									<h3 className="custom-jakarta fw-bold">+00 000000000</h3>
									<ul className="list-unstyled contact-icons d-flex align-items-center gap-20 gap-lg-30 mt-4 mt-lg-40 mb-0">
										 <li><Link to="" aria-label="icons"><svg width="30" height="30"><use xlinkHref="#social-share-icon-1"></use></svg></Link></li> 
										 <li><Link to="" aria-label="icons"><svg width="30" height="30"><use xlinkHref="#social-share-icon-2"></use></svg></Link></li>
										 <li><Link to="" aria-label="icons"><svg width="28" height="26"><use xlinkHref="#social-share-icon-3"></use></svg></Link></li>
										 <li><Link to="" aria-label="icons"><svg width="30" height="31"><use xlinkHref="#social-share-icon-4"></use></svg></Link></li>
										 <li><Link to="" aria-label="icons"><svg width="30" height="31"><use xlinkHref="#social-share-icon-5"></use></svg></Link></li> 
									</ul>
									{/* <!-- social-share-icons --> */}
								</div>									
							</div>
						</div>
						{/* <!-- col-5 --> */}
						<div className="col-lg-4">
							<span className="fs-3 straight-line-wrapper fw-semibold position-relative"><span className="straight-line custom-heading-color-1"></span>Harmonia links</span>
							<div className="contact-details mt-20 mt-md-30 mt-lg-40 mt-xxl-60">
								<h3 className="display-6 custom-jakarta fw-semibold custom-heading-color-1 border-bottom border-3">About Us</h3>									
								<ul className="list-unstyled contact-lists d-flex flex-column gap-2 mt-20 mt-lg-30 mb-0">
									<li><Link to="" className="text-decoration-none custom-heading-color-2">Line Up</Link></li>
									<li><Link to="" className="text-decoration-none custom-heading-color-2">Lates News</Link></li>
									<li><Link to="" className="text-decoration-none custom-heading-color-2">Become A Sponsor</Link></li>
									<li><Link to="" className="text-decoration-none custom-heading-color-2">Venue</Link></li>
									<li><Link to="" className="text-decoration-none custom-heading-color-2">Schedule</Link></li>
									<li><Link to="" className="text-decoration-none custom-heading-color-2">Contact Us</Link></li>
								</ul>
								{/* <!-- social-share-icons --> */}
							</div>
						</div>
						{/* <!-- col-4 --> */}
					</div>
				</div>
			</div>
		</section>
    </>
  )
}
