import React from 'react'
import { Link } from 'react-router-dom'

export default function BlogCard(props) {
    return (
        <div className="blog-content">
            <div className="blog-content-4 custom-inner-bg">
                <div className="row gx-20 gy-50 gy-lg-0 align-items-center justify-content-between">
                    <div className="col-lg-6 order-lg-2">
                        <div className="blog-image">
                            <img src={props.image} className="img-fluid"
                                alt="img" />
                        </div>
                    </div>
                    <div className="col-lg-6 order-lg-1">
                        <div className="blog-left-content">
                            <p><span className="calendar me-10"><svg width="16" height="17">
                                <use xlinkHref="#calendar"></use>
                            </svg></span>{props.date}</p>
                            <h2 className="blog-link fs-4 fw-bold"><Link to=""  className="text-decoration-none">{props.title1}</Link></h2>
                            <p>{props.title2}</p>
                            <div>
                                <Link to=""
                                    className="download-link d-flex align-items-center gap-30"
                                    aria-label="buttons">Read more<span
                                        className="ticket-arrow arrow-up-right"><svg width="32"
                                            height="32">
                                            <use xlinkHref="#arrow-up-right"></use>
                                        </svg></span></Link>
                            </div>
                        </div>
                        {/* <!-- left-content --> */}
                    </div>
                </div>
            </div>
        </div>
    )
}
