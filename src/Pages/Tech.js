import React, { useState, useEffect } from 'react'
import PageBanner from '../AboutPage/PageBanner'
import BlogCard from '../IndexPage/BlogCard'

export default function Tech() {

	const [events, setEvents] = useState([])

	const api = "http://127.0.0.1:8000/api/events/3"

	const fetchApiData = async (url) => {
		try {
			const res = await fetch(url)
			const data = await res.json()
			setEvents(data);
			
		} catch (error) {
			console.log(error);
		}
	}
	

	useEffect(() => {
		fetchApiData(api)
	}, [])

	return (
		<div className="main" data-bs-spy="scroll" data-bs-target="#navContentmenu" data-bs-root-margin="0px 0px -50%" data-bs-smooth-scroll="true">

			{/* <!--Banner Section ======================--> */}
			<PageBanner title="Tech Fest" />
			{/* <!--Banner Section ======================--> */}


			{/* <!--Blog-content Section ======================--> */}
			<section className="blog-content-section py-50 py-lg-80 py-xxl-100">
				<div className="container">


					<div className="blog-wrapper">

						<div className="blog-content mb-30 mb-md-50">
							<div className="blog-content-2 custom-inner-bg">
								<div className="row justify-content-between g-5 align-items-center">
									<div className="col-lg-7">
										<div className="blog-image">
											<img src="assets/images/gallery-3.jpg" className="img-fluid" alt="img" />
										</div>
									</div>
									<div className="col-lg-5">
										<div className="blog-left-content">
											<h2 className="blog-link fs-4 fw-bold"><a className="text-decoration-none" href="blog-single-1.html">Unveils Star-Studded Lineup for Epic Comeback Event!</a></h2>
											<p className="pt-3 pt-lg-4">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
										</div>
										<div className="d-flex align-items-center justify-content-between py-20 py-lg-30">
											<div className="d-flex align-items-center gap-10">
												<img src="assets/images/blog-author-image-6.png" className="blog-author-image" alt="img" />
												<p className="card-text fs-5 fw-semibold mb-0">Luna Echo</p>
											</div>
											<p className="mb-0"><span className="calendar me-10"><svg width="16" height="17"><use xlinkHref="#calendar"></use></svg></span>09 Aug 2023</p>
										</div>
										<div>
											<a href="blog-single-1.html" className="download-link d-flex align-items-center gap-30" aria-label="buttons">Read more<span className="ticket-arrow arrow-up-right"><svg width="32" height="32"><use xlinkHref="#arrow-up-right"></use></svg></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div className="row g-4">

							{
								events.map((list) => (
									list.event_details.map((detail) => (
										
										<div key={detail.id} className="col-12 col-md-6 col-lg-6 col-xl-6">
										<BlogCard
											
											image="assets/images/poster/Crime-scene-investigation.png"
											date="28 Dec, 2024"
											title1={list.event_name}
											title2={detail.description}
										/>
										</div>
									))
								))
							}


						



						</div>
					</div>
					{/* <!-- blog-content -->												 */}

				</div>
			</section>
			{/* <!--Blog-content Section ======================--> */}



		</div>
	)
}
