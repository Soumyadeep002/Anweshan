import React from 'react'
import PageBanner from '../AboutPage/PageBanner'
import AboutVenue from '../VenuePage/AboutVenue'
import HallStages from '../VenuePage/HallStages'
import Contact from '../IndexPage/Contact'
import Direction from '../VenuePage/Direction'

export default function Venue() {
  return (
    <div className="main"  data-bs-spy="scroll" data-bs-target="#navContentmenu" data-bs-root-margin="0px 0px -50%" data-bs-smooth-scroll="true">
        <PageBanner title="Venue"/>
        <AboutVenue/>
        <HallStages/>
        <Direction/>
        <Contact/>
    </div>
  )
}
