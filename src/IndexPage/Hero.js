import React, {useState, useEffect} from 'react'

import Odometer from 'react-odometerjs';
import { Link } from 'react-router-dom';


export default function Hero() {

	const [value, setValue] = useState(0);

    useEffect(() => {
        const timeoutId = setTimeout(() => setValue(1500), 500);
        return () => {
            clearTimeout(timeoutId);
        };
    }, []);


  return (
    <>
    	<section className="hero-section hero-5">
			<div className="container-fluid">
				<div className="hero-wrapper box-hero mx-auto position-relative parallax">
					<div className="container">
						<div className="hero-inner-text position-relative">
							<h1 className="soundscapes no-stroke fs-120 fw-extra-bold mt-2 mb-0">Celebrate Talent,
								Innovation, Culture</h1>
							<div className="mb-30 mb-xxl-50 hero-brand-images">
								<h3 className="fst-italic fw-semibold mb-3 mb-lg-20">Powered by</h3>
								<div className="d-flex flex-wrap align-items-center gap-20 gap-md-5 gap-lg-50">
									<Link to="" aria-label="brand-image">
										<img src="assets/images/hero-brand-1.png" className="img-fluid" alt="img"/>
									</Link>
									<Link to="" aria-label="brand-image">
										<img src="assets/images/hero-brand-2.png" className="img-fluid" alt="img"/>
									</Link>
									<Link to="" aria-label="brand-image">
										<img src="assets/images/hero-brand-3.png" className="img-fluid" alt="img"/>
									</Link>
								</div>
							</div>
						</div>
					</div>
					<div className="event-info custom-inner-bg">
						<div className="event-inner">
							<div className="row align-items-center justify-content-between gy-xl-0 gy-4">
								<div className="col-md-4 col-xl-3 col-lg-4">
									<div className="event-content">
										<h2>25th Nov 2024</h2>
										<h4>10:30 - 07:00</h4>
									</div>
								</div>
								<div className="col-md-5 col-xl-4 col-lg-5">
									<div className="event-content ms-xxl-5">
										<h2>MAKAUT, Main Campus</h2>
										<h4>Haringhata, Nadia</h4>
									</div>
								</div>
								<div className="col-md-3 col-xl-2 col-lg-3">
									<div className="ms-xxl-30">
										{/* <span className="event-odometer-heading fs-2 odometer" data-count-to={352}></span> */}
										<Odometer value={value} animation="count" style={{ cursor: 'pointer', fontSize: `25px` }}/>
										<h4>Attending</h4>
									</div>
								</div>
								<div className="col-md-3 col-xxl-2 col-xl-3 col-lg-3">
									<div>
										<Link to="" className="btn btn-primary d-inline-flex align-items-center"
											aria-label="buttons" data-bs-toggle="modal" data-bs-target="#signinModal">Sign in</Link>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
    </>
  )
}
