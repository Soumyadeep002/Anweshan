import React from 'react'
import { Link } from 'react-router-dom'

export default function Direction() {
  return (
    <>
        <section id="direction" className="direction-section direction-1 position-relative pt-50 pt-lg-100 pt-xxl-130">				
				<div className="container">
					<div className="direction-wrapper">
						<div className="row justify-content-between align-items-lg-center gy-40 gy-lg-0">
							<div className="col-lg-5">
								<div className="direction-left-content">
									<h2 className="display-5 fw-extra-bold custom-jakarta">
										Get Direction to Harmonia
									</h2>
									<div className="d-flex flex-column flex-lg-row gap-5 justify-content-lg-between align-items-lg-center mt-30 mt-lg-50">
										<div className="direction-details">
											<span className="fs-3 straight-line-wrapper fw-semibold position-relative"><span className="straight-line"></span>Venue</span>
											<div className="mt-10 mt-lg-30">
												<h4 className="custom-jakarta fw-extra-bold">BASEMENT</h4>
												<h4 className="custom-jakarta fw-normal">135 W, 46nd Street, New York, USA</h4>
											</div>
										</div>
										<div className="direction-details">
											<span className="fs-3 straight-line-wrapper fw-semibold position-relative"><span className="straight-line"></span>Time</span>
											<div className="mt-10 mt-lg-30">												
												<h4 className="custom-jakarta fw-normal">25th - 28th December</h4>
												<h4 className="custom-jakarta fw-normal">Thursday - Saturday 22:30 - 07:00</h4>
											</div>
										</div>
									</div>
									<div className="mt-4 mt-lg-40">
										<Link to="" id="mapDirectionBtn" className="btn btn-gradient d-flex align-items-center justify-content-center custom-roboto gap-10 btn-map-direction"  data-bs-toggle="modal" data-bs-target="#RoutingMapModal">Get Direction <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" className="bi bi-arrow-right" viewBox="0 0 16 16"><path fillRule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg></Link>
									</div>
								</div>
								{/* <!-- direction-left-content --> */}
							</div>
							{/* <!-- col-5 --> */}

							<div className="col-lg-6">								
								<div className="map-image map-image-2 parallax position-relative">
									<span className="map-marker">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" className="bi bi-geo-alt-fill" viewBox="0 0 16 16"><path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
										</svg>
									</span>								

									<div className="map-popup-content"><h3>Basement</h3><p>135W, 46nd Street, New York</p><Link to="" id="mapDirectionBtn" className="btn btn-primary btn-sm d-flex align-items-center justify-content-center custom-roboto gap-10 btn-map-direction"  data-bs-toggle="modal" data-bs-target="#RoutingMapModal">Get Direction <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" className="bi bi-arrow-right" viewBox="0 0 16 16"><path fillRule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg></Link></div>
								</div>

								{/* <!-- Modal-Map --> */}
								<div className="modal modal-fullscreen routing-map-modal fade" id="RoutingMapModal" tabIndex="-1" aria-labelledby="RoutingMapLabel" aria-hidden="true">
									<div className="modal-dialog modal-dialog-centered">
										<div className="modal-content">
											<div className="modal-header">
											<h1 className="modal-title fs-5" id="RoutingMapLabel">135 W, 46nd Street, New York</h1>
											<button type="button" className="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div className="modal-body">
											<div id="RoutingMap"></div>
											</div>
										</div>
									</div>
								</div>
								{/* <!-- Modal-Map --> */}
							</div>
						</div>
					</div>
				</div>
			</section>
    </>
  )
}
