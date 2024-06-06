import React from 'react'

export default function AboutVenue() {
  return (
    <>
        <section className="about-section about-1 pt-50 pt-lg-100 pt-xxl-150">
				<div className="container">
					<div className="row gy-50 gy-lg-0 gx-80 justify-content-lg-between align-items-lg-center">
						<div className="col-lg-4">
							<div>
								
								<h1 className="display-5 custom-jakarta fw-extra-bold mb-20 mb-lg-30">
									Grand Conference Hall
								</h1>	
								<div className="section-title section-title-style-2  mb-0">	
									<h3 className="sub-title display-3 fw-extra-bold primary-text-shadow custom-roboto">Basement</h3>
								</div>
								{/* <!-- section-title -->							 */}
								<a href="#ticket" className="btn btn-gradient d-inline-flex align-items-center gap-2 mt-4 mt-lg-40 mt-xxl-50" aria-label="buttons"><span className="buttons-logo"><svg width="25" height="25"><use xlinkHref="#buttons-logo"></use></svg></span>View Venue</a>
							</div>					
						</div>
						{/* <!-- col-5 --> */}
						<div className="col-lg-8">
							<div className="position-relative">
								<div className="hall-image">
									<img src="assets/images/grand-hall.jpg" className="img-fluid" alt="img"/>
								</div>
								<div className="ellipse-image-1">
									<img src="assets/images/home-1/ellipse-1.png" className="img-fluid" alt="img"/>
								</div>
							</div>
							{/* <!-- about-content-wrapper --> */}
						</div>
					</div>					
				</div>
			</section>
    </>
  )
}
