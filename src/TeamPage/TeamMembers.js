import React from 'react'
import MembersCard from './MembersCard'

export default function TeamMembers(props) {
    return (
        <>
            <section id="commanders" className="commander-section about-1 pt-10 pt-lg-30 pt-xxl-50">
                <div className="container">
                    <div className="col-lg-4">
                        <div className="section-title section-title-style-2">
                            <h3 className="sub-title display-3 fw-extra-bold primary-text-shadow custom-roboto pb-20">{props.teamName}</h3>
                        </div>
                        {/* <!-- section-title --> */}
                    </div>
                    {/* <!-- row --> */}
                    <div className="d-flex flex-column gap-50 gap-lg-80 gap-xl-100">
                        <div className="row gx-30 gy-50">
                            <MembersCard image="assets/images/commander-1.jpg" name="Memeber 1" position="Position 1" />
                            {/* <!-- col --> */}
                            <MembersCard image="assets/images/commander-2.jpg" name="Memeber 2" position="Position 2" />

                            <MembersCard image="assets/images/commander-3.jpg" name="Memeber 3" position="Position 3" />
                            {/* <!-- col --> */}
                            <MembersCard image="assets/images/commander-4.jpg" name="Memeber 4" position="Position 4" />

                            <MembersCard image="assets/images/commander-5.jpg" name="Memeber 5" position="Position 5" />
                            {/* <!-- col --> */}
                            <MembersCard image="assets/images/commander-6.jpg" name="Memeber 6" position="Position 6" />

                            <MembersCard image="assets/images/commander-7.jpg" name="Memeber 7" position="Position 7" />
                            {/* <!-- col --> */}
                            <MembersCard image="assets/images/commander-8.jpg" name="Memeber 8" position="Position 8" />

                        </div>
                        {/* <!-- row --> */}
                    </div>
                </div>

            </section>
        </>
    )
}
