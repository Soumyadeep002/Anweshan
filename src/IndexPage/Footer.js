import React from 'react'

export default function Footer() {
  return (
    <>
    <footer className="footer-section footer-1 py-lg-50 py-40 mt-auto">
    <div className="container" >
        <div className="row gy-lg-0 gy-10 justify-content-between align-items-center text-center text-lg-start">
            <div className="col-lg-4 order-3 order-lg-1">
                <p className="custom-roboto mb-0 footer-nav">&copy; 2024 <a href="https://anweshan.net" className="text-decoration-none">ANWESHAN</a>. All rights Reserved.</p>
            </div>
            <div className="col-lg-4 order-1 order-lg-2">
                <div className="navbar-brand d-flex justify-content-center" aria-label="nav-brands">
                    
                    <img src="assets/images/logo/eb-black-bg-logo.webp" className=" my-logo" alt="logo"/>
                </div>
            </div>
            <div className="col-lg-4 order-2 order-lg-3">
                <ul className="footer-nav list-unstyled d-flex justify-content-center justify-content-lg-end gap-30 mb-0">
                    <li className="nav-item">
                        <div className="nav-link" aria-label="nav-links">Privecy Policy</div>
                    </li>
                    <li className="nav-item">
                        <div className="nav-link" aria-label="nav-links">Terms & Conditions</div>
                    </li>					
                </ul>
            </div>
        </div>
   
    </div>
    		
</footer>
    </>
  )
}
