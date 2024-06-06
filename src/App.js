
import Footer from "./IndexPage/Footer";
import LoginModal from "./IndexPage/LoginModal";
import Navbar from "./Navbar";
import Svg from "./IndexPage/Svg";
import Home from "./Pages/Home";
import About from "./Pages/About";
import { createBrowserRouter, RouterProvider, Outlet } from "react-router-dom";
import Venue from "./Pages/Venue";
import ContactUs from "./Pages/ContactUs";
import Team from "./Pages/Team";
import Tech from "./Pages/Tech";
import Cultural from "./Pages/Cultural";
import Event from "./Pages/Event";



function App() {

  const Layout = () => (
    <>
      <Navbar />
      <Outlet /> {/* This is where the child routes will be rendered */}
    </>
  );
  
  const router = createBrowserRouter([
    {
      element: <Layout />, // Use Layout as the parent element for all routes
      children: [
        {
          path: '/',
          element: <Home />
        },
        {
          path: '/about',
          element: <About />
        },
        {
          path: '/tech-fest',
          element: <Tech/>
        },
        {
          path: '/cultural-fest',
          element: <Cultural/>
        },
        {
          path: '/venue',
          element: <Venue />
        },
        {
          path: '/team',
          element: <Team />
        },
        {
          path: '/contact',
          element: <ContactUs />
        },
        {
          path: '/event',
          element: <Event image="../assets/images/logo/drone.png"/>
        },
      ],
    },
  ]);

  return (
    <>
      
      <RouterProvider router={router}/>
      <Footer/>
      <Svg/>
      <LoginModal/>
    </>
  );
}

export default App;
