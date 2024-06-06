import React from 'react'
import Contact from '../IndexPage/Contact'

export default function Event(prop) {
    return (
        <div className="main" data-bs-spy="scroll" data-bs-target="#navContentmenu" data-bs-root-margin="0px 0px -50%" data-bs-smooth-scroll="true">


            <section className="hero-section hero-8 position-relative max-width">
                <div className="hero-wrapper mx-auto position-relative myparallax" style={{backgroundImage: 'url('+prop.image+')'}}>
                    <div className="container">
                        <div className="hero-8-inner">
                            <h1 className="hero-heading-text text-white text-uppercase custom-poppins mb-3 mb-xxl-20">Aural Euphoria</h1>
                            <div className="mb-40 mb-lg-0 hero-brand-images">
                                <h3 className="fst-italic fw-semibold mb-3 text-white">Powered by</h3>
                                <div className="d-flex flex-md-wrap align-items-center gap-20 gap-md-5 gap-lg-50">
                                    <a href="/" aria-label="brand-image">
                                        <img src="assets/images/hero-brand-1.png" className="img-fluid" alt="img" />
                                    </a>
                                    <a href="/" aria-label="brand-image">
                                        <img src="assets/images/hero-brand-2.png" className="img-fluid" alt="img" />
                                    </a>
                                    <a href="/" aria-label="brand-image">
                                        <img src="assets/images/hero-brand-3.png" className="img-fluid" alt="img" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div className="event-info event-info-outside event-down-sm custom-inner-bg">
                        <div className="event-inner">
                            <div className="row align-items-center justify-content-between gy-xl-0 gy-4">
                                <div className="col-md-4 col-xl-3 col-lg-4">
                                    <div className="event-content">
                                        <h2>25th Dec 2023</h2>
                                        <h4>22:30 - 07:00</h4>
                                    </div>
                                </div>
                                <div className="col-md-5 col-xl-4 col-lg-5">
                                    <div className="event-content ms-xxl-5">
                                        <h2>BASEMENT</h2>
                                        <h4>135 W, 46nd Street, New York</h4>
                                    </div>
                                </div>
                                <div className="col-md-3 col-xl-2 col-lg-3">
                                    <div className="ms-xxl-30">
                                        <span className="event-odometer-heading fs-2 odometer" data-count-to={352}></span>
                                        <h4>Attending</h4>
                                    </div>
                                </div>
                                <div className="col-md-3 col-xxl-2 col-xl-3 col-lg-3">
                                    <div>
                                        <a href="/" className="btn btn-gradient d-inline-flex align-items-center" aria-label="buttons"><span className="contact-plus-icon"><svg width="38" height="30"><use xlinkHref="#contact-plus-icon"></use></svg></span> Interested</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>




            <section id="ticket" className="ticket-section ticket-1 pb-40 pb-lg-60 pb-xl-80 pt-300 pt-md-150 pt-lg-180 position-relative parallax">
                <div className="container">

                    <div className="section-title section-title-style-2 mb-30 mb-lg-40 mb-xxl-50">
                        <span className="fs-3 straight-line-wrapper fw-semibold position-relative"> <span className="straight-line"></span>Ticket</span>
                        <h2 className="title display-3 fw-extra-bold d-flex flex-column">
                            <span className="mb-n2 text-opacity">Harmonia</span>
                            <span className="sub-title fw-extra-bold">
                                <svg className="gradient-subtitle">
                                    <g>
                                        <text id="text" className="gradient-subtitle-text" y="100" strokeWidth="1.5" stroke="url(#gradient-subtitle)" fill="none">Admission</text>
                                    </g>
                                </svg>
                            </span>
                        </h2>
                    </div>

                    <div className="ticket-content">
                        <div className="d-flex flex-column flex-xl-row gap-50 gap-xl-30 align-items-xl-center">
                            <div className="ticket-content-1">
                                <div className="ticket-form-wrapper custom-inner-bg">
                                    <div className="ticket-form ticket-form-1 form-check">
                                        <input className="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"   />
                                        <label className="form-check-label d-flex align-items-center justify-content-between" htmlFor="exampleRadios1">
                                            <span className="text-opacity">General Admission</span><span>$40</span>
                                        </label>
                                    </div>
                                    <div className="ticket-form ticket-form-2 form-check">
                                        <input className="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" />
                                        <label className="form-check-label d-flex align-items-center justify-content-between" htmlFor="exampleRadios2">
                                            <span className="text-opacity">VIP Experience</span><span>$100</span>
                                        </label>
                                    </div>
                                    <div className="ticket-form ticket-form-3 form-check">
                                        <input className="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"  />
                                        <label className="form-check-label d-flex align-items-center justify-content-between" htmlFor="exampleRadios3">
                                            <span className="text-opacity">Student Discount</span><span>$25</span>
                                        </label>
                                    </div>
                                </div>


                                <p className="extra-small fw-semibold d-flex justify-content-lg-end">Sales close: Sat, Jul 22, 8:00 AM (EST).</p>
                                <div className="d-flex gap-3 justify-content-between">
                                    <div className="ticket-amounts d-flex align-items-center gap-0 gap-lg-3">
                                        <span className="ticket-icon dash-icon"><svg width="16" height="16"><use xlinkHref="#dash-icon"></use></svg></span>
                                        <span className="input-values"><input type="text" name="input-value" className="input-number" /></span>
                                        <span className="ticket-icon plus-icon"><svg width="16" height="16"><use xlinkHref="#plus-icon"></use></svg></span>
                                    </div>
                                    <div className="text-lg-end">
                                        <a href="/" className="btn btn-gradient d-inline-flex align-items-center gap-2" aria-label="buttons"><span className="buttons-logo"><svg width="25" height="25"><use xlinkHref="#buttons-logo"></use></svg></span> Buy Ticket</a>
                                    </div>
                                </div>
                            </div>



                            <div className="ticket-content-2 position-relative parallax">
                                <div className="ticket-content-2-inner">
                                    <div className="swiper ticket-swiper">
                                        <div className="swiper-wrapper">
                                            <div className="swiper-slide">
                                                <div className="p-4 pe-20">
                                                    <h2 className="mb-0 d-flex flex-wrap flex-sm-nowrap gap-2 gap-lg-3 align-items-center text-white">
                                                        <span className="fs-100 fw-extra-bold">248</span>
                                                        <span className="fw-extra-bold fs-1">Seats Available</span>
                                                    </h2>
                                                    <a href="/" className="ticket-arrow arrow-up-right"><svg width="32" height="32"><use xlinkHref="#arrow-up-right"></use></svg></a>
                                                    <div className="progress mt-50">
                                                        <div className="progress-bar" style={{ width: '73%' }}>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div className="swiper-slide">
                                                <div className="p-4 p-md-30">
                                                    <div className="d-flex flex-column flex-md-row align-items-md-center justify-content-between justify-content-lg-start gap-lg-20 gap-2 mb-5 mb-lg-60">
                                                        <div className="ticket-images">
                                                            <img className="ticket-icon-1" src="assets/images/home-1/ticket-icon-1.png" alt="img" />
                                                            <img className="ticket-icon-2 ms-n3" src="assets/images/home-1/ticket-icon-2.png" alt="img" />
                                                            <img className="ticket-icon-3 ms-n3" src="assets/images/home-1/ticket-icon-3.png" alt="img" />
                                                        </div>
                                                        <h4 className="fw-normal text-white mb-0">+<span className="odometer mt-n1" data-count-to={352}></span> Attending</h4>
                                                    </div>
                                                    <h2 className="display-6 fw-extra-bold text-uppercase text-white mb-0"><span>Secure Your Spot Now</span></h2>
                                                    <a href="/" className="ticket-arrow arrow-up-right"><svg width="32" height="32"><use xlinkHref="#arrow-up-right"></use></svg></a>
                                                </div>
                                            </div>


                                        </div>

                                        <div className="ticket-swiper-pagination"></div>
                                    </div>

                                </div>

                            </div>


                            <div className="ticket-content-3 d-flex flex-xl-column gap-3 gap-lg-4">
                                <div className="brand custom-inner-bg">
                                    <h2 className="display-6 fw-extra-bold mb-0"><span className="odometer" data-count-to={20}></span>+</h2>
                                    <h2 className="fs-1 fw-light mb-0 text-opacity">Brands</h2>
                                </div>
                                <div className="brand custom-inner-bg">
                                    <h2 className="display-6 fw-extra-bold mb-0"><span className="odometer" data-count-to={100}></span>+</h2>
                                    <h2 className="fs-1 fw-light mb-0 text-opacity">Artworks</h2>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </section>

            {/* <!--Contact Section ======================--> */}
            <Contact />
            {/* <!--Contact Section ======================--> */}



        </div>
    )
}
