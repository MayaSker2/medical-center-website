
import './App.css'
import { BrowserRouter, Routes , Route , Router } from 'react-router-dom'
import Home from "../src/Pages/Homepage/Home"
import Doctors from "../src/Pages/Doctors/Doctors"
function App() {

  return (
    <>
       <BrowserRouter>
    <Routes>
    <Route path="/" element={<Home />} />
    <Route path="/doctors" element={<Doctors/>} />
    
    </Routes>
    </BrowserRouter>
    </>
  )
}

export default App
