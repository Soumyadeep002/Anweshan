import React from 'react'
import PageBanner from '../AboutPage/PageBanner'
import ContactForm from '../ContactPage/ContactForm'
import Direction from '../VenuePage/Direction'
import Contact from '../IndexPage/Contact'

export default function ContactUs() {
  return (
    <div className="main"  data-bs-spy="scroll" data-bs-target="#navContentmenu" data-bs-root-margin="0px 0px -50%" data-bs-smooth-scroll="true">
      <PageBanner title="Contact Us"/>
      <ContactForm/>
      <Direction/>
      <Contact/>
    </div>
  )
}
