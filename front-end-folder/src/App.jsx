
import './App.css'
import { BrowserRouter, Routes , Route , Router } from 'react-router-dom'
import Home from "../src/Pages/Homepage/Home"
import Doctors from "../src/Pages/Doctors/Doctors"
import DoctorInfo from './Pages/Doctors/DoctorInfo'
function App() {

  return (
    <>
       <BrowserRouter>
    <Routes>
    <Route path="/" element={<Home />} />
    <Route path="/doctors" element={<Doctors/>} />
    <Route path="/doctor-info" element={<DoctorInfo/>} />
    </Routes>
    </BrowserRouter>
    </>
  )
}

export default App
