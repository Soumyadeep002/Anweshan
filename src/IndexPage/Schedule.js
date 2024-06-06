import React from 'react'
import Daytab from './Daytab'
import { Link } from 'react-router-dom';

export default function Schedule() {

	const scheduleData = [
		{
			id: 'day-1',
			events: [
				{ title: 'Event 1', time: '10:00 AM' },
				{ title: 'Event 2', time: '11:00 AM' },
			],
		},
		{
			id: 'day-2',
			events: [
				{ title: 'Event 3', time: '09:00 AM' },
				{ title: 'Event 4', time: '10:30 AM' },
			],
		},
		{
			id: 'day-3',
			events: [
				{ title: 'Event 5', time: '09:00 AM' },
				{ title: 'Event 6', time: '10:30 AM' },
			],
		},
		{
			id: 'day-4',
			events: [
				{ title: 'Event 7', time: '09:00 AM' },
				{ title: 'Event 8', time: '10:30 AM' },
			],
		},
		// Add more days and events as needed
	];

	

	return (
		<>
			<section id="schedule" className="schedule-section schedule-1 py-50 py-lg-100 pt-xxl-120 position-relative ">
				<div className="container">
					<div className="row gx-70 gy-40">
						<div className="col-lg-4">
							<div className="schedule-left-content">
								<div className="section-title section-title-style-2 mb-30 mb-lg-40 mb-xxl-60">
									<span className="fs-3 straight-line-wrapper fw-semibold position-relative"> <span
										className="straight-line"></span>Schedule</span>
									<h2 className="title display-3 fw-extra-bold d-flex flex-column">
										<span className="mb-n2 text-opacity">Our</span>
										<span className="sub-title fw-extra-bold primary-text-shadow">Time Line</span>
									</h2>
								</div>
								{/* <!-- section-title --> */}
								<p className="mb-0">
									Captivating performances, interactive workshops, and delightful culinary delights await
									you at Harmonia Music Festival. Let the melodies transcend boundaries on this
									unforgettable musical journey.
								</p>

								<div className="pt-4 pt-lg-30 mb-10 mb-lg-40">
									<Link to="" className="download-link d-flex align-items-center gap-40"
										aria-label="buttons">Download Agenda <span
											className="ticket-arrow arrow-down-right"><svg width="36" height="36">
												<use xlinkHref="#arrow-down-right"></use>
											</svg></span></Link>
								</div>

								<div className="schedule-image bg-mask d-none d-lg-block">
									<img src="https://pixlr.com/images/index/ai-image-generator-three.webp"
										className="img-fluid" alt="" />
								</div>

								<div className="ellipse-image-1">
									<img src="assets/images/home-1/ellipse-1.png" className="img-fluid" alt="img" />
								</div>
							</div>
							{/* <!-- schedule-left-content --> */}
						</div>
						{/* <!-- col-4 --> */}
						<div className="col-lg-8">
							<div className="schedule-right-content position-relative">
								<div className="ellipse-image-2">
									<img src="assets/images/home-1/ellipse-2.png" className="img-fluid" alt="img" />
								</div>

								{/* <!-- Tabs --> */}
								<ul className="schedule-tabs custom-inner-bg nav nav-pills mb-50 mb-lg-70 d-flex justify-content-between justify-content-lg-center"
									id="pills-tab" role="tablist">
									<li className="nav-item" role="presentation">
										<button className="schedule-button active" id="day-1-tab" data-bs-toggle="pill"
											data-bs-target="#day-1" type="button" role="tab" aria-controls="day-1"
											aria-selected="true">
											<span className="fs-3 fw-extra-bold mb-0">Day 1</span>
											<span className="fs-5 fw-semibold mb-0 d-none d-lg-block">August 23, 2024</span>
										</button>
									</li>
									<li className="nav-item" role="presentation">
										<button className="schedule-button" id="day-2-tab" data-bs-toggle="pill"
											data-bs-target="#day-2" type="button" role="tab" aria-controls="day-2"
											aria-selected="false">
											<span className="fs-3 fw-extra-bold mb-0">Day 2</span>
											<span className="fs-5 fw-semibold mb-0 d-none d-lg-block">August 24, 2024</span>
										</button>
									</li>
									<li className="nav-item" role="presentation">
										<button className="schedule-button" id="day-3-tab" data-bs-toggle="pill"
											data-bs-target="#day-3" type="button" role="tab" aria-controls="day-3"
											aria-selected="false">
											<span className="fs-3 fw-extra-bold mb-0">Day 3</span>
											<span className="fs-5 fw-semibold mb-0 d-none d-lg-block">August 25, 2024</span>
										</button>
									</li>
									<li className="nav-item" role="presentation">
										<button className="schedule-button" id="day-4-tab" data-bs-toggle="pill"
											data-bs-target="#day-4" type="button" role="tab" aria-controls="day-4"
											aria-selected="false">
											<span className="fs-3 fw-extra-bold mb-0">Day 4</span>
											<span className="fs-5 fw-semibold mb-0 d-none d-lg-block">August 26, 2024</span>
										</button>
									</li>
								</ul>
								{/* <!-- Tabs --> */}


								{/* <!-- Tabs-Contents --> */}
								<div className="tab-content" id="pills-tabContent">
									
									{scheduleData.map((day) => (
										<Daytab key={day.id} id={day.id} events={day.events}/>
									))}

								</div>
								{/* <!-- Tabs-Contents --> */}

							</div>
							{/* <!-- schedule-right-content --> */}
						</div>
						{/* <!-- col-8 --> */}
					</div>
				</div>
			</section>
		</>
	)
}
