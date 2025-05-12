import DoctorNavbar from "../../Components/DoctorNavbar"
import DoctorsCard from "./DoctorsCard"
import Footer from "../../Components/Footer"
export default function Doctors(){
    return<>
    <div>
       <DoctorNavbar title="Doctors" /> 
        </div>
    <DoctorsCard/>
    <Footer/>
    </>
}