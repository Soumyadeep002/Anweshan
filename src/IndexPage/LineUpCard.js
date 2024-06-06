import React from 'react'
import { Link } from 'react-router-dom'

export default function LineUpCard(props) {
    return (
        <div className="lineup-image-wrapper position-relative">
            <div className="lineup-image">
                <img src="assets/images/poster/Crime-scene-investigation.png"
                    className="img-fluid" alt="" />
            </div>
            <div className="lineup-image-hover">
                <p className="author-name">{props.eventName}</p>
                <div className="line-up-hover-content">
                    <ul
                        className="list-unstyled line-up-icons d-flex align-items-center gap-3 gap-lg-20 mb-0">
                        <li><Link to="" className="">Participate</Link></li>
                    </ul>
                </div>
            </div>
            {/* <!-- lineup-image-hover --> */}
        </div>
    )
}
