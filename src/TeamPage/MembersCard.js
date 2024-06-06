import React from 'react'
import { Link } from 'react-router-dom'

export default function MembersCard(props) {
    return (
        <div className="col-sm-6 col-lg-4 col-xl-3">
            <div className="commander-wrapper">
                <div className="commander-image mb-3">
                    <Link to="" >
                        <img src={props.image} className="img-fluid" alt="img" />
                    </Link>
                </div>

                <div className="commander-info">
                    <h2 className="fw-semibold custom-jakarta mb-0">{(props.name)}</h2>
                    <p className="mb-0 fw-semibold custom-jakarta">{(props.position)}</p>
                </div>
            </div>
        </div>
    )
}
