import React from 'react'
import About from "../IndexPage/About";
import Blog from "../IndexPage/Blog";
import Contact from "../IndexPage/Contact";
import Countdown from "../IndexPage/Countdown";
import Faq from "../IndexPage/Faq";
import Gallery from "../IndexPage/Gallery";
import Hero from "../IndexPage/Hero";
import Highlight from "../IndexPage/Highlight";
import Lineup1 from "../IndexPage/Lineup1";
import Lineup2 from "../IndexPage/Lineup2";
import Schedule from "../IndexPage/Schedule";
import Scroll1 from "../IndexPage/Scroll1";
import Scroll2 from "../IndexPage/Scroll2";
import Sponsor from "../IndexPage/Sponsor";

export default function Home() {
  return (
    <div className="main" data-bs-spy="scroll" data-bs-target="#navContentmenu" data-bs-root-margin="0px 0px -50%" data-bs-smooth-scroll="true">
        <Hero/>
        <Countdown timestamp="2024-11-31T23:59:59"/>
        <About/>
        <Lineup1/>
        <Lineup2/>
        <Scroll1/>
        <Highlight/>
        <Schedule/>
        <Sponsor/>
        <Gallery/>
        <Faq/>
        <Scroll2/>
        <Blog/>
        <Contact/>
      </div>
  )
}
