import React from 'react'
import AboutVideo from '../IndexPage/AboutVideo'
import Counter from '../AboutPage/Counter'
import Sponsor from '../AboutPage/Sponsor'
import Contact from '../IndexPage/Contact'
import PageBanner from '../AboutPage/PageBanner'

export default function About() {
  return (
    <div className="main"  data-bs-spy="scroll" data-bs-target="#navContentmenu" data-bs-root-margin="0px 0px -50%" data-bs-smooth-scroll="true">

			{/* <!--Banner Section ======================--> */}
			<PageBanner title="About Us" />
			{/* <!--Banner Section ======================--> */}


			{/* <!--About Section ======================--> */}
			<section className="about-section about-1 pt-50 pt-lg-100 pt-xxl-150">
				<div className="container">
					<div className="row gy-50 gy-lg-0 gx-80 justify-content-lg-between align-items-lg-center">
						<div className="col-lg-6">
							<div>
								<div className="section-title section-title-style-2 mb-4 mb-lg-30 mb-xxl-40">	
									<h3 className="sub-title display-3 fw-extra-bold primary-text-shadow custom-roboto">ANWESHAN</h3>
								</div>
								{/* <!-- section-title --> */}
								<h1 className="display-5 custom-jakarta fw-extra-bold mb-0">
									Where Tallent and Culture unite for unforgettable experiences
								</h1>								
							</div>					
						</div>
						{/* <!-- col-5 --> */}
						<AboutVideo/>
					</div>					
				</div>
			</section>
			{/* <!--About Section ======================--> */}

            <Counter/>

			{/* <!--Sponsor Section ======================--> */}
			<Sponsor/>
			{/* <!--Sponsor Section ======================--> */}



			{/* <!--Contact Section ======================--> */}
			<Contact/>
			{/* <!--Contact Section ======================--> */}

			

		</div>
  )
}
