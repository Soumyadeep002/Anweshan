import React from 'react'
import { Link } from 'react-router-dom'

export default function PageBanner(props) {
  return (
    <>
        <section className="banner-section banner-1 banner-2 position-relative parallax">		
				<div className="container">
					<div className="banner-wrapper d-flex gap-20 gap-lg-40 justify-content-center align-items-lg-center flex-column">
						<h2 className="banner-heading display-3 fw-extra-bold custom-jakarta mb-0">{props.title}</h2>
						<nav aria-label="breadcrumb">
							<ol className="blog-breadcrumb breadcrumb">
							  <li className="breadcrumb-item"><Link to="/">Home</Link></li>
							  <li className="breadcrumb-item active" aria-current="page">{props.title}</li>
							</ol>
						</nav>
					</div>
				</div>								
			</section>
    </>
  )
}
