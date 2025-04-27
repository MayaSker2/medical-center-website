import doctor2 from "../../assets/Images/home/doctor2.svg"
import doctor4 from "../../assets/Images/home/doctor4.svg"
import { AiOutlineInfo } from "react-icons/ai";
import { SlCalender } from "react-icons/sl";
import { AiOutlineQuestion } from "react-icons/ai";
import { MdFavoriteBorder } from "react-icons/md";
import {  Link } from "react-router-dom";
import DoctorNavbar from "../../Components/DoctorNavbar"
import Footer from "../../Components/Footer";
const maledoctor = [
    {
        image: doctor2,
        name: "Dr. Alexander Bennett, Ph.D.",
        specialty: "Dermato-Genetics",
        infoLink: "/", 
        iconcalender :"link",
        iconinformation:"link",
        iconquestion:"link",
        iconfavorite:"link"
        
        
    },
    {
        image: doctor4,
        name: "Dr. Michael Davidson, M.D.",
        specialty: "Solar Dermatology",
        infoLink: "link2", 
        iconcalender :"link",
        iconinformation:"link",
        iconquestion:"link",
        iconfavorite:"link"
    },
    {
        image: doctor2,
        name: "Dr. Alexander Bennett, Ph.D.",
        specialty: "Dermato-Endocrinology",
        ifoLink: "link3", 
        iconcalender :"link",
        iconinformation:"link",
        iconquestion:"link",
        iconfavorite:"link"
    },
    {
        image: doctor4,
        name: "Dr. Michael Davidson, M.D.",
        specialty: "Cosmetic Bioengineering",
        infoLink: "link4", 
        iconcalender :"link",
        iconinformation:"link",
        iconquestion:"link",
        iconfavorite:"/"
    },
];
export default function MaleDoctor(){
    return<>
     <div>
            <DoctorNavbar title="Male" />
           
        </div>
     <div className="mt-4 font-league flex flex-col mx-8 max-w-96 gap-3">
                {maledoctor.map((doctor, index) => (
                    <div key={index} className="bg-[#CAD6FF] flex gap-2 rounded-2xl justify-center items-center py-3 px-3">
                        <img className="rounded-full w-28" src={doctor.image} alt={doctor.name} />
                        <div>
                            <p className="text-base font-medium text-[#2260FF]">{doctor.name}</p>
                            <p className="text-xs font-light">{doctor.specialty}</p>
                            <div className="flex gap-1 mt-3">
                                <Link to={doctor.infoLink} className="flex items-center justify-center font-normal text-sm text-white bg-[#2260FF] w-12 rounded-[18px] px-2 py-1"> Info</Link>
                                <Link to={doctor.iconcalender} className="bg-white rounded-full p-2 flex items-center justify-center text-[#2260FF] hover:bg-[#91aef8]"><SlCalender /></Link>
                                <Link to={doctor.iconinformation} className="bg-white rounded-full p-2 flex items-center justify-center text-[#2260FF] hover:bg-[#91aef8]"><AiOutlineInfo /></Link>
                                <Link to={doctor.iconquestion} className="bg-white rounded-full p-2 flex items-center justify-center text-[#2260FF] hover:bg-[#91aef8]"><AiOutlineQuestion /></Link>
                                <Link to={doctor.iconfavorite} className="bg-white rounded-full p-2 flex items-center justify-center text-[#2260FF] hover:bg-[#91aef8]"><MdFavoriteBorder /></Link>
                            </div>
                        </div>
                    </div>
                ))}
            </div>
            <Footer/>
    </>
}