import React from 'react'

import { GoogleLogin } from '@react-oauth/google'
import { useGoogleLogin } from '@react-oauth/google';

import { jwtDecode } from 'jwt-decode';

export default function LoginModal() {

  // const login = useGoogleLogin({
  //   onSuccess: tokenResponse => console.log(tokenResponse.access_token),
  //   // onSuccess: tokenResponse => console.log(jwtDecode(tokenResponse.access_token)),
  // });

  // console.log(jwtDecode("ya29.a0AXooCgsDfEM7Af7SK15WMnz7d0FO6OtFo9K2SycGNy3RZAglYccVbdYMzdhvAV-QmiAs4nc84-DkvOWuAUA2K3hEhTt1Z7vi4CCbOJOmbd0xhPt1qSedk7o--ehqUzLzKiE4R0T4SavU1MfjfTMiCZeSz8IyNUrCagaCgYKAVoSARMSFQHGX2Mi00pE41WsH2xHl16KOMyPSw0169"));
  return (

    <div className="modal fade" id="signinModal" tabIndex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div className="modal-dialog modal-dialog-centered">
        <div className=" modal-bg">
          <div className="modal-header">
            <h1 className="modal-title fs-5" id="exampleModalLabel">Sign in to access !</h1>
            <button type="button" className="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div className="modal-body">
            <form>
              <div className="mb-3">
                <label htmlFor="recipient-name" className="col-form-label" style={{ color: 'white', fontWeight: '400' }}>Email</label>
                <input type="email" className="form-control" id="recipient-name" />
              </div>
              <div className="mb-3">
                <label htmlFor="password" className="col-form-label" style={{ color: 'white', fontWeight: '400' }}>Password:</label>
                <input type="password" className="form-control" id="password" />
              </div>

              <button type="submit" className="btn-modal-signup">Sign in</button>



            </form>
            <hr />
            {/* <button onClick={() => login()} data-mdb-button-init data-mdb-ripple-init className="btn-google" 
                     type="submit">
                         <img src="assets/images/logo/googleicon.svg" alt="google logo"/>
                     Sign in with google</button> */}


            <GoogleLogin
              onSuccess={credentialResponse => {
                // console.log(jwtDecode(credentialResponse.credential));
                console.log(jwtDecode(credentialResponse.credential));
              }}
              onError={() => {
                console.log('Login Failed');
              }}
            />

          </div>
        </div>
      </div>
    </div>
  )
}
