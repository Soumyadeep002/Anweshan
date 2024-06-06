import React from 'react'
import { Link } from 'react-router-dom'

export default function Navbar() {
  return (
    <>
	<header className="header-section header-5 sticky-navbar hover-menu">
		<div className="container">
			<nav className="navbar navbar-expand-xl custom-inner-bg">
				<div className="d-flex w-100 justify-content-between">
					<Link className="navbar-brand" to="/" aria-label="nav-brands">
						<img src="assets/images/logo/eb-black-bg-logo.webp" className="logo-light my-logo" alt="logo"/>
						<img src="assets/images/global/logo-dark.png" className="logo-dark" alt="logo"/>
					</Link>

					<button className="navbar-toggler" type="button" data-bs-toggle="offcanvas"
						data-bs-target="#navContentmenu" aria-controls="navContentmenu" aria-expanded="false"
						aria-label="Toggle navigation">
						<span className="navbar-toggler-icon"></span>
					</button>


					<div className="d-none d-xl-block margin-auto">
						<div className="d-flex align-items-center">
							<ul className="menu-list navbar-nav mb-2 me-2 mb-lg-0">
								<li className="nav-item dropdown single-pages-dropdown">
									<Link className="nav-link text-uppercase"
										to="/" aria-label="nav-links">
										<span className="fw-semibold">Home</span>
									</Link>
								</li>
								<li className="nav-item">
									<Link className="nav-link text-uppercase" to="/about" aria-label="nav-links">
										<span className="fw-semibold">About Us</span>
									</Link>
								</li>
								<li className="nav-item">
									<Link className="nav-link text-uppercase" to="/venue" aria-label="nav-links">
										<span className="fw-semibold">Venue</span>
									</Link>
								</li>
								<li className="nav-item dropdown single-pages-dropdown">
									<Link className="nav-link dropdown-toggle text-uppercase" to="#line-up" aria-label="nav-links"
										data-bs-toggle="dropdown" aria-expanded="false">
										<span className="fw-semibold">Events</span>
									</Link>
									<ul className="dropdown-menu">
										<li><Link className="dropdown-item" to="/tech-fest" 
												aria-label="single-pages">Tech</Link></li>
										<li><Link className="dropdown-item" to="/cultural-fest" 
												aria-label="single-pages">Cultural</Link></li>
									</ul>
								</li>

								<li className="nav-item">
									<Link className="nav-link text-uppercase" to="/team" aria-label="nav-links">
										<span className="fw-semibold">Team</span>
									</Link>
								</li>

								<li className="nav-item">
									<Link className="nav-link text-uppercase" to="/contact" aria-label="nav-links">
										<span className="fw-semibold">Contact Us</span>
									</Link>
								</li>
							</ul>
							<Link to="#ticket" className="btn btn-primary d-inline-flex align-items-center gap-2"
								aria-label="buttons" data-bs-toggle="modal" data-bs-target="#signinModal"> Sign in</Link>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	

	<div className="offcanvas offcanvas-top" id="navContentmenu" data-bs-backdrop="static" tabIndex="-1">
		<div className="offcanvas-header">
			<Link className="navbar-brand " to="index.html" aria-label="nav-brands"><img className="my-logo"
					src="assets/images/logo/eb-black-bg-logo.webp" alt="logo"/></Link>
			<button type="button" className="btn-close btn-close-white" data-bs-dismiss="offcanvas"
				aria-label="Close"></button>
		</div>
		<div className="offcanvas-body d-flex justify-content-center">
			<ul className="navbar-nav custom-navbar-nav mb-2 mb-lg-0">
				<li className="nav-item dropdown offcanvas-pages-dropdown" data-bs-dismiss="offcanvas">
					<Link className="nav-link text-uppercase" aria-current="page" to="/">
						<span className="fw-semibold">Home</span>
					</Link>
				</li>
				<li className="nav-item" data-bs-dismiss="offcanvas">
					<Link className="nav-link text-uppercase" to="/about" aria-label="nav-links"  >
						<span className="fw-semibold">About Us</span>
					</Link>
				</li>
				<li className="nav-item" data-bs-dismiss="offcanvas">
					<Link className="nav-link text-uppercase" to="/venue" aria-label="nav-links"   >
						<span className="fw-semibold">Venue</span>
					</Link>
				</li>
				<li className="nav-item dropdown offcanvas-pages-dropdown">
					<Link className="nav-link dropdown-toggle text-uppercase" to="#" aria-label="nav-links"  
						data-bs-toggle="dropdown" aria-expanded="false">
						<span className="fw-semibold">Events</span>
					</Link>
					<ul className="dropdown-menu">
						<li data-bs-dismiss="offcanvas"><Link className="dropdown-item" to="/tech-fest" 
								aria-label="single-pages"  >Tech</Link></li>
						<li data-bs-dismiss="offcanvas"><Link className="dropdown-item" to="/cultural-fest" 
								aria-label="single-pages"  >Cultural</Link></li>
					</ul>
				</li>

				<li className="nav-item" data-bs-dismiss="offcanvas">
					<Link className="nav-link text-uppercase" to="/team" aria-label="nav-links"  >
						<span className="fw-semibold">Team</span>
					</Link>
				</li>

				<li className="nav-item" data-bs-dismiss="offcanvas">
					<Link className="nav-link text-uppercase" to="/contact" aria-label="nav-links"  >
						<span className="fw-semibold">Contact Us</span>
					</Link>
				</li>
			</ul>
		</div>
	</div>
    </>
  )
}
