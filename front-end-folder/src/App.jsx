import { useState } from 'react'
import './App.css'
import { BrowserRouter, Routes , Route , Router } from 'react-router-dom'
import Home from "../src/Pages/Homepage/Home"
function App() {

  return (
    <>
       <BrowserRouter>
    <Routes>
    <Route path="/" element={<Home />} />
    
    </Routes>
    </BrowserRouter>
    </>
  )
}

export default App
