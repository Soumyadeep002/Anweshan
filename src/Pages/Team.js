import React from 'react'
import PageBanner from '../AboutPage/PageBanner'
import Contact from '../IndexPage/Contact'
import TeamMembers from '../TeamPage/TeamMembers'

export default function Team() {
  return (
    <div className="main"  data-bs-spy="scroll" data-bs-target="#navContentmenu" data-bs-root-margin="0px 0px -50%" data-bs-smooth-scroll="true">
        <PageBanner title="Team"/>
        <div className='container pt-50 pt-lg-70 pt-xxl-100'>
        <div className="row gy-4 gy-lg-0 align-items-lg-end justify-content-lg-between mb-10">
						<div className="col-lg-4">
							<div className="section-title section-title-style-2">
								<span className="fs-3 straight-line-wrapper fw-semibold position-relative custom-roboto"> <span className="straight-line"></span>Behind The ANWESHAN</span>
								<h2 className="title display-3 fw-extra-bold mb-n2 text-opacity custom-roboto">Creative</h2>
								<h3 className="sub-title display-3 fw-extra-bold primary-text-shadow custom-roboto">Commanders</h3>						
							</div>
							{/* <!-- section-title --> */}
						</div>
						<div className="col-lg-4">
							<div className="highlights-text">
								<p className="custom-jakarta text-lg-end">
									Unleash the rhythm with an extraordinary lineup. Get ready for a musical extravaganza that will captivate your senses. 
								</p>
							</div>
						</div>
					</div>
        </div>
        <TeamMembers teamName="Core Team"/>
        <TeamMembers teamName="Development Team"/>
        <Contact/>
        
    </div>
  )
}
